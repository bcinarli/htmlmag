import { html, TypicaComponent } from '../../lib/typica';
import articles from './home.json';
import Summary from '../components/summary';
import { SummaryType } from '../components/summary';
import DisqusCount from '../components/disqus-count';

const Home: TypicaComponent = () => {
  const articleSummaries = articles.map((article: SummaryType) => Summary(article)).join('');

  document.addEventListener('typicaDOMUpdated', () => {
    DisqusCount();
  });

  return html`<div class="articles">${articleSummaries}</div> `;
};

export default Home;
