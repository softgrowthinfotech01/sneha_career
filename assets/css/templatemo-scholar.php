/* 

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

*/

/* ---------------------------------------------
Table of contents
------------------------------------------------
01. font & reset css
02. reset
03. global styles
04. header
05. banner
06. features
07. testimonials
08. contact
09. footer

--------------------------------------------- */
/* 
---------------------------------------------
font & reset css
--------------------------------------------- 
*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900");
/* 
---------------------------------------------
reset
--------------------------------------------- 
*/

:root{
  --main:#ff3968;
  --main2:#0F64AC;
  --main3: #F07C27;
}

.main{
  background-color: #ff3968;;
}
.main2{
  background-color: #0F64AC;;

}
.main3{
  background-color: #F07C27;;
}

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, div
pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q,
s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li,
figure, header, nav, section, article, aside, footer, figcaption {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
}

.clearfix:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

.clearfix {
  display: inline-block;
}

html[xmlns] .clearfix {
  display: block;
}

* html .clearfix {
  height: 1%;
}

ul, li {
  padding: 0;
  margin: 0;
  list-style: none;
}

header, nav, section, article, aside, footer, hgroup {
  display: block;
}

* {
  box-sizing: border-box;
}

html, body {
  font-family: 'Poppins', sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  text-decoration: none !important;
}

h1, h2, h3, h4, h5, h6 {
  color: #1e1e1e;
  margin-top: 0px;
  margin-bottom: 0px;
  font-weight: 700;
}

ul {
  margin-bottom: 0px;
}

p {
  font-size: 14px;
  line-height: 28px;
  color: #4a4a4a;
}

img {
  width: 100%;
  overflow: hidden;
}

/* 
---------------------------------------------
Global Styles
--------------------------------------------- 
*/
html,
body {
  font-family: 'Poppins', sans-serif;
}

::selection {
  background: var(--main2);
  color: #fff;
}

::-moz-selection {
  background: var(--main2);
  color: #fff;
}

.section {
  padding-top: 30px;
  margin-top: 120px;
}

.section-heading {
  margin-bottom: 60px;
}

.section-heading h2 {
  font-size: 36px;
  font-weight: 600;
  text-transform: capitalize;
  margin: 20px 0;
  line-height: 44px;
}

.section-heading h2 em {
  color: #7a6ad8;
  font-style: normal;
}

.section-heading h6 {
  color: #7a6ad8;
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
}

.main-button a {
  display: inline-block;
  background-color: #fff;
  color: #7a6ad8;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 40px;
  padding: 0px 25px;
  border-radius: 20px;
  transition: all .3s;
}

.main-button a:hover {
  background-color: #7a6ad8;
  color: #fff;
}

/* 
---------------------------------------------
Pre-loader Style
--------------------------------------------- 
*/

.js-preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.99);
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  opacity: 1;
  visibility: visible;
  z-index: 9999;
  -webkit-transition: opacity 0.25s ease;
  transition: opacity 0.25s ease;
}

.js-preloader.loaded {
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
}

@-webkit-keyframes dot {
  50% {
      -webkit-transform: translateX(96px);
      transform: translateX(96px);
  }
}

@keyframes dot {
  50% {
      -webkit-transform: translateX(96px);
      transform: translateX(96px);
  }
}

@-webkit-keyframes dots {
  50% {
      -webkit-transform: translateX(-31px);
      transform: translateX(-31px);
  }
}

@keyframes dots {
  50% {
      -webkit-transform: translateX(-31px);
      transform: translateX(-31px);
  }
}

.preloader-inner {
  position: relative;
  width: 142px;
  height: 40px;
  background: transparent;
}

.preloader-inner .dot {
  position: absolute;
  width: 16px;
  height: 16px;
  top: 12px;
  left: 15px;
  background: #7a6ad8;
  border-radius: 50%;
  -webkit-transform: translateX(0);
  transform: translateX(0);
  -webkit-animation: dot 2.8s infinite;
  animation: dot 2.8s infinite;
}

.preloader-inner .dots {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  margin-top: 12px;
  margin-left: 31px;
  -webkit-animation: dots 2.8s infinite;
  animation: dots 2.8s infinite;
}

.preloader-inner .dots span {
  display: block;
  float: left;
  width: 16px;
  height: 16px;
  margin-left: 16px;
  background: #7a6ad8;
  border-radius: 50%;
}



/* 
---------------------------------------------
Header Style
--------------------------------------------- 
*/

