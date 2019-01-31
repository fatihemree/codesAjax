class myAjax {
  constructor(...cvalue) {
  myAjax.ajax=cvalue;
   myAjax.ajax;
  }
 static get ajax() {
  //console.log(this.sorgu);
    let xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       myAjax.codex["print"].innerHTML+= this.responseText;
        
      }
    };
    console.log(this.codex["tur"]);
   xhttp.open("GET","deneme.txt",true);
   xhttp.send();
  }
  static set ajax(value)
{
this.codex={
tur:this.tur,
sendPage:this.sendPage,
print:this.print
};
const keycodex = Object.keys(this.codex);
for (const key in value) 
this.codex[keycodex[key]]=value[key];
}
  
  }
  
   
  



