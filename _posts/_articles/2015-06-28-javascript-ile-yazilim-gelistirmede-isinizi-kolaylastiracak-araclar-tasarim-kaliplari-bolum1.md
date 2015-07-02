---
comments: true
slug: javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum1
title: Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar: Tasarım Kalıpları (Bölüm 1)
date: 2015-06-28 22:37:17
author: Barış Güler
profile: https://www.facebook.com/profile.php?id=100005773905216
lang: tr_TR
tags:
- javascript
- design patterns
related:
- Javascript ile Yazılım Geliştirmede İşinizi Kolaylaştıracak Araçlar: Tasarım Kalıpları (Bölüm 1) | javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum1
---
![js][]

<blockquote markdown=1>
Bu yazı, __Tasarım Kalıpları__ dizinin ilk yazısıdır. Dizinin diğer yazılarına aşağıdaki içindekiler kısmından ulaşabilirsiniz.

### İçindekiler

1. Bölüm 1: Tasarım Kalıpları - Sorunlar ve İlkeler
2. [Bölüm 2: Tasarım Kalıpları Nedir?](/article/javascript-ile-yazilim-gelistirmede-isinizi-kolaylastiracak-araclar-tasarim-kaliplari-bolum2)
</blockquote>

Günümüzde “__Javascript...__” ile başlayan hiçbir başlığın popüler olmadığını göremediğimiz bir zaman dilimindeyiz. Günde en az 10 (on) adet yeni yazı ile karşılaşıp her birinden kah modüler Javascript programlamaya, kah yeni bir library ya da framework’e ya da yeni bir yaklaşıma doğru yeni yelkenler açıyoruz. Bu da topluluğun gelişimi ve geliştirmenin geleceğinin daha da kolaylaştığı ve yazılım geliştiricilerinin ortak bir dil ve kültür geliştirmesi açısından ayrıca bir önem taşıyor.

Ancak birçok kez başlıkların içeriği bunlarla sınırlı kalıyor ve biz günün yoğunluğu ve issue bombardımanı altında kendimizi “__korumaya__” çalışmaya kaldığımız yerden devam ettikçe bu yukarıda bahsi geçen bütün yeni yaklaşım ve teknolojiler rafa kalkıyor. Kendimizi `document.ready`’nin kollarına, spagetti Javascript’in taşlı yollarına, neyin nerede olduğu belli olmayan kod bloklarının insafına bırakıyoruz. Yazılım geliştirmenin temel ve belli başlı ilkeleri olduğu gerçeğini hep gözardı ediyor ve günü kurtarmanın, deadline’a proje yetiştirmenin vermiş olduğu heyecan ile yaşıyoruz. Bizden sonraki yazılımcının yazdığımız kodu gördüğünde aklından geçireceği cümleleri daha bizim geliştirme aşamasında düşünmeden “__Harala-Gürele-Oriented__” tarzda kodları adeta “__kusuyoruz__” ve sonra ortaya çıkan hilkat garibesine “__geliştirme__” diyoruz. Tabii diyebiliyorsak…

Bütün bunların yoğunluğunda yazılım geliştirmenin de bir kültür olduğunu, her bir geliştiricinin kendisine has bir kültürü olabileceğini ancak ortak bir “__dil__” ve ortak bir kültür yaratabiliyor olmanın senelerdir pratik edilen yöntemleri olduğunu da biliyoruz. Bunların içerisinde birçok yaklaşım barınıyor; Javascript geliştiricileri de bu kültürü inşa etmek zorunda kalıyor ve kalmadığı yerde bakımı yapılamayan ve gereksiz kod bloklarına boğulmuş kod tabanları ile karşı karşıya kalıyoruz. Mesela Türkiye’de önce test yazıp sonra geliştirme yapılmıyor; bu bir “__kültürel__” öğe; mesela günümüzde yine Türkiye’de kodun review aşaması hep boş bırakılıyor ve takım benzer bir sorun ile karşılaştığında bir sene önce aynı sorunu yakın nasıl bir çözüm getirildiğini bilemediği için onu da aşan bir yaklaşım geliştiremiyor; kaldı ki ekip arkadaşı da gelişemiyor ve sözde “__geliştiricinin__” seneleri boşa akıp gidiyor.

Tasarım Kalıpları da bu tür sorunlara hem çare olmak hem de yöntemsel açıdan sürekli karşılaşılan problemlere ortak bir çözüm platformu oluşturmak için senelerdir varolan yaklaşım kalıpları olarak varlar.

