var arama = (deger) =>{
this.deger=deger;
let myvalue;
let radio = document.querySelectorAll(".searchSutun input[type='radio']");
radio.forEach(element => {if(element.checked===true){myvalue=element.value.toString();}});
let checkbox =document.querySelector(".searchSutun input[type='checkbox']").checked.toString();
let sorgum = "araAjax.php?deger="+this.deger+"&&volvo=name&&hara=true";
console.log(checkbox+"   "+myvalue+"  "+this.deger);

var dom =document.querySelector("#yaz");

//let er= myAjax.ajax=dom;
//console.log(er);
let deneme = "deneme.txt";
let tur="GET";
new myAjax(tur,deneme,dom);
 







}



        