---
comments: true
slug: an-introduction-to-css-preprocessors-sass-less-stylus
title: An Introduction to CSS Pre-Processors: SASS, LESS and Stylus
date: 2014-04-21 23:41:20
tags:
- CSS
- SASS
- LESS
- Stylus
---
CSS Pre-processors are in our development life for years. In their first implementations, they had few features. But nowadays, they are the key ingredients and must have tools for CSS development. Pre-processors extend CSS with variables, operators, interpolations, functions, mixins and many more other usable assets. [SASS](http://sass-lang.com/), [LESS](http://lesscss.org/) and [Stylus](http://learnboost.github.io/stylus/) are the well known ones. By the time this article is published, SASS is at version 3.3.5,
LESS is at version 1.7.0 and Stylus is at version 0.43.1

## Why Pre-Processing CSS?
CSS is primitive and incomplete. Building a function, reusing a definition or inheritance are hard to achieve. For bigger projects, or complex systems, maintenance is a very big problem. On the other hand, web is evolving,
new specs are being introduced to HTML as well as CSS. Browsers apply these specs while they are in proposal state with their special vendor prefixes. In some cases (as in background gradient),
coding with vendor specific properties become a burden. You have to add all different vendor versions for a single
result.

In order to write better CSS, there were different approaches such as separating definitions into smaller
files and importing them in to one main file. This approach helped to deal with components but, did not solved code repetitions and maintainability problems. Another approach was early implementations of object oriented CSS. In this case, applying
two or more class definition to an element. Each class adds one type of style to the element. Having multiple classes
increased re-usability but decreased the maintainability.

Pre-processors, with their advanced features, helped to achieve writing reusable, maintainable and extensible codes in
CSS. By using a pre-processor, you can easily increase your productivity, and decrease the amount of code you are writing in a project.

## Digging the Features
Like every programming language, pre-processors have different syntax, but hopefully, not too separated. All of them support classic CSS coding and their syntax are like classic CSS. SASS and Stylus have additional styles. In SASS, you can omit curly brackets and semicolon, whereas in Stylus, you can also omit colons. These are optional in both SASS and Stylus.

In the samples below, you can find SASS, LESS and Stylus versions and CSS outputs. They are only sample usages for
their features. For more detailed samples visit the documentation pages of each pre-processor.

### Variables
Variables were all time wanted feature for CSS. Every developer, wanted to define a base color and use it all over the
 CSS file, in stead of writing the hex or named color in a property each time. Same as "color",
 variables needed for "width",
 "font-size", "font-family", "borders" etc.

Variables in SASS start with `$` sign, in LESS `@` sign and no prefix in Stylus. Both in SASS and LESS,
values are assigned with colon (`:`), and with equals sign (`=`) in Stylus.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
$font-size: 16px;

div {
    font-size: $font-size;
}
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
@font-size: 16px;

div {
    font-size: @font-size;
}
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
font-size = 16px

div
    font-size font-size
```
</div>

<div class="half-column" markdown="1">
``` {.language-css .css}
div {
    font-size: 16px;
}
```
</div>
</div>

### Nesting
CSS lacks visual hierarchy while working with child selectors. You have to write selectors and their combinations in
separate lines. Nesting provides a visual hierarchy as in the HTML and increases the readability. In some cases,
nesting causes oversizing the selectors and something like a "selector train", so use it wisely.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
$link-color: #999;
$link-hover: #229ed3;

ul {
    margin: 0;

    li {
        float: left;
    }

    a {
        color: $link-color;

        &:hover {
            color: $link-hover;
        }
    }
}
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
@link-color: #999;
@link-hover: #229ed3;

ul {
    margin: 0;

    li {
        float: left;
    }

    a {
        color: @link-color;

        &:hover {
            color: @link-hover;
        }
    }
}
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
link-color = #999
link-hover = #229ed3

ul
    margin 0
    li
        float left
    a
        color link-color
        &:hover
            color link-hover
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .css}
ul { margin: 0; }
ul li { float: left; }
ul a { color: #999; }
ul a:hover { color: #229ed3; }
```
</div>
</div>

### Mixins
Mixins are set of definitions that compiles according to some parameters or static rules. With them you can
easily write cross-browser background gradients or CSS arrows etc.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
@mixin bordered($width) {
    border: $width solid #ddd;

    &:hover {
        border-color: #999;
    }
}

h1 {
    @include bordered(5px);
}
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
.bordered (@width) {
    border: @width solid #ddd;

    &:hover {
        border-color: #999;
    }
}

h1 {
    .bordered(5px);
}
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
bordered(w)
    border: n solid #ddd
    &:hover
        border-color: #999

h1
    bordered(5px)
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .css}
h1 { border: 5px solid #ddd; }
h1:hover { border-color: #999; }
```
</div>
</div>

### Extends
Extends are useful for sharing a generic definition with selectors rather than copying it in. All extended selectors
are grouped in compiled CSS. SASS extends every instance of extended selector that includes its child selectors and
inherited properties. However, in LESS you can select every instance of extended selector by adding "all" attribute
to extend method or you can select only the main instance. Extends are also chainable.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
.block { margin: 10px 5px; }

p {
  @extend .block;
  border: 1px solid #eee;
}

ul, ol {
  @extend .block;
  color: #333;
  text-transform: uppercase;
}
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
.block { margin: 10px 5px; }

p {
  &:extend(.block);
  border: 1px solid #eee;
}

ul, ol {
  &:extend(.block);
  color: #333;
  text-transform: uppercase;
}
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
.block
    margin 10px 5px

p
    @extend .block
    border 1px solid #eee

ul
ol
    @extend .block
    color #333
    text-transform uppercase
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .css}
.block, p, ul, ol { margin: 10px 5px; }

p { border: 1px solid #eee; }
ul, ol { color: #333; text-transform: uppercase; }
```
</div>
</div>

### Color Operations
All three pre-processors have color functions to play with colors. You can lighten the base color or saturate it,
even you can mix two or more different colors. This feature is not very essential but nice to have.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
saturate($color, $amount)
desaturate($color, $amount)
lighten($color, $amount)
darken($color, $amount)
adjust-hue($color, $amount)
opacify($color, $amount)
transparentize($color, $amount)
mix($color1, $color2[, $amount])
grayscale($color)
complement($color)
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
saturate(@color, @amount)
desaturate(@color, @amount)
lighten(@color, @amount)
darken(@color, @amount)
fadein(@color, @amount)
fadeout(@color, @amount)
fade(@color, @amount)
spin(@color, @amount)
mix(@color1, @color2, @weight)
grayscale(@color)
contrast(@color)
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .stylus}
red(color)
green(color)
blue(color)
alpha(color)
dark(color)
light(color)
hue(color)
saturation(color)
lightness(color)
```
</div>
</div>

### If/Else Statements
Control directives and expressions help to build similar style definitions according to matched conditions or
variables. SASS and Stylus support normal if/else conditionals. But in LESS, you can achieve this with CSS Guards.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
@if lightness($color) > 30% {
    background-color: black;
}

@else {
    background-color: white;
}
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
.mixin (@color) when (lightness(@color) > 30%) {
    background-color: black;
}
.mixin (@color) when (lightness(@color) =< 30%) {
    background-color: white;
}
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
if lightness(color) > 30%
    background-color black
else
    background-color white
```
</div>
</div>

### Loops
Loops are useful when iterating through an array or creating a series of styles as in grid widths. Like in the
if/else case, LESS is using CSS Guards and recursive mixins for looping.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
@for $i from 1px to 3px {
    .border-#{i} {
        border: $i solid blue;
    }
}
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
.loop(@counter) when (@counter > 0){
    .loop((@counter - 1));

    .border-@{counter} {
        border: 1px * @counter solid blue;
    }
}
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
for num in (1..3)
    .border-{num}
        border 1px * num solid blue
