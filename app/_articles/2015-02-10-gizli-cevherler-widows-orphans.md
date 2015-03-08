---
comments: true
slug: gizli-cevherler-widows-orphans
title: Gizli Cevherler: Widows & Orphans
date: 2015-02-10 17:47:00
author: Nesrin Kalender
profile: https://www.facebook.com/kalendernesrin
lang: tr_TR
tags:
- CSS
- widows
- orphans
description: Az kullanılan CSS özelliklerinden olan Widows ve Orphans tanımları aslında ne işe yarıyor? İçeriğinizin, yazı bloklarının daha anlamlı parçalara bölünmesi için bu tanımları kullanabilirsiniz.
---
CSS yazan çoğu kişinin otomatik tamamlamalardan aşina olduğu şeylerden birisi `widows`'dur. `width` yazmak isterken defalarca `widows` yazılmış ama asla nedir bu `widows` bakılmamış, kullanılmamıştır. 

Çoğu kez başıma gelen bu durumdan dolayı oturdum widows özelliğini bizler için araştırdım. Çok fazla içerik çıkmıyor. Türkçe kaynak aklınıza bile getirmeyin yok. 

Gelelim nedir bu widows? Google'da yaptığınız aramalarda, belli başlı örnekler çıkıyor. En etkileşimli ve kullanılabilir örnek w3school'da bulunuyor. Özelliği açıkladıktan sonra örneği paylaşacağım.

Widows birden fazla sayfaya ya da kolona bölünen paragraf ya da metinlerin en fazla kaç satırının son sayfa ya da kolona taşacağını belirler. Böylece bir sonraki sayfada tek bir satır kalması önlenir. Ayrıca widows ile birlikte karşımıza `orphans` çıkıyor. `Orphans` ise paragrafı yeni sayfaya değil bir öncekiyi sayfaya göre böler.

Karşımıza tanımlama `@media print { }` içerisinde yazılmalıdır diye bilgiler çıksa da print içerisinde yazılması zorunlu değildir. CSS ile `columns` tanımı yapılan metinler için de kullanılabilir. Normalde print edilen web sayfalarında widows'a gerek duyuyoruz. Bu yüzden örneklemeler bunun üzerinden veriliyor. 

Default değeri 2'dir. Block elementlerde kullanılır.

### Tanımlama

``` {.language-css}
// Widows tanımı
p {
	widows: 5; 
}

// Orphans tanımı
p {
	orphans: 5;
}
```

### Tarayıcı Desteği
Son olarak tarayıcı desteğine değinecek olursak _print_ için Safari ve Firefox desteklemiyor. Mobile desteği hiç yok. Ama _screen_ için, CSS Columns desteği veren tarayıcılarda kullanılabiliyor.

### Örnek
Yukarıda bahsettiğim örnek için <a href="http://www.w3schools.com/jsref/tryjsref_style_widows.htm" target="_blank" rel="nofollow">tıklayınız.</a>
_Buradaki örnek __print__ stillerine göre tanımlandığı için, sayfa açıldığında çalışmıyormuş gibi gelebilir. Widows tanımını yaptıktan sonra print ön izlemesi yaptığınızda sonuçları görebilirsiniz._

## Diğer Kaynaklar
- Mozilla Geliştirici Portalı'nda detaylı [kullanımı](https://developer.mozilla.org/tr/docs/Web/CSS/widows){.external} anlatılmış.
- QuirksMod sitesindeki [örnekler](http://www.quirksmode.org/css/css2/widows.html){.external}
- Caniuse sitesinde [columns](http://caniuse.com/#search=columns){.external} desteği veren tarayıcı listesi.