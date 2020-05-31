<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createNews'}" class="btn btn-success">Добавить новость</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Список новостей</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Мета-тайтл</th>
                        <th>Мета-описание</th>
                        <th>Кейвордсы</th>
                        <th>Контент</th>
                        <th>url</th>
                        <th width="250">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(post, index) in posts">
                        <td>{{ post.name }}</td>
                        <td>{{ post.meta_title }}</td>
                        <td>{{ post.meta_description }}</td>
                        <td>{{ post.meta_keywords }}</td>
                        <td>{{ post.content }}</td>
                        <td>{{ post.url }}</td>
                        <td>
                            <router-link :to="{name: 'editNews', params: {id: post.id}}" class="btn btn-xs btn-default">
                                Редактировать
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(post.id, index)">
                                Удалить
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
                posts: []
            }
        },
        mounted() {
            let app = this;
            axios.get('/admin/news')
                .then(function (resp) {
                    app.posts = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Не удалось загрузить список новостей!");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Вы уверены, что хотите удалить новость?")) {
                    let app = this;
                    axios.delete('/admin/news/' + id)
                        .then(function (resp) {
                            app.posts.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Не удалось удалить новость!");
                        });
                }
            }
        }
    }
</script>