>“I like my code to be elegant and efficient. The logic should be __straightforward__ and make it hard for bugs to hide, the dependencies minimal to ease maintenance, __error handling complete according to an articulated strategy__, and performance close to optimal so as not to tempt people to make the code messy with unprincipled optimizations. Clean code __does one thing well__.” - Bjarne Stroustrup (C++’ın Yaratıcısı)

Tasarım Kalıpları’nın gerekliliklerine ve nasıl şeyler olduklarına dair bilgi vermeye başlamadan önce yazılım geliştirme öncesinde, esnasında ve sonrasında ne tür sorunlar ile karşılaştığımızın bir üzerinden geçmemizde fayda var. Sorunu iyi tanımlarsak çözüme de bir o kadar yakınlaşırız.

## Geliştirmede yaşanılan sorunlar

### Kötü Yapı Tasarımı
Projenin ihtiyaçlarını tam anlamadan ve kavramadan, sadece community içerisinde popülerliği olduğunu düşündüğümüz araç ve yöntemleri kendimize “__rehber__” olarak seçersek, geliştirmenin bilinmeyen bir aşamasında karşımıza çıkacak ve önceden hesaba katılmamış bir sorun ya da sorunlar bloğu o projenin ilerlemesinin önüne geçebilecek önemli engeller yaratabilir. Bu gibi ciddi bir problem ile o zamana kadar geliştirdiğiniz kodu da çöpe atmamak adına projenin ihtiyaçlarının doğru tanımlanması gerekiyor.

### Spagetti Kod
Yanlış araç ya da yöntem tercihi nedeniyle kod yapısının giderek bozulması ve bundan kaynaklı okunmayan birçok noktası bulunan “__garip__” bir kod tabanı ile karşı karşıya kalmamız olası. Bunlar için belli araçları da kullanabilirsiniz. Ama en iyi aracın geliştiricilerin kendisi olduğunu unutmayın. İnsanın hata yapmayacağı bir dünya olmadığı için buna karşı hazırlıklı olmakta fayda var.

### Düzensiz Proje Yönetimi
Ekibin performansı ve yönelimleri gözönüne alınarak çıkartılan deadline tarihleri, bütün bu iki sebep yüzünden aksamaya başladığında işin içerisine projenin yönetim aşaması giriyor. Kendi hesabına gerekli ancak geliştirici ekibi adına herhangi bir noktadan empatik yaklaşmayan bir proje yönetimi yöntemi projenizin iyi gidiyorken de kötü bir yola girip neredeyse fail olmasına sebep olacak ana etmenler arasında yer alıyor. Her zaman hem son kullanıcı testlerinin hem de developer testlerinin sürelerini de hesaba katarak deadline’ları belirlemek, geliştiricinin kendisini istenmeyen anlar için korumaya karşı bir haklı refleks olarak karşımıza çıkıyor. Takibin rahat yapıldığı, kolay araçlar seçin. Ama tek bir referans noktanızın olması belirleyici. Aklınızda her zaman bir orta - uzun erimli yol haritanız olsun ancak “__resmi__” olarak yönetime bildirdiğiniz tarihlerde iki tarafın da mutabık olduğu süreçleri referans alın. Çünkü proje zora girdikçe sizin el altından oluşturduğunuz tarihler size “__gerçekler__”miş gibi görünmeye başlayabilir. 

### Bilgi Eksikliği
Bunun tek ilacı, merak. Gerçekten yöneliminiz iyi ve kaliteli kod geliştirmek ise bitmek bilmeyen bir merak ve durmak bilmeyen bir hırs ile gündemi takip etmeli; yeni yaklaşımları denemeli, projenin ihtiyaçları doğrultusunda yeni dönemin ihtiyaçlarına doğru bir şekilde adapte edebiliyor olmalıyız. Özellike takım içerisinde böyle bir kültürün olması gerekiyor; aksi halde o çalışmanın çekilmez bir çileye dönmesi olası. Özellikle takım arkadaşlarınız arasında geliştirdiği kodun kendisine ilgisiz, yarınını düşünmeyen bir yaklaşım içerisinde olanlar var ise; onu mümkün olduğunca standartlarınıza çekmeye çalışın; olmuyorsa kendi ilgi alanlarından yola çıkarak ilgisini yine yazılımın kaliteli geliştirilmesine özen göstermesi için dolaylı göndermeler yapın. Bunlar da işe yaramıyorsa, ne yapmak istediğini tam olarak bilmiyor ya da çok önemsemiyordur; o yüzden ondan uzak durun. Her zaman kodunu tek bir kişinin değil, süreçlerin yani aslında ekibin aktivasyonunun elden geçireceği bir mekanizmayı oturtmaya çalışın. Yoksa çok başınız ağrıyacaktır. Hiç kimse “__Tight-Loose-coupling[^1]’den, Inheritance[^2]’tan ya da DRY[^3] gibi başlıklardan haberdar olmak zorunda değil__” demeyin; ne yazık ki zorunda. 