.background-header {
  background-color: var(--main) !important;
  border-radius: 0px 0px 25px 25px;
  height: 95px!important;
  position: fixed!important;
  top: 0!important;
  left: 0;
  right: 0;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}

.header-area {
  position: absolute;
  background-color: transparent;
  top: 30px;
  left: 0;
  right: 0;
  z-index: 100;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}

.header-area .main-nav {
  background: transparent;
  display: flex
}

.header-area .main-nav .logo {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  display: inline-block;
}

.header-area .main-nav .logo h1 {
  font-size: 36px;
  text-transform: uppercase;
  color: #fff;
  font-weight: 600;
  margin-right: 20px;
  padding-right: 20px;
  border-right: 1px solid rgba(250, 250, 250, 0.3);
}

.background-header .main-nav .logo,
.background-header .main-nav #search {
  margin-top: 18px;
}

.header-area .main-nav #search {
  position: relative;
}

.header-area .main-nav #search input {
  background-color: rgba(255, 255, 255, 0.10);
  height: 44px;
  width: 250px;
  border-radius: 23px;
  border: none;
  color: #fff;
  font-size: 14px;
  font-weight: 300;
  padding: 0px 20px 0px;
}

.header-area .main-nav #search input::placeholder {
  color: rgba(250, 250, 250, 0.75);
}

.header-area .main-nav #search i {
  position: absolute;
  color: #fff;
  right: 20px;
  top: 15px;
  font-size: 16px;
}

.header-area .main-nav ul.nav {
  border-radius: 0px 0px 25px 25px;
  flex-basis: 100%;
  margin-right: 0px;
  justify-content: right;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  z-index: 999;
}

.header-area .main-nav .nav li:last-child {
  padding-right: 0px;
}

.header-area .main-nav .nav li {
  padding-left: 5px;
  padding-right: 5px;
  height: 40px;
  line-height: 40px;
}

.header-area .main-nav .nav li a {
  display: block;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 20px;
  font-weight: 300;
  font-size: 14px;
  height: 40px;
  line-height: 40px;
  text-transform: capitalize;
  color: #fff;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  border: transparent;
  letter-spacing: .25px;
}

.background-header .main-nav .nav {margin-top: 20px;}

.background-header .main-nav .nav li {
  height: 80px;
  line-height: 80px;
}

.header-area .main-nav .nav li:hover a {
  opacity: 0.8;
}
.header-area .main-nav .nav li a.active {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.10);
  opacity: 1;
}

.background-header .main-nav .nav li:hover a {
  opacity: 0.8;
}
.background-header .main-nav .nav li a.active {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.10);
  opacity: 1;
}

.header-area .main-nav .menu-trigger {
  cursor: pointer;
  position: absolute;
  top: 33px;
  width: 32px;
  height: 40px;
  text-indent: -9999em;
  z-index: 99;
  right: 20px;
  display: none;
}

.background-header .main-nav .menu-trigger {
  top: 20px;
}

.header-area .main-nav .menu-trigger span,
.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #fff;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #fff;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
  width: 75%;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  content: "";
}

.header-area .main-nav .menu-trigger span {
  top: 16px;
}

.header-area .main-nav .menu-trigger span:before {
  -moz-transform-origin: 33% 100%;
  -ms-transform-origin: 33% 100%;
  -webkit-transform-origin: 33% 100%;
  transform-origin: 33% 100%;
  top: -10px;
  z-index: 10;
}

.header-area .main-nav .menu-trigger span:after {
  -moz-transform-origin: 33% 0;
  -ms-transform-origin: 33% 0;
  -webkit-transform-origin: 33% 0;
  transform-origin: 33% 0;
  top: 10px;
}

.header-area .main-nav .menu-trigger.active span,
.header-area .main-nav .menu-trigger.active span:before,
.header-area .main-nav .menu-trigger.active span:after {
  background-color: transparent;
  width: 100%;
}

.header-area .main-nav .menu-trigger.active span:before {
  -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
  -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
  -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
  transform: translateY(6px) translateX(1px) rotate(45deg);
  background-color: #fff;
}

.background-header .main-nav .menu-trigger.active span:before {
  background-color: #fff;
}

.header-area .main-nav .menu-trigger.active span:after {
  -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  transform: translateY(-6px) translateX(1px) rotate(-45deg);
  background-color: #fff;
}

.background-header .main-nav .menu-trigger.active span:after {
  background-color: #fff;
}

