<template>
<div class="container">
    <nav class="navbar">
        <ul>
            <li class="page-scroll active"><a href="#home">Home</a></li>
            <li class="page-scroll active"><a href="#about">about</a></li>
            <li class="page-scroll active"><a href="#skills">skills</a></li>
            <li class="page-scroll active">
                <a href="#portfolio">Portfolio</a>
            </li>
            <li class="page-scroll active">
                <a href="#achievements">Achievements</a>
            </li>
            <li class="page-scroll active"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</div>    
</template>

<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 
</script>

<style language="scss">
.container{
    padding-right: 0;
    padding-left: 0;
}
</style>