### Ekip elemanları arasında koordinasyon eksikliği
Yukarıdaki sebeplerden olmasa bile takım içerisinde insan ilişkilerinden kaynaklı sorunlar yaşıyor olabilirsiniz. Bunun çok kod ile ilgisi yok. Sadece insani olarak birlikte çalıştığınız arkadaşlarınızın da sizin gibi insan olduğunu, her birisinin ayı bir hikayesi olduğunu ve sizin gibi hayat mücadelesi içerisinde kendisini varetmeye çalıştığını hiçbir zaman unutmayın. Bu hem sizin hem de karşınızdakinin yaklaşımını belirleyecek birşey.

### Zaman sıkıntısı
Kısıtlı zaman içerisinde çok iş yaptırmak isteyen yönetimler büyük bir sorun yaratıyor olacaktır. O nedenle son tarihleri verirken bunları hesaba katın; çok kısa sürede yapılacak “__büyük__” bir işin aslında iyi olmayacağını iyi ifade etmeniz gerekiyor; zamanın, kaliteli geliştirmenin başlıca koşulu olduğunu her zaman bir referans olarak aklınızda tutmanızda fayda var. Her şey güzel giderken işin deadline’ının öne çekilmesini talep edebilirler; buna karşı direnin. Yukarıdaki sebeplerin ağırlığı zaten sırtınızda iken böyle bir talebin gerçeklenebilir olmadığını iyi bilmeniz gerekiyor.

Bu tür bir sorunlar silsilesi içerisinden hayatta kalarak çıktığımız her proje bize yeni şeyler öğretiyor olacak. Buradan hareketle her bir milestone haritamızı bir öncekini update eder biçimde güncellememiz tarihten de öğrenmeyi öğrendiğimizin bir göstergesi haline gelecektir. Bu nedenle kaliteli yazılım için temel başlıkları her bir “__hayatta kalma__” sürecinden, yani proje sürecinden sonra mümkün mertebe listemize eklememiz hem tarihin hatalarını tekrar yaşamamamız için bir anahtar aksiyon olacak, hem de bize de yeni şeyler öğretiyor olacaklar. Örneğin tekrar eden metod / fonksiyonların temizliği için ilk projenizde herhangi bir çalışma yapamamış olabilirsiniz ancak ikinci projede bir süreç yaratamadan tekrar aynı hataları yapmak üzerinden projeye giriştiyseniz bu aşamada projeniz gizliden bir pasif “__fail__” olma status’üne sahiptir. 3. projede de zaten alışkanlık haline gelmemiş bir type checking işlemi, yazılım için çok da birşey yapmadığınızı ve günü kurtaran herhangi bir yazılım geliştiricisi olduğunuzu gösterir. “__Herkes gibi__” olmayın. 

Bütün bu yaşanması olası hadiseler ışığında ne yapalım ve nasıl yapalım tarafında birkaç notu paylaşmam yerinde olacak. “__İyi, güzel, hoş ama nereden başlamalı__” diye sorular sorunun çözümünün yarısını temsil ediyor. Sormaktan çekinmeyin; gerçekten gelişen bir geliştirici olmak, sormaktan geçiyor.

## İyi Bir Geliştirme Süreci için ilkeler
### Kullanışlı Araçlar
Araç seçimi, projenin ihtiyaçlarını nasıl anladığınızla doğrudan ilintili. İyi tespit edemediğiniz anahtar noktalar, kullanışlı / gerekli araçlarınızı bir anda kullanışsız / gereksiz alet edavatlara dönüştürebilir.

### Yazılım İlkelerine Bağlılık (SOLID[^4], DRY, Loose-coupling, Seperation of Concerns[^5])
Sadece Front-End ya da bir Javascript geliştiricisinin değil herhangi bir yazılım geliştiricisinin temel referans noktası bellemesi gerektiğini düşündüğüm yaklaşımlara olan aşinalık kritik bir yerde duruyor. Bağımlılığın had safhada olduğu, kendisini tekrar eden kod blokları ile dolup taşan bir kod tabanı ileriki aşamalarda refactoring gibi çalışmalarınız sırasında önünüze dikilecektir. Gelecekteki “__siz__”in karşısına siz bir engeller bütünü çıkarmak istemiyorsanız, hemen şimdi Google’da “__yazılım prensipleri__” ya da “__Object-Oriented Programming[^6]__” ifadelerini aratın. 

