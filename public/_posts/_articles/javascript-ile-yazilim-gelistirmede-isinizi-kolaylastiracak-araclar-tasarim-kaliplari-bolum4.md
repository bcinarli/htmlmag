---
comments: true
slug: javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum4
title: Tasarım Kalıplarını Uygulamak için Öneriler - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 4)
date: 2015-07-13 13:44:30
author: Barış Güler
profile: https://www.facebook.com/profile.php?id=100005773905216
lang: tr_TR
tags: javascript, design patterns
related:Tasarım Kalıpları - Sorunlar ve İlkeler - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 2) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum1 || Tasarım Kalıpları Nedir? - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 2) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum2 || Tasarım Kalıplarının Kullanımı - Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar (Bölüm 3) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum3
  og_image: /images/2015/javascript-logo.png
---
![js][]

<blockquote markdown=1>
Bu yazı, Tasarım Kalıpları dizinin 4. yazısıdır. Dizinin diğer yazılarına aşağıdaki içindekiler kısmından ulaşabilirsiniz.

### İçindekiler

1. [Bölüm 1: Tasarım Kalıpları - Sorunlar ve İlkeler](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum1)
2. [Bölüm 2: Tasarım Kalıpları Nedir?](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum2)
3. [Bölüm 3: Tasarım Kalıplarının Kullanımı](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum3)
4. Bölüm 4: Tasarım Kalıplarını Uygulamak için Öneriler
</blockquote>

## Tasarım Kalıplarını Uygulamak için Öneriler

Teoride hepsi bir yere oturuyor. Özellike karşılaştığımız sorunun tespitinden sonraki aşamada, yani entegrasyon aşamasında oldukça eğlenceli saatler geçireceğinizi düşünüyorum. Ancak bunların hemen öyle olduğu gibi implemente etmemizin belli başlı sakıncaları bulunuyor. Özellikle zaten varolan bir kaynak kodu üzerinde böyle bir işe girişecekseniz iyi düşünüp geliştirmenizi önce projelendirmelisiniz diyebilirim. Bunun için izlenmesini tercih ettiğim aklımdaki belli başlı maddeleri şöyle sıralayabilirim:

a) Bir veri yönetim yapısı üzerinde mutabık olun. Nasıl bir yöntem izleyeceğinize karar verin ki o standardı birlikte çalıştığınız diğer geliştirici arkadaşlarınız da belirlesin ve böylece dökümante edilmesi kolay kodlarınızı üretmeye başlarsınız. Örneğin tamamen OOP bir yapı üzerinden ilerlemek isterseniz şöyle bir best practice’inizin olmasında fayda var:

```javascript
/**
 * models/Person.js
 * Person nesnesini tanımladığımız dosya.
 */

"use strict";

/**
 * Person is the model for people
 * @param {String} name
 * @param {String} age
 */
var Person = function (name, age) {
   this.name = name;
   this.age = age;
}
```

b) Standart olarak OOP prensiplerini benimseyin.

```javascript
/**
 * models/Employee.js
 * Person nesnesinden kalıtım alan Employee nesnesinin dosyası.
 */

"use strict";

/**
 * Employee is the model for employees
 * @param {String} department
 * @param {Integer} price
 */
var Employee = function (name, age, department, price) {
   this.department = department;
   this.price = price;
   Person.apply(this, arguments);
}
```

```javascript
/**
 * models/Developer.js
 * Developer nesnesinin tanımlandığı ve Person ile Employee 
 * nesnelerinden kalıtım alan kodlarımızın bulunduğu dosya.
 */

"use strict";

/**
 * Developer is the model for employees
 * @param {Array} skills
 * @param {Date} contractDate
 */
var Developer = function (name, age, department, price, skills, contractDate) {
   this.skills = skills;
   this.contractDate = contractDate;
   Employee.apply(this, arguments);
}

var developer = new Developer('John Doe', 28, 'IT', 1, ['Python', 'Django'], new Date());
```

