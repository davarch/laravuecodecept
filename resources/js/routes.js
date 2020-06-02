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
            //indexComment: CommentIndex,
        }
    },

    {path: '/admin/dashboard', component: DashboardIndex, name: 'dashboardIndex'},
    {path: '/admin/dashboard/create', component: DashboardCreate, name: 'createDashboard'},
    {path: '/admin/dashboard/edit/:id', component: DashboardEdit, name: 'editDashboard'},

    {path: '/admin/news', component: NewsIndex, name: 'newsIndex'},
    {path: '/admin/news/create', component: NewsCreate, name: 'createNews'},
    {path: '/admin/news/edit/:id', component: NewsEdit, name: 'editNews'},

    {path: '/admin/todos', component: TodosIndex, name: 'indexTodos'},

    {path: '/news/*/', component: CommentIndex, name: 'indexComment'},
    {path: '/comments/comment/create', component: CommentCreate, name: 'createComment'},
    {path: '/comments/comment/edit/:id', component: CommentEdit, name: 'editComment'},
]

export default routes
