---
comments: true
slug: javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum3
title: Tasarım Kalıplarının Kullanımı - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 3)
date: 2015-07-08 08:22:20
author: Barış Güler
profile: https://www.facebook.com/profile.php?id=100005773905216
lang: tr_TR
tags:
- javascript
- design patterns
related:
- Tasarım Kalıpları Nedir? - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 2) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum1
- Tasarım Kalıpları Nedir? - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 2) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum2
- Tasarım Kalıplarını Uygulamak için Öneriler - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 4) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum4
og_image: /content/2015/javascript-logo.png
---
![js][]

<blockquote markdown=1>
Bu yazı, __Tasarım Kalıpları__ dizinin 3. yazısıdır. Dizinin diğer yazılarına aşağıdaki içindekiler kısmından ulaşabilirsiniz.

### İçindekiler

1. [Bölüm 1: Tasarım Kalıpları - Sorunlar ve İlkeler](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum1)
2. [Bölüm 2: Tasarım Kalıpları Nedir?](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum2)
3. Bölüm 3: Tasarım Kalıplarının Kullanımı
4. [Bölüm 4: Tasarım Kalıplarını Uygulamak için Öneriler](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum4)
</blockquote>

## Gerçek Hayatta Tasarım Kalıpları

## 1 - Modül Kalıbına Örnekler:
### AMD (Asynchronous Module Pattern)
Türkçe adıyla Asenkron Modül Tanımı olarak require.js kütüphanesi ile geliştirme hayatımıza giren bu kalıp ile birbirine Dependency Injection yöntemi ile context’e dahil edilen modüller yaratabiliyor ve bunları istediğimiz sırada çalıştırabiliyoruz. Yazılım tasarımı itibariyle kolay ve yönetilebilir bir kod tabanı sağlaması, büyüyen kod bloklarını yönetmede ve onları çok küçük işlem bloklarına bölmemizde yardımcı olan bu tasarım kalıbı herhangi bir kütüphane ya da çatı ile de kolaylıkla entegre çalışabiliyor. Örnek kütüphane: [requirejs.org]

```{.language-javascript}
/**
 * productList.js
 * Bu dosyada ürünleri başka bir modülden çağırdığımız 
 * bir “getProducts” metodu ile çağırıyoruz.
 */

define(function (require) {
   var service = require('./service');
   var productsList = service.getProducts();
});
```

```{.language-javascript}
/**
 * service.js
 * Ürünleri API uç noktasından almamıza yarayacak 
 * metodu barındıran modül dosyası.
 */

defined(function () {
   return {
      getProducts : function (callback) {
         $.ajax({
            method : 'GET',
            url : 'localhost:8888/products',
            dataType : 'json',
            success : function (data) {
               if (callback) {
                  callback(data); 
               }
            }
         });
      }
   }
});
```

```{.language-javascript}
/**
 * app.js
 * Modülleri çağırıp çalıştırdığımız dosyamız.
 */

var service = requirejs(['app/service']);
var products;

service.getProducts(function (products) {
   products = products;
});
```

### CommonJS
Senkron modül tanımlama kalıbı olarak da biliniyor. Hatta Node.js’in artık resmileşmiş diyebileceğimiz modül tanımlama yöntemi olduğunu söyleyebiliriz. Buna göre istediğimiz metodları ya da değişken / sabitleri barındıran dosyaları çağırabilmemiz bu yöntem ile mümkün. Sunucu tarafında built-in geliyor olmasının yanısıra, istemci-taraflı geliştirmelerimizde [browserify]’ı kullanabiliriz.

```{.language-javascript}
/**
 * user.js
 * Kullanıcının genel işlemlerinin yürütüldüğü dosya.
 */

var auth = require('./utility/auth.js');
module.exports = {
   getClientId : function () {
      return auth.getClientId();
   }
};
```

```{.language-javascript}

/**
 * app.js
 * Uygulama çalışırken gerçeklenecek metodların barındırıldığı dosya.
 */

var user = require('./user');
module.exports = function () {
   auth.setCookie('clientId', user.getClientId());
}
```

```{.language-javascript}
/**
 * init.js
 * Bütün bir app.js’te istenen metodları çalıştıran dosya.
 */

var init = require('./app');

init();
```

### ES6 (Harmony) Modülleri
Yeni standartlaşan ve yavaş yavaş modern tarayıcılara entegre edilecek olan ECMAScript 6’nın modül yapısı oldukça sade ve kullanışlı.