.header-area.header-sticky .nav li a.active {
  color: #fff;
}

.visible{
  display:inline !important;
}

@media (max-width: 1200px) {
  .header-area .main-nav .nav li {
    padding-left: 2px;
    padding-right: 2px;
  }
  .header-area .main-nav .nav li a {
    padding-left: 10px;
    padding-right: 10px;
  }

}

@media (max-width: 767px) {
  .background-header .main-nav .nav,
  .header-area .main-nav .nav {
    background-color: #f1f0fe;
  }
  .background-header .main-nav .nav li a,
  .header-area .main-nav .nav li a {
    line-height: 50px;
    height: 50px;
    font-weight: 400;
    color: #1e1e1e;
    background-color: #f1f0fe;
     border-radius: 0px 0px 25px 25px;
  }
  .background-header .main-nav .nav li,
  .header-area .main-nav .nav li {
    border-top: 1px solid #ddd;
    background-color: #f1f0fe;
    height: 50px;
    border-radius: 0px 0px 25px 25px;
  }
  .background-header .main-nav .nav li:last-child,
  .header-area .main-nav .nav li:last-child {
    border-radius: 0px 0px 25px 25px;
  }
  .header-area .main-nav .nav {
    height: auto;
    flex-basis: 100%;
  }
  .header-area .main-nav .logo {
    position: absolute;
    left: 30px;
    top: 0px;
  }
  .background-header .main-nav .logo {
    top: 0px;
  }
  .background-header .main-nav .border-button {
    top: 0px !important;
  }
  .header-area .main-nav .border-button {
    position: absolute;
    top: 15px;
    right: 70px;
  }
  .header-area.header-sticky .nav li a:hover,
  .header-area.header-sticky .nav li a.active {
    color: #7a6ad8!important;
    opacity: 1;
  }
  .header-area.header-sticky .nav li.search-icon a {
    width: 100%;
  }
  .header-area {
    background-color: transparent;
    padding: 0px 15px;
    height: 80px;
    box-shadow: none;
    text-align: center;
  }
  .header-area .container {
    padding: 0px;
  }
  .header-area .logo {
    margin-left: 0px;
    margin-top: 30px;
  }
  .header-area .menu-trigger {
    display: block !important;
  }
  .header-area .main-nav {
    overflow: hidden;
  }
  .header-area .main-nav .nav {
    float: none;
    width: 100%;
    display: none;
    -webkit-transition: all 0s ease 0s;
    -moz-transition: all 0s ease 0s;
    -o-transition: all 0s ease 0s;
    transition: all 0s ease 0s;
    margin-left: 0px;
  }
  .header-area .main-nav .nav li:first-child {
    border-top: 1px solid #eee;
  }
  .header-area.header-sticky .nav {
    margin-top: 100px !important;
  }
  .background-header.header-sticky .nav {
    margin-top: 80px !important;
  }
  .header-area .main-nav .nav li {
    width: 100%;
    background: #fff;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  
}

/* 
---------------------------------------------
Banner Style
--------------------------------------------- 
*/

.main-banner {
  /* background-image: url(../images/banner-bg.jpg); */
  background-position: right bottom;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 170px 0px 120px 0px;
  background-color: var(--main);
}

.main-banner .item-1 {
  background-image: url(../images/job/job.jpg) !important ;
  box-shadow: 5px 4px 8px 3px #fff;
}

.main-banner .item-2 {
  background-image: url(../images/job/job.jpg);
}

.main-banner .item-3 {
  background-image: url(../images/job/job.jpg);
}

.main-banner .item {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  border-radius: 25px;
  padding: 100px 100px;
  margin-left: 130px;
}

.main-banner .item span.category {
  background-color: var(--main2);
  color: #fff;
  font-size: 14px;
  text-transform: uppercase;
  padding: 5px 15px;
  border-radius: 20px;
  display: inline-block;
  margin-bottom: 50px;
}

.main-banner .item h2 {
  font-size: 48px;
  font-weight: 700;
  color: #fff;
  line-height: 70px;
  width: 60%;
  margin-bottom: 40px;
}

.main-banner .item p {
  color: #fff;
  width: 65%;
}

.main-banner .item .buttons {
  display: flex;
  margin-top: 50px;
}

.main-banner .item .buttons .main-button {
  margin-right: 30px;
}

.main-banner .item .buttons .main-button a {
  font-size: 14px;
  color: #7a6ad8;
  background-color: #fff;
  display: inline-block;
  height: 50px;
  line-height: 50px;
  padding: 0px 25px;
  border-radius: 25px;
  font-weight: 500;
}

.main-banner .item .buttons .icon-button i {
  color: #7a6ad8;
  background-color: #fff;
  display: inline-block;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  margin-right: 10px;
  font-size: 16px;
}

.main-banner .item .buttons .icon-button a {
  color: #fff;
  font-size: 14px;
  font-weight: 500;
}

.main-banner .owl-nav {
  position: absolute;
  max-width: 1320px;
  bottom: 23px;
  left: 0;
  text-align: right;
}

.main-banner .owl-nav .owl-prev i,
.main-banner .owl-nav .owl-next i {
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 24px;
  display: inline-block;
  color: #fff;
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  opacity: 1;
  transition: all .3s;
}

.main-banner .owl-nav .owl-prev i {
  position: absolute;
  bottom: 65px;
}

.main-banner .owl-nav .owl-prev i:hover,
.main-banner .owl-nav .owl-next i:hover {
  opacity: 1;
  background-color: rgba(255, 255, 255, 0.5);
}


/* 
---------------------------------------------
Services Style
--------------------------------------------- 
*/

.services .service-item:hover .icon img {
  margin-top: -10px;
}

.services .service-item {
  position: relative;
  margin-top: 95px;
}

.services .service-item .icon {
  width: 190px;
  height: 190px;
  display: inline-block;
  text-align: center;
  line-height: 190px;
  background-color: #7a6ad8;
  border-radius: 50%;
  position: absolute;
  right: 0;
  top: -95px;
}

.services .service-item .icon img {
  max-width: 86px;
  transition: all .2s;
}

.services .service-item .main-content {
  border-radius: 25px;
  padding: 80px 30px 50px 30px;
  background-color: #f1f0fe;
  margin-bottom: 30px;
  margin-right: 80px;
  transition: all .4s;
}

.services .service-item h4 {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 15px;
  line-height: 30px;
  transition: all .4s;
}

.services .service-item p {
  color: #4a4a4a;
  margin-bottom: 25px;
}

/* 
---------------------------------------------
About Style
--------------------------------------------- 
*/

.about-us {
  position: relative;
  padding: 0px;
  margin-top: 130px;
}

.about-us:before {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  width: 84%;
  height: 100%;
  background-color: #f1f0fe;
  content: '';
  border-top-left-radius: 500px;
  border-bottom-left-radius: 500px;
}

.accordion {
  margin-top: -40px;
  margin-bottom: -40px;
  background-color: var(--main2);
  border-radius: 40px;
  padding: 80px 50px 50px 50px;
}

.accordion-item {
  background-color: #fff;
  border-radius: 40px !important;
  margin-bottom: 30px;
  border: none;
}

.accordion-item .accordion-button {
  outline: none;
  box-shadow: none;
  border-radius: 40px !important;
}

.accordion-button:not(.collapsed) {
  color: #7a6ad8;
  background-color: #fff;
}

h2.accordion-header button {
  padding: 15px 25px;
  font-family: 'Poppins';
  font-size: 16px;
  font-weight: 600;
}

.accordion-button::after {
  font-size: 18px;
  font-weight: 500;
  background-image: none;
  content: '+';
  width: 30px;
  height: 30px;
  display: inline-block;
  text-align: center;
  line-height: 30px;
  border-radius: 50%;
  background-color: var(--main2);
  color: #fff;
}

.accordion-button:not(.collapsed)::after {
  background-image: none;
  line-height: 32px;
  content: '-';
}

.accordion-body {
  padding: 0px 25px 30px 25px;
  font-size: 14px;
  line-height: 28px;
  color: #4a4a4a;
}

.about-us .section-heading {
  margin-left: 60px;
  margin-bottom: 0px;
}

.about-us .section-heading .main-button {
  margin-top: 50px;
}


/* 
---------------------------------------------
Courses Style
--------------------------------------------- 
*/

.courses {
  margin-top: 160px;
}

.event_filter {
  text-align: center;
}

.event_filter {
  background-color: #f1f0fe;
  border-radius: 50px;
  padding: 15px 40px;
  list-style: none;
  margin: 0 auto 70px;
  max-width: max-content;
}

.event_filter li {
  display: inline-block;
  margin: 0px 20px;
}

.event_filter li a {
  font-size: 14px;
  font-weight: 500;
  color: #1e1e1e;
  transition: all .3s;
}

.event_filter li

.event_filter li a.is_active,
.event_filter li a:hover {
  color: #7a6ad8;
}

.events_item .thumb {
  position: relative;
  /* border-radius: 25px; */
  overflow: hidden;
}

.events_item .thumb img {
  margin-bottom: -5px;
}

.events_item .thumb span.category {
  position: absolute;
  left: 30px;
  top: 30px;
  font-size: 14px;
  text-transform: uppercase;
  color: #7a6ad8;
  background-color: rgba(250, 250, 250, 0.95);
  padding: 8px 20px;
  border-radius: 25px;
  font-weight: 500;
  display: inline-block;
}

.events_item .thumb span.price {
  position: absolute;
  right: -30px;
  top: -50px;
  background-color: rgba(122, 106, 216, 0.95);
  width: 130px;
  height: 130px;
  border-radius: 50%;
  display: inline-block;
  transition: all .3s;
}

.events_item .thumb span.price h6 {
  margin-top: 72px;
  margin-left: 22px;
  font-size: 28px;
  text-transform: uppercase;
  color: #fff;
  font-weight: 700;
}

.events_item .thumb span.price em {
  font-size: 18px;
  font-weight: 500;
  font-style: normal;
  vertical-align: top;
}

.events_item {
  background-color: #ffffff;
  border-radius: 5px;
  margin-bottom: 30px;
  position: relative;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 5px 20px -3px rgba(110, 61, 221, 0.32);
  border: #e9ebec;
} 

.events_item .down-content {
  padding: 20px 30px 25px 30px;
}

.events_item .down-content span.author {
  color: #7a6ad8;
  font-size: 15px;
  display: inline-block;
  margin-bottom: 6px;
}

.events_item .down-content h4 {
  font-size: 22px;
  font-weight: 600;
  transition: all .3s;
}

.events_item:hover .down-content h4 {
  color: #7a6ad8;
}

.events_item:hover .thumb span.price {
  transform: scale(1.2);
}


/* 
---------------------------------------------
Facts Style
--------------------------------------------- 
*/

.fun-facts {
  position: relative;
  padding: 120px 0px 80px 0px;
  overflow: hidden;
}

.fun-facts:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 95%;
  height: 100%;
  background-color: var(--main2);
  content: '';
  border-top-right-radius: 500px;
  border-bottom-right-radius: 500px;
}

