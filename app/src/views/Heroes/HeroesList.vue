<template>
    <div>
        <a name="" id="" class="btn primary" href="/heroes/new" role="button">New</a>
        <div id="table">
            <bootstrap-table :columns="columns" :data="data" :options="options"></bootstrap-table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HeroesList",
        methods: {},
        data() {
            return {
                columns: [
                    {
                        field: 'firstname',
                        title: 'First Name'
                    }, {
                        field: 'lastname',
                        title: 'Last Name'
                    }, {
                        field: 'level',
                        title: 'Level'
                    }, {
                        title: '',
                        formatter: (value, row) => {
                            return '<a class="btn btn-light"  href="/heroes/' + row['id'] + '">Detail</a>';
                        }
                    }
                ],
                data: [
                    {
                        id: 1,
                        firstname: 'XXXXX',
                        lastname: 'XXXXX',
                        nivel: 1
                    }, {
                        id: 2,
                        firstname: 'XXXXX',
                        lastname: 'XXXXX',
                        nivel: 1
                    }, {
                        id: 3,
                        firstname: 'XXXXX',
                        lastname: 'XXXXX',
                        nivel: 1
                    }, {
                        id: 4,
                        firstname: 'XXXXX',
                        lastname: 'XXXXX',
                        nivel: 1
                    }, {
                        id: 5,
                        firstname: 'XXXXX',
                        lastname: 'XXXXX',
                        nivel: 1
                    }, {
                        id: 6,
                        firstname: 'XXXXX',
                        lastname: 'XXXXX',
                        nivel: 1
                    },

                ],
                options: {
                    url: this.APIHOST + '/heroes',
                    search: true,
                    showColumns: true,
                    sidePagination: 'server',
                    pagination: true,
                    pageSize: 25,
                    pageList: [10, 25, 50, 100],
                }
            }
        }
    }
</script>

<style scoped>

</style>