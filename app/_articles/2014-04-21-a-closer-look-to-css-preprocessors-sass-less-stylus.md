---
comments: true
slug: a-closer-look-to-css-preprocessors-sass-less-stylus
title: A Closer Look to CSS Preprocessor: SASS, LESS, Stylus
date: 2014-04-21
tags:
- CSS
- SASS
- LESS
- Stylus
---
<div class="row" markdown="1">
<div class="one-third-column" markdown="1">
``` {.language-scss .sass}
$color: blue;
div {
    color: $color;
}
```
</div>
<div class="one-third-column" markdown="1">
``` {.language-css .less}
@color: blue;
div {
    color: @color;
}
```
</div>
<div class="one-third-column" markdown="1">
``` {.language-css .stylus}
@color: blue;
div {
    color: @color;
}
```
</div>
</div>

``` {.language-css .css}
div {
    color: blue;
}
```