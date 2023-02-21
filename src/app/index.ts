import { applyStyles, html } from '../lib/renderer';
import styles from './index.module.scss';
import Home from './pages/home';

const css = applyStyles(styles);

export const App = (): string => {
  return html`
    <div id="wrapper" class="${css('page-wrap')}">
      <header id="masthead" class="${css('page-header')}">
        <div class="content-container">
          <a href="/" class="${css('page-heading')}"><h1 class="${css('page-headline')}">The HTML Magazine</h1></a>

          <a href="https://twitter.com/htmlmag" target="_blank" class="header-social-links"
            ><i class="icon-twitter"></i> @htmlmag</a
          >
        </div>
      </header>

      <div id="content" class="${css('page-content')}">${Home()}</div>

      <footer class="${css('page-footer')}">
        <div class="content-container">
          <p>
            © ${new Date().getFullYear()} - <a href="https://twitter.com/bcinarli">Bilal Çınarlı</a>,
            <a href="https://twitter.com/sirzataytac">Şirzat Aytaç</a> & HTML Mag.
            <a href="https://github.com/bcinarli/misto" target="_blank">Misto</a> ile hazırlanmıştır. Logo
            <a href="http://www.hasanyalcin.com" target="_blank">Hasan Yalçın</a> tarafından dizayn edilmiştir.
          </p>
        </div>
      </footer>
    </div>
  `;
};

export default App;
