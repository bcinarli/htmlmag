import('urlpattern-polyfill');

import { URLPatternComponentResult } from 'urlpattern-polyfill/dist/types';

type Route = {
  path: string;
  component: Function;
};

const url = new URL(window.location.href);

const Router = async (routes: Route[]) => {
  const matchedPathnames: Array<URLPatternComponentResult | undefined> = [];

  const matched = routes.filter((route) => {
    const pattern = new URLPattern({ pathname: route.path });

    if (pattern.test(url)) {
      matchedPathnames.push(pattern.exec(url)?.pathname);
      return true;
    }

    return false;
  });

  return (await matched[0]?.component(matchedPathnames[0]?.groups)) ?? '404';
};

export default Router;
