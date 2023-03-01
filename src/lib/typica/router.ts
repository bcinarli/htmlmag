import { Route } from './types';

import { URLPattern } from 'urlpattern-polyfill';

import { URLPatternComponentResult } from 'urlpattern-polyfill/dist/types';
//@ts-ignore
globalThis.URLPattern = URLPattern;

const url = new URL(window.location.href);

const Router = async (routes: Route[]) => {
  const matchedPathnames: Array<URLPatternComponentResult | undefined> = [];

  const matched = routes.filter((route) => {
    //@ts-ignore
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
