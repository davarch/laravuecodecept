<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createDashboard'}" class="btn btn-success">Create new dashboard</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Dashboard list</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Website</th>
                        <th>Email</th>
                        <th width="100">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="dashboard, index in dashboards">
                        <td>{{ dashboard.name }}</td>
                        <td>{{ dashboard.address }}</td>
                        <td>{{ dashboard.website }}</td>
                        <td>{{ dashboard.email }}</td>
                        <td>
                            <router-link :to="{name: 'editDashboard', params: {id: dashboard.id}}" class="btn btn-xs btn-default">
                                Edit
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(dashboard.id, index)">
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                dashboards: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/admin/dashboard')
                .then(function (resp) {
                    app.dashboards = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load dashboards");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/admin/dashboard/' + id)
                        .then(function (resp) {
                            app.dashboards.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete dashboard");
                        });
                }
            }
        }
    }
</script>
