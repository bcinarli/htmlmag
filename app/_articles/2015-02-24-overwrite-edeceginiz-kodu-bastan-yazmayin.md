---
comments: true
slug: overwrite-edeceginiz-kodu-bastan-yazmayin
title: Overwrite Edeceğiniz Kodu Baştan Yazmayın!
date: 2015-02-24 19:12:30
author: Bilal Çınarlı
lang: tr
tags:
- CSS
- Code Smart
---
Günlük hayatımızda mobil cihazların kullanımı arttıkça sayfa/web arayüzleri de kendilerini bu cihazlarda düzgün gözükecek şekilde kurgulanmaya başlandı. Bu kurgularda farklı yaklaşımlar olsa da, kullanılan en popüler yaklaşım dediğimiz sayfa elemanlarının pozisyonlarının ve genişliklerinin ekran/cihaz genişliğine göre değiştirildiği __responsive design[^1]__ yaklaşımıdır.

Responsive design yaklaşımının hayat bulmasının en önemli aktörü, CSS içerisinde bir çok ekran özelliğine göre kod tanımı yapabilmemizi sağlayan __Media Query__ tanımlarıdır. Temel anlamda, CSS içinde kodlarımızı yazdıktan sonra, çözünürlük, ekran boyu gibi değişen durumların öngörülerine göre (breakpoints[^2]) ek düzenleme kodlarının yazılması ile responsive design kurgusu hazırlanır.

### Klasik Yaklaşım
``` {.language-css}
 .article-footer .share-widget {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding-bottom: 0;
 }

@media screen and (max-width: 768px) {
    .article-footer .share-widget {
        position: relative;
        top: auto;
        transform: none;
    }
}
```

Halbuki, _media query_ içindeki kurgu tersine yapılmış olsa işler daha kolaylaşır. Kodun `max-width: 768px` şeklinde önce büyük ekran, sonra küçük ekran için yazılma kurgusu tersine çevrildiğinde; `min-width:769px` ve üzerindeki genişlikler için, orjinal elemanların __sadece__ değişmesi gereken tanımları yazılmış olur.

### Sadece İhtiyaca Göre Kod Yazımı
``` {.language-css}
.article-footer .share-widget {
    padding-bottom: 0;
}

@media screen and (min-width: 769px) {
    .article-footer .share-widget {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
}
```

Yukarıdaki gibi, aynı bloğun farklı genişliklerdeki görünümü dışında, bu yönetimi bütün sistem üzerine uyguladığında yazılan kod miktarı ciddi oranda azalacaktır. Örneğin, klasik bir blog temasında genellikle bulunan ana içerik kolonu ve yardımcı içeriklerin olduğu yan kolonu ele alalım. Bu iki kolonu klasik yöntem ile yazıldığında, aşağıda gibi, önce genişlik tanımları ve birbirlerine olan pozisyonlarını tanımlanacaktır. Sonrasında da hem __tablet__ hem de __telefon__ genişlikleri için ek tanımlar da eklenecektir.

### Klasik Yaklaşım
``` {.language-css}
/* maksimum içerik genişliği */
#content {
    max-width: 1280px;
    margin: 0 auto;
}

.main-content {
    float: left;
    width: 900px;
}

.supplementary {
    float: right;
    width: 380px;
 }

@media screen and (min-width: 769px) and (max-width: 1024px) {
    .main-content {
        width: 644px;
    }
}

@media screen and (max-width: 768px) {
    .main-content,
    .supplementary {
        float: none;
        width: 100%;
    }
}
```

Bu tarz iki kolonlu içerikler için klasik yaklaşımda, örnekte de görüldüğü gibi, `.main-content` için __3 faklı__ genişlik tanımı ile, aslında bir tanım 3 kez yapılmış olunuyor. 

Kurgu tersten düşünüldüğünde ise, yazılan kod %50 oranında azalmakta ve her tanım sadece 1 kez yapılmaktadır.

### Sadece İhtiyaca Göre Kod Yazımı
``` {.language-css}
/* maksimum içerik genişliği */
#content {
    max-width: 1280px;
    margin: 0 auto;
}

@media screen and (min-width: 769px) {
    .main-content {
        float: left;
        width: calc(100% - 380px);
    }

    .supplementary {
        float: right;
        width: 380px;
    }
}
```

Bu örnek kodlar çok kolay bir şekilde çoğaltılabilir. Önemli olan, responsive design ile kodlama yaparken, elemanların breakpointlere[^2] göre nasıl değişeceğini iyi kurgulayıp, gereksiz kod yazmayı azaltır. Kurgunun önce büyük ekran sonra küçük ekran ya da tam tersi olması ve tanımların buna göre yapılmasında en önemli etken tasarımken, kodlamanın sade ve tekrarlar olmadan yapılması ise __iyi bir planma__ sayesinde olur.

## Diğer Kaynaklar
- CSS Media Queries ve kullanım örneklerini bulabileceğiniz Mozilla Geliştiri Portalı [sayfası](https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Media_queries)
- Popüler cihazlar için sık kullanılan [breakpoint](http://responsivedesign.is/develop/browser-feature-support/media-queries-for-common-device-breakpoints) CSS tanımları.

[^1]: Genişliğe duyarlı, esnek tasarım.
[^2]: Kırılım noktaları