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
       myAjax.codex["print"].innerHTML= this.responseText;
        
      }
    };
   
   xhttp.open(this.codex["tur"],this.codex["sendPage"],true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); //durumlara göre değişiklik yapılabilir.

   xhttp.send(this.codex["postvalue"]);
  }
  static set ajax(value)
{
this.codex={
tur:this.tur,
sendPage:this.sendPage,
form :function(keyform)  { 
  console.log(keyform);
let key=0;
  
  if (keyform[key] != "sendnot" && keyform[key] != "postsend" && keyform[key]!="formnot")
  {
     this.sendPage +="?"+ $(keyform[key]).serialize() ; }
  else if(keyform[key] != "sendnot" && keyform[key] == "postsend" && keyform[key]!="formnot"){
    
    if(keyform[++key]=="formnot"){
      
      this.postvalue=keyform[++key];
      console.log(this.postvalue);
    }
    else{
      
this.postvalue=$(keyform[++key]).serialize();
}

  }
  else if(keyform[key] != "sendnot" && keyform[key] != "postsend" && keyform[key]=="formnot"){
    this.sendPage+="?"+keyform[++key];
    
  }

  
 },
print:this.print,
postvalue:this.postvalue
};
const keycodex = Object.keys(this.codex);
for (const key in value) {
  
  if(typeof this.codex[keycodex[key]] =="function"){ 
    this.codex[keycodex[key]](value[key]);
  }
  this.codex[keycodex[key]]=value[key];
  
}



  
 



}
}
  

