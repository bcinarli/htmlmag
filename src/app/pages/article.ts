import { applyStyles, html, TypicaComponent } from '../../lib/typica';
import Markdown from '../../markdown/markdown';

import styles from './article.module.scss';

import Author from '../icons/author';
import Comment from '../icons/comment';
import Time from '../icons/time';
import { dateString } from '../../lib/utils';
import DisqusCount from '../components/disqus-count';

const css = applyStyles(styles);

type Article = {
  article: string;
};

const Comments = () => {
  return html`
    <div id="comments" class="article-comments">
      <div id="disqus_thread"></div>
    </div>
  `;
};
const Article: TypicaComponent = async ({ article }: Article) => {
  const content = await Markdown({ type: 'article', item: article });

  document.addEventListener('typicaDOMUpdated', () => {
    if (content.meta.externalJS) {
      const externalScript = document.createElement('script');
      externalScript.src = content.meta.externalJS;
      document.body.appendChild(externalScript);
    }

    if (content.meta.externalCSS) {
      const externalCSS = document.createElement('link');
      externalCSS.rel = 'stylesheet';
      externalCSS.href = content.meta.externalCSS;
      document.head.appendChild(externalCSS);
    }

    if (content.meta.comments === 'true') {
      // @ts-ignore
      window.disqus_identifier = content.meta.slug;

      (function () {
        const dsq = document.createElement('script');
        dsq.type = 'text/javascript';
        dsq.async = true;
        dsq.src = '//htmlmag.disqus.com/embed.js';
        console.log(dsq);
        document.body.appendChild(dsq);
      })();

      DisqusCount();
    }
  });

  return html`
    <article class="${css('article-post')}">
      <header class="article-header">
        <h1 class="${css('article-title')}">${content.meta.title}</h1>
        <div class="${css('article-meta')}">
          <span class="article-author"><span class="icon">${Author()}</span> ${content.meta.author}</span>
          <span class="article-date"><span class="icon">${Time()}</span> ${dateString(content.meta.date)}</span>
          <span class="article-comments">
            <span class="icon">${Comment()}</span>
            <a href="#disqus_thread" data-disqus-identifier="${content.meta.slug}"></a>
          </span>
        </div>
      </header>
      <div class="${css('article-content')}">${content.text}</div>
      ${content.meta.comments === 'true' ? Comments() : ''}
    </article>
  `;
};

export default Article;
