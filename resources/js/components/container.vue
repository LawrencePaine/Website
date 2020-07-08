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
export default {
    created() {
        window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
        handleScroll(event) {
            // Any code to be executed when the window is scrolled
            $("#navbar").addClass("navbar-top");
        }
    }
};
</script>

<style language="scss">
#navbar {
    position: sticky;
    bottom: 0;
    /* color: #002c6a; */
    color: #002c6a;
    background-color: #002c6a;
    border: 2px solid goldenrod;
    align-items: center;
}
.navbar {
    position: sticky;
    bottom: 0;
    /* color: #002c6a; */
    color: #002c6a;
    background-color: #002c6a;
    border: 2px solid goldenrod;
    align-items: center;
}
.navbar-top {
    position: sticky;
    top: 0;
    color: black;
    /* background-color: #002c6a; */
    color: #002c6a;
    border: 2px solid goldenrod;
    align-items: center;
}
</style>
