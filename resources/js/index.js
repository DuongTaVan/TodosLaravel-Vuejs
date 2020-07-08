import Create from './components/CreateTodo'
import Edit from './components/EditTodo'
import ShowView from './components/ShowView'
export const routes = [
    { path: '/', name: 'todo', component: ShowView },
    { path: '/todos/create', name: 'create', component: Create },
    { path: '/todos/edit/:id', name: 'edit', component: Edit },
]