.fun-facts:after {
  background: url(../images/contact-dec-01.png);
  position: absolute;
  left: 15%;
  opacity: 0.5;
  top: 0;
  width: 318px;
  height: 119px;
  content: '';
  z-index: 2;
}

.fun-facts .counter {
  text-align: center;
  margin-bottom: 40px;
}

.fun-facts h2 {
  color: #fff;
  font-size: 48px;
  font-weight: 700;
}

.fun-facts h2::after {
  content: '+';
  margin-left: 5px;
}

.fun-facts p {
  color: #fff;
  font-size: 15px;
  font-weight: 500;
  margin-top: 15px;
}


/* 
---------------------------------------------
Team Style
--------------------------------------------- 
*/

.team {
  margin-top: 100px;
    padding-top: 140px;
}

.team-member {
  position: relative;
}

.team-member:hover img {
  top: -120px;
}

.team-member img {
  max-width: 220px;
  border-radius: 50%;
  position: absolute;
  top: -110px;
  left: 50%;
  transform: translateX(-110px);
  transition: all .3s;
}

.team-member .main-content {
  border-radius: 25px;
  padding: 140px 30px 40px 30px;
  background-color: #f1f0fe;
  text-align: center;
}

.team-member .main-content span.category {
  color: #7a6ad8;
  font-size: 15px;
}

