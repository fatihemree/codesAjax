<?php 

			include 'baglan.php';

			$sayfa = isset($_GET["sayfa"]) ? (int) $_GET["sayfa"] : 1;

 //yazdırma SEÇİMİ (OBJ_ALL) kullandık sayfa başı (5) kayıt sonraki linklerin deseni (?sayfa=) sayfalama numaraları (3)lü sıra olsun

			$sonuc = $bag->sayfala("OBJ_ALL", "codes", "id,name,surname,content", "ORDER BY id ASC", array(), 10, $sayfa, "?sayfa=",3 );

 // $sonuc["veriler"] dizi olduğu için döngü kurduk
			
			foreach($sonuc["veriler"] as $satir) {
				echo '	<div class="col-4 my-3">
				<div class="card" style="width: 18rem;">
				<div class="card-body">
				<h5 class="card-title">'.$satir->name.'</h5>
				<h6 class="card-subtitle mb-2 text-muted">'.$satir->surname.'</h6>
				<p class="card-text">'.$satir->content.'</p>
				<a href="sil.php?id='.$satir->id.'" class="card-link">sil</a>
				<a href="guncel.php?id='.$satir->id.'" class="card-link" >güncelle</a>
				</div>
				</div>
				</div>';
			}
			?>