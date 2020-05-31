export default {

    state: {
        token: localStorage.getItem('access_token') || null,
        todos: []
    },

    getters: {
        allTodos(state) {
            return state.todos;
        }
    },

    actions: {
        getTodos(ctx) {
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + ctx.state.token
            axios.get('/todos')
                .then(response => {
                    ctx.commit('updateTodos', response.data)
                })
                .catch(error => {
                    console.log(error)
                })
        }
    },

    mutations: {
        updateTodos(state, todos) {
            state.todos = todos
        }
    },

}
