import { html } from '../../lib/renderer';
import articles from './home.json';
import Summary from '../components/summary';
import { SummaryType } from '../components/summary';

const Home = () => {
  const articleSummaries = articles.map((article: SummaryType) => Summary(article)).join('');

  return html`
    <div id="main" class="main-content">
      <div class="articles">${articleSummaries}</div>
    </div>
  `;
};

export default Home;
