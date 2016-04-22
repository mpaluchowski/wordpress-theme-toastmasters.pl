# WordPress Theme for www.toastmasters.pl

A custom WordPress theme for the [Toastmasters in Poland website](http://www.toastmasters.pl/). Uses the official Toastmasters color system, as defined by the organization's [Brand Guidelines](https://www.toastmasters.org/Leadership-Central/Logos-Images-and-Templates), but with a fresh twist to underline the youth dynamic of the organization in Poland.

## Screenshot

![Toastmasters.pl Theme Screenshot](screenshot.png?raw=true)

## Features

* self-contained---doesn't rely on external widgets or plug-ins,
* fully responsive---works on any screen size,
* HTML5 and CSS3,
* support for translations.

## Requirements

* [PHP](http://php.net/) 5.6 or newer,
* [WordPress](https://wordpress.org/) 4.5 or newer,
* supports Internet Explorer 11, Edge and any current version of Chrome or FireFox. This is mostly due to use of [CSS flexbox](http://caniuse.com/#feat=flexbox).

## Installation

1. Unpack (or clone) the theme into a subdirectory of your WordPress's `wp-content/themes/`, named for instance `toastmasterspl`.
2. Parse the [SASS](http://sass-lang.com/) files into proper CSS:

    ```
    sass --sourcemap=none --style compressed -E UTF-8 --update wp-content/themes/toastmasterspl/
    ```
3. The theme should now be available in your Themes WordPress section. You can activate it and customize to your liking.

## License

Copyright 2016 Michał Paluchowski

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