### Tasarım Kalıpları
Yazımızın ana konusu olan bu başlık, aslında çözüme giden yolun tanımlanması aşamasında etkili bir rol oynuyor. Aslında maçı takımınızdaki 10 numara oyuncu(lar) sayesinde değil, taktik ile kazanmış oluyorsunuz.

### Savunmacı Geliştirme
Sizinle birlikte geliştirme yapan çalışma arkadaşlarınızın da bu tür yaklaşım ve ilkeleri gözettiğini düşünerek kod geliştirmek bir hata olacaktır. Bu nedenle onların da ilgisini cezbetmeniz birlikte kaliteli kod geliştirmenin zevkine ulaşmanızı sağlayabilir. Ancak yine de her zaman bunun böyle olmayacağını düşünerek birtakım kontrolleri otomatize edeceğiniz süreçler yaratmanız hatalı adımlar atmamanız için faydalı olacak. Örneğin, bir API uç noktasından her zaman kullanmayı umduğunuz JSON yapısının doğru bir şekilde gelmeyeceğini unutmayın. Bunun için zaman ve süreç yaratıp, bunu test eden kodlar geliştirin ve bunu tek tuş ile test edecek bir yapıya kavuşturun.

### Çalışma Metodolojileri
Her zaman bildiğimiz ve uyguladığımız yöntemin en iyi yöntem olduğu yönünde bir fikrimiz olabilir. Burada farklı bir boyut getirmek için şöyle diyebiliriz : eğer yönteminiz işe yarıyorsa, emin olun daha iyisi vardır. Bunun için sürekli araştırma halinde olun ve süreçlerinizi nasıl daha iyi ve efektif hale getirebileceğinizi tıpkı ayrıca bir “__proje__”ymişçesine derinlemesine irdeleyin, inceleyin ve uygulayın.


## Notlar:

* Bu makalede serisindeki bazı kelimeleri özellikle orjinal kullanılan İngilizce haliyle kullanmaya çalıştım çünkü gerçekten Türkçe’ye çevrilmesi sırasında çok ciddi anlam kaymaları yaşanabiliyor.
* Her bir başlığın ne olduğunu ayrıntısıyla anlatmam mümkün olmadığı ve yazının konusu daha çok Tasarım Kalıpları olduğu için bu sınırlar içerisinde kalmaya çalıştım.
* Makale esas olarak Türkiye’de henüz “__kurumsallaşmadığını__” düşündüğüm Türkiye’deki Front-End geliştiriciliğine ve Front-End geliştiricilerine hitaben yazıldı. Özellikle istemci-tarafında kod yazan sevgili arkadaşlarıma yardımcı olmasını diliyorum.

[js]: ../content/2015/javascript-logo.png

[^1]: Yazılım tasarımı yapılarının birbirlerini etkileme oranının azlığı ya da çokluğu olarak ifade edebiliriz. Örneğin, eğer loose-coupled bir mimariden bahsediyorsak, birbirlerinden farklı işler yapan modüllerin herhangi bir biçimde başka modüllerin kod bloklarını etkilemeyen bir ayrıksılıkta kendilerini varetmeleri gerekmektedir. Bkz. [https://en.wikipedia.org/wiki/Coupling_(computer_programming)](https://en.wikipedia.org/wiki/Coupling_(computer_programming)){.external}

[^2]: Yazılım mimarisinde kalıtım. Örneğin, farklı niteliklere sahip nesnelerin birbirlerinin özelliklerini kendi bağlamlarına dahil etmeleri olarak açıklanabilir. [http://www.chambers.com.au/Sample_p/c_inhert.htm](http://www.chambers.com.au/Sample_p/c_inhert.htm){.external}

[^3]: Açılımı (D)on’t (R)epeat (Y)ourself olan yazılım paradigması. Her bir kod parçası ya da bloğunun sadece bir kez tanımlanması olarak da açıklanabilir.

[^4]: Single responsibility, Open-closed, Liskov substitution, Interface segregation and Dependency inversion olarak açımlanabilecek olan yazılım prensipleri. Temel yazılım prensipleri olarak kabul edilirler. Bkz. [https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design](https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design){.external}

[^5]: İşlev katmanlarının birbirinden ayrılması prensibinin bir diğer adıdır. Çatıların bu yaklaşımın çeşitli yönlerini referans alarak geliştirildiğini söyleyebiliriz. Bkz. [http://aspiringcraftsman.com/tag/separation-of-concerns/](http://aspiringcraftsman.com/tag/separation-of-concerns/){.external}

[^6]: Nesne Yönelimli Programlama. Bkz. [http://codebetter.com/raymondlewallen/2005/07/19/4-major-principles-of-object-oriented-programming/](http://codebetter.com/raymondlewallen/2005/07/19/4-major-principles-of-object-oriented-programming/){.external} 
