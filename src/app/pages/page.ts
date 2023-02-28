import { applyStyles, html, TypicaComponent } from '../../lib/typica';
import Markdown from '../../markdown/markdown';

import styles from './article.module.scss';

const css = applyStyles(styles);

type Page = {
  page: string;
};
const Page: TypicaComponent = async ({ page }: Page) => {
  const content = await Markdown({ type: 'page', item: page });

  return html`
    <article class="${css('article-post')}">
      <header class="article-header">
        <h1 class="${css('article-title')}">${content.meta.title}</h1>
      </header>
      <div class="${css('article-content')}">${content.text}</div>
    </article>
  `;
};

export default Page;
