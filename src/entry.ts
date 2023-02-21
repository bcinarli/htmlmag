import { Renderer } from './lib/renderer';
import './styles/styles.scss';
import App from './app';

const app = new Renderer({ root: document.querySelector('#app') as Element, app: App });

app.update();
