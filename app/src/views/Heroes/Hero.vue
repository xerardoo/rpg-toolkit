<template>
    <div>
        <!--<div class="row">-->
            <!--<div class="col-md-1 offset-md-9">-->
                <!--<button class="btn btn-danger" @click="onDelete">Delete</button>-->
            <!--</div>-->
        <!--</div>-->
        <div class="row">
            <div class="col-md-2">
                <div class="level">
                    <b class="d-block">Level</b>
                    <font-awesome-icon icon="star"/>
                    <font-awesome-icon icon="star"/>
                    <font-awesome-icon icon="star"/>
                    <font-awesome-icon icon="star"/>
                    <font-awesome-icon icon="star"/>
                </div>
                <div class="stats">
                    <b class="d-block">Stats</b>
                    <span class="badge badge-warning">Strength 0</span> <br>
                    <span class="badge badge-info">Intelligence 0</span> <br>
                    <span class="badge badge-success">Dexterity 0</span> <br>
                </div>
            </div>

            <div class="col-md-10">
                <form @submit="onSubmit">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName" class="col-form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" v-model="form.firstname"
                                   placeholder=""
                                   required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lastName" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" v-model="form.lastname"
                                   placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="race">Race:</label>
                            <select class="form-control" v-model="form.racesid" name="" id="race">
                                <option v-for="race in races" v-bind:value="race.id" :key="race.id">
                                    {{race.name}}
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="class">Class:</label>
                            <select class="form-control" v-model="form.classesid" name="" id="class">
                                <option v-for="clas in classes" v-bind:value="clas.id" :key="clas.id">
                                    {{clas.name}}
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="weapon">Weapon:</label>
                            <select class="form-control" v-model="form.weaponsid" name="" id="weapon">
                                <option v-for="weapon in weapons" v-bind:value="weapon.id" :key="weapon.id">
                                    {{weapon.name}}
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-md-8 col-md-4">
                            <button type="button" class="btn btn-danger" @click="onDelete">Delete</button>
                            <button type="reset" class="btn btn-secondary">Discard</button>
                            <button type="submit" class="btn btn-primary ml-1">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import Axios from 'axios'

    export default {
        name: "Hero",

        mounted() {
            let param = this.$route.params.id;
            if (param !== 'new')
                Axios.get(`${this.APIHOST }/heroes/${param}`)
                    .then(response => {
                        this.form = response.data
                    })
                    .catch(error => console.log(error));

            this.loadRaces();
            this.loadClasses();
            this.loadWeapons();
        },

        data() {
            return {
                races: [],
                classes: [],
                weapons: [],
                form: {
                    id: null,
                    firstname: "",
                    lastname: "",
                    level: "",
                    racesid: "",
                    classesid: "",
                    weapon: "",
                }
            }
        },
        methods: {
            loadRaces() {
                Axios.get(`${this.APIHOST }/heroes/races`)
                    .then(response => {
                        this.races = response.data
                    })
                    .catch(error => console.log(error))
            },
            loadClasses() {
                Axios.get(`${this.APIHOST }/heroes/classes`)
                    .then(response => {
                        this.classes = response.data
                    })
                    .catch(error => console.log(error))
            },
            loadWeapons() {
                Axios.get(`${this.APIHOST }/heroes/weapons`)
                    .then(response => {
                        this.weapons = response.data
                    })
                    .catch(error => console.log(error))
            },
            onDelete() {
                let res = confirm('Are you sure ?');
                if (res) {
                    Axios.delete(`${this.APIHOST}/heroes/${this.form.id}`)
                        .then(response => {
                            console.log(response.data);
                            alert("deleted");
                            history.back();
                        })
                        .catch(error => console.log(error));
                }
            },
            onSubmit(e) {
                e.preventDefault();

                let payload = {
                    'firstname': this.form.firstname,
                    'lastname': this.form.lastname,
                    'racesid': this.form.racesid,
                    'classesid': this.form.classesid,
                    'weaponsid': this.form.weaponsid,
                };

                if (!this.form.id)
                    Axios.post(`${this.APIHOST}/heroes`, payload)
                        .then(response => {
                            console.log(response.data);
                            alert("success");
                            history.back();
                        })
                        .catch(error => console.log(error));
                else
                    Axios.put(`${this.APIHOST}/heroes/${this.form.id}`, payload)
                        .then(response => {
                            console.log(response.data);
                            alert("success");
                            history.back();
                        })
                        .catch(error => console.log(error));
            }
        }
    }
</script>

<style scoped>

</style>