.team-member .main-content h4 {
  font-size: 22px;
  font-weight: 600;
  margin-top: 8px;
  margin-bottom: 15px;
}

.team-member .main-content ul li {
  display: inline-block;
  margin: 0px 2px;
}

.team-member .main-content ul li a {
  background-color: #fff;
  color: #7a6ad8;
  display: inline-block;
  text-align: center;
  line-height: 40px;
  font-size: 18px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  transition: all .3s;
}

.team-member .main-content ul li a:hover {
  background-color: #7a6ad8;
  color: #fff;
}


/* 
---------------------------------------------
Testimonials Style
--------------------------------------------- 
*/

.testimonials {
  position: relative;
  padding: 80px 0px;
  margin-top: 150px;
}

.testimonials:before {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  width: 65%;
  height: 100%;
  background-color: #f1f0fe;
  content: '';
  border-top-left-radius: 500px;
  border-bottom-left-radius: 500px;
}

.testimonials .section-heading {
  margin-bottom: 0px;
  margin-left: 60px;
  vertical-align: middle;
}

.testimonials .section-heading p {
  margin-top: 50px;
}

.testimonials .item {
  background-color: #7a6ad8;
  border-radius: 25px;
  padding: 80px;
}

.testimonials .item p {
  font-size: 18px;
  line-height: 40px;
  color: #fff;
  font-style: italic;
  font-weight: 300;
  margin-bottom: 40px;
}

