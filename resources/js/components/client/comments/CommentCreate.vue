<template>
    <div>
        <form v-on:submit.prevent="saveForm()">
            <div class="row">
                <div class="col-md-8 form-group">
                    <textarea type="text" v-model="post.content" class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 form-group">
                    <router-link to="/" class="btn btn-default btn-primary">Назад</router-link>
                    <button class="btn btn-success">Отправить</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            app.post.id_post = app.$route.params.post_id;
        },
        data: function () {
            return {
                post: {
                    content: '',
                    id_post: '',
                    id_user: 1
                }
            }
        },
        methods: {
            saveForm() {
                let app = this;
                let newPost = app.post;

                axios.post('/client/comments', newPost)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Не удалось создать коммент!");
                    });
            }
        }
    }
</script>
