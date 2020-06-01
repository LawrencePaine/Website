<template>
    <nav class="Navbar" style="position: sticky" >
        <ul>
            <li class="page-scroll active"><a href="#home">Home</a></li>
            <li class="page-scroll active"><a href="#about">about</a></li>
            <li class="page-scroll active"><a href="#skills">skills</a></li>
            <li class="page-scroll active"><a href="#portfolio">Portfolio</a></li>
            <li class="page-scroll active"><a href="#achievements">Achievements</a></li>
            <li class="page-scroll active"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</template>

<script>
export default {
    created () {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
            window.removeEventListener('scroll', this.handleScroll);
        },
        methods: {
            handleScroll (event) {
            // Any code to be executed when the window is scrolled
            }
        }
}
</script>

<style>
        #Navbar {
            position: sticky;
            bottom: 0;
            color: #5e90d6;
            background-color: #5e90d6;
            border: 2px solid goldenrod;
            align-items: center;
        }
        .navbar-top {
            position: sticky;
            top: 0;
            color: black;
            background-color: #5e90d6;
            border: 2px solid goldenrod;
            align-items: center;
        }
</style>