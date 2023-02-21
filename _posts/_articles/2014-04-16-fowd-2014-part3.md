---
comments: true
slug: fowd-2014-part3
title: Future of Web Design 2014 - Part 3
date: 2014-04-16 23:25:45
author: Bilal Cinarli
profile: https://facebook.com/bcinarli
description: Future of Web Design konferansı 3. gün: Konferansın üçüncü ve son gününde ise ağırlık olarak Rising Stars Track kısmındaki konuşmaları takip ettim. Bu kısımdaki konuşmalar daha çok yeni konular, biraz daha teknik içerikli ya da ismi duyulmamış, yeni tanınmaya başlayan konuşmacılara aitti.
lang: tr_TR
related:
- Future of Web Design 2014 - Part 1 | fowd-2014-part1
- Future of Web Design 2014 - Part 2 | fowd-2014-part2
---
Future of Web Design konferansının ilk iki gününü, [workshop](/article/fowd-2014-part1) ve [açılış konuşmalarını](/article/fowd-2014-part2) paylaştığım yazılarla özetlemiştim. Konferansın üçüncü ve son gününde ise ağırlık olarak Rising Stars Track kısmındaki konuşmaları takip ettim. Bu kısımdaki konuşmalar daha çok yeni konular, biraz daha teknik içerikli ya da ismi duyulmamış, yeni tanınmaya başlayan konuşmacılara aitti.

