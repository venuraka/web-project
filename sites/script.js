const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

function process() {
  swal({
    title: "Success!",
    icon: "success",
  });

  var r = new XMLHttpRequest();

  r.onreadystatechange = function(){

    if(r.status == 200 && r.readyState == 4){

    }
  }
  r.open("POST","deleteall.php",true);
  r.send();
}

function cart() {
  window.location = "cart.php";
}

function insertproduct(){

  var productbrand =  document.getElementById("pb");
  var productname =  document.getElementById("pn");
  var productprice =  document.getElementById("pp");
  var productimg =  document.getElementById("pi");

  var form = new FormData();

  form.append("pb",productbrand.value);
  form.append("pn",productname.value);
  form.append("pp",productprice.value);
  form.append("pi",productimg.files[0]);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function(){

    if(r.status == 200 && r.readyState == 4){

      var response = r.responseText;

      alert(response);
    }
  }

  r.open("POST","productinsert.php",true);
  r.send(form);

}

function addcart(x){

  var form = new FormData();

  form.append("id",x);
 
  var r = new XMLHttpRequest();
 
  r.onreadystatechange = function(){
 
   if(r.status == 200 && r.readyState == 4){
 
   }
  }
  r.open
  
  ("POST","addcart.php",true);
  r.send(form);
}

function deleterow(d){

var form = new FormData();

 form.append("d",d);

 var r = new XMLHttpRequest();

 r.onreadystatechange = function(){

  if(r.status == 200 && r.readyState == 4){

    var response = r.responseText;

    alert(response);
  }
 }
 r.open("POST","deleterow.php",true);
 r.send(form);
}


function qty (){

  var qty = document.getElementById("qty");

  var price = document.getElementById("price");

  var subtotal = parseInt(qty.value) * parseInt(price.value);

   document.getElementById("subtotal").innerHTML = view;

   var view = subtotal.toString();

}


