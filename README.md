# Smashing Conference Freiburg 2016 – Documentation

## Why a documentation?

This [SmashingConf](https://smashingconf.com) install will be the first with a proper offline experience presented to you by [ServiceWorkers™](https://w3c.github.io/ServiceWorker/spec/service_worker/) authored by [Marco Hengstenberg](https://github.com/MarcoHengstenberg). In order to work with the serviceworker and not break the internet, a few rules need to be in place and be followed by anyone editing contents for this website (and any other future install with a serviceworker in place).

**Warning:** not sticking to the rules and creating a mess will definitely break things. In the best case you only break the serviceworker itself and the site will work properly. If you mess up really bad, part of the contents will be inside the cache and parts won't – those parts missing will never be seen by a user with a registered serviceworker and a filled cachestorage. If you mess up _like there's no tomorrow_, for example editing parts of the configuration file that shouldn't be touched, you might end up with a blank website. _Handle with care, double or even triple check all settings and changes and be cautious. Always! A single typo can screw up a working site._

**Don't say you haven't been warned!**

## Table of Contents

1. [What is where and why](#what-is-where-and-why)
2. [How does the Serviceworker work](#how-does-the-serviceworker-work)
- 2.1. [Registering the Worker](#registering-the-worker)
- 2.2. [Inside the Serviceworker script – Install, Fetch, Activate](#inside-the-sericeworker-script---install-fetch-activate)
- 2.3. [Asset Management inside the Worker](#asset-management-inside-the-worker)
- 2.4. [Updating the Worker](#updating-the-worker)
- 2.5. [Unregistering the Worker](#unregistering-the-worker)
3. [A Manifest in JSON](#a-manifest-in-json)
4. [Last but not least - HTTPS](#last-but-not-least---https)

## What is where and why

The serviceworker script itself needs to be placed in the root of the kirby install for the conference. The manifest, the app icon and, it goes without saying, the favicon go into the root as well. That way the worker can have a scope of the full install – meaning all files inside the install can also be part of the serviceworker and thus be cached.

Most theme imagery is to be found in `/assets/images/` but as some images are connected with content on certain pages, you are required to look into each content folder for any image that needs to be cached. For example the theme image on the homepage sits inside `/content/01-home/` and an image for a speaker will be found inside `/content/02-speakers/##-firstname-lastname/`. The hash-signs are representing digits. The name of the speaker follows with dashes in between the digits, the first and the last name. Do not diverge from that pattern, it will make your life a whole lot easier.

I made sure to exclude all imagery from inside the snippets and templates, which lie inside the `/site/` directory, so we won't have to search for further assets over there.

The only stylesheet we're using with SmashingConf websites always sits inside `/assets/styles/` and follows a naming convention of `xx##.min.css`, where xx is either `fr`, `ox`, `ba`, `ny`, `sf` or whatever the name of the city is where the conference will be taking place, represented in only two letters for brevity. The hash-signs are an indicator of the year the conference will take place. Currently that would be `16`, next year this should read `17` and so on. If those sites would still be developed by the year 3000, you might want to choose a different naming convention but until then we're fine.

The only script being used sits inside `/assets/scripts/` and is called `j.js` for brevity. Inside there's the script for the dropdown navigation. We are not taking this script into the worker as when people are offline they won't be able to navigate between installs anyways and thus won't/can't use the dropdown.

**Important:** As we are referencing the `web-fonts.css` in every install from the main install only and put it into the localStorage, there's no need to use that inside the Worker!

The `config.php` file inside `/site/config/` needs to be adjusted in order to make the site SSL enabled. In this install, inside the `config.php` file on line 71, you'll find the SSL setting being set to `true`: `c::set('ssl', true);`. **Note:** no SSL, no HTTPS, no serviceworker.

Inside the configuration file you'll also be able to define where the root of the install lies – namely whether we're inside a subfolder or in the root of SmashingConf. In this install, as we're in root, you can find

```php
/* Root Install - Live */
c::set('url', 'https://smashingconf.com');
c::set('subfolder', false);
```

being uncommented from line 21 to line 23. If at some point the install moves to a subfolder, this needs to be commented and the currently commented lines 17 to 19

```php
/* Directory Install - Live */
#c::set('url', 'https://smashingconf.com/freiburg-2016');
#c::set('subfolder', 'freiburg-2016');
```

uncommented. Remove the hash-signs in front of the lines 18 & 19 to uncomment. Add them in, in front of the lines you wish to comment and thus make them unusable for Kirby.

## How does the Service Worker work

On first visit all contents of the page will be loaded as usual. The registerscript for the serviceworker sits inline in the footer after all content and all additional scripts. That way it won't interfere with the first load of the page.

Then the worker will be registered, if supported, and grab all pages and assets, put those into the cache storage of supporting browsers and deliver those for all subsequent visits. There will be no additional network requests after the initial ones.

If we decided to stop using the serviceworker, it is neccessary to remove the registerscript and replace it with the unregisterscript (currently, in this install, commented out below the registerscript in `footer.php` on line 32). This will unregister the serviceworker for any visiting user, who already had the serviceworker in place and the cache storage filled – which in turn will of course be empty then. All requests will then again run over the network or the browsercache.

### Registering the Worker

As already mentioned the script for registering the serviceworker sits inline in the footer of the page. In this install you'll want to look at `/site/snippets/footer.php` on line 31. The file itself lies in `/assets/scripts/` and is called `serviceworker.register.js`. Please alter the content of the file, when doing any changes to it in the `footer.php` file in order to keep things clean and versioned.

With `if('serviceWorker' in navigator)` I'm checking for support. If `serviceWorker` is not yet supported by the user's browser, the script will stop right there and nothing will break. Otherwise the parser will move on to the next step, which is actually registering the worker: `{navigator.serviceWorker.register(`.

Now for the first tricky part of using serviceworkers with [smashingconf.com](https://smashinconf.com). The path to the worker needs to be absolute in our case (for folder installs it doesn't work with a relative path and to switch presets for root only adds to the complexity). As we're using different directories for the current and older/new installs, there's a lot of switching going on. This switching will also need to be addressed in the serviceworker and the registerscript. If we're in the current/root install, the worker to be registered needs to be referred to with the following URL: `'https://smashingconf.com/smashingconf.serviceworker.js'`, if we're inside a new or an older install, sitting in their own subfolder, the address changes as follows: `'https://smashingconf.com/FOLDERNAME/smashingconf.serviceworker.js'` where _FOLDERNAME_ needs to be the name of the directory the install sits in.

The last part of the registerscript sets the scope the serviceworker needs to look at. The scope needs to be the root of the install. In our case it is the baseURL for the root install: `scope: 'https://smashingconf.com/'`. If we're inside a folder-install, you are required to add the name of the folder at the end of the URL. Like so: `scope: 'https://smashingconf.com/FOLDERNAME/'`. Don't forget the trailing slash!

The unregisterscript may replace the registerscript, if needed. It doesn't take any extra values or anything. Put it into the `footer.php` file where the registerscript was and it will take care of the rest.

#### All in one

Here is the complete, unminified registerscript as it is right now in this install:

```javascript
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('https://smashingconf.com/smashingconf.serviceworker.js', {
    scope: 'https://smashingconf.com/'
  });
}
```

### Inside the Serice Worker - Install, Fetch, Activate

#### Setup

We're opening the serviceworker script with `'use strict';` to make sure that the syntax is clean and robust and follow it up with a feature test for ES6 language features. _Remember:_ browsers supporting serviceworkers also support ES6, so this is not a biggie but something to test for nonetheless.

Then I set a constant named `CACHE_NAME` with a value of the unique version number, which I pass on to the cache storage. This value needs to be set to something unique on every update in order to have a new serviceworker and a new cache storage ready for the site.

A second constant called `urlsToCache` takes an array of all cache items. Each item in this array is one of all the pages and assets we want to put into the cache storage. If we are in root it suffices to add the assets as they go, if we're in a folder install you need to prefix the path to the filename with the foldername. Example:

```javascript
// Root
const urlsToCache = [
  '/',
  '/about',
  'app-icon.png',
  // and so on and so forth
]

// Folder Install
const urlsToCache = [
  '/FOLDERNAME/',
  '/FOLDERNAME/about',
  '/FOLDERNAME/app-icon',
  // and so on and so forth
]
```

**Important:** notice how there's no trailing slash after page-references like `/about`. Kirby won't add the trailing slash to pages thus we won't set it here as well. It causes the serviceworker to stop looking for any cache items when it's not able to find a single resource. Put an other way: no matter how many resources the serviceworker may have found already, if a single asset or page can't be found, the serviceworker won't put any resource into the cache storage. That's by design; not an error!

**Important:** Having an entry twice (doubled) will cause Firefox to throw an error and stop the parser. That means no serviceworker. It will not generate an error in Chrome though, so tread carefully and double or even triple check that all resources are only mentioned _once_ in the array.

**Note:** It makes sense to have all entries in alphabetical order as in Chrome devTools they will be shown in this specific order. Makes for easier debugging, if something went wrong or when pages or assets did not end up in the storage.

#### Installing

The install event consists of a few promises. We tell the serviceworker to install itself and open a new cache storage but only after the cache has been opened, all assets and pages have been added to said cache without any failure (remember: only when all cache items can be added will the serviceworker be functional, if one single asset or page cannot be cached, it will stop right there and will also not install itself).

Also, if there is a new cache because we changed the version of the serviceworker, it will skip the waiting phase, which is natural to a new serviceworker and install itself immediately.

If something went wrong a log will be sent to the console: `console.log('Oh noes. Seems the install event failed.');`.

### Asset Management inside the Worker

The next step is to fetch resources from the cache, if there's a matching resource to the initial request being sent over the network. If there is a resource matching this request it will be stopped from going over the wire and obtain the item from the cache storage instead – hence we're then offline ready.

The rest of the fetch event's function is about cloning the request. As we're talking streams here, normally there's only a single request and then it stops. In order to have two streams, one to make the browser consume the response and another one to make the cache do the same, I created a cloning function.

In other words: if the cache is open and the browser tries to request a resource, we avoid the network and go the way of the second stream towards the cache.

### Updating the Worker

Whenever we create a new instance of the serviceworker, we also have to pass it a new unique version, which has not been used before ever. Otherwise we might run into the issue, that people have that worker for this site already from a previous version and that will be used, resulting in an older version of the website being sent to the user.

That version name or number is also used in the activation event in order to whitelist the current cache version and delete any other cache from the list of storages for the user. That way we not only clean up behind ourselves, which is very important as cache storage has its limits in terms of size.

So, the final function takes care of deleting any other cache version other than the current/new one.

### Unregistering the Worker

If at some point we are tired of providing our users with an offline experience as well as reducing data being transferred over the network, whatever the reason to do that may be, we need to unregister the serviceworker.

In order to do so we need to replace the registerscript, which sits inline in the `footer.php` file, with the unregisterscript. This script lies in `/assets/scripts/` and is called `serviceworker.unregister.js`.

What it does is looking if serviceworker is supported: `if ('serviceWorker' in navigator) {` and if a serviceworker is registered: `navigator.serviceWorker.getRegistrations().then(function (registrations) {`. Whenever that is the case it will then go and remove the registration and thus also the serviceworker.

If this process was successful we log the outcome: `if (success) console.log('ServiceWorker unregistered');`.

Here is what the script looks like:

```javascript
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.getRegistrations().then(function (registrations) {
    registrations.forEach(function (registration) {
      registration.unregister().then(function (success) {
        if (success) console.log('ServiceWorker unregistered');
      });
    })
  });
}
```

## A Manifest in JSON

Going offline also means that we are somewhere in the grey area of progressive webapps, where a site works over the network but can also be made an entire offline experience – like a native app. The `manifest.json` file helps us to put a few extra bits and bytes, namely metadata, over the user's machine.

We are giving the manifest a version in order to make it updateable. Like with the serviceworker, whenever the manifest changes, we want to update the version number in order to create a new request and make the user update the file.

The name of the manifest should match with what the site's purpose is or what's in the title of the website. In our case we tell the device that it's a Smashing Conference and also which one it is: `"name": "Smashing Conference Freiburg 2016",` it goes without saying that this needs to be adjusted for every install.

As our website speaks only english we hand out a locale of `en`. That way any browser or device will know the language of our app/site.

The description should match with what we give away in the description meta inside the `<head>` of the website. In our case the description text can be adjusted in `site.txt` which lies inside the `/content/` directory. As it is now, it is way too long for a description and needs adjustment: `Smashing Conference Freiburg 2016, September 12th to 13th – an event for passionate Web designers and developers, organized by Vitaly Friedman and the Smashing Magazine Team.`. Hence I shortened the description for the manifest to: `Smashing Conference Freiburg 2016, taking place on the 12th and 13th of September`.

The `short_name` meta takes only a single word, so I opted for: `SmashingConf`.

`author` takes any first name - last name combination separated by a single space. Currently, as I am the author of the site and the manifest, I gave it my name.

Now for a more important attribute-value combination. Setting the `display` value to `browser` tells any device to open the downloaded app in a browser window with all functionality. There are other options possible but this is the one making most sense in the context of the Smashing Conference websites.

`start_url` tells the device which page to open, when the app is started. It makes most sense to direct people to the homepage as it has all the information. If any other page is preferred, we can sure adjust the value to that.

`scope`, just like inside the serviceworker registerscript tells the device what pages, assets and folders it should look for. That way it won't go outside of the scope, like one level above or a directory next to our install.

At the end of the manifest we define an icon for the device to display with the `short_name` on a user's homescreen. It is absolutely crucial to have a 96x96 pixels icon in form of a square or a circle and then give it enough whitespace around to span 128x128 pixels. This is due to the effect that most OSs will cut off a few pixels around the icon in a circular shape. That way we won't lose any pixels to that crop. It must be said that some devices might look for a larger icon (144x144) but that would require us to upscale the icon and serve different versions of it. This might come with a later version of the manifest file.

## Last but not least - HTTPS

As it is, serviceworkers only work with SSL/HTTPS enabled sites for security reasons. I enabled that setting with the SmashingConf domain, so we're good to go.
