import { html } from '../../lib/typica';
import Markdown from '../../markdown/markdown';
import Author from '../icons/author';
import Comment from '../icons/comment';
import Time from '../icons/time';

type Article = {
  article: string;
};
const Article = async ({ article }: Article) => {
  const content = await Markdown({ type: 'article', item: article });

  return html`
    <article class="article-content">
      <header class="article-header">
        <h1 class="article-header">${content.meta.title}</h1>
        <div class="article-meta">
          <span class="article-author">${Author()} ${content.meta.author}</span>
          <span class="article-date">${Time()} ${content.meta.date}</span>
          <span class="article-comments">
            ${Comment()} <a href="#disqus_thread" data-disqus-identifier="naming-in-css"></a>
          </span>
        </div>
      </header>
      <div class="article-content">${content.text}</div>
    </article>
  `;
};

export default Article;
