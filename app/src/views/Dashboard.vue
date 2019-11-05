<template>
    <div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Available Heroes</h4>
                        <h3><span class="badge badge-primary">{{herostats.count}}</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Popular Heroe Race</h4>
                        <h3><span class="badge badge-primary">{{herostats["popular-race"].name}}</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Popular Heroe Class</h4>
                        <h3><span class="badge badge-primary">{{herostats["popular-class"].name}}</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Popular Heroe Weapon</h4>
                        <h3><span class="badge badge-primary">{{herostats["popular-weapon"].name}}</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Available Monsters</h4>
                        <h3><span class="badge badge-primary">999</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Popular Monster Race</h4>
                        <h3><span class="badge badge-primary">XXXXX XXXXX</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Popular Monster Ability</h4>
                        <h3><span class="badge badge-primary">XXXXX XXXXX</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Axios from 'axios'

    export default {
        name: 'Dashboard',
        mounted() {
            this.getHeroStats();
        },
        data() {
            return {
                'herostats': {
                    'count': 0,
                    'popular-race': {
                        'count': 0,
                        'name': '',
                    },
                    'popular-class': {
                        'count': 0,
                        'name': '',
                    },
                    'popular-weapon': {
                        'count': 0,
                        'name': '',
                    },
                }
            }
        },
        methods: {
            getHeroStats() {
                Axios.get(`${this.APIHOST }/dashboard/heroes`)
                    .then(response => {
                        this.herostats = response.data
                    })
                    .catch(error => console.log(error))
            },
        }
    }
</script>