## Designing Using Data
Sabahın ilk konuşması, aynı zamanda bugün Main Track kapsamında dinlediğim tek konuşma, [Sarah Parmenter](http://twitter.com/sazzy)'ın verilere göre tasarım yapılmasından bahsettiği keynotetu.

> Design is no longer "the killer" differentiator.

Tasarımların artık sistemleri birbirinden __ayıran__ en önemli özellik olmadığını vurgulayan Parmenter, özellikle verinin önemine de sunumu boyunca ciddi yer verdi.

> Verilerden bahsederken sayılara değil anlamlara bakmalıyız. Sayılar anlamlandırabildiğimiz kadar değerlidirler.

<figure markdown="1">
![dud][]
<span class="credits">Fotoğraf: @basboerman</span>
</figure>

Günümüzde veriler araştırmalar sonucunda elde edildiği için, artık tasarımların odak noktalarını oluşturuyorlar. Çünkü __verinizi aktarabildiğiniz kadar__ kullanışlısınız. Bu noktadan çıkarsak da, tasarımcıların sayfayı dekore eden sanatçılardan problemleri çözen uzmanlara dönüşmesi gerekiyor.

Elimizde bir çok veri olabilir (ziyaretçi sayısı, like, sayfa görüntüleme vb.), ama bu veriler insanların bir yere yönlendirilmesini sağlamıyorsa, faydalı olarak geri döndürülemiyorlarsa, işe yaramaz veri birikiminden başka birşey değildir. Yaptığınız sistemlerde kullanıcıyı __yönlendirebildiğiniz kadar güçlüsünüzdür__. Sonuç olarak da, en iyi kullanıcı deneyimi, veriler kullanılarak bussiness[^1] ile tasarımın kesişiminde çalışılıp bu iki noktayı birleştirerek ortaya çıkan deneyim ve yönlendirme gücüdür.

## What Is A CSS Framework Anyway?
İlk gün rahatsız olduğu için video kaydı verilen Harry Roberts'ın konuşması, kendisini iyi hissetmesi ve Rising Stars Track'de boş bir zaman bulunması sayesinde gerçekleştirilebildi. Roberts'ın çalışmalarını ve deneyimlerini, kendime çok yakın bulduğum, benim de çalıştığım yerlerde geliştirdiğim sistemlerin benzerleri ile uğraştığı için, daha bir ilgi ve konuşmasını ve ilk günkü workshopunu büyük keyifle takip ettim.

<figure markdown="1">
![wiacfa][]
</figure>

İlerleyen zamanlarda büyük ihtimalle bir çok yazı yazacağım, CSS Framework nedir, ne olmalıdır, ne işe yaramalıdır gibi konulardan bahsetti. Satırbaşları şeklinde:

* UI Kütüphaneleri ile CSS Frameworkler çoğu zaman karıştırılıyor. <br />
CSS Framework, layout, elemanların düzgün gösterilmesi, alignment gibi konulara eğilmelidir. Tasarımsal konular sorunlar framework ile alakalı değil, tasarımlar ile alakalıdır. Bunu şöyle de düşünebiliriz; CSS Framework bizim sayfa içerisinde elemanları kolay kullanmamıza, tekrar kullanılabilir tanımlamalar yapabilmemize yaramalıdır. __Tasarımsal ya da etkilişime (JavaScript vb.) yönelik ögeler içermemelidir__.

* Özellikle popüler UI kütüphaneleri çok revaçta (bootstrap, foundation). Ama bunlar daha çok rapid prototyping[^2] için kullanılabilir kütüphaneler. Halbuki bu kütüphaneler çok özel tasarımlara ve etkileşime sahip işler içinde kullanılmaya çalışıyor. Böyle olunca da, tasarımı ve etkileşimi gerçekleyebilmek için bolca overwrite yapmak gerekiyor. Sürekli __overwrite yapıyorsanız, en baştan niye__ kullanıyorsunuz ki?

* Hiç bir çözüm global ya da bütün ihtiyaçları karşılatan bir çözüm değildir. CSS içerisinde başka sistemlere uyumluluk ihtiyacı çok olduğu için çoğu zaman aligment gerekiyor.

## We are Digital Architects: Evolving Our Design Language For the Web
Konferanstaki tek Türk konuşmacı olan [Mustafa Kurtuldu](http://twitter.com/Mustafa_x)'nun konuşmasını Hasan abi ile dinledik. Flat tasarımının tarihinin çok eskilere dayandığından esprili şekilde bahseden Mustafa, büyük sanatçıların işlerinden ve ustalıklarından örnekler verdi.

<figure markdown="1">
![wada1][]
</figure>

Özellikle Mimar Sinan'ın çizimlerine ve eserlerini inşa ederken kullandığı tekniklerini, özverisini bizim de, Dijital Mimarlar olarak işlerimize uygulamamız gerektiği ile alakalı kısımlar ve blueprint çizimleri çok güzeldi.

<figure markdown="1">
![wada2][]
</figure>

Mustafa'ya göre, günümüz çalışmalarında, biz UX designerlar, tasarımcılar;

* Problemlerin detaylarını anlayıp, bunlara uygun çözümler bulmaya çalışmalı
* Sonuçları bir bütün şekilde ele alıp, biraz da _agile_ olarak çözümleri geliştirmeli
* Sürekli olarak, her adımda design[^3] test edilip, ihtiyacı karşılayıp karşılamadığını kontrol etmeli.

Mustafa'nın konuşması dışında, iki konuşma daha dinledik. Bu konuşmalardan biri, JavaScript kodlamaya genel bir bakış ve gerçekten jQuery'e ihtiyacımız olup olmadığı (_gerçekten de çoğu zaman jQuery'e ihtiyacımız yok_) üzerinde bir derlemeydi. Diğeri ise, Responsive anlayışı ikonlara uygulayabilir miyizin irdelendiği, [Joe Harrison](https://twitter.com/joe_harrison)'un ilginç konuşmasıydı. Geçtiğimiz haftalarda bununla alakalı bir de [tweet](https://twitter.com/search?q=%40joe_harrison%20responsive%20icons&src=typd) atan Harrison'ın bu konu üzerine aldığı cevaplar çok ilginç ve bir o kadar yaratıcıydı. Responsive ikonlar ile alakalı bir de [websitesi](http://responsiveicons.co.uk/) bulunuyor.

## Konferansın Sonu
Güzel konuşmalar, faydalı workshoplar ve özellikle Hasan abi ile ülke gündeminden uzakta, rahat rahat Web üzerine konuşabildiğimiz 3 gün benim için böyle geçti. Konferans sırasında tanıştığımız Mustafa Kurtuldu ile de keyifli sohbetlerimiz oldu. Umarım tekrar görüşme imkanımız olabilir.

<figure markdown="1">
![ft2][]
Öğle arasında, yemek mi yesek, wall'a çizim mi yapsak, yoksa birileriyle mi tanışsak kararsızlığını yaşayan güruh.
</figure>

<figure markdown="1">
![ft1][]
Yemek sonrası, lego odasında laflarken yaptığımız Lego Robotu
</figure>

<figure markdown="1">
![ft3][]
FoWD hatırası: Bilal Çınarlı, Mustafa Kurtuldu, Hasan Yalçın<br />
<span class="copyright">Fotoğraf: @hasanyalcin</span>
</figure>

## Diğer Görseller ve Kaynaklar
Sunumlarda ve workshoplarda 3 gün boyunca çekilip paylaşılan resimleri için FOWD, seen.co sitesinde bir [etkinlik](http://seen.co/event/fowd-london-2014-london-uk-2014-9313) oluşturmuş. Ayrıca, yine de konferans ile alakalı FOWD dün kendi highlight ve değerlendirmeleri ile alakalı bir [yazı](http://www.futureinsights.com/home/to-the-future-a-look-back-at-fowd-london-2014.html) yayınladı.

### Güncelleme
Bugün (17 Nisan) öğleden önce [Hasan Yalçın](http://twitter.com/hasanyalcin) da konferans ile alakalı kendi [notlarını](http://www.hasanyalcin.com/future-of-web-design-2014-londra-notlari/) yayınladı.

[^1]: Yapılan iş, proje için olan talepler ve kapsamın tamamı
[^2]: Özelleşmeden, hızlıca ortaya birşey çıkartıp, testler yapmak
[^3]: Aslında burada "tasarım" (görsel olan) olarak tam çeviremiyoruz. Design ile kastedilen, sistemlerinin çalışmasının nasıl olması gerektiği, kullanımının, deneyiminin nasıl kurgulanması.

[dud]: /public/images/2014/fowd-2014-07.jpg
[wiacfa]: /public/images/2014/fowd-2014-08.jpg
[wada1]: /public/images/2014/fowd-2014-09.jpg
[wada2]: /public/images/2014/fowd-2014-10.jpg
[ft1]: /public/images/2014/fowd-2014-11.jpg
[ft2]: /public/images/2014/fowd-2014-12.jpg
[ft3]: /public/images/2014/fowd-2014-13.jpg
