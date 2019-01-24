<?php include 'header.php';
?>

<div class="contentGrid"><div class="container">
	<div class="aramaGrid mt-5">




		<form method="post">

			<div class="searchDiv">
				<input type="search" id="sbox"  name="search" class="search" placeholder="Name,Surname,Content...">
				<button class="searchS" type="submit"><i class="fa fa-search mx-auto"></i></button>
			</div>
			<div class="advancedSearch mx-auto ">
				<div class="searchSutunGrid">
					<ul class="searchSutun">
						<li ><label for="insearch" data-toggle="tooltip" title="aranan değerin tam olmaksızın arama yapar"><input type="checkbox" name="insearch" value="icinden" > İçinde bul</label></li>
						<li ><label  for="id"><input type="radio" name="deger" value="id">id</label></li>
						<li ><label  for="name"><input type="radio" name="deger" value="name" checked>name</label></li>
						<li ><label  for="surname"><input type="radio" name="deger" value="surname">surname</label></li>
						<li ><label  for="content"><input type="radio" name="deger" value="content">content</label></li>
						<li ><label  for="hepsi"><input type="radio" name="deger" value="hepsi">hepsi</label></li>
					</ul>
				</div>	
				<!-- <div class="searchBar">bar</div> -->
			</div> 


		</form>

	</div>

	<div class="searchListle mt-5">
		<div id="yaz" class="row">



			





		</div>

	</div>


</div>
</div>

<script type="text/javascript">

var input = document.querySelectorAll(".searchSutun input");  //belirlenen tüm inputları bulur kullanımı basittir.
var searchbox = document.getElementById("sbox");
var myvalue;
var hara=false; // içindenbul checkbox dolumu boş mu denetlemeye yariyor;
/*
** keyup ---> tuşbasıp çektikten sonra işleme başlar.
** addEventListener ----> multifonksiyon işlem yapmaya yarar tetiklendiği zaman fonksiyonu çalıştırır
** 
*/

searchbox.addEventListener("keyup" , function(){

    for (let index = 1; index < input.length; index++) {
        if(input[index].checked==true)
        {
            myvalue=input[index].value;
        }
    }
    if(input[0].checked == true )
    {
        hara = true;
    }
    else{
        hara = false;
    }
console.log(hara);
arama(searchbox.value,myvalue,hara); 
 //ajax yaptırmak istediğim verileri önce fonksiyon olarak açıp parametre olarak gönderiyorum.

} );


 function arama(harf,volvo,hara){
//hiç karakter girilmesse boş yazmasını sağlıyor..
		if (harf.length == 0) {
			document.getElementById("yaz").innerHTML = "";
		}

		else

		{

			var xhttp=new XMLHttpRequest();

			xhttp.onreadystatechange=function(){
				if(this.readyState== 4 && this.status==200)
				{

					document.getElementById("yaz").innerHTML = this.responseText;  
					/*responseText yollamış olduğum php sayfasından verileri çeker bunun içinde gönderdiğim php sayfasında çıktığı echo olarak bastırmam gerekir echo bastırmassan çıktı vermez.*/

				}


			}
			xhttp.open("GET","araAjax.php?deger="+harf+"&&volvo="+volvo+"&&hara="+hara, true); 
			/* open 3 parametre alır 
			*** 1. verinin türü GET olursa link göndermeyi sağlar küçük basit veriler için etkilidir POST yapılsaydı linkten veri gönderemezdim.

            *** 2. url gitmek istedğin yeri seçiyorsun burda gitmek istedğimiz yere aynı zamanda veri gönderiyoruz bulunan parametreler
			harf ==  search.value yazanlar
			volvo == id,name,surname,content,hepsi ygönderiyor.
			hara == içinde bulması için checkbox value yolluyor

			***3. true/false 
			true > asenkron çalışan sürekli denetleyen anlamında  ajax için true olması gerekir <<<yazdığın kodlar sunucu tarafından sürekli denetlenir ve bir kerecik yapmaz>

			false > asenkron olmayan <eş zamanlı> server ya da sunucudan istek gelmesi bekler gelmessede istenilen kodları çalışmayı durdurur normal aramadan farksiz.
	
			
			 */
			xhttp.send();


		}
	}

	



</script>


<?php include 'footer'; ?>