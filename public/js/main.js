let checkbox_kleding = document.getElementById("kleding");
let checkbox_boeken = document.getElementById("boeken");
let checkbox_electronica = document.getElementById("electronica");
let checkbox_speelgoed = document.getElementById("speelgoed");
let checkbox_verzorging = document.getElementById("verzorging");


let list_of_product = document.getElementsByTagName("li");

checkbox_boeken.checked = true;
checkbox_kleding.checked = true;
checkbox_electronica.checked = true;
checkbox_speelgoed.checked = true;
checkbox_verzorging.checked = true;

checkbox_kleding.addEventListener('change' , function(){
    if(checkbox_kleding.checked){
            for( let i = 0; i < list_of_product.length; i++){
                if(list_of_product[i].dataset.kindOfProduct == "Kleding"){
                    list_of_product[i].style.display = "";
                }
                
                
        }
    }
    else{
        for( let i = 0; i < list_of_product.length; i++){
            if(list_of_product[i].dataset.kindOfProduct == "Kleding"){
                list_of_product[i].style.display = "none";
            }
    } 
}
    
 
});

checkbox_boeken.addEventListener('change' , function(){
    if(checkbox_boeken.checked){
            for( let i = 0; i < list_of_product.length; i++){
                if(list_of_product[i].dataset.kindOfProduct == "Boeken"){
                    list_of_product[i].style.display = "";
                }
                
        }
    } 
    else{
        for( let i = 0; i < list_of_product.length; i++){
            if(list_of_product[i].dataset.kindOfProduct == "Boeken"){
                list_of_product[i].style.display = "none";
            }
    } 
}
 
});

checkbox_electronica.addEventListener('change' , function(){
    if(checkbox_electronica.checked){
            for( let i = 0; i < list_of_product.length; i++){
                if(list_of_product[i].dataset.kindOfProduct == "Electronica"){
                    list_of_product[i].style.display = "";
                }
                
                
        }
    }
    else{
        for( let i = 0; i < list_of_product.length; i++){
            if(list_of_product[i].dataset.kindOfProduct == "Electronica"){
                list_of_product[i].style.display = "none";
            }
    } 
}
    
 
});

checkbox_speelgoed.addEventListener('change' , function(){
    if(checkbox_speelgoed.checked){
            for( let i = 0; i < list_of_product.length; i++){
                if(list_of_product[i].dataset.kindOfProduct == "Speelgoed"){
                    list_of_product[i].style.display = "";
                }
                
        }
    } 
    else{
        for( let i = 0; i < list_of_product.length; i++){
            if(list_of_product[i].dataset.kindOfProduct == "Speelgoed"){
                list_of_product[i].style.display = "none";
            }
    } 
}
 
});

checkbox_verzorging.addEventListener('change' , function(){
    if(checkbox_verzorging.checked){
            for( let i = 0; i < list_of_product.length; i++){
                if(list_of_product[i].dataset.kindOfProduct == "Verzorging"){
                    list_of_product[i].style.display = "";
                }
                
        }
    } 
    else{
        for( let i = 0; i < list_of_product.length; i++){
            if(list_of_product[i].dataset.kindOfProduct == "Verzorging"){
                list_of_product[i].style.display = "none";
            }
    } 
}
 
});

function searchbar() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            if(list_of_product[i].dataset.kindOfProduct == "Verzorging"){
                list_of_product[i].style.display = "";
            }
        } else {
            li[i].style.display = "none";
            list_of_product[i].style.display = "none";
        }
    }
}