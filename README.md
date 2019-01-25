
# codesAjax
> Ajax demek verilerin asenkron(eşzamansız) olarak belirlediğimiz sayfa istekte bulunup veri alışverişini sağlıyor.
Ajax bir programlama dili değildir.
**Kullanıldığı Yerler**---> *youtube,facebook,twitter,instagram...*  bu gibi ve buna benzer tüm platformlar anlık veri alışverişine ihtiyaç duyar bildirimler arama motoruna çıkan öneriler sayfa yenilenmeden sürekli durumların yenilenmesini sağlayan javascript vazgeçilmez bir kolu AJAX.. 


------------
## Ajax Nasıl Kullanılır ?
Ajax kendi içinde tanımlı fonksiyonlar ve metodlar sayesinde belirlenen sayfaya sürekli istek gönderip gelen istekle belirlediğin kodları çalıştırıp belirlenen kodları işleme tabi tutar.

------------


#### xmlHttpRequest();
> Bu metod ajax'sın kalbidir diyebiliriz çünkü birçok yapılan işlemler ve istekler bunun içinde çalışıyor. Kullanmak için önce tanımlama yapmalıyız.
**sayfaya istek gönderiyor.**

```javascript
var xhttp = new xmlHttpRequest();
```

------------


#### onreadystathechange
> xmlHttpReguest içind dönen verileri anlamlı hale getiren metoddur  ajax degişkenleri üzerinde işlem yapmamıza yarıyor.

```javascript
xhttp.onreadystatechange= function() {
// işlemler bunun içinde yazılır.
}
```

####  readyState
>  istekleri tutan bir fonksiyondur ve duruma göre sayısal rakamlarla deger döndürür.

**rakamların anlamları : **
- **0 :** *istek durumu yoksa*
- **1 :** *server işlem başlattığında*
- **2 :** *istek aldığı zaman*
-  **3 :** *istek işlendiği zaman*
-  **4 :** *istegin bittiği ve cevap hazır oldugunda* 

####  status
> kısaca yönlendirdiğimiz sayfadan kaynaklı değerlei rakamsal değerlere çeviren fonksiyon

**rakamların anlamları:**
-  **200 :** *her şey yolunda tmam*
-  **404 :** *sayfa bulunamadı*
- **403 :** *sayfanın erişim yetkisiyle ilgili sorunlar*

```javascript
if (this.readyState == 4 && this.status == 200) {

	//web sayfasına yaptırmak isdeğimiz işlemler buraya yazıyoruz verilerin yazdırması olsun çıktı olsun if kullanılmasında sebeb 0-4 kadar işlem 5 defa dönüyor if kullanarak bir defa dönmesi sağlıyoruz

    }
```
#### responseText
> istek gönderdiğimiz sayfalrın verilerini almak için kullandığımız metod degişkeni.

```javascript
if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText; 
	 // this bulunan veri xhhtp yani
    }
```

## open ve send fonksiyonları

>  open fonksiyon istek başlatıp göndermesi için içine 3 tane parametre alır.

```javascript
 xhttp.open("GET", "ajax_info.txt", true);
```
1.  **GET || POST**
>  istek türünün tipini belirler 
**Neden GET -->** 
*GET php kullanımdan farksız olarak içinde belirli bir veri tutan *
*POST göre daha hızlı işlemleri bitirmesi*
*link üzerinden veri gönderip alabilmesi için kullanılır*
**Neden POST -->** 
*POST büyük verileri sınır olmadan rahatça gönderebilir*
*GET göre daha güvenli bilgilerin korunmsaı durumda*
*POST işlemleri AJAX biraz farklı işliyor  bir kaç tane method daha ekleniyor koda*

2. **URL**
> istek gönderilecek dosyayı burada belirlitoruz
GET işlemlerinde link üzerinde veride gönderiyor sayfaya silme işlemlerinde kullanılıyor.

3. **TRUE || FALSE**

> Burda karar verdiği tür asenkron(eşzmansız) çalışıp çalışmamasına karar veriyor
**TRUE :**
Ajax işlemlerini yapmak istiyorsak bunun true olması gerek :tw-1f609:
Çünkü: ajax yazılmış olan istekleri sürekli denetler ve sürekli 
**FALSE :**
sunucudan gelen isteğe göre hareket eder sunucu istek göndermedikçe işlem yapmaz
sunucu (server) bağlıdır bir anlamda sunucu yavaşlaması filan etkiler tavsiye edilmez.
Hatta bu yüzden bile onreadyStates fonksiyonunu kullanmaya gerek bile kalmaz.
