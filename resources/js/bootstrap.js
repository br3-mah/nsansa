import _ from 'lodash';
window._ = _;

import 'bootstrap';


try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

// let token = document.getElementById('csrft').value
// let token = document.head.querySelector('meta[name="csrf-token"]');

// if (token) {
//     window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
// } else {
//     console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
// }

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

<<<<<<< HEAD
require('webrtc-adapter');
window.Cookies = require('js-cookie');

import Echo from "laravel-echo"

window.io = require('socket.io-client');

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001',
    reconnectionAttempts: 5
    // csrfToken: token
});
=======
//  import Echo from 'laravel-echo';

//  window.Pusher = require('pusher-js');
 
//  window.Echo = new Echo({
//      broadcaster: 'pusher',
//      key: 'eIqgf7Il0ThPnAxcGMbRqPaHik-eh4E3A1FHQkyElpw',
//      cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//      forceTLS: false,
//      wsHost: window.location.hostname,
//      wsPort: 6001,
//  });


//  Echo.channel('events')
//  .listen('RealTimeNotification', (e) => console.log('RealTimeNotification: ' + e.message));
>>>>>>> ce9882ba29db51f8256621f3b7b41b267f566f79
