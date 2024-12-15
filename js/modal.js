var modal = document.getElementById("modalBlock");
var closeModalOverlay = document.getElementById("overlay");
var closeModalButton = document.getElementById("closeModal");
var openModal = document.getElementById("openModal");
var openModalMobile = document.getElementById("openModalMobile");
openModal.addEventListener("click", function(){
    modal.style.display = "block";
});
openModalMobile.addEventListener("click", function(){
    modal.style.display = "block";
});
closeModalOverlay.addEventListener("click", function(){
    modal.style.display = "none";
});
closeModalButton.addEventListener("click", function(){
    modal.style.display = "none";
});
window.addEventListener("keydown", function(event) {
    if (event.key === "Escape" && modal.style.display == "block") {
        modal.style.display = "none";
    }
});