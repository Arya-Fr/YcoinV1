var inn = document.getElementsByClassName("temp");
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");

btns[0].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  var curr = document.getElementById("ac");
  curr.id = "";
  curr.setAttribute("name", "");
  current[0].className = current[0].className.replace(" active", "");

  this.className += " active";
  inn[0].id += "ac";
  inn[0].setAttribute("name", "active");
})

btns[1].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  var curr = document.getElementById("ac");
  curr.id = "";
  curr.setAttribute("name", "");
  current[0].className = current[0].className.replace(" active", "");

  this.className += " active";
  inn[1].id += "ac";
  inn[1].setAttribute("name", "active");
})

btns[2].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  var curr = document.getElementById("ac");
  curr.id = "";
  curr.setAttribute("name", "");
  current[0].className = current[0].className.replace(" active", "");

  this.className += " active";
  inn[2].id += "ac";
  inn[2].setAttribute("name", "active");
})

btns[3].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  var curr = document.getElementById("ac");
  curr.id = "";
  curr.setAttribute("name", "");
  current[0].className = current[0].className.replace(" active", "");

  this.className += " active";
  inn[3].id += "ac";
  inn[3].setAttribute("name", "active");
})

btns[4].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  var curr = document.getElementById("ac");
  curr.id = "";
  curr.setAttribute("name", "");
  current[0].className = current[0].className.replace(" active", "");

  this.className += " active";
  inn[4].id += "ac";
  inn[4].setAttribute("name", "active");
})

var sub = document.getElementById("minbut");
var inp = document.getElementById("mine");
var barre = document.getElementById("barre");

sub.addEventListener("click", function(){
  this.className += "block";
  barre.className += " anim";
  setTimeout(() => {
    inp.submit();
    this.className = this.className.replace("block", "");
    barre.className = this.className.replace("anim", "");
  }, 10000);
})