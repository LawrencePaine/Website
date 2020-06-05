<template>
    <div id="example-1">
        <button v-on:click="counter += 1">Add 1</button>
        <p>The button above has been clicked {{ counter }} times.</p>
    </div>
</template>

<script>

    
    export default {
    // methods: {
    // handleScroll(event) {
    //     // Any code to be executed when the window is scrolled
    //     this.isUserScrolling = (window.scrollY > 0);
    //     console.log('calling handleScroll');
    // }
    // },

    // created() {
    // this.handleDebouncedScroll = debounce(this.handleScroll, 100);
    // window.addEventListener('scroll', this.handleDebouncedScroll);
    // },

    // beforeDestroy() {
    // // I switched the example from `destroyed` to `beforeDestroy`
    // // to exercise your mind a bit. This lifecycle method works too.
    // window.removeEventListener('scroll', this.handleDebouncedScroll);
    // }
    }
</script>
