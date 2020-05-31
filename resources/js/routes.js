import DashboardIndex from "./components/dashboard/DashboardIndex";
import NewsIndex from "./components/admin/news/NewsIndex";
import CommentIndex from "./components/client/comments/CommentIndex";
import DashboardCreate from "./components/dashboard/DashboardCreate";
import DashboardEdit from "./components/dashboard/DashboardEdit";
import NewsCreate from "./components/admin/news/NewsCreate";
import NewsEdit from "./components/admin/news/NewsEdit";
import CommentCreate from "./components/client/comments/CommentCreate";
import CommentEdit from "./components/client/comments/CommentEdit";
import TodosIndex from "./components/admin/todos/TodosIndex";

const routes = [
    {
        path: '/',
        components: {
            dashboardIndex: DashboardIndex,
            newsIndex: NewsIndex,
            indexComment: CommentIndex,
            indexTodos: TodosIndex,
        }
    },

    {path: '/admin/dashboard/create', component: DashboardCreate, name: 'createDashboard'},
    {path: '/admin/dashboard/edit/:id', component: DashboardEdit, name: 'editDashboard'},

    {path: '/admin/news/create', component: NewsCreate, name: 'createNews'},
    {path: '/admin/news/edit/:id', component: NewsEdit, name: 'editNews'},

    {path: '/comments/comment/create', component: CommentCreate, name: 'createComment'},
    {path: '/comments/comment/edit/:id', component: CommentEdit, name: 'editComment'},
]

export default routes
