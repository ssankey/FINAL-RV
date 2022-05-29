var showBtn  = document.getElementById("showBtn")
var closeBtn = document.getElementById("closeBtn")
var navLinks = document.getElementById("navLinks")

showBtn.onclick = function(){
    navLinks.style.right = "0";
}

closeBtn.onclick = function(){
    navLinks.style.right = "-200px";
}

const logo = document.querySelectorAll("#logo path");
console.log(logo);
for(i=0;i<=logo.length;i++){
    console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
}


var loader = document.getElementById("preloader");
window.addEventListener("load",function(){
    loader.style.display = "none";
})