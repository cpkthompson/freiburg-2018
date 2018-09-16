/**
 *  serviceworker.register.js
 *
 *  Author    | Marco Hengstenberg
 *  Version   | 0.0.1
 *
 *  Purpose   | The Service Worker should make smashingconf.com available offline.
 *  License   | There is no license, no copyright, no warranty, no guarantee and no support for the code provided. Handle with care though!
 *
 *  Usage     | Please use this as an inline script just before the closing </body> tag.
 *
 *  Hint      | The serviceworker.js must sit in the root of your site, thus `scope: '/'`.
 *
 */

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('https://smashingconf.com/london-2018/smashingconf.serviceworker.js', {
    scope: 'https://smashingconf.com/london-2018'
  }).then(function(registration) {
    // Registration was successful

    var newWorker = registration.installing;

    // statechange fires every time the ServiceWorker.state changes
    newWorker.onstatechange = function() {
      // show the message on activation
      if (newWorker.state == 'activated' && !navigator.serviceWorker.controller) {
        document.querySelector('off').classList.add('show');
      }
    };
  }).catch(function(err) {
    // registration failed :(
  });
}
