<template>
    <button @click="goUp" class="btn-up" v-bind:class="{ 'd-block': show }">Up</button>
</template>

<script>
    // Based on: https://www.w3schools.com/howto/howto_js_scroll_to_top.asp

    export default {
        name: "ScrollTop",
        props: ['top'],
        data: function () {
            return {
                show: false,
                topPixels: this.top
            }
        },
        methods: {
            scrolling: function () {
                this.show = (document.body.scrollTop > this.topPixels ||
                    document.documentElement.scrollTop > this.topPixels)
            },
            goUp: function () {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        },
        created() {
            window.addEventListener('scroll', this.scrolling);
        },
        destroyed() {
            window.removeEventListener('scroll', this.scrolling);
        }
    }
</script>

<style scoped>
    .btn-up {
        display: none;
        position: fixed; /* Fixed/sticky position */
        bottom: 20px; /* Place the button at the bottom of the page */
        right: 30px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        border: none; /* Remove borders */
        outline: none; /* Remove outline */
        background-color: red; /* Set a background color */
        color: white; /* Text color */
        cursor: pointer; /* Add a mouse pointer on hover */
        padding: 10px; /* Some padding */
        border-radius: 10px; /* Rounded corners */
    }

    .btn-up:hover {
        background-color: #555; /* Add a dark-grey background on hover */
    }
</style>