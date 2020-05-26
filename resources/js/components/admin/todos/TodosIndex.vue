<template>
    <ul>
        <li v-for="todo in allTodos" :key="todo.id">
            Title: {{todo.title}}, Completed: {{todo.completed}}
        </li>
    </ul>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex';

    export default {
        computed: mapGetters(['allTodos']),
        methods: mapActions(['getTodos']),
        async mounted() {
            this.getTodos();
        }
    }
</script>
