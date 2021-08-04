export default [
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },

    { path: '/movies', component: require('./components/movie/Movies.vue').default },

    { path: '*', component: require('./components/NotFound.vue').default }
];
