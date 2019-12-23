<?php

header("content-type:text/css");


$padding_top= 0;
echo <<<CSS
@charset "UTF-8";

/*

# Thank you Håkon Wium Lie (@wiumlie) for inventing CSS.
# Thank you Eric Meyer (@meyerweb) for inventing Eric Meyer’s CSS Reset

# CSS file

*/

/* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
}

body {
    line-height: 1;
    background: #28272a;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}


/* Hack */
@font-face {
  font-family: 'Hack';
  src: url('fonts/hack-regular-subset.woff2?sha=3114f1256') format('woff2'), url('fonts/hack-regular-subset.woff?sha=3114f1256') format('woff');
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: 'Hack';
  src: url('fonts/hack-bold-subset.woff2?sha=3114f1256') format('woff2'), url('fonts/hack-bold-subset.woff?sha=3114f1256') format('woff');
  font-weight: 700;
  font-style: normal;
}
@font-face {
  font-family: 'Hack';
  src: url('fonts/hack-italic-subset.woff2?sha=3114f1256') format('woff2'), url('fonts/hack-italic-webfont.woff?sha=3114f1256') format('woff');
  font-weight: 400;
  font-style: italic;
}
@font-face {
  font-family: 'Hack';
  src: url('fonts/hack-bolditalic-subset.woff2?sha=3114f1256') format('woff2'), url('fonts/hack-bolditalic-subset.woff?sha=3114f1256') format('woff');
  font-weight: 700;
  font-style: italic;
}

html{position:relative;min-height:100%;background:#fafafa;}
body{margin-bottom:150px;margin:0;overflow-x:hidden;}

header,footer{width:100%;}
header{
  height: 65px;
  position: fixed;
  top: 0;
  background: #161616;
  box-shadow: 0 0px 6px 6px #00000024;
  z-index: 1;
}

#header{ 
  display: flex;
  align-items: center;
}
#header::after {
  content: '';
  clear: both;
  display: table;
}
#header div.brand {
  line-height: 0;
}
#header div.brand, 
#header div.languages {
  display: inline-block;
  font-family: 'Hack';
  color: #fff;
}
#header div.brand img{height:20px;}
#header div.brand a,
#header div.languages a {
  text-decoration: none;
  color: #fff;
}
#header div.languages {
  margin-left: auto;
  font-family: 'Hack';
  font-weight: 400;
  font-size: 0.8em;
  color: #fff;
}
#header div.languages a:link,
#header p a:visited,
#header p a:hover,
#header p a:active {
  text-decoration: none;
  color: #fff;
  padding-bottom: .1em;
}
#header div.languages a:hover {
  border-bottom: 1px solid #fff;
}
#header div.languages a.active {
  border-bottom: 1px solid #fff;
}
#header aside.social-links {
  position: fixed;
  top: 0;
  margin-top: 200px;
  padding-left: 6.5px;
  width: 35px;
  font-size: 22px;
}
#header aside.social-links a:link,
#header aside.social-links a:visited,
#header aside.social-links a:hover,
#header aside.social-links a:active {
  text-decoration: none;
  color: #f45d22;
}
#header aside ul li {
  padding-bottom: 22px;
}

#author-box {
    width: 100%;
    padding-bottom: 50px;
    background: #1c1c1c;
}

#author-description {
    top: 0;
    margin: auto;
    padding-top: 110px;
    line-height: 1.6;
    font-family: 'Hack';
}

#author-description h1 {
    font-size: 1.7em;
    font-weight: bold;
    margin-right: 125px;
    color: #ffffff;
}

#author-description h2 {
    margin-top: 0.6em;
    font-size: 0.8em;
    margin-right: 125px;
    color: #aaaaaa;
}

#author-description p {
    font-size: 1.1em;
    margin-top: 1.5em;
    margin-right: 125px;
    color: #aaaaaa;
}

#author-description a:link, #author-description a:visited, #author-description a:hover, #author-description a:active {
    text-decoration: none;
    margin-right: 0.5em;
    color: #aaaaaa;
}

