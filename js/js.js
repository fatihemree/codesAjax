class myAjax {
    constructor(dom,sorgum) {
      let xhttp=new XMLHttpRequest();
      myAjax.ajax(xhttp,dom);
    }
   baglan(xhttp){
     console.log
       xhttp.open("GET", "deneme.txt", true);
       xhttp.send();


    }


  static  ajax(xhttp,dom) {
    
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       dom.innerHTML+= this.responseText;
	  }
    };
  
    
    }
  
   
  }