```
</div>
</div>

### Math
Math operations can be used for standard arithmetic or unit conversions. SASS and Stylus support arithmetic between
different units. In addition to simple math, pre-processors also have complex math support such as ceiling,
rounding, getting min or max value in a list etc.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
1cm * 1em => 1 cm * em
2in * 3in => 6 in * in
(1cm / 1em) * 4em => 4cm
2in + 3cm + 2pc => 3.514in
3in / 2in => 1.5
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
1cm * 1em => 1cm * 1em
2in * 3in => 6in
(1cm / 1em) * 4em => 4cm
2in + 3cm + 2pc => 3.514in
3in / 2in => 1.5in
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
1cm * 1em => 1 cm * em
2in * 3in => 6in
(1cm / 1em) * 4em => 4cm
2in + 3cm + 2pc => 5.181in
3in / 2in => 1.5in
```
</div>
</div>

### Imports
Rather than using a one large file, separating your codes in small pieces is helpful for expressing your declarations
and increasing maintainability and control over the codebase. You can group the similar code chunks in similar folders
and import them to main css file. Also with `import` statement, frameworks can also be added to work packages.

<div class="row">
<div class="half-column" markdown="1">
``` {.language-scss .sass}
@import "library";
@import "mixins/mixin.scss";
@import "reset.css";
```
</div>
<div class="half-column" markdown="1">
``` {.language-css .less}
@import "library"
@import "mixins/mixin.less"
@import "reset.css"
```
</div>
</div>

<div class="row">
<div class="half-column" markdown="1">
``` {.language-css .stylus}
@import "library"
@import "mixins/mixin.styl"
@import "reset.css
```
</div>
</div>

## Conclusion
All the three CSS pre-processors explained here are more or less have similar features. Just pick one
according to your coding familiarity and start using it in your next project.