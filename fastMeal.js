onResize();
function onResize(){
    var w = document.documentElement.clientWidth;
    if(w<753){
        relativan.classList.add("relativanOpis");
    }
    else{
        relativan.classList.remove("relativanOpis");
    }  
}