c) Proje kapsamında işinize yarayacağını düşündüğünüz, kullanışlı tasarım kalıplarınızı da sample kodlar halinde türetin ve ekibinizle paylaşın. Onlarla birlikte tartışın ve neticeye en son kodlama yaparken ulaşıyor olacaksınız. Mesela şöyle bir Java’msı model ile karşılaşınca çalışma arkadaşlarınız heyecanlanıyorsa onlara __sarılın__, __bırakmayın__, __sevgi verin__:

```javascript
//Java-ish Objects - 1

"use strict";

/**
 * Developer is the model for employees
 * @param {string} name
 * @param {number} age,
 * @param {string} department
 * @param {number} price
 * @param {Array} skills
 * @param {Date} contractDate
 */
var Developer = (function () {
   return function (name, age, department, price, skills, contractDate) {

      var proto = new Object();

      proto.name = name;
      proto.age = age;
      proto.department = department;
      proto.price = price;
      proto.skills = skills;
      proto.contractDate = contractDate;

      return {

         getName : function () {
             return proto.name;
         },

         getAge : function () {
             return proto.age;
         },

         getDepartment : function () {
             return proto.department;
         },

         getPrice : function () {
             return proto.price;
         },

         getSkills : function () {
             return proto.skills;
         },

         getContractDate : function () {
             return proto.contractDate;
         },

         setName : function (name) {
             proto.name = name;
         },

         setAge : function (age) {
             proto.age = age;
         },

         setDepartment : function (department) {
             proto.department = department;
         },

         setPrice : function (price) {
             proto.price = price;
         },

         setSkills : function (skills) {
             proto.skills = skills;
         },

         setContractDate : function (contractDate) {
             proto.contractDate = contractDate;
         }
      }
   }
})();
```

Ya da şöyle bir nesne ile karşılaşsanız siz de sevinmez miydiniz?

```javascript
"use strict";

var Tab = function (title, subTitle, activated, html, events) {
   return (function () {
      var proto = new Object({
         self : this,
         title : title,
         subTitle : subTitle,
         activated : activated,
         html : html,
         events : events
      });
      
      this.title = title;
      this.subTitle = subTitle;
      this.activated = activated;
      this.html = html;
      this.events = events;
      
      var getSelf = function () {
         return proto.self;
      }

      var getTitle = function () {
         return proto.title;
      }

      var getSubTitle = function () {
         return proto.subTitle;
      }

      var getActivated = function () {
         return proto.activated;
      }

      var getHtml = function () {
         return proto.html;
      }

      var getEvents = function () {
         return proto.events;
      }

      return {
         getSelf : getSelf,
         getTitle : getTitle,
         getSubtitle : getSubTitle,
         getActivated : getActivated,
         getHtml : getHtml,
         getEvents : getEvents,
      }
   })();
}

var tab = new Tab('sadas', 'sadasd', true, '<div>test</div>', {onClick : function () { console.log('sadasd'); }});
```

d) Eğer istemci-tarafında Javascript geliştiricekseniz view katmanı ile model yani data katmanını nasıl bağlayacağınıza dikkatlice karar verin. Bu aşamada doğru yapılmayan tasarımlar ileride çok baş ağrıtabilir. Özellikle sizin geliştirdiğiniz kod bloklarında Lazy-Initialization gibi kalıpları kullanmak çok işinize yarayacaktır. Browser’ın render olma zamanını bilemediğinizden bunu ayrıca bir publish / subscribe kalıbı üzerinden de genişleterek bir mixin ile bağlayıp gerçekleyebilirsiniz.

e) Tarayıcının engine'ine hakim olun; onu sevin, o da sizi sevsin ;)

