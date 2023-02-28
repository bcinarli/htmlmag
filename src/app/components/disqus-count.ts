const DisqusCount = () => {
  (function () {
    const s = document.createElement('script');
    s.async = true;
    s.type = 'text/javascript';
    s.src = '//htmlmag.disqus.com/count.js';
    document.body.appendChild(s);
  })();
};

export default DisqusCount;
