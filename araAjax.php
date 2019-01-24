<?php include 'baglan.php';


$search = $_REQUEST["deger"];
$deger = $_REQUEST["volvo"];
$insearch= $_REQUEST["hara"];

echo $insearch;

if ($deger=="hepsi" and $insearch == "true") {
	echo "1";
	$kosulum="WHERE name LIKE ? OR surname LIKE ? OR content LIKE ?";
	$istenen= array("%$search%","%$search%","%$search%");
}

else if ($deger=="hepsi" and $insearch == "false") {
echo "12";
	$kosulum="WHERE id=? OR name=? OR surname=? OR content=?";
	$istenen= array("$search","$search","$search","$search");

}
else if($insearch == "true" and $deger!="hepsi") {
echo "12";
	$kosulum="WHERE ".$deger." LIKE ?";
	$istenen=array("%$search%");
}

else
{
echo "14";

	$kosulum="WHERE ".$deger." LIKE ?";
	$istenen=array("$search");


}




$cikti = $bag->cek("OBJ_ALL", "codes", "*", $kosulum, $istenen);

if ($cikti) {

	foreach($cikti as $satir) {

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

} else {

	if ($istenen==array("$search") || $istenen == array("$search","$search","$search","$search")) {
		echo "bulunamadı";
	}
	else
		echo "hata: ".$cikti;
}





?>