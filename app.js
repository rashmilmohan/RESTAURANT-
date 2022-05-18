// set date
const date = (document.getElementById("date").innerHTML= new Date().getFullYear());
// nav toggle
const navBtn = document.getElementById('nav-toggle');
const links = document.getElementById('nav-links');
console.log(navBtn);
console.log(links);
// add event listener
navBtn.addEventListener("click",()=>{
    console.log("Nav-btn clicked");
    links.classList.toggle('show-links');
})


