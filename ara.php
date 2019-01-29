<?php 
include 'header.php';
?>

<div class="contentGrid"><div class="container">
	<div class="aramaGrid mt-5">




		<form method="post">

			<div class="searchDiv">
				<input type="search" id="sbox"  name="search" onkeyup="arama(this.value)" class="search" placeholder="Name,Surname,Content...">
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
	
	<button onclick="myAjax.ajax()">gönder</button>
		<div id="yaz" class="row">



		</div>

	</div>


</div>
</div>

<script>



</script>


<?php include 'footer.php'; ?>