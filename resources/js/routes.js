export const routes = [
    {
        path: '/',
        name: 'main',
        component: ()=>import('./components/main')
    },
    {
        path: '/login',
        name: 'login',
        component: ()=>import('./components/login')
    },
    {
        path: '/register',
        name: 'register',
        component: ()=>import('./components/register')
    },
    {
        path: '/equipment',
        name: 'equipment',
        component: ()=>import('./components/equipment')
    },
    {
        path: '/types',
        name: 'types',
        component: ()=>import('./components/types')
    },
];
