// import _ from 'lodash';
// window._ = _;

// import 'bootstrap';


// try {
//     window.$ = window.jQuery = require('jquery');

//     require('bootstrap-sass');
// } catch (e) {}

// /**
//  * We'll load the axios HTTP library which allows us to easily issue requests
//  * to our Laravel back-end. This library automatically handles sending the
//  * CSRF token as a header based on the value of the "XSRF" token cookie.
//  */

// window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// require('webrtc-adapter');
import 'webrtc-adapter';
import Echo from "https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.12.0/echo.min.js";

// window.io = require('socket.io-client');

// window.Echo = new Echo({
//     broadcaster: 'socket.io',
//     host: window.location.hostname + ':6001',
//     auth: {headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr("content"),
//     }},
// });