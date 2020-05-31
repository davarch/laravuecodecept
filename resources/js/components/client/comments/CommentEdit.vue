<template>
    <div>
        <div class="panel panel-default">
            <form v-on:submit.prevent="saveForm()">
                <div class="row">
                    <div class="col-md-8 form-group">
                        <textarea type="text" v-model="post.content" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 form-group">
                        <router-link to="/" class="btn btn-default btn-primary">Назад</router-link>
                        <button class="btn btn-success">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.postId = id;
            axios.get('/client/comments/' + id)
                .then(function (resp) {
                    app.post = resp.data;
                })
                .catch(function () {
                    alert("Не удалось загрузить коммент!")
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
                axios.patch('/client/comments/' + app.postId, newPost)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Не удалось сохранить коммент!");
                    });
            }
        }
    }
</script>
