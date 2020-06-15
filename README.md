# CHSPhysics-Website

The website for the Centaurus Physics Club. Built with Jekyll, HTML, and CSS. [chsphys.com](https://chsphys.com/)

### Build Instructions

Follow these instructions to compile the Jekyll project into a static website

1. Install Ruby and ruby-bundler: `sudo apt install ruby-full ruby-bundler build-essential zlib1g-dev`
2. Install Jekyll and dependencies with `source ./scripts/install`
3. You can serve the site locally for development with `source ./scripts/serve`. The site will be visible at `localhost:3000`
3. Build the site with `source ./scripts/build`. The compiled static site will be in the `_site` folder.

### Projects collection

The `_projects_collection` folder contains a markdown file with metadata, a description, and content for each of our projects. Each project in `_projects_collection` is rendered as a card and pop-up at `/projects`

##### Project yaml front matter fields

| Key | Value |
|------|---------|
| title | The name of the project|
| hash | (string, no spaces) The name which will be shown in the project url. For example, with the hash "someproject" the URL will be `/projects#someproject` |
| image | The image URL to be displayed on the project card |
| when | (string) The time frame of the project, such as "Fall 2020"|
| date_added | (date; YY-MM-DD) This should be the date the project was started or added to the collection. This is only used to order the projects, from most recent to oldest. |
| summary | Summary of project to be displayed on project card |
| visible | optional - if  set to false, the project will not be shown |

The content of each project file should be markdown.
