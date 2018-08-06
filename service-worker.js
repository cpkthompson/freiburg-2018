/**
 *  service-worker.js
 *
 *  Author  | Marco Hengstenberg
 *  Version | 0.0.9 (Freiburg 2018 Site – Live & Root)
 *
 *  Purpose | The Service Worker makes smashingconf.com available offline. I've been following the tutorial at http://www.html5rocks.com/en/tutorials/service-worker/introduction/ by Matt Gaunt
 *  License | There is no license, no copyright, no warranty, no guarantee and no support for the code provided. Handle with care though!
 *
 *  To Do   | Make updates on contents automatically available with skipWaiting
 **/

'use strict';

/**
 * This is a simple test to ensure that all of the ES2015 features used here are
 * present in the browser before executing. If it fails, the worker will not be
 * installed. As of March 2016, all browsers that support service worker APIs
 * also support these features.
 **/
try {
  [
    'var {$$test} = {$$test: null}',
    '[$$test] = [null]',
    '$$test = Object.assign({}, {})',
    '$$test = (...args) => args',
    '$$test = new Map()',
    '$$test = new Set()',
    'delete $$test'
  ].forEach(eval);
} catch (err) {
  console.warn(err);
  throw 'Service worker unmet feature dependencies';
}

/**
 * Prefix for all cache keys.
 *
 * It should be updated to a new unique value (e.g. timestamp) to force the
 * service worker to update its registrations (causing reinstallation). Changing
 * this value will result in all caches being deleted.
 **/
const CACHE_NAME = 'sf17-dev-0.0.9';

// create scope we can use
const scope = 'https://smashingconf.com/';

// Look for matches inside the cache storage and return all the things
function fetchFromCache (request) {
  return caches.match(request).then(response => {
    if (!response) {
      throw Error(`${request.url} not found in cache`);
    }
    return response;
  });
}

// Create a somehow helpful offline image as a fallback
function offlineImage () {
  var offlineSVG = '<svg role="img" aria-labelledby="offline-title"'
  + ' viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">'
  + '<title id="offline-title">Offline</title>'
  + '<g fill="none" fill-rule="evenodd">'
  + '<path fill="#fff" d="M0 0h400v300H0z"/>'
  + '<text fill="#e53b2c" font-family="Times New Roman,Times,serif"'
  + ' font-size="72" font-weight="bold">'
  + '<tspan x="93" y="172">offline</tspan></text></g></svg>';
  return new Response(offlineSVG,
    { headers: { 'Content-Type': 'image/svg+xml' } }
  );
}

// create a cache merely for an offline fallback page
function offlinePage () {
  return caches.open(`${cachePrefix}-offline`).then(cache => {
    return cache.match('https://smashingconf.com/sf-2018/offline');
  });
}

// In case you move from one page to another, I want to know about it
function isNavigateRequest (request) {
  return (request.mode === 'navigate' ||
     (request.method === 'GET' &&
       request.headers.get('accept').includes('text/html')));
}

function isImageRequest (request) {
  return (request.headers.get('Accept').indexOf('image') !== -1);
}

// Look for files to cache inside the cachefiles.json
function readCacheFileList () {
  return fetch('cachefiles.json').then(response => {
    return response.json().then(paths => {
      return paths.map(path => `${scope}${path}`);
    });
  });
}

// Now, let's wait for the install-event
self.addEventListener('install', event => {

  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return readCacheFileList().then(files => {
          return cache.addAll(files);
        });
      }).then(() => self.skipWaiting())
  );
});

// Activation
self.addEventListener('activate', function(event) {

  // var for whitelisting the current cache storage
  var cacheWhitelist = CACHE_NAME;

  // wait for activation until
  event.waitUntil(
    // look for current cache version
    caches.keys().then(cacheKeys => {
      var oldCacheKeys = cacheKeys.filter(key => {
        // return the current cache version number/prefix/name
        return (key.indexOf(cacheWhitelist) !== 0);
      });
      // get rid of all the old stuff if there's a new cache
      var deletePromises = oldCacheKeys.map(oldKey => {
        // delete the old key
        return caches.delete(oldKey);
      });
      // delete all old caches and keys
      return Promise.all(deletePromises);
    // instantly claim the new cache version and replace the old
    }).then(() => self.clients.claim())
  );
});

// Then we can start fetching stuff
self.addEventListener('fetch', event => {
  var request = event.request;

  // you navigate, you get a response
  if (isNavigateRequest(request)) {
    event.respondWith(
      // looking for the page over the network
      fetch(request)
        // nothing changed or network gone, return from cache
        .catch(() => fetchFromCache(request))
        // nothing inside the cache, return offline page
        .catch(() => caches.match(`${scope}/offline`))
    );
  // you request images, you get a response
  } else if (isImageRequest(request)) {
    event.respondWith(
      // check the cache for the image
      fetchFromCache(request)
        // image not in the cache, fetch from network
        .catch(() => fetch(request))
        // nothing in the cache, network gone, offline image it is then
        .catch(() => offlineImage())
    );
  // anything else you're doing – weirdo
  } else {
    // response you get
    event.respondWith(
      // look inside the cache we do
      fetchFromCache(request)
        // nothing happened, nothing found, let's look over the network
        .catch(() => fetch(request))
    );
  }
});
