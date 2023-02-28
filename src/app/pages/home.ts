import { html, TypicaComponent } from '../../lib/typica';
import articles from './home.json';
import Summary from '../components/summary';
import { SummaryType } from '../components/summary';

const Home: TypicaComponent = () => {
  const articleSummaries = articles.map((article: SummaryType) => Summary(article)).join('');

  return html`<div class="articles">${articleSummaries}</div> `;
};

export default Home;
