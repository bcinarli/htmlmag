import { Renderer } from './lib/typica';
import './styles/styles.scss';
import App from './app';

const app = new Renderer({ root: document.querySelector('#app') as Element, app: App });

app.update();
