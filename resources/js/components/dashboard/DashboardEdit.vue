<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Create new Dashboard</div>
            <div class="panel-body">
                <form v-on:submit.prevent="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Dashboard name</label>
                            <input type="text" v-model="dashboard.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Dashboard address</label>
                            <input type="text" v-model="dashboard.address" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Dashboard website</label>
                            <input type="text" v-model="dashboard.website" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Dashboard email</label>
                            <input type="text" v-model="dashboard.email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.dashboardId = id;
            axios.get('/admin/dashboard/' + id)
                .then(function (resp) {
                    app.dashboard = resp.data;
                })
                .catch(function () {
                    alert("Could not load your dashboard")
                });
        },
        data: function () {
            return {
                dashboardId: null,
                dashboard: {
                    name: '',
                    address: '',
                    website: '',
                    email: '',
                }
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app = this;
                var newDashboard = app.dashboard;
                axios.patch('/admin/dashboard/' + app.dashboardId, newDashboard)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your dashboard");
                    });
            }
        }
    }
</script>
