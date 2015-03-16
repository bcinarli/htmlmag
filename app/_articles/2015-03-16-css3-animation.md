---
comments: true
slug: css3-animation
title: CSS3 Animation
date: 2015-03-16 22:58:00
author: Nesrin Kalender
profile: https://www.facebook.com/kalendernesrin
lang: tr_TR
tags:
- CSS3
- animation
- cubic
description: CSS3 animation nasıl kullanılır? Özellikleri nelerdir? 
---
CSS3 ile gelen bir çok özellik belirli web üzerinde belirli işlemleri daha kolay yapmamızı sağladı. Özellikle animation ve transition ile daha yumuşak geçişler ve güzel bir görüntü elde edebiliyoruz.

Animation için bilmemiz gereken temel iki madde var. keyframes ve animation property. Sırayla ele alacak olursak keyframes ile başlayalım.

##Keyframes

Eğer flash ile uğraştıysanız keyframe kelimesine yabancı değilsiniz demektir. Buradaki keyframe'ler bizim animasyonumuzun kırılım noktaları aslında 100%, 50% veya 25% olabilir. Bu yüzde aralıklarını bir sahne olarak hayal edersek 0% ile 100% sahnesini biz belirtiyoruz ve elementimiz buna göre hareket ediyor. Daha fazla uzatmadan örnekleyelim.

``` {.language-css}
//Genel Yazimi
@keyframes helloWorld{
	0% {
		background: red;
	}
	100% {
		background: yellow;
	}
} 

//Operi, Safari, Chrome
@-webkit-keyframes helloWorld{
	0% {
		background: red;
	}
	100% {
		background: yellow;
	}
}
```
Yukarıdaki keyframes tanımlamalarında gördüğümüz gibi animasyonun tamamı 100% oluyor ve 0%, 25% gibi değerler ile geçmesi istediğimiz durumu belirtebiliyoruz. Eğer sadece 0% ve 100% kullanıyorsak bunun yerine from - to şeklinde kullanabiliriz. Yukarıdaki örneği ele alacak olursak;

``` {.language-css}
@keyframes helloWorld{
	from {
		background: red;
	}
	to {
		background: yellow;
	}
} 
```
şeklinde kullanabiliriz.


Peki bizim bu animasyon işlemlerimizden elementimiz nasıl haberdar olacak. Bunun için de element'in css tanımlamalarına altta bulunan örnekteki gibi animation özelliği tanımlamamız gerekiyor. 

``` {.language-css}
	.myElement {
		animation: helloWorld 1s;
		-webkit-animation: helloWorld 1s;
	}
```
Buradaki hellowWorld yukarıda keyframes tanımındaki isim. 1s ise bütün bu işlemlerin kaç saniyede olup biteceğini belirtiyor. 

Animation için daha bir çok property bulunuyor, fakat animasyonun çalışması için isim ve süresini belirtmeniz yeterlidir.  Geri kalan kısımlar sizin istekleriniz doğrultusunda değiştirebileceğiniz alanlardır.

##Animasyon Özellikleri 

``` {.language-css}	
	div {
		animation-name: animasyonadi;
		animation-duration: 3s; /* animasyon suresi*/
		animation-timing-function: ease; 
		animation-iteration-count: 4; /*tekrar sayisi*/ 
		animation-direction:reverse; /* animasyon yonu belirtebiliyoruz*/
		animation-play-state: paused; /*runing ve paused değerleri alır animasyonu durdur/devam yapar*/
		animation-delay: 2s; /*animasyon baslamadan once bekleme suresi*/
		animation-fill-mode: forwards; /*animasyonun bitiminde nasil davranacagini belirlir*/
	}
```

Bütün bu özellikleri aşağıdaki şekilde de yazabilirsiniz. 

``` {.language-css}
div{
    animation: animasyonadi 3s ease 4 alternate 2s forwards;
}
```
bu sayede kod kalabalığından kurtulabilirsiniz.


Örnek animasyon için <a href="http://jsfiddle.net/nesrinkalender/zouwkhrx/" target="_blank" rel="nofollow">tıklayın.</a>