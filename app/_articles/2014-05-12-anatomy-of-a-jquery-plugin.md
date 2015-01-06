---
comments: true
slug: anatomy-of-a-jquery-plugin
title: Anatomy of a jQuery Plugin
date: 2014-05-12 20:23:10
author: Bilal Cinarli
tags:
- jQuery
---
Since released, jQuery has become one of the key components in web projects. Extensibility, easy to use,
short learning curve and huge community support, makes it to be the first choice for a front-end developer most
 of the time.

Plugins in jQuery are reusable, they support different options through their methods with the attached
objects. Basic
 jQuery plugin consists of a jQuery closure and a `return` command. We will look into the plugin anatomy with a sample
 textlimiting plugin. Lets dig-in details.

## The Closure
``` {.language-javascript}
;(function($){
    $.fn.textlimit = function(options){
        return this.each(function(){
            // plugin actions
        });
    };
})(jQuery);
```
<p class="note">* In plugins, starting with semicolon will make sure that the previous code closed properly and plugin
code will not break in minification.</p>

`(function($){})(jQuery)` part for the plugin is the jQuery closure. It auto adds your functions to jQuery scope. All
the plugin code will and should reside in this closure. `$.fn.textlimit` is the name of your plugin. You can call your plugin as `$("#el").textlimit`. While attaching the plugin events to an object, returning itself is the magic for chainability. If you do not return the original object, chaining will be broken.

Inside the closure, you are free with your plugin architecture. For maintainability,
break down your code into smaller methods and put them outside of the `return` part separately.

## The Defaults and The Return
``` {.language-javascript}
;(function($){
    var defaults = {
        maxlength: 0,
        counter: '.remaining'
    };

    $.fn.textlimit = function(options){
        return this.each(function(){
            var $el = $(this),
                textlimit;

            if($el.hasClass('textlimit-ready') return;

            $el.addClass('textlimit-ready');

            textlimit = new TextLimit($el, options);
        });
    };
})(jQuery);
```
Customizing the plugin helps to control over complexity of the plugin. Defining default values and accepting new
values for these defaults are the easiest approaches to differentiate the plugin usage and for outputs across
different objects.
 To do this, start with an object literal named like `defaults`, `settings` etc. with initial predefined values. Later,
 merge these default values with options accepted while attaching the plugin.

Inside the return, first cache the jQuery object. Then, just to be safe and not to attach the plugin multiple times
to the object, check if the plugin is already attached. Adding a unique class like `textlimit-ready` or a
similar class will make the job. This could be the simplest way to check it. After that,
call the constructor method as in `textlimit = new TextLimit($el, options);` part.

## The Constructor
``` {.language-javascript}
var TextLimit = function($el, options){
    var opts = $.extend({}, defaults, options),
        $counter = $el.next(opts.counter),
        limit;

    limit = $el.attr('maxlength') ? parseInt($el.attr('maxlength')) : opts.maxlength;
    if(limit > 0) {
        $counter.text(limit);

        bindUIActions($el, limit, $counter);
    }
};
```
Constructor method of the plugin collects the options and binds the UI actions to the
object. jQuery's `extend` function, merges the accepted options during the plugin call with default options to give
new set of values. In the `opts` variable with `opts = $.extend({}, defaults, options)` line,
we set these options for the current object. Then, check if there is proper limit defined for the text inputs.

## The Extras
``` {.language-javascript}
var bindUIActions = function($el, limit, $counter){
    // first count initial
    countChars($el, limit, $counter);

    $el.on('keyup', function(){
        return countChars($el, limit, $counter);
    });
};

var countChars = function($el, limit, $counter){
    var value = $el.val(),
        valLength = value.length,
        remaining = limit - valLength;

    if(remaining < 0){
        $el.val(value.substring(0, limit));
        remaining = 0;
    }

    $counter.text(remaining);
};
```
These parts of the plugin are to support "_break down your code into smaller methods_" argument that I mentioned
above. `bindUIActions` binds the ui related actions to the object in a single method. The final `countChars` method calculates the char length in the input. Also, it checks if there is any available space for the next char and if the user reached the defined limit forbids adding new chars.

## All Together
The following code block and the CodePen embed is the final version of the sample plugin and the working example.
``` {.language-javascript}
;(function($){
    // default plugin options
    var defaults = {
        maxlength: 0,
        counter: '.remaining'
    };

    // Constructor method
    var TextLimit = function($el, options){
        var opts = $.extend({}, defaults, options),
            $counter = $el.next(opts.counter),
            limit;

        limit = $el.attr('maxlength') ? parseInt($el.attr('maxlength')) : opts.maxlength;
        if(limit > 0) {
            $counter.text(limit);

            bindUIActions($el, limit, $counter);
        }
    };

    // UI action bindings
    var bindUIActions = function($el, limit, $counter){
        // first count initial
        countChars($el, limit, $counter);

        $el.on('keyup', function(){
            return countChars($el, limit, $counter);
        });
    };

    // Counting the chars
    var countChars = function($el, limit, $counter){
        var value = $el.val(),
            valLength = value.length,
            remaining = limit - valLength;

        if(remaining < 0){
            $el.val(value.substring(0, limit));
            remaining = 0;
        }

        $counter.text(remaining);
    };

    $.fn.textlimit = function(options){
        return this.each(function(){
            var $el = $(this),
            textlimit;

            // if plugin is already attached to the element, do not attach again
            if($el.hasClass('textlimit-ready')) return;

            $el.addClass('textlimit-ready');

            // call the constructor method
            textlimit = new TextLimit($el, options);
        });
    }
})(jQuery);
```

<p data-height="268" data-theme-id="0" data-slug-hash="Larjg" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/bcinarli/pen/Larjg/'>Larjg</a> by Bilal Çınarlı (<a href='http://codepen.io/bcinarli'>@bcinarli</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//codepen.io/assets/embed/ei.js"></script>

To sum up, a jQuery plugin is a new method or utility that will be available in your code. It is reusable, and it can support complex actions and operations.

## Further reading
* There is a [good article](https://learn.jquery.com/javascript-101/closures/) about closures in jQuery website.
* [Basic plugin creating](https://learn.jquery.com/plugins/basic-plugin-creation/), the jQuery's own tutorial.