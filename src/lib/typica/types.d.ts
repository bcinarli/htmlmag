export type TypicaComponent = (arguments?: T | Object | string | undefined) => string | Promise<string>;

export type Route = {
  path: string;
  component: TypicaComponent;
};
