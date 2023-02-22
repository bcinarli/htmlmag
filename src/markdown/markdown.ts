import { marked } from 'marked';

type MarkDownFiles = {
  type: 'article' | 'event' | 'page';
  item: string;
};

const Markdown = async ({ type, item }: MarkDownFiles) => {
  const paths = { article: '/_posts/_articles', event: '/_posts/_events', page: '/_posts/_pages' };
  const file = `${paths[type]}/${item}.md`;

  const content = await fetch(file);
  const data = await content.text();

  const [, meta, txt] = data.split('---');

  const metaContent = meta
    .split('\n')
    .filter((item) => item !== '')
    .map((item) => {
      const [key, value] = item.split(':');

      return [key.trim(), value.trim()];
    });

  return {
    meta: Object.fromEntries(metaContent),
    text: marked.parse(txt),
  };
};

export default Markdown;
