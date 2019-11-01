<template>
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
                        <input type="text" class="form-control" id="firstName" v-model="form.firstName" placeholder=""
                               required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lastName" class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" v-model="form.lastName" placeholder="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="race">Race:</label>
                        <select class="form-control" name="" id="race">
                            <option>-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="class">Class:</label>
                        <select class="form-control" name="" id="class">
                            <option>-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="weapon">Weapon:</label>
                        <select class="form-control" name="" id="weapon">
                            <option>-</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-md-9 col-md-3">
                        <button type="reset" class="btn btn-secondary">Discard</button>
                        <button type="submit" class="btn btn-primary ml-1">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Hero",
        data() {
            return {
                form: {
                    firstName: "",
                    lastName: "",
                    level: "",
                    race: "",
                    class: "",
                    weapon: "",
                }
            }
        },
        methods: {
            onSubmit(e) {
                e.preventDefault();
                console.log("submit")
            }
        }
    }
</script>

<style scoped>

</style>