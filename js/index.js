const btn = document.querySelector("#btn");
const menu = document.querySelector(".menu-cover")

btn.addEventListener("click", () => {
    menu.classList.toggle("active")
})