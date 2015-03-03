---
comments: true
slug: namespace-your-events
title: Namespace Your Events with the help of jQuery
date: 2015-01-14 13:29:10
author: Bilal Cinarli
profile: https://facebook.com/bcinarli
tags:
- JavaScript
- jQuery
- events
externalJS: //assets.codepen.io/assets/embed/ei.js
---
In daily coding, binding an event to an element is simply and autonomous routine. Most of time developers select the element with jQuery, attach the event with `on` method or event's keyword and never think about if any other methods are also attached to same element with the very same event.

Think about an input field. You want to add a clearing option when user entered information to field as well as you want to count the characters. 

``` {.language-javascript}
// binding clearing option methods 
$('.input').on('keyup', clearingMethods);

// binding counting methods
$('.input').on('keyup', countingMethods)
```

These both methods will work together perfectly. However, espacially while __creating plugins__, it is very important to seperate your events from other bindings. Because, in such cases, there will some method unbinding or destroy the plugin events. 

Using the `$(el).off(event)` will remove not only your plugin's indicating event but also other methods which are using the same event. Having namespaced events will prevent messing other methods that are not related to your plugin.

It is very easy binding your events with a namespace in jQuery. The trick is, adding your namespace to original event with a dot (`.`). Thats all!

``` {.language-javascript}
// normal event binding
$(el).on('keyup', callback);

// namespaced event binding
$(el).on('keyup.namespace', callback);
```

Same as the binding your event, unbinding the namespaced event as follows:

``` {.language-javascript}
// unbinds all 'keyup' events 
$(el).off('keyup');

// only removes the specified event in namespace, 
// other 'keyup' events will still continue working
$(el).off('keyup.namespace');
```

## Further reading
- jQuery documentation for [namespacing](http://api.jquery.com/event.namespace/){.external} your events
- Detailed [explanation](https://developer.mozilla.org/en-US/docs/Web/API/EventTarget.addEventListener){.external} of event listeners on Mozilla.
- Checkout namespaced events in some of [uxrocket](https://github.com/uxrocet){.external} plugins such as [clear](https://github.com/uxrocket/uxrocket.clear){.external} or [textlimit](https://github.com/uxrocket/uxrocket.textlimit){.external}.