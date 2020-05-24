<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createComment', params: {post_id:id_post}}" class="btn btn-success">Добавить
                комментарий
            </router-link>
        </div>
        <h3>Комментарии:</h3>
        <ul>
            <li v-for="(comment, index) in comments">
                <p>{{ comment.content }}</p>
                <div>
                    <router-link :to="{name: 'editComment', params: {id: comment.id}}" class="btn btn-xs btn-default">
                        Редактировать
                    </router-link>
                    <a href="#"
                       class="btn btn-xs btn-danger"
                       v-on:click="deleteEntry(comment.id, index)">
                        Удалить
                    </a>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                comments: [],
            }
        },
        props: {
            id_post: {
                required: true
            }
        },
        mounted() {
            let app = this;
            let id_post = this.id_post;
            axios.get('/api/client/comments')
                .then(function (resp) {
                    app.comments = resp.data.filter(e => e.id_post === id_post);
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Не удалось загрузить коммент!");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Вы уверены, что хотите удалить коммент?")) {
                    let app = this;
                    axios.delete('/api/client/comments/' + id)
                        .then(function (resp) {
                            app.comments.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Не удалось удалить коммент!");
                        });
                }
            }
        }
    }
</script>