#author-avatar {
    float: right;
    width: 100px;
    position: relative;
    overflow: hidden;
    border: 3px solid #f45d22;
    border-radius: 50%;
}

#author-avatar img {
    display: block;
    height: 100px;
}

.article-card {
    margin-top: 25px;
    padding: 25px;
    background: #1c1c1c;
    border-radius: 3px;
    border: 1px solid rgba(0,0,0,.09);
    box-shadow: 0 1px 4px rgba(0,0,0,.04);
    line-height: 1.5em;
    color: #ffffff;
}

article > p > time, .article-card > time {
    font-family: 'Hack';
    font-size: 16px;
}

.article-card p {
    font-family: 'Hack';
    font-size: 16px;
    margin-top: 20px;
    padding-bottom: 0;
}

.posts-list h1, .article-card h1 {
    font-family: 'Hack';
    font-size: 1.7em;
    line-height: 1.3em;
    font-weight: bold;
}
.posts-list h1 {
    margin: 40px 0 0 0;
}
.article-card h1 {
    padding-top: 10px;
    margin: 0;
}

.posts-list h2, .article-card h2 {
    font-family: 'Hack';
    font-size: 16px;
    font-weight: normal;
    margin: 0;
}

.article-card a:link {
    text-decoration: none;
}

nav{}

pre { 
    overflow-x: scroll;
    overflow: auto;
    margin-top: 25px;
    margin-bottom: 25px;
    padding: 15px;
    color: #f45d22;
    background: #222;
    white-space: pre;
    border-radius: 3px;
    border: 1px solid rgba(0,0,0,.09);
    box-shadow: 0 1px 4px rgba(0,0,0,.04);
    font-family: monospace;
    font-size: 1.2em;
    line-height: 1.5em;
}

em {
    font-style: italic;
}

article {
    margin: 0 auto;
}

img.cover {
    height: 300px;
    width: 100%;
    object-fit: cover;
}

article a:link, #footer a:visited, #footer a:hover, #footer a:active {
    color: #f45d22;
}

article h1, article h2, article h3, article h4, article h5, article h6 {
    color: #ffffff;
    font-family: 'Hack';
    font-weight: 700;
}

article h1 {
    padding-bottom: 20px;
    line-height: 1.5em;
}

article p, article li, article th, article td {
    font-size: 16px;
    line-height: 1.8em;
    color: #ffffff;
    font-family: 'Hack';
    font-weight: 400;
}

article strong {
    font-weight: bold;
}

article code {
    color: red;
}

article img.row {
    width: 100%;
}

article img.fullrow {
    width: 100vw;
    margin-top: 3em;
    margin-bottom: 3em;
    position: relative;
    margin-left: -50vw;
    left: 50%;
}

article img.top {
    margin-top: 0;
    margin-bottom: 0;
}

article .gallery img {
    width: 100%;
}

article .gallery img.left {
    float: left;
    padding: 0 .5em 1.3em 0;
}

article .gallery img.right {
    float: right;
    padding: 0 0 1.3em .5em;
}

article .gallery::after {
    content: '';
    clear: both;
    display: table;
}

article .map-responsive.fullrow {
    position: relative;
    overflow: hidden;
    margin-left: -50vw;
    left: 50%;
    top: 0;
    width: 100vw;
    padding-bottom: 56.25%;
}

article .map-responsive.fullrow iframe {
    width: 100vw;
    position: relative;
    padding-bottom: 3em;
}

article .map-responsive.row {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-bottom: 56.25%;
}

article .map-responsive.row iframe {
    width: 100%;
    position: relative;
    padding-bottom: 3em;
}

article img.fullrow {}

article ul {
    padding-left: 2rem;
    list-style-type: none;
}

/* Footer */

footer {
    padding: 3em 0;
    background: #fafafa;
}

#footer {
    margin: 0 auto;
    display: table;
}

#footer p {
    font-family: 'Hack';
    color: #687a86;
    font-weight: 400;
    font-size: 0.75em;
    line-height: 1.5em;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    height: 1em;
}