.testimonials .item img {
  border-radius: 50%;
  max-width: 100px;
  float: left;
  margin-right: 25px;
}

.testimonials .item span {
  display: inline-block;
  margin-top: 20px;
  font-size: 15px;
  color: #fff;
}

.testimonials .item h4 {
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  margin-top: 8px;
}

.testimonials .owl-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-5px);
  right: -25px;
  text-align: right;
}

.testimonials .owl-nav .owl-prev i,
.testimonials .owl-nav .owl-next i {
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 24px;
  display: inline-block;
  color: #7a6ad8;
  background-color: #fff;
  border-radius: 50%;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.10);
  opacity: 1;
  transition: all .3s;
}

.testimonials .owl-nav .owl-prev i {
  position: absolute;
  bottom: 65px;
}

.testimonials .owl-nav .owl-prev i:hover,
.testimonials .owl-nav .owl-next i:hover {
  opacity: 1;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
}


/* 
---------------------------------------------
Events Style
--------------------------------------------- 
*/

.events .section-heading {
  margin-bottom: 100px;
}

.events .item {
  background-color: #f1f0fe;
  border-radius: 25px;
  position: relative;
  padding: 40px;
  margin-bottom: 96px;
}

.events .item .image {
  position: relative;
}

.events .item .image img {
  position: absolute;
  border-radius: 25px;
  max-width: 260px;
  left: 0;
  top: -70px;
}

.events .item ul li {
  display: inline-block;
  width: 17.5%;
  vertical-align: middle;
}

.events .item ul li:first-child {
  width: 35%;
}

.events .item ul li:nth-of-type(2) {
  width: 28%;
}

.events .item ul li span.category {
  font-size: 14px;
  text-transform: uppercase;
  color: #7a6ad8;
  background-color: #fff;
  padding: 8px 20px;
  border-radius: 25px;
  font-weight: 500;
  display: inline-block;
  margin-bottom: 20px;
}

.events .item ul li h4 {
  font-size: 22px;
  font-weight: 600;
}

.events .item ul li span {
  display: inline-block;
  font-size: 14px;
  color: #4a4a4a;
  margin-bottom: 10px;
}

.events .item ul li h6 {
  font-size: 16px;
  color: #7a6ad8;
  font-weight: 600;
}

.events .item a {
  position: absolute;
  right: 0;
  top: 22px;
  background-color: #7a6ad8;
  width: 60px;
  height: 120px;
  display: inline-block;
  text-align: center;
  line-height: 120px;
  font-size: 18px;
  z-index: 1;
  color: #fff;
  border-radius: 60px 0px 0px 60px;
}


/* 
---------------------------------------------
Contact Style
--------------------------------------------- 
*/

.contact-us {
  margin-top: 80px;
  position: relative;
  padding: 50px 0px;
}

.contact-us:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 65%;
  height: 100%;
  background-color: #f1f0fe;
  content: '';
  border-top-right-radius: 500px;
  border-bottom-right-radius: 500px;
}


.contact-us  .section-heading {
  margin-right: 110px;
  margin-bottom: 0px;
}

.contact-us  .section-heading p {
  margin-top: 50px;
}

.contact-us .special-offer {
  margin-top: 50px;
  background-color: #fff;
  border-radius: 25px;
  padding: 30px 120px;
  display: inline-block;
  position: relative;
}

.contact-us .special-offer span.offer {
  position: absolute;
  left: 0;
  top: 0;
  background-color: var(--main2);
  width: 80px;
  padding: 30px 8px;
  line-height: 25px;
  height: 120px;
  border-radius: 15px 60px 60px 15px; 
  display: inline-block;
  text-align: center;
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  text-align: left;
}

.contact-us .special-offer span.offer em {
  font-size: 28px;
  font-style: normal;
  font-weight: 600;
}