f) Bütün bir geliştirmeyi sadece sizin tasarladığınız yapı üzerinden ilerleteceğinize yoksa bir kütüphane ya da çatıdan destek alıp almayacağınıza karar verin. Günümüzde popüler olan çatı ve kütüphanler hariç oldukça decoupled araçlar bulunuyor. Benim tavsiye edeceklerim, Core.js, T3.js ve Knockout olacak. Hatta Core.js ile yapılmış küçük bir örneğe şuradan ulaşabilirsiniz: [Currency Converter](https://github.com/hwclass/client-side-currency-converter)

g) Bütün bir geliştirme ortamınıza karar verin; IDE’nizden en küçük zoom plugin’inize kadar mümkünse siz karar verin ve elinizde kullanacağınız faydalı kod blokları yok ise bunu siz geliştirin.

h) Anti-pattern’lardan kaçının. Çok zorda kalmadıkça o sokağa girmeyin; alışkanlık yapar.

i) Ekibiniz ile bilgi paylaşımını üst safhada tutmaya çalışın ve bunu kışkırtın. Bazen aralarında üzülenler ve size kızanlari belki darılıp küsenler de olacaktır ancak tahminimce birkaç sene içerisinde (olumlu ya da olumsuz) bunu yaşamış olmaları nedeniyle seviniyor olacaklar. Siz (belki) orada olmasanız da en azından iyi anılırsınız diye tahmin ediyorum. Bunun için kendi aranızda workshop’lar, küçük anlatım seansları düzenleyebilirsiniz.

j) Birlikte çalıştığınız arkadaşlarınızla dışarıda da zaman geçirin. Böyle bir imkanınız yoksa en azından belli dönemlerde dışarıda birer kadeh elma-vodka için; iyi gelir ;) 

k) Her şeye rağmen kod yazılır, önemli olan yapıdır.

Bütün bunlara değindiğim ve 20 Haziran’da Bahçeşehir Üniversitesi’nde gerçekleştirilen HTMLMag, the Frontiers:Mini etkinliğinde yaptığım sunumuma buradan ulaşabilirsiniz : [A Developers View Patterns to Make Life Easier](http://slides.com/hwclass/a-developers-view-patterns-to-make-life-easier)
 
Bu ya da başka konular ile ilgili bana aşağıdaki iletişim kanallarından da ulaşabilirsiniz :

* Twitter : [@hwclass](https://twitter.com/hwclass)
* GitHub : [hwclass](https://github.com/hwclass)
* LinkedIn : [Barış Güler](https://tr.linkedin.com/pub/barış-güler/69/18a/3b9)

Bu yazıyı yazmamda beni teşvik eden HTMLMag ekibine ve üretirken bana yardımcı olan [Spotify listeme](https://open.spotify.com/user/hwclass/playlist/3HEeoeMf9lXkSFdONCbUAi) de teşekkürü borç bilirim. 

## Yazı Dizisi Boyunca Faydalanılan Kaynaklar
- [Addy Osmani](http://addyosmani.com/)
- [NCZOnline](http://nczonline.net/)
- [Javascript Design Patterns](https://carldanley.com/javascript-design-patterns/)
- [Javascript Patterns](https://github.com/shichuan/javascript-patterns)
- [Design Patterns](http://www.dofactory.com/javascript/design-patterns)
- [Design Patterns](https://sourcemaking.com/design_patterns/)
- [Javascript Modules: The ES6 Way](http://24ways.org/2014/javascript-modules-the-es6-way/)
- [How Browsers Work](http://www.html5rocks.com/en/tutorials/internals/howbrowserswork/)
- [Building Decoupled Large Scale Applications Using Javascript and jQuery](https://speakerdeck.com/addyosmani/building-decoupled-large-scale-applications-using-javascript-and-jquery)
- [Essential Javascript Links](https://github.com/ericelliott/essential-javascript-links)
- [Inheritance](http://zipcon.net/~swhite/docs/computers/languages/object_oriented_JS/inheritance.html)
- [Software Development Antipatterns](https://sourcemaking.com/antipatterns/software-development-antipatterns)

[js]: /images/2015/javascript-logo.png
