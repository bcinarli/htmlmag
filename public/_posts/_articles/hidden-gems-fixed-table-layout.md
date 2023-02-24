---
comments: true
slug: hidden-gems-fixed-table-layout
title: Hidden Gems: Fixed Table Layout
date: 2015-01-06 20:05:00
author: Bilal Cinarli
profile: https://facebook.com/bcinarli
tags:
- CSS
- tables
- navigation
externalJS: //assets.codepen.io/assets/embed/ei.js
---
CSS has some features that are like easter eggs due to very little known usage in general. These features in most cases, save you from writing tons of unnecessary codes and waste hours of work. `table-layout: fixed` is one of these gems.

By default, table-layout property is `auto`. With auto, despite the predefined width, table resizes itself according to content inside the cells. Especially when you are working with big data tables, they tend to overflow from your layout, resulting horizontal scrolling on page, or break the design.

## Any Real Usecase?
Recently, I was working on an application which user add records and controls their before/after changes during the process. Data in these records are very big and users want to check changes side by side. In the back-end codes, the content printed in a container table with _100%_ width and two half sized cells contains the before/after data. Also these data are wider than the cells and they need to be scrollable.

### Default Table
Long content pushes the cells, and table overlflows.

<p data-height="268" data-theme-id="11168" data-slug-hash="jEVjqo" data-default-tab="result" data-user="bcinarli" class='codepen'>See the Pen <a href='http://codepen.io/bcinarli/pen/jEVjqo/'>jEVjqo</a> by Bilal Çınarlı (<a href='http://codepen.io/bcinarli'>@bcinarli</a>) on <a href='http://codepen.io'>CodePen</a>.</p>

### Better view
Fixed layout fixes the broken layout. Also with scrollable inner tables, we have a better visual for our content.
<p data-height="200" data-theme-id="11168" data-slug-hash="GgNbxY" data-default-tab="result" data-user="bcinarli" class='codepen'>See the Pen <a href='http://codepen.io/bcinarli/pen/GgNbxY/'>GgNbxY</a> by Bilal Çınarlı (<a href='http://codepen.io/bcinarli'>@bcinarli</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
_Inner tables overlap if you do not wrap them. Try this by removing `.data-grid-wrap` in the pen_

## Only for Tables?
Since you can set other elements' display to `table`, you can use this property freely but _responsibly_. Especially, this feauture is very useful in evenly separated content such as menu and maybe some grid approaches.

### Evenly separated and aligned menu
As in the sample below, after adding or removing menu element, arbitrary calculations for the widths or additional javascript workout are needless for links' sizes. They will share the total width automatically in each cases.

<p data-height="200" data-theme-id="11168" data-slug-hash="xbRNvO" data-default-tab="result" data-user="bcinarli" class='codepen'>See the Pen <a href='http://codepen.io/bcinarli/pen/xbRNvO/'>xbRNvO</a> by Bilal Çınarlı (<a href='http://codepen.io/bcinarli'>@bcinarli</a>) on <a href='http://codepen.io'>CodePen</a>.</p>

And surprise, it is supported way back to Internet Explorer 5.5.

## Further reading
* More about [table-layout](https://developer.mozilla.org/en-US/docs/Web/CSS/table-layout){.external} definition.
* There is a [detailed article](http://css-tricks.com/fixing-tables-long-strings/){.external} in CSS-Tricks. 