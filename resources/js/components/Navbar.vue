<template>
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
#navbar {
    /* position: sticky;
    bottom: 0; */
    /* color: #002c6a; */
    color: #002c6a;
    background-color: #002c6a;
    border: 2px solid goldenrod;
    align-items: center;
}
.navbar {
    /* position: sticky;
    bottom: 0; */
    /* color: #002c6a; */
    color: #002c6a;
    background-color: #002c6a;
    border: 2px solid goldenrod;
    align-items: center;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.navbar-top {
    /* position: sticky;
    top: 0; */
    color: black;
    /* background-color: #002c6a; */
    color: #002c6a;
    border: 2px solid goldenrod;
    align-items: center;
}
</style>