```{.language-javascript}
/**
 * fibonacci.js
 * Fibonacci işlemini yaptığımız dosya.
 */

export fibonacci (num) {
   if (n <= 1)
      return n;
   return fibonacci(n-1) + fibonacci(n-2);
}
```

```{.language-javascript}
/**
 * calculate.js
 * İşlemi gerçekleştireceğimiz dosya.
 */

import {fibo} from ‘fibonacci’;

console.log(fibo(4) + fibo(3));
console.log((fibo(3) + fibo(2)) + (fibo(2) + fibo(1)));
```

## Javascript’te Namespacing Kalıpları
Javascript geliştirirken hepimizin aşina olduğu ancak bir süre sonra context set / get etme noktasında sıkıntı yaşama ihtimalimizin olduğu object literal notation tarzında çokça kullandığımız namespacing için belli başlı örneklerimiz mevcut. Bunların üzerinden de hızlıca geçersek zannedersem bazı noktalarda aslında bunların birçoğunu geliştirme günlüğümüzde zaten farkında olmadan yer aldığını farkedeceğizdir.

!---------------------------------- | -------------------------------------------------------
__Single-global Variables__         | var testModule = (function () {})();
__Prefix Namespacing__              | var testNS_someFunctionality = {}, var testNS_someOtherFunctionality = {}
__Object-literal Notation__         | Bkz. Module Revealing kalıbı.
__Nested Namespacing__              | testModule.some = testModule.some || {};
__Immediately-Invoked Function Expressions aka. IIFE / iffy__ | (function () {})();
__Namespace Injection__             | (function () {}).apply(ns.someMethod);
__Automating Nested Namespacing__   | moduleA.moduleB.moduleC.moduleD
__Dependency Decleration__          | var someFunction = moduleA.moduleB.moduleC.moduleD.someFunction
__Deep Object Extension__           | extend(destination, source)

Bütün bu kalıpların gün içerisinde birçok başka biçimde kullanımı olmasının yanısıra aslında bazılarını başka kütüphanelerden devşirerek ya da bizzat kullanarak gerçekliyoruz. Bunun bir örneği de Javascript’in istemci-taraflı DOM-manipülasyon kütüphanesi jQuery. Birçok kullanışlı aracı içerisinde barındıran jQuery elbette ki belli tasarım kalıplarını da kullanmıyor değil. Gözattığımızda şöyle bir tablo ile karşılaşıyoruz:

##  jQuery Kütüpnasinde Kullanılan Bazı Tasarım Kalıpları
### Composite
Bir selector yazarken bir class ile tanımlama yapabiliyorken bir element ile tanımlama da yapabilmemizi sağlıyor.

```{.language-javascript}
var paragraphsWithClassProductName = $('.productName');
var paragraphs = $('p'); 
```

### Facade
Gerçek API ile araya bir soyutlandırma katmanının koyulduğu kalıp.

```{.language-javascript}
$.ajax({
   url : '...',
   method : 'GET',
   dataType : 'json'
});
```

aslında XMLHTTPRequest nesnesini kullanarak yaratılmış bir metoda referans verip onu çalıştırıyor. Böylece kullanım kolaylığı sağlanıyor.


### Observer
Publish / Subscribe pattern’ını andıran bu kalıpta belli olaylara beklenen veri yapıları karşılanıp kullanılıyor.

```{.language-javascript}
document.on('customEvent', function (data) {
   $('p').html(data.customized);
});

$(document).trigger('customEvent', {customized : 'This is some data...'});
```

### Lazy Initialization
Belli bir işlem sırası sonrasında gerçekleşen bir yaklaşımı temsil ediyor ve aşağıdaki blok aslında DOMContentLoaded event’i tetiklendikten sonra çalışıyor.

```{.language-javascript}
$(document).ready(function () {
   ...
}); 
```

### Builder
Dinamik olarak yeni element referansları ve o referanslardan da yeni elementler yaratmamızı sağlaya bir tasarım kalıbı olarak jQuery kütüphanesinde kullanılıyor.

```{.language-javascript}
var p = $('</p>').text('New paragraph');
```

### Plugin patterns
jQuery plugin’leri yazarken tercih edeceğimiz tasarım kalıpları. Bu kalıbın kullanımı ile alakalı detaylı anlatımı "[jQuery Plugin Anatomisi](/article/anatomy-of-a-jquery-plugin)" yazımızda bulabilirsiniz.

```{.language-javascript}
(function ($) { 
   $.fn.somePlugin = function (options) {
      ...
      return this;
   }
})(jQuery);
```


[js]: ../content/2015/javascript-logo.png

[requirejs.org]: http://requirejs.org {.external}
[browserify]: http://browserify.org {.external}