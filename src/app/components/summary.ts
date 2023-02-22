import { applyStyles, html } from '../../lib/typica';

import styles from './summary.module.scss';
import Calendar from '../icons/calendar';
import Author from '../icons/author';
import Comment from '../icons/comment';

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
          <span class="${css('article-date')}"><span class="icon">${Calendar()}</span> ${date}</span>
          <span class="article-comments">
            <span class="icon">${Comment()}</span>
            <a href="/article/${slug}#disqus_thread" data-disqus-identifier="${slug}"></a
          ></span>
        </div>
      </header>

      <p class="excerpt">${excerpt}</p>

      <footer class="${css('article-meta')}">
        <span class="${css('article-author')}"
          ><span class="icon ${css('icon-author')}">${Author()}</span> ${author}</span
        >
      </footer>
    </article>
  `;
};

export default Summary;
