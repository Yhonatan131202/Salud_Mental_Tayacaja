const popup_abrir = document.getElementById("miPopup_abrir");
const popup = document.querySelector(".popup");
const cerrar_popup = document.querySelector(".cerrar_popup");
const popup_formulario = document.querySelector(".popup_formulario");


popup_abrir.addEventListener("click",()=>{
    popup.classList.add("mostrar");
    popup_formulario.classList.add("mostrar");  
});

cerrar_popup.addEventListener("click",()=>{
    popup.classList.remove('mostrar');
    popup_formulario.classList.remove("mostrar");
});


abrir.addEventListener("click",()=>{
    popup.classList.toggle("minpopup");
});