.contact-us .special-offer h6 {
  font-size: 15px;
  color: #4a4a4a;
  text-transform: uppercase;
  font-weight: 400;
  margin-bottom: 15px;
}

.contact-us .special-offer h6 em {
  font-style: normal;
  color: #7a6ad8;
  font-weight: 600;
}

.contact-us .special-offer h4 {
  font-size: 22px;
  font-weight: 600;
}

.contact-us .special-offer h4 em {
  font-style: normal;
  color: #7a6ad8;
}

.contact-us .special-offer a {
  position: absolute;
  right: 30px;
  top: 35px;
  width: 50px;
  height: 50px;
  display: inline-block;
  text-align: center;
  line-height: 50px;
  background-color: var(--main2);
  color: #fff;
  border-radius: 50%;
}

.contact-us .contact-us-content {
  border-radius: 25px;
  padding: 80px;
  background-color: var(--main2);
  position: relative;
  z-index: 1;
}

.contact-us .contact-us-content::before {
  background: url(../images/contact-dec-01.png);
  position: absolute;
  left: 50%;
  transform: translateX(-149px);
  opacity: 0.5;
  top: 0;
  width: 318px;
  height: 119px;
  content: '';
  z-index: 2;
}

.contact-us .contact-us-content::after {
  background: url(../images/contact-dec-02.png);
  position: absolute;
  right: 0;
  bottom: 0;
  width: 183px;
  height: 149px;
  content: '';
  z-index: 2;
}

#contact-form input {
  width: 100%;
  height: 50px;
  border-radius: 25px;
  background-color: rgba(249, 235, 255, 0.15);
  border: none;
  outline: none;
  font-weight: 300;
  padding: 0px 20px;
  font-size: 14px;
  color: #fff;
  margin-bottom: 30px;
  position: relative;
  z-index: 3;
}

#contact-form input::placeholder {
  color: #fff;
}

#contact-form textarea {
  width: 100%;
  height: 120px;
  border-radius: 25px;
  background-color: rgba(249, 235, 255, 0.15);
  border: none;
  outline: none;
  font-weight: 300;
  padding: 20px;
  font-size: 14px;
  color: #fff;
  margin-bottom: 30px;
  position: relative;
  z-index: 3;
}

#contact-form textarea::placeholder {
  color: #fff;
}

#contact-form button {
  border: none;
  height: 50px;
  font-size: 14px;
  font-weight: 600;
  background-color: #fff;
  padding: 0px 25px;
  border-radius: 25px;
  color: #7a6ad8;
  transition: all .4s;
  position: relative;
  z-index: 3;
}

#contact-form button:hover {
  opacity: 0.8;
}

.contact-us-content .more-info {
  text-align: center;
  background: rgb(85,0,227);
  background: linear-gradient(90deg, rgba(85,0,227,1) 0%, rgba(198,61,255,1) 100%);
  border-radius: 0px 0px 23px 23px;
  padding: 45px 30px 15px 30px;
}

.contact-us-content .more-info .info-item {
  text-align: center;
  margin-bottom: 30px;
}

.contact-us-content .more-info i {
  font-size: 32px;
  color: #fff;
  margin-bottom: 15px;
}

.contact-us-content .more-info h4 a {
  color: #fff;
  font-size: 16px;
  font-weight: 400;
}

/* 
---------------------------------------------
Footer Style
--------------------------------------------- 
*/

footer {
  margin-top: 150px;
  position: relative;
  background-color: #7a6ad8;
  vertical-align: middle;
  min-height: 150px;
  border-radius: 150px 150px 0px 0px;
}

footer p {
  text-align: center;
  line-height: 150px;
  color: #fff;
  font-weight: 400;
}

footer p a {
  color: #fff;
  transition: all .3s;
  position: relative;
  z-index: 3;
}

footer p a:hover {
  opacity: 0.75;
}

footer::before {
  background: url(../images/contact-dec-01.png);
  position: absolute;
  left: 30px;
  transform: rotate(180deg);
  opacity: 1;
  bottom: 0;
  width: 318px;
  height: 119px;
  content: '';
  z-index: 2;
}


/* 
---------------------------------------------
Responsive Style
--------------------------------------------- 
*/

body {
  overflow-x: hidden;
}

@media (max-width: 767px) {
  .header-area {
    top: 0px;
  }
  .header-area .main-nav .logo h1 {
    border-right: none;
  }
  .main-banner .item {
    padding: 80px 30px 120px 30px !important;
  }
  .main-banner .owl-nav {
    left: 30px !important;
  }
  .event_filter  {
    padding: 15px 20px;
  }
  .event_filter li {
    display: inline-block;
    margin: 0px 10px;
  }
}

