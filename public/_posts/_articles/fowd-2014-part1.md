---
comments: true
slug: fowd-2014-part1
title: Future of Web Design 2014 - Part 1
date: 2014-04-14 11:59:10
author: Bilal Cinarli
profile: https://facebook.com/bcinarli
description: Future of Web Design konferansı ilk gününden izlenimler. CSS Architure for Big Front-ends workshopu notları ve CSS kurgusu üzerine yeni fikirler
lang: tr_TR
related: Future of Web Design 2014 - Part 2 | fowd-2014-part2 || Future of Web Design 2014 - Part 3 | fowd-2014-part3
---
Geçtiğimiz hafta [Future of Web Design](http://futureofwebdesign.com/london-2014/) konferansı için Londra'daydım. Önceden haberleşmemiş olmamıza rağmen, [Hasan Yalçın](http://twitter.com/hasanyalcin)'ın da katılmasıyla, güzel ve verimli bir üç gün geçirdik. İlk gün workshoplar için ayrılmıştı. 4 farklı workshoptan oluşan listede, benim katıldığım [@csswizardry](https://twitter.com/csswizardry)'den Harry Roberts'ın verdiği CSS ARCHITECTURE FOR BIG FRONT-ENDS isimli workshoptu. İlk gün olmasa da, konferansın ikinci ve üçüncü gününde Hasan Yalçın ile beraber bol bol tweet atıp, konuşmalardan gözümüze çarpan kısımları ve yorumlarımızı [paylaştık](https://twitter.com/search?q=%40bcinarli%20%23fowd). Diğer katılımcıların yorumlarına da [#fowd](https://twitter.com/search?q=%23fowd) ve [#fowd2014](https://twitter.com/search?q=%23fowd2014) hashtaglerin göz atabilirsiniz.

Katıldığım workshopun içeriğinden bahsedecek olursak, Harry daha çok büyük boyutlu siteler/sistemler üzerinde çalışırken CSS içerisinde nelere dikkat edilmeli, kodlamayı nasıl yapmalı, hangi sistemlerden faydalanmalı gibi konulara değindi.

<figure markdown="1">

![Katılımcılar][big-frontends]
<span class="credits">Fotoğraf: @simonbusborg</span>
</figure>
Yaklaşık 80 kadar katılımcının olduğu workshop genel olarak keyifli ve özellikle framework yapılarına ve büyük sistemlerde yeni çalışmaya başlayacaklar için faydalı bilgiler içeriyordu.

## N kişi N farklı Kod
Workshopun başında yaptığımız örnek bir menü kodlamasıyla gördük ki, aynı menüyü workshopa katılan hemen herkes farklı şekilde hazırlamış. Kimisi OOCSS metodolojisi ile isimlendirmeleri yapmış, kimisi sadece ihtiyaç kadar, bir başbaşkası farklı yerlerdeki interitance olabilir diye düşünüp ona göre isimlendirmiş. Şunu da gördük ki, CSS ve HTML ile tek bir doğru yok. Hemen hemen yapılan bütün örnekler tanıma uygun ve doğruydu.

Harry daha önce benzerini yaptığı bu workshop bir firmaya özel versiyonunda, yıllardır beraber kod yazan insanların bile bu basit menü için farklı kodlar yazdığını da not olarak düştü. Hergün beraber yemek yediğin, beraber oturduğun, beraber güldüğün, çalıştığın bir yazılımcı ile bile farklı şekilde kod yazabiliyor olmak ilginç ama insan doğasına da uygun bir sonuç olarak geldi bana.

## Single Responsibility Principle ve Specifity
Belki de workshop sırasında en çok bahsi geçen ve üzerinde durulması gereken konu, CSS seçicilerinin kullanılması ve bunlara yapılacak tanımların niteliği üzerineydi. Özellikle CSS'in yetersiz bir dil olduğuna değinen Harry, seçicilerin her zaman __"low specifity"__ (düşük spesifiklik) ile tanımlanması böylece overwrite ve daha spesifik olan (nokta atışıcı şeklinde) ID ve ID+Tag seçicilerini kullanmak zorunda kalmayacağımızı belirtti. Framework hazırlanırken ya da çok sayfalı sistemlerde çalışırken, elemanlara özel CSS seçicisi yazmak hem kodun tekrar kullanılabilirliğini azaltacak, hem de bakımı zorlaştıracaktır.

Seçiciler içindeki nitelik tanımlarına bakacak olursak; her seçicinin ya da sayfa içerisine yerleştireceğimiz her objenin nitelik tanımları tek bir işe odaklanacak şekilde olmalı. Bir obje için birden fazla kullanıma göre düzenleme yapılmamalıdır. Örneği, `large-button` şeklinde tanımladığınız bir buton tanımı, sadece butonu daha büyük göstermek için kullanılmalı. Hem __büyük__ hem de __mavi__ renkli şeklinle tanımlanmış __olmamalı__.

## CSS Önişlemciler ve tabiki SASS
Arayüz geliştirme ve CSS'den bahsedilen bir ortamda CSS önişlemcilerden ve SASS'tan bahsedilmemesi olmazdı. Artık günlük arayüz geliştirme hayatımıza o kadar çok girdiler ki, bazen [SASS](http://sass-lang.com/) ya da [LESS](http://lesscss.org/) yokken nasıl CSS kodu yazıyorduk diye düşünmeden edemiyorum. Büyük, küçük demeden hemen hemen bütün sitelerde kullanılabiliyorlar ve fonksiyonlar, mixinler, değişkenler gibi uzun zamandır acaba CSS'e eklenir mi diye düşündüğümüz imkanları sağlıyorlar. Siz hala __SASS__, __LESS__ ya da __[Stylus](http://learnboost.github.io/stylus/)__ gibi bir önişlemci kullanmıyorsanız, daha fazla vakit kaybetmeyin ve beğendiğiniz bir tanesini hemen kullanmaya başlayın.

## Tanım Hiyerarşisi
Inuitcss ve örnek olarak hazırlanmış olan bir başlangıç klasör yapısı ile CSS mimarisinin kurgusu üzerinde konuştuğumuz kısımlarda, Harry bir ters piramit çizdi. __"low specifity"__ prensibine göre baktığımızda, piramitte aşağıya doğru indikçe, ögelere özel daha spesifik tanımlar yapılıp, yukarı doğru çıktıkça daha genel ve sistemsel tanımlar olacaktır.

![Specifity Order][order-triangle] 

Piramitin kırmızı çizgiye kadar olan kısmı, bir önişlemci kullanıyorsanız stil dosyanıza ilk ekleyeceğiniz ayarlar ve gerekli fonksiyonların olduğu araçlar dosyalarını içeriyor. Eğer standart CSS yazıyorsanız, dosya ve kod sıralamanızı kırmızı çizgiden itibaren yapabilirsiniz.

Sıralamadaki elemanlarda ise, __Generic__ kısmı için, herhangibir ögeye özelleşmemiş, genel kullanım için olan sistemsel tanımları ekleyebiliriz. Bunlar _normalize_, _reset_, _clearfix_ gibi tasarımdan ve layouttan bağımsız sistem ayarlarını içersen kodlar olabilir.

__Base__ için, ortak kullanım için ihtiyaç duyulan, elemanların temel tanımlarını düşünebilirsiniz. Örnek vermek gerekirse _linklerin_ normal ve fare geldiğindeki durumları, _ul_, _ol_ listelerinin görünümleri ya da _blockquote_, _form elemanları_ gibi tanımlar olabilir.

Temel tanımlardan sonra __Objects__ şekline yapacağımız tanımlar ise, tekrar tekrar kullanabileceğimiz benzer objelere/kutulara vs. olacaktır. _media_ şeklinde belirlenmiş herhangibir medya (resim, video vs.) içerin bir kutunun içindeki ögelerin standart halde tanımlanması, sayfaların farklı kısımlarında kullanılırken özelleşme imkanı sağlayacak ortak kodları içerecektir.

Daha özelleşmiş tanımların olabileceği __Components__ bölümünde, _Objects_ alanında tanımladığımız _media_ objesinin _album_ formatında görünümü diyebilirsiniz.

Son basamak olan __Trumps__ kısmında ise çok özel ve belirli bir kullanım için olacak ögelerin tanımlarını eklenebilir. _hata mesajı_ görünümü, _is_hide_ gibi bir ögeye uygulandığında anlam ifade edecek kodları barındıracaktır.


## Ne Kazandırdı?
Bazı bilgilerimi tazelememi, bazı yeni şeyler öğrenmemi sağlayan güzel bir workshoptu. Gelen bütün katılımcılardan edindiğim fikir, hemen herkes artık büyük sistemler/siteler ya da karmaşık backend frameworkleri ile uğraşıyor. İşleri kolaylaştırmak, hataları azaltmak için de, _sayfalara_ özel CSS yazmak yerine __sistemlere__ ve __ögelere__ özel CSS yazmak, kodların tekrar kullanılabilirliğini arttırıyor. Ayrıca kod bakımı da oldukça kolaylaşmış oluyor.

Özetle:

* CSS alt yapınızı belirli bir sistematiğe göre ve arayüzden bağımsız olacak şeklinde standartlaştırın
* Kod tekrarlarından kaçının
    - SASS/LESS/Stylus gibi bir önişlemci ile tekrarları yerine mixin/extend özelliklerini kullanın
    - Single Responsibility Prensibi ile de overwriteları azaltın


[big-frontends]: /images/2014/big-frontends-01.jpg
[order-triangle]: /images/2014/big-frontends-02.png
