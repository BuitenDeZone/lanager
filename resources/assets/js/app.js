/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Define any JavaScript that should be run on every page
 */
window.addEventListener('load', function() {

    // Set up copy to clipboard for any elements with that class
    var clipboard = new Clipboard('.copy-to-clipboard');
    clipboard.on('error', function(e) {
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);
    });

    // Confirm deletion for any elements with that class
    $('.confirm-deletion').on('submit', function(){
        return confirm(window.lang.get('phrase.are-you-sure-delete'));
    });
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('events', require('./components/dashboard/events.vue'));
Vue.component('event', require('./components/dashboard/event.vue'));
Vue.component('status', require('./components/dashboard/status.vue'));
Vue.component('relative-time', require('./components/dashboard/relative-time.vue'));
Vue.component('active-games', require('./components/dashboard/active-games.vue'));
Vue.component('active-game', require('./components/dashboard/active-game.vue'));
Vue.component('user-avatar', require('./components/dashboard/user-avatar.vue'));

Vue.component('schedule', require('./components/events/schedule.vue'));

Vue.component('slides', require('./components/slides/slides.vue'));
Vue.component('vue-markdown', require('vue-markdown').default);
