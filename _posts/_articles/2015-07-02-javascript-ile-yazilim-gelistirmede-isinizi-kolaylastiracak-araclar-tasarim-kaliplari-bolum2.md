---
comments: true
slug: javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum2
title: Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar: Tasarım Kalıpları (Bölüm 2)
date: 2015-07-02 13:47:17
author: Barış Güler
profile: https://www.facebook.com/profile.php?id=100005773905216
lang: tr_TR
tags:
- javascript
- design patterns
related:
- Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar: Tasarım Kalıpları (Bölüm 2) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum2
---
![js][]

<blockquote markdown=1>
Bu yazı, __Tasarım Kalıpları__ dizinin 2. yazısıdır. Dizinin diğer yazılarına aşağıdaki içindekiler kısmından ulaşabilirsiniz.

### İçindekiler

1. [Bölüm 1: Tasarım Kalıpları - Sorunlar ve İlkeler](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum1)
2. Bölüm 2: Tasarım Kalıpları Nedir?
</blockquote>

## Tasarım Kalıpları Nedir?

> “In [software engineering](https://en.wikipedia.org/wiki/Software_engineering), a [design pattern](http://en.wikipedia.org/wiki/Design_pattern) is a general reusable solution to a commonly occurring problem within a given context in software design.” - Wikipedia

> “The elements of this language are entities called patterns. Each pattern describes a problem that occurs over and over again in our environment, and describes the core of the solution to that problem, in such a way that you can use this solution a million times over, without ever doing it the same way twice.” - Christopher Alexander, the author of A Pattern Language : Times, Buildings, Construction, Oxford

Her bir soruna farklı yönlerden yaklaşımlar geliştirmenin bir diğer adına tasarım kalıbı diyebiliriz. Bunun belirleyicisi geliştiricinin kendisi olmalıdır çünkü karşılaştığı sorunu en iyi bilen o olduğunu kabul ediyoruz. Peki tasarım kalıplarının aklımızda tutmamız gereken anahtar noktaları nelerdir dersek şu maddeleri düşünebiliriz: 

### Problem çözümünde rehber
Sorunun neticeye kavuşmasında yani çözülmesinde izlenecek yolu tanımlarlar. Bu tanımın zorluğu / kolaylığı ile belirlenmez; sadece sonuca ulaşmanın bir yolu olarak düşünmemiz gerekiyor. 

### Yazılımı “zekice” geliştirmek
Hep bahsettiğimiz yazılımı sadece “__geliştirmek__” ile ilintili basitçe bir tatmin bile geliştirici için mümkün iken, bir de bunun “__zekice__” geliştirilmiş halini icra etmenin verdiği geliştirici tatmini, için daha dolu bir zevki de barındırıyor. Kodun geliştiricisi tekrar o koda dönüp baktığında karşılaştığı “__tasarım__” ile yeniden heveslenmemesi içten bile değil.

### Çatı ya da kütüphane bağımsızlığı
İstediğiniz araç-gereci tercih ederek tercih edebileceğiniz tasarım kalıplarından bahsediyorken bu yaklaşımların yazılım dili, ilgili dilin araç ve gereçlerinden de bağımsız olduğunu rahatlıkla söyleyebiliriz. Tasarım kalıplarını herhangi dilde, o dilin sınırları içerisinde, o dilin izin verdiği ölçüde istediğiniz gibi özelleştirebilir ve kullanabilirsiniz.

### Başlangıç seviyesinden uzman seviyesine, pratikte kullanılmış örnek fazlalığı
Tasarım kalıpları, halihazırda ortaya konmuş yaklaşımlardan feyz almanın da önünü açıyor. Bunun için zamanında bir soruna yönelik geliştirilmiş benzer bir çözümün varlığından haberdar olmamız yeterli. Bu da ister yazılım geliştirmeye yeni başlamış bir geliştirici olsun, isterse de bu işe yıllarını vermiş geliştiriciler olsun, herkes için çoktan birikmiş bir dağarcıktan pratik çözümler türetmenin de bir aracı haline gelebilir.

Daha da irdeleme yoluna gidersek, tasarım kalıpları ortak sorunlara ortak çözümler üretmenin araçları olmalarının yanında daha teknik detayda birçok avantajı da beraberinde getiriyor. Tasarım kalıplarını neden kullanmamız gerektiğini teknik detay olarak deşmeye başlarsak karşımıza şöyle bir tablo çıkıyor :

### Veri yapısı yönetimi önermesi
Nesne-yönelimli programlamayı referans aldığınızı kabul ederek, onlarca ve belki de yüzlerde nesne içerisinde hayatta kalmanın bir anahtarını bize sunan tasarım kalıpları, özellikle Javascript’te iyi yönetilmediği taktirdi bir dert haline gelen “__context__” yönetimini ya da global / private scope kontrolünü yapmamıza da olanak sağlıyor. Instance’ların oradan oraya uçtuğu, this’lerin hangi self’ler ile eşlendiğinin belli olmadığı kod blokları yerine referansın kaynağının belli olduğu, modüllerin hangi işi hangi servisi kullanarak gerçekleştirdiğinin bir tanımının yapıldığı projeler yaratmanız mümkün.

### Derli toplu kod tabanı
Bütün bunlarla bağlantılı olarak, kaynak kodunuzun takibi ve refactor işinin rahatlıkla yapılabildiğini söyleyebiliriz. Böylece içinden çıkılmaz bug’lar bir anda kolaylıkla çözüme kavuşturulmayı bekleyen küçük issue’lar olarak kısa ömürlerinde size sadece 5 ila 10 dakikanıza malolacak şirin ayrıntılar olarak hayatlarını sonlandıracaklardır.

### Sonuç-odaklı hedefler belirletmesi
Başarı hedefi olmayan amaçlara amaç diyemeyeceksek, tam tersini tasarım kalıpları ile geliştirdiğimiz yaklaşımlar için söylememiz mümkün. Ne yapmak istediğimizin tanımını doğru yaparsak bu bize hangi sorunu hangi tasarım kalıbı ile çözebilecek olduğumuzu da tanımlıyor olacak.

### Kod esnekliği sağlaması
Tasarım kalıplarının aslında herhangi bir dil için geliştirilmiş kesin ve net sınırları olan çözümleri sözkonusu değil. Bunlar, tamamen geliştiricinin hayal gücüne bağlı olarak türetilebilecek bir süreçler bütünü. Örneğin, mixin pattern’ını prototype pattern’ı ile birleştirip kullanabilir, isterseniz bir method wrapper içerisinde sadece ilgili yerde kullanılacak biçimde aksiyonlara ayırabilirsiniz.

### Dökümantasyonu kolay kod
Tasarım kalıpları, Türkiye’de özellikle Front-End geliştiricileri arasında oluşmamış bir kültür olan “__döküman üretme__” gibi çok da yapılmayan birşey olarak dökümantasyonun kolay kod üretmenizi de sağlıyor olacak. Özellikle bir style guide’ı referans edinip her yazdığınız metodun ne yaptığını rahatlıkla tanımlayabileceğiniz bir kod kaynağına sahip olmanız içten bile değil.

### Kolay-öğrenilebilirlik
Gereksiz çözüm tercihleri yerine, tanımı ve gidişi belli metodlar geliştirmenin zevki merakınızı da cezbedince ortaya kolay öğrenip öğretebildiğiniz bir geliştirme geçmişi yaratabilirsiniz. Bu tarih aynı zamanda sizden sonra gelecek olan geliştirici için de rehber olacaktır. 

## Tasarım Kalıplarında Kategoriler
Tasarım kalıpları da kendi içerisinde belli kategorilere ayrılıyorlar. Bunu belirleyen ise veri yapısı yönetiminde tercih edilen biçimin kendisi tarafından belirleniyor.

### Creational (Yaratımsal)
Genellikle çözüme belli bir nesne yaratım mekanizması üzerinden yaklaşan bir tasarım kalıbı kategorisi. Singleton, prototype, vb. tasarım kalıpları bu kategoride bulunuyor.

### Behavioral (Davranışsal)
Bu yaklaşımın temel aldığı referans, nesneler arasındaki iletişim. Mediator gibi merkezi, ve Subscribe gibi daha dağıtık-merkezli tasarım kalıpları da bu kategoriye giriyor.

### Structural (Yapısal)
Bu tasarım kalıbı kategorisi, kendisini varolan instance / entity’lerin ilişkileniş tarzı ile gerçekliyor. Facade gibi tasarım kalıpları da bu kategoriye giriyor.

Genel olarak tasarım kalıplarının tipleri üzerine bir ön fikir edindikten sonra kullanışlı birkaç tasarım kalıbına gözatabiliriz. 

## Kullanışlı Tasarım Kalıpları

### Singleton {#singleton}

![singleton][]

Sadece tek bir instance’ın bütün bir proje döngüsü içerisinde varolacağı varsayılan bir tasarım kalıbını tanımlıyor. Buna göre; bir singleton tipinde bir nesne referansımızı nasıl yöneteceğimizi de tanımlamış oluyoruz : Context sathında sadece tek bir referans ile istenilen işlemleri bu instance’ın içerdiği metod / fonksiyonlar ile gerçekleştirebilir, referans sabitlere ya da değişkenlere ulaşabilir ve güncelleyebiliriz.

``` {.language-javascript}
// models/Config.js
module.exports = (function () {
   return function () {
      var config = {
         urls : {
            tabs : {
               address : '/#address',
               payment : '/#payment'
            } 
         },
         messages : {
            errors : {
               no_address_selected : 'Please, select an address to go next',
               no_cards_used : 'You need to choose a credit card to pay',
               default : 'An error occured. Please try again later'
            }
         }
      }
   
      var getConfig = function () {
         return config;
      }

      return {
         getConfig : getConfig
      }
   }
})(); 
```

``` {.language-javascript}
// base.js
var Config = require(‘models/Config’);
var configInstance = new Config();
var config = configInstance.getConfig();
configInstance = null;

$(‘.error).html(config.messages.errors.default);
```
<span class="credits">Kaynak: [Singleton Gist]</span>

Örnekte bir adet IIFE içerisinde tanımladığımız bir nesnemsi bulunuyor. Bunu context’e dahil ettiğimiz base.js dosyası içerisinde bir instance üzerinden bir başka instance’a set edip aracı olan configInstance referansını yokediyoruz. Artık elimizde bütün proje genelinde kullanabileceğimiz genel metod ve sabit / değişkenleri tanımladığımız bir config referansımız bulunuyor. Kaynak nesnemizi istediğimiz gibi tasarlayabiliriz; başta da dediğimiz gibi, bu tamamen yazılım geliştiricinin hayal gücüne kalmış bir konu.

Daha ileri ölçüde bir pratik edinmek isteyen geliştirici arkadaşlar için, kolay implemente edilebilir bir örneğe şuradan ulaşabilirler : [https://github.com/hwclass/jquery.initialize](https://github.com/hwclass/jquery.initialize). Bu jQuery plugin’i istediğiniz bir HTML elementini referans alarak kendi context’i içerisinde element ve event yönetimini sağlayabildiği yapılar yaratmanıza olanak sağlıyor. Böylece her element instance’ınız aslında bir singleton’a denk geliyor.

### Module / Revealing Module Tasarım Kalıbı {#revealing-module}
![module][]
Global scope içerisinde yer almasını istemediğiniz ve kendinden mesul kod blokları yaratmanızı sağlayan bir tasarım kalıbı olan modül tasarım kalıbı ile birbirinden bağımsız fonksiyonellikler tanımlayıp kolaylıkla yönetebilirsiniz. Revealing versiyonu ise sadece küçük bir ayrıntı olarak, modülün kendi context’i içerisinde yapıyor olduğu tanımlamaları global context’e aktarım noktasında küçük bir fark yaratıyor : return ile geri döndürdüğümüz metodları private scope’un kendisinden alıyor. Şimdi modül kalıbına bir örnek üzerinden gözatabiliriz.

``` {.language-javascript}
/**
 * global.js
 * Global tanımlamalarımızı yaptığımızı düşündüğümüz bir javascript 
 * dosyası olduğunu varsayarak modüllerimizi tanımlayacağımız bir dizi 
 * olarak bu dosyada MODULES adlı dizi tanımlıyoruz.
 */

var MODULES = MODULES || [];
```

``` {.language-javascript}
/** 
 * models/Module.js
 * Modüllerimizin referans yaratımını gerçekleştireceğimiz 
 * nesneyi ayrı bir dosyada tutuyoruz.
 */

var Module = function (name, context) {
   this.name = name;
   this.context = context;
}
```

``` {.language-javascript}
/**
 * register.js
 * register metodumuz, modül adı ve context adı altında iki property’si olan 
 * Module nesnesinden aldığı her modül referansını MODULES dizimize 
 * set etme işlemini gerçekleştirecek.
 */
 
var register = (function () {
    return {
        module : function (module) {
            MODULES.push(new Module(module.name, module.context));
        }  
    }
})();
```

``` {.language-javascript}
/**
 * init.js
 * init metodumuz ile aslında yarattığımız ancak çalıştırmadığımız 
 * diğer bir deyişle init etmediğimiz modülleri gerçeklemeye yarayacak. 
 * İsmini verdiğimiz her modül başlatılabilecek ve içerisindeki 
 * context bloğu çalıştırılacak.
 */

var init = (function () {
    return {
        module : function (moduleName) {
            for (var counter = 0, len = MODULES.length; counter < len; counter++) {
                if (MODULES[counter]['name'] === moduleName) {
                MODULES[counter]['context']();
            }
        }
    }
}
})();
```

``` {.language-javascript}
/**
 * app.js
 * “testModule” adlı modülümü context’i ile birlikte set ediyoruz.
 */

register.module(new Module('testModule', function () {
   console.log('testModule initialized.');
}));

// Ve bu modülü ismini vererek çalıştırıyoruz
init.module(‘testModule’);
```
<span class="credits">Kaynak: [Module / Revealing Module Gist]</span>

Referans bir github reposu için şu linke gözatabilirsiniz : [https://github.com/hwclass/modulr]. Bu örnekte, modüller ayrı dosyalar halinde ayrılmış biçimde HTML dosyanızın HEAD tag’leri arasına ekleniyor ve istenildiği yerde çalıştırılabilen modüller olarak projenize dahil oluyorlar.

### Mediator Tasarım Kalıbı {#mediator}
![mediator][]
Şöyle düşünelim; bir havaalanındasınız ve uçakların hangi saat aralığında piste inip diğer uçuş için yolcularını alarak havalanacağının yönetilmesi gerekiyor. Bunu gerçek bir yazılım projesi olarak ele alarak uçuş kulesini konumlandıracağınız tasarım kalıbı Mediator tasarım kalıbı olabilir. Bütün modüllerinizin kendisini ataçladığı ve çalışmayı (ya da havaalanı örneğinden hareketle) havalanmayı beklediği bir yapıda bütün yönetimi merkezi anlamda bu kalıp ile gerçekleştirebilirsiniz. Yukarıdaki module / module revealing örneğimizi biraz farklılaştırarak bu kalıbı simüle edebiliriz.

``` {.language-javascript}
/**
 * Mediator.js
 * Mediator kalıbını gerçekleyecek temel metodlarımızı 
 * burada wrap ediyoruz ve dışarıya belli metodlar ile açıyoruz.
 */

var Mediator = (function () {

   var MODULES = MODULES || [];

   var Module = function (name, context) {
      this.name = name;
      this.context = context;
   };

   var attachModule = function (module) {
      MODULES.push(new Module(module.name, module.context));    
   };

   var startModule = function (moduleName) {
      for (var counter = 0, len = MODULES.length; counter < len; counter++) {         
         if (MODULES[counter]['name'] === moduleName) {
            MODULES[counter]['context']();
         }
      }
   };

   var stopModule = function (moduleName) {
      for (var counter = 0, len = MODULES.length; counter < len; counter++) {         
         if (MODULES[counter]['name'] === moduleName) {
            MODULES[counter] = null;
         }
      }
   };

   return {
      module : {
         attach : attachModule,
         start : startModule,
         stop : stopModule
      }
   }

})();
```

``` {.language-javascript}
/**
 * testView.html
 * “testModule” isimli modülün geçerli olduğu HTML dosyası.
 */

Mediator.module.attach({name : 'testModule', context : function () {
   console.log('testModule initialized');
}});
```

``` {.language-javascript}
/**
 * boot.js
 * Metodların init edilmesi ya da durdurulmasından sorumlu js dosyası.
 */

Mediator.module.start('testModule');

Mediator.module.stop('testModule');
```

Buna göre Mediator.module.attach metodu, bir modül adı ve onun context’ini belirliyorken, start ve stop metodları ilgili modüllerin istenilen view içerisinde çalışıp durdurulmasını sağlıyor. Merkezi olarak kontrolün neredeyse tamamen geliştiricinin elinde olduğu bu tasarım kalıbı oldukça yaygın kullanılıyor. Örnek bir repo için şuna gözatabilirsiniz : [Bağcılar.js]

### Publish/Subscribe Tasarım Kalıbı {#publish-subscribe}
Mediator kalıbına ademi-merkeziyetçi alternatifi olarak kullanılan bu pattern’da hava gidip gelen event topic’leri bulunuyor. Bunlara bağlanan her blok ilgili datayı alıyor; bağlanmayanlar için aynı şey sözkonusu olmadığı gibi, aslında Mediator yaklaşımına göre daha tight-coupled bir tercih ancak özellikle event-based bir uygulama üzerinde çalışıyor ve fonksiyonel bir geliştirme perspektifini tercih edecekseniz kullanması faydalı olacaktır. Bunun için de gazete aboneliğini örnek verebiliriz. Abone olan üyelere her sabah gelen gazeteyi publish edilen data olarak düşünürsek herhalde üyeleri de subscribe olan context’ler olarak düşünmemiz önünde bir engel bulunmuyor.

``` {.language-javascript}
/** 
 *app.js
 * Event başlıklarının muhafaza edildiği TOPICS dizisini barındıran dosya.
 */

var TOPICS = TOPICS || {};

var subscribe = function (topic, listener) {
   if(!TOPICS[topic]) TOPICS[topic] = { queue: [] };
      var index = TOPICS[topic].queue.push(listener);
      return (function(index) {
         return {
            remove: function() {
               delete TOPICS[index];
            }
         }
      })(index);
}

var publish = function (topic, info) {
   if(!TOPICS[topic] || !TOPICS[topic].queue.length) return;
      var items = TOPICS[topic].queue;
      for(var x = 0; x < items.length; x++) {
        items[x](info || {});
      }
}
```

``` {.language-javascript}
/**
 * ajax.js
 * Ürünlerin bir API uç noktasından bir AJAX sorgusu ile alındığını 
 * varsaydığımız ve ardından “productsFetchedEvent” olay ismi ile 
 * publish edildiği dosya.
 */
publish('productsFetchedEvent', {desc : 'This is the test data for products!'});
```

```{.language-javascript}
/**
 * productList.js
 * Ürünlerin listelendiği view’da ise dinlediğimiz “productsFetchedEvent” 
 * olayı bize ilgili veriyi ulaştırmış oluyor.
 */

subscribe('productsFetchedEvent', function (data) {
   console.log('Published data : ' + data.desc);
});
```
<span class="credits">Kaynak: [Publish/Subscribe Gist]</span>

### Mixin Tasarım Kalıbı {#mixin}
![mixin][]
Bir nesne üzerinde sonradan kullanılması olası işlerlikleri nasıl kazandırırız diye düşünürsek aklımıza bu tasarım kalıbı geliyor. Javascript’in bir güzelliği olarak düşünebileceğimiz havada nesne yaratıp istediğimiz gibi kullanma niteliği bizim bunu gerçeklememize de izin veriyor. Buna göre şöyle bir örnek ne tür bir kullanımı olduğuna dair bize fikir verecektir. 


``` {.language-javascript}
/**
 * models/Person.js
 * Person modelimizi barındıran model dosyası.
 */

var Person = function (name, age) {
   this.name = name;
   this.age = age;
}
```

``` {.language-javascript}
/**
 * utils.js
 * Belli başlı utility metodlarını tutuyor diye düşündüğümüz dosya. 
 * Burada varolan extend metodu ilgili kaynak nesneye 
 * onu genişletmesi için gönderilen bir source’u bağlıyor.
 */

function extend(destination, source) {
  for (var k in source) {
    if (source.hasOwnProperty(k)) {
      destination[k] = source[k];
    }
  }
  return destination; 
}
```

``` {.language-javascript}
/**
 * mixin.js
 * Bütün mixin’lerin toplandığı dosya.
 */

var mixin = {
   person : {
      getName : function () {
         return this.name
      },
      getAge : function () {
         return this.age;
      }
   }
}
```

``` {.language-javascript}
/**
 * init.js
 * Belli başlı nesne genişletmelerinin yapıldığını varsaydığımız dosya.
 */

extend(Person.prototype, mixin.person);
```

``` {.language-javascript}
/**
 * base.js
 * Nesne referansımızı yaratıp, önceden genişlettiğimiz metodlar 
 * ile ilgili name ve age property’lerine ulaşabiliyoruz.
 */

var person = new Person('Tacchinardi', 33);

person.getName(); // logs Tacchinardi 

person.getAge(); // logs 33 
```
<span class="credits">Kaynak: [Mixin Gist]</span>

Bütün bu örnekleri daha pratik olması açısından ve farklı tasarım kalıpları üzerinden tekrar ele alabiliriz. Örneğin, herkesin yavaş yavaş hayatına giren ve aşina olduğu modül pattern’ları bulunuyor. Bunları inceleyebiliriz:

### MV* Tasarım Kalıbı {.mvw}
![mvc][]
Günümüzün popüler tanımı olarak MV*, aslında uzun senelerdir yazılım geliştiricilerinin yardımına koşmuş ve geliştirme süreçlerinde tercih edilen bir tasarım kalıbı olmuştur. Javascript kütüphane ve çatılarının da çoğalması ve çeşitlenmesiyle bu kavram istemci-taraflı Javascript geliştiricilerinin de gündemine girdi ve özellikle Angular, Backbone ve Knockout gibi araçlarla giderek ismini etrafa yaydı.

``` {.language-javascript}
/**
 * testViewModel.js
 * Knockout için view model objemizi bind edeceğimiz dosya.
 */
var viewModel = {
   testText : ko.observable()
};

ko.applyBindings(viewModel);
```

``` {.language-markup}
/** 
 * testView.html
 * Verinin bind edildiği view elementinin bulunduğu dosya. 
 */
<span data-bind="text : testText"></span>
```
<span class="credits">Kaynak: [MV* Gist]</span>

Proje içerisine yerleşimi itibariyle Model - View - Whatever olarak isimlendirebileceğimiz bu tasarım kalıbının birkaç alt biçimi var. Bunlardan birisi MVC. Controller olan katman data ve view katmanlarını bağlayan ara bir katman olarak varoluyor. Aynı şekilde Controller’ı bir Presenter olarak replace edilmesi sözkonusu olan MVP ve Knockout kütüphanesi ile üne kavuşan MVVM tasarım kalıpları da bulunuyor. Kullanım kolaylığı ve giriş seviesindeki öğrenme eğrisinin düşük oluşu nedeniyle tercih edilen bu tasarım kalıbı ile özellikle istemci-taraflı çatılar sayesinde geliştiriciler yeni bir yaklaşım ile buluşmuş oldular. 

[js]: ../content/2015/javascript-logo.png
[singleton]: ../content/2015/singleton-scheme.png
[mediator]: ../content/2015/mediator-scheme.png
[module]: ../content/2015/module-scheme.png
[mixin]: ../content/2015/mixin-scheme.png
[mvc]: ../content/2015/mvc-scheme.png

[Singleton Gist]: https://gist.github.com/hwclass/3cab5a6b4cc906d6969a {.external}
[Module / Revealing Module Gist]: https://gist.github.com/hwclass/335610035971df6ba1c8 {.external}
[Bağcılar.js]: https://github.com/hwclass/bagcilar {.external}
[Publish/Subscribe Gist]: https://gist.github.com/hwclass/72406ac02564473ac599 {.external}
[Mixin Gist]: https://gist.github.com/hwclass/e60bb31d069213db5b81 {.external}
[MV* Gist]: https://gist.github.com/hwclass/ca8014001c855d4d24b2 {.external}