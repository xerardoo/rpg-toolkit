<template>
    <div id="app">
        <Menu/>
        <ScrollTop top="10"/>
        <div class="container">
            <h2>{{ $route.meta.title }}</h2>
            <router-view></router-view>
        </div>
    </div>
</template>

<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        height: 900px;
    }
</style>

<script>
    // @ is an alias to /src
    import Menu from '@/components/Menu.vue'
    import ScrollTop from '@/components/ScrollTop.vue'

    export default {
        name: 'app',
        components: {
            Menu,
            ScrollTop
        },
        watch: {
            $route(to) {
                document.title = 'RPG Toolkit - ' + to.meta.title || 'RPG Toolkit'
            }
        },
        created() {
            document.title = 'RPG Toolkit - ' + this.$route.meta.title || 'RPG Toolkit'
        }
    }
</script>