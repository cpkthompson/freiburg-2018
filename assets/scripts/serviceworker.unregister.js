/**
 *  serviceworker.unregister.js
 *
 *  Author    | Marco Hengstenberg
 *  Version   | 0.0.1
 *
 *  Purpose   | This will unregister a working service worker.
 *  License   | There is no license, no copyright, no warranty, no guarantee and no support for the code provided. Handle with care though!
 *
 *  Usage     | Please use this as an inline script just before the closing </body> tag.
 *
 *  Hint      | You need to replace the register script with this.
 *
 */

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.getRegistrations().then(function (registrations) {
    registrations.forEach(function (registration) {
      registration.unregister().then(function (success) {
        if (success) console.log('ServiceWorker unregistered');
      });
    })
  });
}
