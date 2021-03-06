
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');
require('Nestable')
require('bootstrap-sass');
window.swal = require('sweetalert');

require('animate.css');

require('./gt.js')


/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

 window.axios = require('axios');

 window.axios.defaults.headers.common = {
    //  'X-CSRF-TOKEN': window.Laravel.csrfToken,
     'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
     'X-Requested-With': 'XMLHttpRequest'
 };

//  axios.interceptors.request.use(
//      config => {
//          if (store.state.token) {  // 判断是否存在token，如果存在的话，则每个http header都加上token
//              config.headers.Authorization = `token ${store.state.token}`;
//          }
//          return config;
//      },
//      err => {
//          return Promise.reject(err);
// });

axios.interceptors.response.use(
   response => {
      return response;
   },
   error => {
     if ((error.response.statusText == 'Unauthorized') && (error.response.status === 400 || error.response.status === 401)) {
            window.location = '/login';
     }
     return Promise.reject(error);
})

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
