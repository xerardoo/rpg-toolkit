<template>
    <div>
        <b-navbar toggleable="sm" type="light" variant="light">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>

            <b-navbar-brand>RPG-T</b-navbar-brand>

            <b-collapse id="nav-text-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item :to="{ path: '/' }">Dashboard</b-nav-item>
                    <b-nav-item :to="{ path: '/heroes' }">Heroes</b-nav-item>
                    <b-nav-item :to="{ path: '/monsters' }">Monster</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
    export default {
        name: "Menu",
    }
</script>

<style scoped>

</style>