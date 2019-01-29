<?php include 'header.php'; ?>
<div class="contentGrid">
	<div class="container">
		<div class="row mt-5">

			
		</div><!--row bittiği yer  -->

		<div class="page">


			<?php

 //Sayfalama yapacak olan kodlarımız

 echo $sonuc["sayfalar"];//sayfa sayilarini yazdirir (ilk onceki [-10]123[4]567[+10] sonraki son) seklinde
 
 
 // Bazen kayıt sayısı sayfa sayısı gerekli olabilir kullanabileceklerimiz
 echo $sonuc["toplamsayfa"]. " sayfada toplam " .$sonuc["toplamkayit"]. " kayit var, " .$sayfa. ". sayfadasınız.";

 ?>
</div>


</div>
</div>
<?php include 'footer.php'; ?>