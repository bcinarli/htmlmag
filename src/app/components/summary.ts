import { html } from '../../lib/renderer';

export type SummaryType = {
  slug: string;
  title: string;
  date: string;
  excerpt: string;
  author: string;
};
const Summary = ({ slug, title, date, excerpt, author }: SummaryType) => {
  return html`
    <article class="summary">
      <header class="article-header">
        <h2 class="article-title">
          <a href="/article/${slug}">${title}</a>
        </h2>
        <div class="article-meta">
          <span class="article-date"><i class="icon-date"></i> ${date}</span>
          <span class="article-comments"
            ><i class="icon-comment"></i> <a href="/article/${slug}#disqus_thread" data-disqus-identifier="${slug}"></a
          ></span>
        </div>
      </header>

      <p class="excerpt">${excerpt}</p>

      <footer class="article-meta">
        <span class="article-author"><i class="icon-author"></i> ${author}</span>
      </footer>
    </article>
  `;
};

export default Summary;
