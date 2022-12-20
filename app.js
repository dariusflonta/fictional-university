var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}

ScrollReveal({
    reset:true,
    distance:'200px',
    duration:2500,
    delay:400
});

ScrollReveal.reveal("header",{delay:500, origin:"up"});
ScrollReveal.reveal('course',{delay:500, origin:"left"});