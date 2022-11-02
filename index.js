
function myFunction(){
    alert("Under Maintenance!")
}


var Service = document.getElementById("service");

Service.addEventListener("click",
    function(){
        alert("Under Maintanance!!")
    }
)

var icon= document.getElementById("icon");

icon.onclick= function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        icon.src= "gambar/sun.jpg";
    }else{
        icon.src= "gambar/moon1.png";
}
}
const sign = document.getElementById("sign");
sign.style.color= '#FAF4B7';