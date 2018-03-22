# Basis

Hello! Basis is basically Automattic's Underscores starter theme with Sass, Bootstrap, and a gulp build process integrated.

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

## Build Process

Start by installing the packages:

    npm -install

Your sass and JS should go in the assets/ folder.  

For JS, anything in the scripts/concat/ folder will be combined into project.js and project.min.js.  Anything in the scripts/ folder will be linted and minimized.