#footer a:link, #footer a:visited, #footer a:hover, #footer a:active {
    text-decoration: none;
    color: #f45d22;
}

#header div.languages a:link {
    margin-left: 10px;
}

@media screen and (max-width:1099px) {
    #header aside.social-links {
        display: none;
    }
    header {
        height: 56px;
    }
    #header {
        height: 56px;
        margin: 0 auto;
    }
}

/* vertical smartphones */

@media screen and (max-width:752px) {
    article {
        padding-bottom: 40px;
    }
    #header, #footer, article {
        max-width: 90%;
    }
    #author-description {
        max-width: 90%;
        color: #aaaaaa;
    }
    #disqus_thread {
        margin: auto;
        max-width: 90%;
        padding-bottom: 40px;
    }
    article h1 {
        margin: 40px 0 .4em 0;
        font-size: 2em;
    }
    article h2 {
        margin: 1.3em 0 .4em 0;
        font-size: 1.8em;
    }
    article h3 {
        margin: 1.2em 0 .3em 0;
        font-size: 1.6em;
    }
    article h4 {
        margin: 1.1em 0 .2em 0;
        font-size: 1.3em;
    }
    article h5 {
        margin: 1em 0 .3em 0;
        font-size: 1.2em;
    }
    article h6 {
        margin: 1em 0 .3em 0;
        font-size: 1.1em;
    }
    article p, article ul, article ol {
        padding-bottom: 1.2em;
    }
    article .gallery {
        margin-bottom: 1.4em;
    }
}

/* horizontal smartphones and vertical tablets */

@media screen and (min-width:753px) and (max-width:1099px) {
    article {
        padding-bottom: 75px;
    }
    #header, #footer, article {
        max-width: 80%;
    }
    #author-description {
        max-width: 80%;
    }
    #disqus_thread {
        margin: auto;
        max-width: 80%;
        padding-bottom: 75px;
    }
    article h1 {
        margin: 40px 0 .5em 0;
        font-size: 2.3em;
    }
    article h2 {
        margin: 1.5em 0 .5em 0;
        font-size: 2.2em;
    }
    article h3 {
        margin: 1.3em 0 .5em 0;
        font-size: 2em;
    }
    article h4 {
        margin: 1.2em 0 .3em 0;
        font-size: 1.6em;
    }
    article h5 {
        margin: 1em 0 .3em 0;
        font-size: 1.3em;
    }
    article h6 {
        margin: 1em 0 .3em 0;
        font-size: 1.2em;
    }
    article p, article ul, article ol {
        padding-bottom: 1.2em;
    }
    article .gallery {
        margin-bottom: 2em;
    }
    article .gallery img {
        width: 48.2%;
    }
}

/* big desktops */

@media screen and (min-width:1100px) {
    #header {
        height: 65px;
        margin: 0 auto;
    }
    article {
        max-width: 700px;
        padding-bottom: 75px;
    }
    #header, #footer {
        max-width: 1032px;
    }
    #author-description {
        max-width: 700px;
    }
    #disqus_thread {
        margin: auto;
        max-width: 700px;
        padding-bottom: 75px;
    }
    article h1 {
        margin: 40px 0 .5em 0;
        font-size: 2.3em;
    }
    article h2 {
        margin: 1.5em 0 .5em 0;
        font-size: 2.2em;
    }
    article h3 {
        margin: 1.3em 0 .5em 0;
        font-size: 2em;
    }
    article h4 {
        margin: 1.2em 0 .3em 0;
        font-size: 1.6em;
    }
    article h5 {
        margin: 1em 0 .3em 0;
        font-size: 1.3em;
    }
    article h6 {
        margin: 1em 0 .3em 0;
        font-size: 1.2em;
    }
    article p, article ul, article ol {
        padding-bottom: 1.2em;
    }
    article .gallery {
        margin-bottom: 2em;
    }
    article .gallery img {
        width: 48.6%;
    }
}

CSS;
?>
