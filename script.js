var btn_nasta=document.getElementById("b1");
var btn_lunch=document.getElementById("b2");
var btn_beverages=document.getElementById("b3");
var btn_desserts=document.getElementById("b4");

var nasta=document.getElementById("nasta");
var lunch=document.getElementById("lunch");
var beverages=document.getElementById("beverages");
var desserts=document.getElementById("desserts");

btn_nasta.addEventListener('click', () =>{
    nasta.style.display="Block";
    lunch.style.display="none";
    beverages.style.display="none";
    desserts.style.display="none";
})
btn_lunch.addEventListener('click', () =>{
    nasta.style.display="none";
    lunch.style.display="Block";
    beverages.style.display="none";
    desserts.style.display="none";
})
btn_beverages.addEventListener('click', () =>{
    nasta.style.display="none";
    lunch.style.display="none";
    beverages.style.display="Block";
    desserts.style.display="none";
})
btn_desserts.addEventListener('click', () =>{
    nasta.style.display="none";
    lunch.style.display="none";
    beverages.style.display="none";
    desserts.style.display="Block";
})


