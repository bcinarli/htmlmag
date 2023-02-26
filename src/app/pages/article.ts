import { applyStyles, html } from '../../lib/typica';
import Markdown from '../../markdown/markdown';

import styles from './article.module.scss';

import Author from '../icons/author';
import Comment from '../icons/comment';
import Time from '../icons/time';

const css = applyStyles(styles);

type Article = {
  article: string;
};
const Article = async ({ article }: Article) => {
  const content = await Markdown({ type: 'article', item: article });

  return html`
    <article class="${css('article-post')}">
      <header class="article-header">
        <h1 class="${css('article-title')}">${content.meta.title}</h1>
        <div class="${css('article-meta')}">
          <span class="article-author"><span class="icon">${Author()}</span> ${content.meta.author}</span>
          <span class="article-date"><span class="icon">${Time()}</span> ${content.meta.date}</span>
          <span class="article-comments">
            <span class="icon">${Comment()}</span> <a href="#disqus_thread" data-disqus-identifier="naming-in-css"></a>
          </span>
        </div>
      </header>
      <div class="${css('article-content')}">${content.text}</div>
    </article>
  `;
};

export default Article;
