# Basis

Hello! Basis is basically Automattic's Underscores starter theme with Sass, Bootstrap, a gulp build process integrated, plus several nice to haves:

-		SVG Support for media library, including thumbnails

## Getting Started

Copy the files to a theme folder of your choosing.  Now let's do some searching and replacing:
-   Search for:  `'_basis'`  and replace with:  `'project-name'`  (inside single quotations) to capture the text domain
-   Search for:  `_basis_`  and replace with:  `project-name_`  to capture all the function names
-   Search for:  `Text Domain: _basis`  and replace with:  `Text Domain: project-name`  in style.css
-   Search for (and include the leading space):  `_basis`  and replace with:  `Project Name`  (with a space before it) to capture DocBlocks
-   Search for:  `_basis-`  and replace with:  `project-name-`  to capture prefixed handles
-   Search for  `_basis.pot`  and replace with:  `project-name.pot`  to capture translation files
-   Search for  `basis.dv`  and replace with:  `project-name.dev`  to match your local development URL
-   Edit the theme information in the header of style.scss to meet your needs

## The Asset Layout

All source files should be stored under /src. The build files produced will go to the appropriate places with the main stylesheet and minified version going to template root and JS going to assets/scripts.

There is currently no build process for admin styles, so we recommend you make those manually under assets/css/admin.

#### SASS

Of course you are free to modify this anyway you want, but here is a simple proposed layout for the SASS structure.

`-vendor`             Store your third-party style sheets here

`--bootstrap`         Bootstrap

`--fontawesome`       Fontawesome

`-views`              Your theme's style sheets

`--elements`          individual and reusable styles

`--templates`         template specific styles

`style.scss`          brings it all together

#### JavaScript

`-scripts` Anything under scripts and not in the concat subfolder will be minified as an individual file using the names you provide.
`--concat` Anything stored in here will be combined into project.min.js

## Build Process

Basis uses gulp. You are obviously free to use your own desktop build tools, but note that Gulp provides a consistent build process for multiple developers distributed across multiple OS's. We highly recommend you utilize gulp for development and Basis is not tested with other environments.

The Gulp process includes

-SCSS Linting and minification with integrated sourcemaps.
-JS Linting and minification with integrated sourcemaps.
-Autoprefixer for CSS.
-BrowserSync for real-time style update injection and automated browser reload on template file changes.

Step one: know npm and Gulp. We're not going to cover how to install the dependencies here but a little googling will get you up and running FAST.

Start by installing the packages.  Go to the template root and type:

`npm -install`

Once that process is finished, open Gulpfile.js in your code editor and find the following line:

`'proxy': 'basis.dev'`

Change 'basis.dev' to the url for your local development environment and save.

### Getting the Build Running

You start the build by typing the following from the template root folder in your command line:

`gulp watch`

Assuming there are no errors, your changes should be picked up and integrated into the build in real time.
