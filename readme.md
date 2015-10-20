### October 19, 2015

# Project 3: Developer's Best Friend

* Live URL: <http://p3.eliluvish.com/>

--
## Project Description:
This site has 3 functions.  
1. a Lorem Ipsum generator  
2. a Random User Generator
3. an xkcd Style Password Generator

The site uses Laravel 5.1, PHP, HTML, and CSS. Two packages are used from packagist.org: badcow/Lorem-Ipsum for exactly what the name implies and fzaninotto/faker to generate fake user information.
Instead of placing everything in one page I divided the site in to three pages, one for each function where there is an HTML form that takes input as required by the project. In addition, however, I also added numbered buttons in the header as a shortcut for generating content.

## Screencast Demonstration:
* URL: http://screencast.com/t/lkdUhYMpkW

## Details for Teaching Team:
* The file words.txt was used to generate the word list for the xkcd password generator. I suppose I could have used a package but why reinvent the wheel when p2 is done.

## Plugins, Libraries, Packages or Outside Code:
* badcow/Lorem-Ipsum
* fzaninotto/faker
* barryvdh/laravel-debugbar
* Bootstrap for styling
* The blade code used for the user gen part (printing an array of arrays) was helpfully provided by fellow student Philip Kelnhofer in Piazza [@329](https://piazza.com/class/iaqycxk06zg3yg?cid=329)
* All of the details and outside code used for the xkcd password generator can be found in the [README for P2](https://github.com/eluvish/p2/blob/master/README.md)
* Some HTML and bootstrap CSS like the blue header and footer was adapted from <http://ironsummitmedia.github.io/startbootstrap-stylish-portfolio/> but I made some modifications.