@media (max-width: 992px) {
  .header-area .main-nav #search input,
  .header-area .main-nav #search i {
    display: none;
  }
  .header-area .main-nav .logo h1 {
    font-size: 34px;
  }
  .header-area .main-nav .logo {
    border-right: none;
  }
  .main-banner {
    padding-top: 100px;
  }
  .main-banner .item {
    padding: 100px 60px 140px 60px;
    margin-left: 0px;
    text-align: center;
  }
  .main-banner .item h2,
  .main-banner .item p {
    width: 100%;
  }
  .main-banner .item h2 {
    font-size: 36px;
    line-height: 50px;
  }
  .main-banner .item .buttons {
    display: inline-block;
    text-align: center;
  }
  .main-banner .item .buttons .main-button {
    margin-right: 0px;
    margin-bottom: 30px;
  }
  .main-banner .owl-nav {
    left: 50% !important;
    transform: translateX(-60px) !important;
    bottom: 60px;
  }
  .main-banner .owl-nav .owl-prev i {
    bottom: 0px;
  }
  .main-banner .owl-nav .owl-next i {
    bottom: 0px;
    position: absolute;
    left: 65px;
  }
  .services {
    margin-top: 80px;
  }
  .about-us {
    margin-top: 100px;
  }
  .accordion {
    padding: 40px 25px 10px 25px;
  }
  .services .service-item .icon {
    width: 170px;
    height: 170px;
    line-height: 170px;
  }
  .about-us .section-heading {
    margin-left: 0px;
    margin-top: 120px;
  }
  .about-us::before,
  .testimonials::before,
  .contact-us::before {
    display: none;
  }
  .about-us .section-heading p,
  .testimonials .section-heading p,
  .contact-us .section-heading p {
    margin-top: 30px;
  }
  .about-us .section-heading .main-button {
    margin-top: 30px;
  }
  .about-us .main-button a {
    background-color: #7a6ad8;
    color: #fff;
  }
  .courses {
    margin-top: 100px;
  }
  .event_filter ul li {
    display: block;
    margin: 12px 5px;
  }
  .fun-facts {
    margin-top: 70px;
  }
  .fun-facts::before {
    width: 95%;
  }
  .team {
    margin-top: 160px;
  }
  .team-member {
    margin-bottom: 140px;
  }
  .testimonials {
    margin-top: -50px;
    padding: 0px;
  }
  .testimonials .section-heading {
    margin-left: 0px;
    margin-top: 40px;
  }
  .testimonials .item {
    padding: 40px 40px 60px 40px;
  }
  .testimonials .item h4 {
    font-size: 17px;
  }
  .testimonials .item img {
    margin-right: 15px;
  }
  .testimonials .owl-nav {
    display: none;
  }
  .events {
    margin-top: 80px;
  }
  .events .item {
    margin-bottom: 66px;
  }
  .events .item .image img {
    position: relative;
    max-width: 100%;
  }
  .events .item ul {
    margin-top: -40px;
  }
  .events .item ul li:first-child {
    width: 100% !important;
    margin-bottom: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid #ddd;
  }
  .events .item ul li:nth-child(2) {
    width: 40% !important;
  }
  .events .item ul li {
    display: inline-block;
    width: 28% !important;
  }
  .events .item ul li:last-child {
    text-align: right;
  }
  .events .item a {
    bottom: 150px;
    top: auto;
  }
  .events .item ul li h6 {
    font-size: 14px;
  }
  .contact-us {
    padding-top: 20px;
  }
  .contact-us .section-heading {
    margin-right: 0px;
  }
  .contact-us .special-offer {
    background-color: #f1f0fe;
    margin-bottom: 60px;
    padding: 34px 30px 34px 100px;
    width: 100%;
  }
  .contact-us .special-offer h4 {
    font-size: 17px;
  }
  .contact-us .special-offer a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    top: 15px;
    right: 15px;
  }
  .contact-us .contact-us-content {
    padding: 30px;
  }
  footer {
    margin-top: 30px;
  }
}

@media (max-width: 1200px) {
  .header-area .main-nav #search input {
    width: 200px;
  }
  .header-area .main-nav .nav li.has-sub:after {
    right: 15px;
  }
  .fun-facts:before {
    width: 95%;
  }
}