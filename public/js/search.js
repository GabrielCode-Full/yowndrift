
const show = document.getElementById("show-search");
const hide = document.getElementById("hide-search");

hide.addEventListener("click", () => {
    show.classList.toggle("to-show");
});