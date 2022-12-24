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
* supports Internet Explorer 11, Edge and any current version of Chrome or Firefox. This is mostly due to use of [CSS flexbox](http://caniuse.com/#feat=flexbox).

## Installation

1. Unpack (or clone) the theme into a subdirectory of your WordPress's `wp-content/themes/`, named for instance `toastmasterspl`.
2. Parse the [SASS](http://sass-lang.com/) files into proper CSS:

    ```
    sass --no-source-map --style=compressed --update wp-content/themes/toastmasterspl/
    ```
3. The theme should now be available in your Themes WordPress section. You can activate it and customize to your liking.

## Customizing

### Logo

You can upload a logo through the theme customization screen.

* height shouldn't exceed 100px,
* width can be anything that won't collide with the page title.

### Main Navigation

The main navigation menu contains links to subpages of the website. It expects page links with some limitations:

* the first link is expected to be the home page; it will be replaced with a home icon,
* the menu has only one level of depth; links beyond the first level will not be displayed.

1. Create a new menu, call it eg. "Page Navigation",
2. Add the link to the home page first,
3. Add links to any other pages you'd like, mind the width of the screen:
    * replace long page titles with shorter labels,
    * keep the amount of links reasonable, so that the menu doesn't break into multiple lines on smaller screens (on tablets it'll be displayed vertically at the bottom of the page),
3. Set the menu to appear in the __Primary Page Navigation__ placement.

### Organization Breadcrumb Navigation

The organization breadcrumb menu displays a coma-separated list of links above the page title. It expects custom links to websites of higher organizational structures, eg. Toastmasters International and District 95.

1. Create a new menu, call it eg. "Organization Breadcrumb",
2. Add a few custom links (not too many so that the links don't break into multiple lines),
    * enter the full URL to the organization's website, eg. `http://www.toastmasters.org/`,
    * enter the name of the organizational structure, eg. `Toastmasters`.
3. Set the menu to appear in the __Organization Breadcrumb__ placement.

### Social Links

The social links menu at the bottom expects __custom links__ with URLs to popular social networks. It will extract the name of the social network from the URL and replace the textual link with a matching [FontAwesome](http://fontawesome.io/icons/#brand) icon.

1. Create a new menu, call it eg. "Social Links",
2. Add any number of custom links,
    * enter the full URL to the social network page, eg. `https://facebook.com/ToastmastersPolskaPL`,
    * as Label enter the name of the social network, eg. `Facebook`.
3. Set the menu to appear in the __Social Links__ placement.

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
