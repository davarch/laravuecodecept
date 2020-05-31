<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default btn-primary">Назад</router-link>
        </div>

        <div class="panel panel-default">
            <h1 class="panel-heading">Редактирование новости</h1>
            <div class="panel-body">
                <form v-on:submit.prevent="saveForm()">
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label class="control-label">Название</label>
                            <input type="text" v-model="post.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label class="control-label">Мета-тайтл</label>
                            <input type="text" v-model="post.meta_title" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label class="control-label">Мета-описание</label>
                            <input type="text" v-model="post.meta_description" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label class="control-label">Кейвордсы</label>
                            <input type="text" v-model="post.meta_keywords" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label class="control-label">Контент</label>
                            <textarea type="text" v-model="post.content" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label class="control-label">url</label>
                            <input type="text" v-model="post.url" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <button class="btn btn-success">Сохранить</button>
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
            app.postId = id;
            axios.get('/admin/news/' + id)
                .then(function (resp) {
                    app.post = resp.data;
                })
                .catch(function () {
                    alert("Не удалось загрузить новость")
                });
        },
        data: function () {
            return {
                postId: null,
                post: {
                    name: '',
                    meta_title: '',
                    meta_description: '',
                    meta_keywords: '',
                    content: '',
                    url: '',
                }
            }
        },
        methods: {
            saveForm() {
                let app = this;
                let newPost = app.post;
                axios.patch('/admin/news/' + app.postId, newPost)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Не удалось сохранить новость!");
                    });
            }
        }
    }
</script>
