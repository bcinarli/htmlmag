import { TypicaComponent } from './types';

type Props = {
  app: TypicaComponent;
  root: Element;
};

class Renderer {
  props: Props = {
    app: () => {
      return '';
    },
    root: document.querySelector('#app') as Element,
  };

  typicaEvents = {
    domUpdated: new Event('typicaDOMUpdated'),
    domCleared: new Event('typicaDOMCleared'),
  };

  constructor(props: Props) {
    this.props = { ...this.props, ...props };
  }

  domUpdate(html: string) {
    const fragment = new DocumentFragment();
    const element = document.createElement('div');
    element.innerHTML = html;

    [...element.childNodes].forEach((child) => {
      fragment.appendChild(child);
    });

    // clear the app-root first
    // we are not having an intelligent diff between DOM node changes e.g. virtual DOM
    // we clear all the rendered app, and rerender it
    this.clear();

    this.props.root.appendChild(fragment);
    document.dispatchEvent(this.typicaEvents.domUpdated);
  }
  async render() {
    return await this.props.app();
  }

  async update() {
    const html = await this.render();
    this.domUpdate(html);
  }

  clear() {
    while (this.props.root.firstChild) {
      this.props.root.removeChild(this.props.root.lastChild as ChildNode);
    }
    document.dispatchEvent(this.typicaEvents.domCleared);
  }
}

export default Renderer;
