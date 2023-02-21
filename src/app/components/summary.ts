import { applyStyles, html } from '../../lib/renderer';

import styles from './summary.module.scss';

const css = applyStyles(styles);

export type SummaryType = {
  slug: string;
  title: string;
  date: string;
  excerpt: string;
  author: string;
};
const Summary = ({ slug, title, date, excerpt, author }: SummaryType) => {
  return html`
    <article class="${css('summary')}">
      <header class="${css('article-header')}">
        <h2 class="${css('article-title')}">
          <a href="/article/${slug}">${title}</a>
        </h2>
        <div class="${css('article-meta')}">
          <span class="${css('article-date')}"><i class="icon-date"></i> ${date}</span>
          <span class="article-comments"
            ><i class="icon-comment"></i> <a href="/article/${slug}#disqus_thread" data-disqus-identifier="${slug}"></a
          ></span>
        </div>
      </header>

      <p class="excerpt">${excerpt}</p>

      <footer class="${css('article-meta')}">
        <span class="${css('article-author')}"><i class="${css('icon-author')}"></i> ${author}</span>
      </footer>
    </article>
  `;
};

export default Summary;
