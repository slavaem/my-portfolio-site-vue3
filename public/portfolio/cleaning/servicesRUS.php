<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cleaning service</title>
<link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
<link rel="icon" href="http://localhost/maxsite/uploads/favicons/favicon1.png" sizes="16x16" type="image/png"> <!--иконка для избранного-->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<style>
@import url('https://rsms.me/inter/inter.css');
body,
html {
 height: 100%;
 width: 100%;
 margin: 0;
 padding: 0;
 text-rendering: optimizeLegibility;
 -webkit-font-smoothing: antialiased;
 overflow-x: hidden;
}

body {
background-attachment: fixed;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
font-size: 16pt;
background: var(--background);
}
body:after {
  content: var(--text);
  display: block;
  text-align: center;
  font-size: 3rem;
}
.wrapper {
display: -ms-grid;
display: grid;
-ms-grid-columns: auto 0.5% 1fr;
grid-template-columns: auto 1fr;
-ms-grid-rows: auto 0.5% 1fr 0.5% auto;
grid-template-rows: auto 1fr auto;
grid-gap: 0.5%;
height: 99.5vh;
width:  100%;
margin: 0 auto;

}.wrapper > *:nth-child(1) {
-ms-grid-row: 1;
-ms-grid-column: 1;

}.wrapper > *:nth-child(2) {
-ms-grid-row: 1;
-ms-grid-column: 3;

}.wrapper > *:nth-child(3) {
-ms-grid-row: 3;
-ms-grid-column: 1;

}.wrapper > *:nth-child(4) {
-ms-grid-row: 3;
-ms-grid-column: 3;

}.wrapper > *:nth-child(5) {
-ms-grid-row: 5;
-ms-grid-column: 1;

}.wrapper > *:nth-child(6) {
-ms-grid-row: 5;
-ms-grid-column: 3;

}
.wrapper1 {
display: -ms-grid;
display: grid;
-ms-grid-columns: auto 0.1em 1fr 0.1em auto;
grid-template-columns: auto 1fr auto;
-ms-grid-rows: 1fr 0.1em 1fr 0.1em 1fr 0.1em 1fr 0.1em 1fr;
grid-template-rows: repeat(5, 1fr);
grid-gap: 10%;
-ms-grid-column-align: center;
    justify-self: center;
-ms-grid-row-align: stretch;
	align-self: stretch;
padding-top: 2%;
}.wrapper1 > *:nth-child(1) {
-ms-grid-row: 1;
-ms-grid-column: 1;
}.wrapper1 > *:nth-child(2) {
-ms-grid-row: 1;
-ms-grid-column: 3;
}.wrapper1 > *:nth-child(3) {
-ms-grid-row: 1;
-ms-grid-column: 5;
}.wrapper1 > *:nth-child(4) {
-ms-grid-row: 3;
-ms-grid-column: 1;
}.wrapper1 > *:nth-child(5) {
-ms-grid-row: 3;
-ms-grid-column: 3;
}.wrapper1 > *:nth-child(6) {
-ms-grid-row: 3;
-ms-grid-column: 5;
}.wrapper1 > *:nth-child(7) {
-ms-grid-row: 5;
-ms-grid-column: 1;
}.wrapper1 > *:nth-child(8) {
-ms-grid-row: 5;
-ms-grid-column: 3;
}.wrapper1 > *:nth-child(9) {
-ms-grid-row: 5;
-ms-grid-column: 5;
}.wrapper1 > *:nth-child(10) {
-ms-grid-row: 7;
-ms-grid-column: 1;
}.wrapper1 > *:nth-child(11) {
-ms-grid-row: 7;
-ms-grid-column: 3;
}.wrapper1 > *:nth-child(12) {
-ms-grid-row: 7;
-ms-grid-column: 5;
}.wrapper1 > *:nth-child(13) {
-ms-grid-row: 9;
-ms-grid-column: 1;
}.wrapper1 > *:nth-child(14) {
-ms-grid-row: 9;
-ms-grid-column: 3;
}.wrapper1 > *:nth-child(15) {
-ms-grid-row: 9;
-ms-grid-column: 5;
}
.box1{
  -ms-grid-column: 2;
  -ms-grid-column-span: 2;
  grid-column: 2 / 4;
  -ms-grid-row: 1;
  -ms-grid-row-span: 1;
  grid-row: 1 / 2;
}
.box2{
 -ms-grid-column-align: start;
     justify-self: start;
 -ms-grid-column: 1;
 -ms-grid-column-span: 1;
 grid-column: 1 / 2;
 -ms-grid-row: 2;
 -ms-grid-row-span: 1;
 grid-row: 2 / 3;
 margin-left:0%;
}
.box3{
  -ms-grid-column: 2;
  -ms-grid-column-span: 1;
  grid-column: 2/3;
  -ms-grid-row: 2;
  -ms-grid-row-span: 1;
  grid-row: 2/3;
  -ms-grid-column-align: start;
      justify-self: start;
}
.box4{
 -ms-grid-column-align: start;
     justify-self: start;
  -ms-grid-column: 1;
  grid-column: 1;
  -ms-grid-row: 3;
  grid-row: 3;
}
.box5{
 -ms-grid-column-align: start;
     justify-self: start;
 -ms-grid-column: 2;
 grid-column: 2;
 -ms-grid-row: 3;
 grid-row: 3;
}
.box6{
 -ms-grid-column-align: start;
     justify-self: start;
 -ms-grid-column: 1;
 grid-column: 1;
 -ms-grid-row: 4;
 grid-row: 4;
}
.box7{
 -ms-grid-column-align: start;
     justify-self: start;
 -ms-grid-column: 2;
 grid-column: 2;
 -ms-grid-row: 4;
 grid-row: 4;
}

.box8{
display: none;
}
.box9 {
  display: none;
}
.box10 {
  display: none;
}
.box11 {
  display: none;
}
.box12 {
  display: none;
}

.header {
  grid-area: hd;
  -ms-grid-column: 1;
  -ms-grid-column-span: 1;
  grid-column: 1 / 2;
  -ms-grid-row: 1;
  -ms-grid-row-span: 3;
  grid-row: 1 / 4;
  text-decoration: none;
  text-transform: capitalize;
}
.footer {
    grid-area: ft;
	-ms-grid-column: 2;
	-ms-grid-column-span: 1;
	grid-column: 2 / 3;
	-ms-grid-row: 3;
	-ms-grid-row-span: 1;
	grid-row: 3  / 4;
}
.fwraper{
   -webkit-box-flex: 1;
       -ms-flex: 1 100%;
           flex: 1 100%;
   background: grey;
   display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	padding-left:6%;
 -webkit-box-orient: horizontal;
 -webkit-box-direction: normal;
     -ms-flex-flow: row wrap;
         flex-flow: row wrap;

}
.fnavig {
 -webkit-box-orient: vertical;
 -webkit-box-direction: normal;
     -ms-flex-flow: column wrap;
         flex-flow: column wrap;
	-webkit-box-align: start;
	    -ms-flex-align: start;
	        align-items: flex-start;
	color: white;
	}
.fnavig	a {color: white!important;}
.fnavig1 {
 -webkit-box-orient: horizontal;
 -webkit-box-direction: normal;
     -ms-flex-flow: row nowrap;
         flex-flow: row nowrap;
	color: white;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	}
.fnavig1	a {color: white!important;}
.aside-1 {
  -webkit-box-flex: 1;
      -ms-flex: 1 15%;
          flex: 1 15%;
   -webkit-box-ordinal-group: 2;
       -ms-flex-order: 1;
           order: 1;
   font-family: 'Caveat', cursive;
   color: white;
   padding: .1em;
   margin: .2em;}
.msya1    {
  -webkit-box-flex: 1;
      -ms-flex: 1 20%;
          flex: 1 20%;
   -webkit-box-ordinal-group: 3;
       -ms-flex-order: 2;
           order: 2;

   padding: .1em;
   margin: .2em;
   }
.msya2    {
  -webkit-box-flex: 1;
      -ms-flex: 1 30%;
          flex: 1 30%;
  -webkit-box-ordinal-group: 4;
      -ms-flex-order: 3;
          order: 3;
  padding: .1em;
  margin: .2em;
  }
.aside-2 {
  -webkit-box-ordinal-group: 5;
      -ms-flex-order: 4;
          order: 4;
  -webkit-box-flex: 1;
      -ms-flex: 1 30%;
          flex: 1 30%;
  padding: .1em;
  margin: .2em;

  }
.fobr  {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 100%;
          flex: 1 100%;
  -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
          order: 5;
  padding: .1em;
  margin: .2em;
  border-top: 1px solid white;
  }

  /*Стили контента*/
.content {
grid-area: main;
-ms-grid-column: 2;
-ms-grid-column-span: 1;
grid-column: 2 / 3;
-ms-grid-row: 2;
-ms-grid-row-span: 1;
grid-row: 2 / 3;
text-align: center;
margin-bottom: 3%;
}
.wriper {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-flow: column nowrap;
        flex-flow: column nowrap;
margin-bottom: 0.1%;
}
.cont1 {
margin-bottom: 0.1%;
}
.cont2 {
margin-bottom: 0.1%;
}
/*Стили сайдбара*/
.sidebar {
 grid-area: sd;
 text-align: center;
 background: white;
 padding: 0 0.5em 0 0.5em;
 -ms-grid-column: 2;
 -ms-grid-column-span: 1;
 grid-column: 2 / 3;
 -ms-grid-row: 1;
 -ms-grid-row-span: 1;
 grid-row: 1 / 2;

}
.img-container img {
width: 100%;
-o-object-fit: none;
   object-fit: none;}
img {
  max-width: 50%;
  height: auto;
}

.wer {text-decoration: none; color: black;}
.parent {
  display: -ms-grid;
  display: grid;
  -ms-grid-rows: 100%;
  grid-template-rows: 100%;
  -ms-grid-columns: auto -webkit-max-content;
  -ms-grid-columns: auto max-content;
  grid-template-columns: auto -webkit-max-content;
  grid-template-columns: auto max-content;
  width: 99%;
  padding-left: .5em;
  position: fixed;
  background: #f0f0f0;
  top:-3.8em;
  -webkit-transform-origin: left bottom;
      -ms-transform-origin: left bottom;
          transform-origin: left bottom;
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg);
  margin-left:0.01em;
  z-index: 13;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: start;
}
.parent > *:nth-child(1) {-ms-grid-row: 1;-ms-grid-column: 1;
}
.parent > *:nth-child(2) {-ms-grid-row: 1;-ms-grid-column: 2;
}
.chaild1 {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
-ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
font-weight: 300;
font-size: calc(100vw /60);
line-height: 1em;
-webkit-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
margin-left: 3vh;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
 }
.chaild2 {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
-ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
-webkit-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
        transform: rotate(-180deg);
-ms-flex-item-align: center;
    align-self: center;
padding-right: .5em;
 }
.pageRUS__stroke  {
display: inline-block;
position: relative;
}
.pageRUS__stroke::before {
display: block;
position: absolute;
content: "";
height: 2px;
background-color: black;
bottom: 0;
width: 100%;
left: 0;
}

.navigation {
list-style: none;
margin: 0;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
font-weight: 300;
font-size: calc(100vw /70);
line-height: 1.6em;
}
.navigation a {
 text-decoration: none;
 padding:.4em;
 color: black; /* Цвет ссылки */
}
.navigation a:hover {
-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0 1px 2px rgba(0,0,0,0.3);
-webkit-transition: -webkit-box-shadow 0.3s ease-in-out;
transition: -webkit-box-shadow 0.3s ease-in-out;
-o-transition: box-shadow 0.3s ease-in-out;
transition: box-shadow 0.3s ease-in-out;
transition: box-shadow 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
}
#svgtele, #svginsta, #svgtfece, #svgviber {width: 1.3em; height: 1.3em;}
.navigationpanel {
 list-style: none;
 margin: 0;
 padding: 0;
 font-weight: 300;
 font-size: 1em;
 line-height: 1.6em;
}
.navigationpanel a {
  text-decoration: none;
  padding: 0.1em;
  color: black; /* Цвет ссылки */
}
.navigationpanel a:hover {
  background: rgba(0, 0, 0, .1); /* Цвет фона под ссылкой */
}
#window {fill: none;}
#forsvg {width: 1.5em; height: 1.5em; -webkit-transform: scale(1.2); -ms-transform: scale(1.2); transform: scale(1.2)}
#forsvg:hover {
-webkit-transform: scale(1.4);
    -ms-transform: scale(1.4);
        transform: scale(1.4);
-webkit-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
        transition-duration: 0.5s;}
#msg {
 display: none;
 position: absolute;
 width: 106%;
 height: 100%;
 z-index: 9;
 top: 0.1%;
 background: rgba(0, 0, 0, .1);
   }
.forbutton {
font-size: 0.9em;
line-height: 1.6em;
white-space: nowrap;
outline: .2em solid #666;
	 }
.forbutton1 {
font-size: 0.9em;
line-height: 1.6em;
white-space: nowrap;
	 }
.logotext {font-family: 'Dancing Script', cursive; font-weight: bold; font-size: 50%;}
.hamburger {
  cursor: pointer;
  -webkit-transition-property: opacity, -webkit-filter;
  transition-property: opacity, -webkit-filter;
  -o-transition-property: opacity, filter;
  transition-property: opacity, filter;
  transition-property: opacity, filter, -webkit-filter;
  -webkit-transition-duration: 0.15s;
       -o-transition-duration: 0.15s;
          transition-duration: 0.15s;
  -webkit-transition-timing-function: linear;
       -o-transition-timing-function: linear;
          transition-timing-function: linear;
  font: inherit;
  color: inherit;
  text-transform: none;
  background-color: transparent;
  border: 0;
  margin: 0;
  overflow: visible; }
 .hamburger:hover {
  outline: .3em solid black;
  -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
          transform: scale(1.05);}
  .hamburger.is-active:hover {
    }
  .hamburger.is-active .hamburger-inner,
  .hamburger.is-active .hamburger-inner::before,
  .hamburger.is-active .hamburger-inner::after {
    background-color: #000; }

.hamburger-box {
 margin: 0;
 padding: 0;
 -webkit-transform: rotate(90deg) translateY(-.3em) scale(.9);
     -ms-transform: rotate(90deg) translateY(-.3em) scale(.9);
         transform: rotate(90deg) translateY(-.3em) scale(.9);
  width: calc(100vw /60);
  height: .2em;
  display: inline-block;
  position: relative;
  vertical-align: super;

  }
.hamburger-inner {
  display: block;
  }
.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    width: 20px;
    height: 3px;
    background-color: #000;
    border-radius: 3px;
    position: absolute;
    -webkit-transition-property: -webkit-transform;
    transition-property: -webkit-transform;
    -o-transition-property: transform;
    transition-property: transform;
    transition-property: transform, -webkit-transform;
    -webkit-transition-duration: 0.15s;
         -o-transition-duration: 0.15s;
            transition-duration: 0.15s;
    -webkit-transition-timing-function: ease;
         -o-transition-timing-function: ease;
            transition-timing-function: ease; }
  .hamburger-inner::before, .hamburger-inner::after {
    content: "";
    display: block; }
  .hamburger--elastic-r .hamburger-inner {
  top: 1%;
  -webkit-transition-duration: 0.275s;
       -o-transition-duration: 0.275s;
          transition-duration: 0.275s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
       -o-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
          transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55); }
  .hamburger--elastic-r .hamburger-inner::before {
  top: 5px;
  -webkit-transition: opacity 0.125s 0.275s ease;
  -o-transition: opacity 0.125s 0.275s ease;
  transition: opacity 0.125s 0.275s ease; }
  .hamburger--elastic-r .hamburger-inner::after {
  top: 10px;
  -webkit-transition: -webkit-transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: -webkit-transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -o-transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55), -webkit-transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55); }

.hamburger--elastic-r.is-active .hamburger-inner {
  -webkit-transform: translate3d(0, 5px, 0) rotate(-135deg);
          transform: translate3d(0, 5px, 0) rotate(-135deg);
  -webkit-transition-delay: 0.075s;
       -o-transition-delay: 0.075s;
          transition-delay: 0.075s; }
  .hamburger--elastic-r.is-active .hamburger-inner::before {
   -webkit-transition-delay: 0s;
        -o-transition-delay: 0s;
           transition-delay: 0s;
   opacity: 0; }
  .hamburger--elastic-r.is-active .hamburger-inner::after {
    -webkit-transform: translate3d(0, -10px, 0) rotate(270deg);
            transform: translate3d(0, -10px, 0) rotate(270deg);
    -webkit-transition-delay: 0.075s;
         -o-transition-delay: 0.075s;
            transition-delay: 0.075s; }

.button2 {
  text-align: center;
  text-transform: uppercase;
  cursor: pointer;
  position: relative;
  display: inline-block;
  width: 5em;
  height: 1em;
  margin:  .4em  0  0  0;
  overflow: hidden;
}
.menu-button-text-wrap {
display: inline-block;
}
.menu-button-text {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
position: relative;
-webkit-transform: translate3d(-90%,-20%,0);
        transform: translate3d(-90%,-20%,0);
-webkit-transition: -webkit-transform .64s cubic-bezier(.645,.05,.355,1) 0s;
transition: -webkit-transform .64s cubic-bezier(.645,.05,.355,1) 0s;
-o-transition: transform .64s cubic-bezier(.645,.05,.355,1) 0s;
transition: transform .64s cubic-bezier(.645,.05,.355,1) 0s;
transition: transform .64s cubic-bezier(.645,.05,.355,1) 0s, -webkit-transform .64s cubic-bezier(.645,.05,.355,1) 0s;
}
.open1  {-webkit-transform: translate3d(4%,-20%,0);transform: translate3d(4%,-20%,0);}
.menu-open-text {
    margin-left: 40%;
    opacity: 1;
    -webkit-transition: opacity .6s ease-in;
    -o-transition: opacity .6s ease-in;
    transition: opacity .6s ease-in;
	 position: relative;
}
.overlay {z-index: -1;}
.open2 {display: none;}
.close1{
    margin-left: -150%;
    opacity: 1;
}
.menu-close-text {
	opacity: 1;
    -webkit-transition: opacity .6s ease-in;
    -o-transition: opacity .6s ease-in;
    transition: opacity .6s ease-in;
	position: relative;
}
a#marker {color: #33CCCC;
	border: 1px solid #33CCCC;
	border-radius: 10px;
	text-decoration: none;
	outline: none;
	position: relative;
	overflow: hidden;
    }
a#marker:hover {
color: white;
background:#33CCCC;}

a#marker1 {
background:#800000;
width: 70%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
text-decoration: none;
outline: none;
position: relative;
overflow: hidden;
border: 2px solid #fe6637;
border-radius: 10px;
}
a#marker1:before {
  content: "";
  background: -webkit-gradient(linear, left top, right top, from(rgba(255,255,255,.1)), to(rgba(255,255,255,.5)));
  background: -o-linear-gradient(left, rgba(255,255,255,.1), rgba(255,255,255,.5));
  background: linear-gradient(90deg, rgba(255,255,255,.1), rgba(255,255,255,.5));
  height: 100px;
  width: 100px;
  position: absolute;
  top: -8px;
  left: -150px;
  -webkit-transform: skewX(-45deg);
      -ms-transform: skewX(-45deg);
          transform: skewX(-45deg);
}
a#marker1:hover {
    background-color: #fe6637;
    color: #fff;
	border-radius: 9px;
}
a#marker1:hover:before {
  left: 200%;
  -webkit-transition: .8s ease-in-out;
  -o-transition: .8s ease-in-out;
  transition: .8s ease-in-out;
}
a#marker2 {
font: inherit;
width: 50%;
color: black;
margin: 0 auto;
background: #33CCCC;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
text-decoration: none;
outline: none;
position: relative;
overflow: hidden;
border-radius: 5px;
}
a#marker2:before {
  content: "";
  background: -webkit-gradient(linear, left top, right top, from(rgba(255,255,255,.1)), to(rgba(255,255,255,.5)));
  background: -o-linear-gradient(left, rgba(255,255,255,.1), rgba(255,255,255,.5));
  background: linear-gradient(90deg, rgba(255,255,255,.1), rgba(255,255,255,.5));
  height: 100px;
  width: 100px;
  position: absolute;
  top: -8px;
  left: -150px;
  -webkit-transform: skewX(-45deg);
      -ms-transform: skewX(-45deg);
          transform: skewX(-45deg);
}
a#marker2:hover {
    color: #fff;
	border-radius: 9px;
}
a#marker2:hover:before {
  left: 200%;
  -webkit-transition: .8s ease-in-out;
  -o-transition: .8s ease-in-out;
  transition: .8s ease-in-out;
}
a#marker3 {
background:#800000;
width: 70%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
text-decoration: none;
outline: none;
position: relative;
overflow: hidden;
border: 2px solid #fe6637;
border-radius: 10px;
}
a#marker3:before {
  content: "";
  background: -webkit-gradient(linear, left top, right top, from(rgba(255,255,255,.1)), to(rgba(255,255,255,.5)));
  background: -o-linear-gradient(left, rgba(255,255,255,.1), rgba(255,255,255,.5));
  background: linear-gradient(90deg, rgba(255,255,255,.1), rgba(255,255,255,.5));
  height: 100px;
  width: 100px;
  position: absolute;
  top: -8px;
  left: -150px;
  -webkit-transform: skewX(-45deg);
      -ms-transform: skewX(-45deg);
          transform: skewX(-45deg);
}
a#marker3:hover {
    background-color: #fe6637;
    color: #fff;
	border-radius: 9px;
}
a#marker3:hover:before {
  left: 200%;
  -webkit-transition: .8s ease-in-out;
  -o-transition: .8s ease-in-out;
  transition: .8s ease-in-out;
}
.desctop {display:none;}
 /*Блок для контента */
#buttoncontent1 rect {
height: 50px;
width: 250px;
fill: #33CCCC;
stroke-dasharray: 700;
 stroke-dashoffset: 700;
 stroke-linecap: butt;
 -webkit-transition: all 1.8s ease-out;
 -o-transition: all 1.8s ease-out;
 transition: all 1.8s ease-out; }
#buttoncontent1:hover rect {
fill: white;
 stroke-dashoffset: 0;
 stroke-dasharray: 700;
 stroke-width: 2; }

#forimage{
width: 65%; /* Ширина изображений */
height: 100%; /* Высота изображении */
-o-object-fit: cover;
   object-fit: cover; /* Вписываем фотографию в область */
image-rendering: -moz-crisp-edges; /* Firefox */
-ms-interpolation-mode: nearest-neighbor;  /* IE */
image-rendering: crisp-edges; /* Стандартное свойство */
-webkit-transition: all 1.8s ease-out; -o-transition: all 1.8s ease-out;
 transition: all 1.8s ease-out;
}
.Rrrrr { font: bold 1em serif; fill: rgba(33, 30, 30, .8); }
.usual { font: bold 1em serif; fill: rgba(48, 46, 46, 1); }
.small { font: italic 13px sans-serif; }
h1 { color : rgba(89, 81, 81, .7);
 padding-left: 8%;
 margin: 2% auto 2% auto;}
.heavy { font: bold 4em sans-serif; fill: rgba(89, 81, 81, .7);}
.medium { font: bold 2em serif; fill: rgba(89, 81, 81, .7); }
.Rrrrr:hover { fill: #33CCCC;}
.heavy:hover { fill: rgba(89, 81, 81, 1); -webkit-transform: translate3d(-0.1rem, .1rem, 1rem); transform: translate3d(-0.1rem, .1rem, 1rem);}
#forimage:hover {  -webkit-transform: scale(1.05);  -ms-transform: scale(1.05);  transform: scale(1.05);}
.grusya { -webkit-transform: translateX(50%); -ms-transform: translateX(50%); transform: translateX(50%);}

/*Стили вертикального слайдера */

.sticky ul {
  position: absolute;
  bottom: 50%;
  right: 2%;
  -webkit-transform: translate(0, 50%);
      -ms-transform: translate(0, 50%);
          transform: translate(0, 50%); 
 list-style-type: none;                
}
.sticky ul  a {
  display: block;
  margin-bottom: .5em;
  color: black;
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg);
  -webkit-transition:-webkit-transform .2s;
  transition: -webkit-transform .2s;
  -o-transition: transform .2s;
  transition: transform .2s;
  transition: transform .2s, -webkit-transform .2s;
  text-decoration: none;
  }

.sticky ul  a.indactive {
  border: .1em solid rgba(89, 81, 81, .7);
  -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
          transform: rotate(0deg);
  border-radius: 10%;
}
.wriperslider {
 display: block;
  position: static;
  padding: 0;
  width: 100%;
  height: 100vmin;
  background-color: white;
  overflow: visible;
  margin-left: 0;
}
.sticky { position: -webkit-sticky; position: sticky; top: 50%; }
.scroller {
  width: 92%;
  height: 100%;
  overflow-y: scroll;
  -ms-scroll-snap-type: y mandatory;
      scroll-snap-type: y mandatory;
  scroll-behavior: smooth;
  margin-left: 10%;
  }
.scroller section {
  min-height: 100%;
  padding-right: 3%;
  scroll-snap-align: start;
  }
.imageslider50{
	width: 60%; /* Ширина изображений */
    height: 100%; /* Высота изображении */
    -o-object-fit: cover;
       object-fit: cover; /* Вписываем фотографию в область */
}
.imageslider100{
	width: 100%; /* Ширина изображений */
    height: 100%; /* Высота изображении */
    -o-object-fit: cover;
       object-fit: cover; /* Вписываем фотографию в область */

}
.illustration-to-animate.animate .imageslider50 {
  -webkit-transform-origin: left;
      -ms-transform-origin: left;
          transform-origin: left;
  -webkit-animation-name: pictures50;
          animation-name: pictures50;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-transition-property: width;
  -o-transition-property: width;
  transition-property: width;
}

.illustration-to-animate.animate .head1text {
  -webkit-transform-origin: center;
      -ms-transform-origin: center;
          transform-origin: center;
  -webkit-animation-name: text50;
          animation-name: text50;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-transition-timing-function: linear;
       -o-transition-timing-function: linear;
          transition-timing-function: linear;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
.illustration-to-animate.animate .imageslider100 {
  -webkit-transform-origin: bottom center;
      -ms-transform-origin: bottom center;
          transform-origin: bottom center;
  -webkit-animation-name: pictures100;
          animation-name: pictures100;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-transition-property: height;
  -o-transition-property: height;
  transition-property: height;
}
.illustration-to-animate.animate .head2text {
  -webkit-transform-origin: center;
      -ms-transform-origin: center;
          transform-origin: center;
  -webkit-animation-name: text100;
          animation-name: text100;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-transition-timing-function: linear;
       -o-transition-timing-function: linear;
          transition-timing-function: linear;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
.illustration-to-animate.animate .imageslider50 {
  -webkit-transform-origin: 20% 60%;
      -ms-transform-origin: 20% 60%;
          transform-origin: 20% 60%;
  -webkit-animation-name: pictures50;
          animation-name: pictures50;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-transition-property: width;
  -o-transition-property: width;
  transition-property: width;
}

.illustration-to-animate.animate .head1text {
  -webkit-transform-origin: center;
      -ms-transform-origin: center;
          transform-origin: center;
  -webkit-animation-name: text50;
          animation-name: text50;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-transition-timing-function: linear;
       -o-transition-timing-function: linear;
          transition-timing-function: linear;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
.illustration-to-animate.animate .imageslider100 {
  -webkit-transform-origin: bottom center;
      -ms-transform-origin: bottom center;
          transform-origin: bottom center;
  -webkit-animation-name: pictures100;
          animation-name: pictures100;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-delay: .5s;
          animation-delay: .5s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-transition-property: height;
  -o-transition-property: height;
  transition-property: height;
}
.illustration-to-animate.animate .head2text {
  -webkit-transform-origin: center;
      -ms-transform-origin: center;
          transform-origin: center;
  -webkit-animation-name: text100;
          animation-name: text100;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-transition-timing-function: linear;
       -o-transition-timing-function: linear;
          transition-timing-function: linear;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
/* KEYFRAMES */

@-webkit-keyframes pictures50 {
  from {
    opacity: 0;
    width: 0%
  }
  33% {
    opacity: 1;
  }
}
@keyframes pictures50 {
  from {
    opacity: 0;
    width: 0%
  }
  33% {
    opacity: 1;
  }
}
@-webkit-keyframes pictures100 {
  from {
    opacity: 0;
    height: 0%

  }
  33% {
    opacity: 1;
    -webkit-transform: translatey(100%);
            transform: translatey(100%);
  }
}
@keyframes pictures100 {
  from {
    opacity: 0;
    height: 0%

  }
  33% {
    opacity: 1;
    -webkit-transform: translatey(100%);
            transform: translatey(100%);
  }
}
@-webkit-keyframes text50 {
  0% {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  opacity: 0;
  }
  100% {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  opacity: 1;
  }
  }
@keyframes text50 {
  0% {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  opacity: 0;
  }
  100% {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  opacity: 1;
  }
  }
  @-webkit-keyframes text100 {
  0% {
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  opacity: 0;
  }
  100% {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  }
  }
  @keyframes text100 {
  0% {
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  opacity: 0;
  }
  100% {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  }
  }
  .big-text--1 {-webkit-animation-delay: .5s;animation-delay: .5s}
  .big-text--2 {-webkit-animation-delay: 1s;animation-delay: 1s}
  .big-text--3 {-webkit-animation-delay: 1.5s;animation-delay: 1.5s}
  .big-text--4 {-webkit-animation-delay: 2s;animation-delay: 2s}
  .big-text--5 {-webkit-animation-delay: 2.5s;animation-delay: 2.5s}
  /* стили горизонтального слайдера */

  /* стили основного контейнера слайдера */
  .slider {
  position: relative;
  overflow: hidden;
  width: 90%;
  height: 95vmin;
  margin: 0 auto;
  left: 3%;
  }

  /* стили для обёртки, в которой заключены слайды */
  .slider__wrapper {
  position: relative;
  }
  /* стили для контейнера слайдов */
  .slider__items {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-transition: -webkit-transform 0.6s ease;
  transition: -webkit-transform 0.6s ease;
  -o-transition: transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease;
  }
  /* стили для слайдов */
  .slider__item {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
  }
  /* стили для кнопок "вперед" и "назад" */
  .slider__control {
  position: absolute;
  top: 50%;
  display: none;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 40px;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  height: 50px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);

  }

  .slider__control_show {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  }

  .slider__control:hover,
  .slider__control:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
  }

  .slider__control_prev {
  left: 0;
  }

  .slider__control_next {
  right: 0;
  }

  .slider__control::before {
  content: '';
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%;
  }

  .slider__control_prev::before {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
  }

  .slider__control_next::before {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
  }

  /* стили для индикаторов */
  .slider__indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 5;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
  margin-top: 0;
  margin-bottom: 15%;
  }

  .slider__indicators li {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-box-flex: 0;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 4px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: rgba(89, 81, 81, .7);
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  }
  .slider__indicators li.active {
  background-color: black;
  }

    /* для стилизации текущего слайдера */
.img-fluid {
      display: inline-block;
      height: auto;
      max-width: 100%;
    }
.workers img {
     display: block;
     -o-object-fit: cover;
        object-fit: cover;
     max-width: 54%;
     height: auto;
     margin: 0 auto;
   }
figure {
    border: thin #c0c0c0 solid;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
    padding: 1% 1% 1% 3%;
    width: 90%;
	height: auto;
    margin: 0 auto;
    margin-left: 5%;
    -webkit-box-shadow: 0 0 6px rgba(0, 0, 0, .4);
            box-shadow: 0 0 6px rgba(0, 0, 0, .4);
}
figcaption {
    background-color: #222;
    color: #fff;
    font: italic 150% sans-serif;
    padding: 1%;
    padding-bottom: 2%;
	margin-top: 1%;
    text-align: center;
    text-shadow:
    0 0 7px #fff,
    0 0 10px #fff,
    0 0 21px #fff,
    0 0 42px #0fa,
    0 0 82px #0fa,
    0 0 92px #0fa,
    0 0 102px #0fa,
    0 0 151px #0fa;
}
.cont3{
  display: -ms-grid;
  display: grid;
  grid-template-areas:
  'sev1 sev2 sev3 sev4'
  'cbody cbody cbody cbody';
  grid-gap: 0.5em;
  height: auto;
  width: 90%;
  margin: 1% auto;
  margin-left: 8.5%;
  -ms-grid-column-align: center;
  justify-self: center;
  position: relative;

  }
 .sevice-1,.sevice-2,.sevice-3,.sevice-4 {

 color: black;
 }
 .card-header1 { -ms-grid-row: 1; -ms-grid-column: 1; grid-area: sev1;}
 .card-header2 { -ms-grid-row: 1; -ms-grid-column: 3; grid-area: sev2;}
 .card-header3 { -ms-grid-row: 1; -ms-grid-column: 5; grid-area: sev3;}
 .card-header4 { -ms-grid-row: 1; -ms-grid-column: 7; grid-area: sev4;}
 .card-body {
 -ms-grid-row:3;
 -ms-grid-column:1;
 -ms-grid-column-span:7;
 grid-area:cbody;
 text-align: left;
 font: inherit;
 list-style-type: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
 -webkit-box-orient: vertical;
 -webkit-box-direction: normal;
     -ms-flex-direction: column;
         flex-direction: column;
width: 98%;
position: absolute;
top: 100%;
left: 0;
}
details[open] .card-body {
  animation: slide 1.9s ease-in-out;
}

@keyframes slide {
  0%    {opacity: 0;}
  50%   {opacity: 0.9;}
  100%  {opacity: 1;}
  }
.card-body__service {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
gap: 1%;}
.card-body p {
font-family: 'Josefin Sans', Helvetica, Arial, sans-serif;
text-align: justify;
}

.card-body img {width: 55%; height: 50%;
}
.card-body__window {border: 1px solid #666;
width: 90%;
height: 115vh;
margin-left: 8.5%;
}
details summary::-webkit-details-marker {
  display: none
}
/* Убираем стандартный маркер Firefox */
details > summary {
  list-style: none;
}
.cont3 details[open] summary {
  background-color: #33CCCC;
  -webkit-transition-duration: .5s;
       -o-transition-duration: .5s;
          transition-duration: .5s;
}
.cont3 details[open] summary .forbutton1 {
color: white;
-webkit-transition-duration: 1s;
     -o-transition-duration: 1s;
        transition-duration: 1s;
}
.cont3 details summary {
 background-color: rgba(89, 81, 81, .7);
}
.btns details summary{
width: 50px;
height: 50px;
border-radius: 100%;
background: -o-linear-gradient(left, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
background: -webkit-gradient(linear, left top, right top, from(rgba(129,230,217,1)), to(rgba(79,209,197,1)));
background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
border: none;
-webkit-transition: all 0.3s ease-in-out 0s;
-o-transition: all 0.3s ease-in-out 0s;
transition: all 0.3s ease-in-out 0s;
cursor: pointer;
outline: none;
position: relative;
opacity: .5;
  }
.btns details[open] summary {

border: 2px solid #00FFCB;
opacity: 1;
}
.btns details summary::before {
  content: '\1F4AC';
  font-size: 1.4em;
  line-height: 1.8;
}
.btns details[open] summary::before {
  content: '\2716';
  font-size: 1.5em;
  line-height: 1.4;
}
.btns details summary:hover::before, .btns details summary:focus::before {
  opacity: 1;
}
.btns details summary::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-animation: ring 1.5s infinite;
          animation: ring 1.5s infinite;
}
.btns details summary:hover, .btns details summary:focus {
  opacity: 1;
}
.btns details[open] summary::after {
  -webkit-animation: none;
          animation: none;
  display: none;
}
@-webkit-keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 200px;
    height: 200px;
    opacity: 0;
  }
}
@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 200px;
    height: 200px;
    opacity: 0;
  }
}
.popover-body{
padding:.5rem .75rem;
color:#212529}
.popover{
position:absolute;
top:0;
left:0;
z-index:1060;
display:block;
max-width:276px;
font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
font-style:normal;
font-weight:400;
line-height:1.5;
text-align:left;
text-decoration:none;
text-shadow:none;
text-transform:none;
letter-spacing:normal;
word-break:normal;
word-spacing:normal;
white-space:normal;
line-break:auto;
font-size:.875rem;
word-wrap:break-word;
background-color:#fff;
background-clip:padding-box;
border:1px solid rgba(0,0,0,.2);
border-radius:.3rem}
.btns {
 position: fixed;
 top: 86%;
 left: 85%;
 z-index: 11;}
.btns details {
  position: relative;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  height: -webkit-fit-content;
  height: -moz-fit-content;
  height: fit-content;

}
.bs-popover-top {
  -webkit-transform: translate(-5px, -120%);
      -ms-transform: translate(-5px, -120%);
          transform: translate(-5px, -120%);
}
.formorder {
 display: none;
 -webkit-box-orient: vertical;
 -webkit-box-direction: normal;
     -ms-flex-direction: column;
         flex-direction: column;
position: fixed;
 overflow: hidden;
 z-index: 10;
 top: -1%;
 left: 50%;
  margin-top: 5%;
 -webkit-transform: translate(-50%, 0);
     -ms-transform: translate(-50%, 0);
         transform: translate(-50%, 0);
 background-color: transparent;
 font-family: 'Inter', sans-serif;
 background: -webkit-gradient(linear, right bottom, left top, from(#fefcea), to(#33CCCC));
 background: -o-linear-gradient(bottom right, #fefcea, #33CCCC);
 background: linear-gradient(to top left, #fefcea, #33CCCC);
   }
 .formorder__form {
 display: -ms-grid;
 display: grid;
 -ms-grid-rows: 1fr 1% 1.5fr;
 grid-template-rows: 1fr 2fr;
 grid-template-columns: 1fr;
 row-gap: 1%;
 margin: 3% auto;
 margin-top: 1%;
 padding-left: 1%;
 padding-right: 1%;

 }
.formorder fieldset {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
z-index: 1;
font-size: calc(100vw /60);
-ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
-webkit-box-align: start;
    -ms-flex-align: start;
        align-items: flex-start;

}

.formorder__buttonclose {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
background-color: transparent;
-webkit-transition: all 0.3s ease-out;
-o-transition: all 0.3s ease-out;
transition: all 0.3s ease-out;
border: none;
cursor: pointer;
font-size: 18px;
font-weight: bold;
margin-right: 1em;
z-index: 1;
-ms-flex-item-align: end;
    align-self: flex-end;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
gap: 4px;
}
.formorder__buttonclose:focus {color: red;}
.formorder__buttonclose:hover {color: red;}

.formorder__buttonclose::before, .formorder__buttonclose::after {
  content: "";
  position: absolute;
  top: 2.4%;
  right: -5px;
  display: block;
  width: 1em;
  height: 2px;
  -webkit-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  border-radius: 2px;
  background-color: currentColor;
}
.formorder__buttonclose::before {
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
      -ms-transform: translate(-50%, -50%) rotate(45deg);
          transform: translate(-50%, -50%) rotate(45deg);
}
.formorder__buttonclose::after {
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
      -ms-transform: translate(-50%, -50%) rotate(-45deg);
          transform: translate(-50%, -50%) rotate(-45deg);
}
.formorder__buttonclose:hover {
  color: red;
}
.formorder__buttonclose:hover::before {
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
      -ms-transform: translate(-50%, -50%) rotate(-45deg);
          transform: translate(-50%, -50%) rotate(-45deg);
}
.formorder__buttonclose:hover::after {
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
      -ms-transform: translate(-50%, -50%) rotate(45deg);
          transform: translate(-50%, -50%) rotate(45deg);
}
#name, #phone, #address {
border-radius: 3px;
}
#name, #phone, #address, #message, #datetime {
width: 80vmin;
}
.formorder fieldset textarea {
border-radius: 3px;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
resize: vertical;
}
.formorder fieldset textarea:focus {
border: 2px solid red;
}
input[type=text]:focus {
border: 2px solid red;
}
input[type=text] {
border: none;
}
input[type=datetime-local] {
padding: 4px 4px;
border-radius: 3px;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
background-color: white;
width: 100%;

}
input[type=datetime-local]:focus {
border: 2px solid red;
}
input[type=tel]:focus {
border: 2px solid red;
}
input[type=tel] {
border: none;
}

button.submit {
    background-color: #68b12f;
    background: -o-linear-gradient(top, #68b12f, #50911e);
    background: -webkit-gradient(linear, left bottom, left top, from(#68b12f), to(#50911e));
    background: -o-linear-gradient(bottom, #68b12f, #50911e);
    background: linear-gradient(to top, #68b12f, #50911e);
    border: 1px solid #509111;
    border-bottom: 1px solid #5b992b;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    box-shadow: inset 0 1px 0 0 #9fd574;
    -webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
    -moz-box-shadow: 0 1px 0 0 #9fd574 inset;
    -ms-box-shadow: 0 1px 0 0 #9fd574 inset;
    -o-box-shadow: 0 1px 0 0 #9fd574 inset;
    color: white;
    font-weight: bold;
    padding: 6px 20px;
    text-align: center;
    text-shadow: 0 -1px 0 #396715;
}
button.submit:hover {
    opacity:.85;
    cursor: pointer;
}
button.submit:active {
    border: 1px solid #20911e;
    box-shadow: 0 0 10px 5px #356b0b inset;
    -webkit-box-shadow:0 0 10px 5px #356b0b inset ;
    -moz-box-shadow: 0 0 10px 5px #356b0b inset;
    -ms-box-shadow: 0 0 10px 5px #356b0b inset;
    -o-box-shadow: 0 0 10px 5px #356b0b inset;
}
.modal__pagehome {
display: none;
gap: 10%;
position: fixed;
width: 99%;
height: 99%;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
margin: .5%;
outline: 1px solid #666;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
z-index: 100;
background-color: rgba(0, 0, 0, .92);
}
.modal__pagehome__text {
color: white;
}
.formorder.togleform {
display: -webkit-box;
display: -ms-flexbox;
display: flex;}
.price__columns {
margin:0 auto;
width: 92%;
padding: 8px;
margin-left: 7.5%;   
}
.price__body {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}
.price__body:hover {
    -webkit-box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
            box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}
.price__body .header {
    background-color: #111;
    color: white;
    font-size: calc(100vw /20);
    text-transform: none;
    text-align: center;
}
.price__body li {
    border-bottom: 1px solid #eee;
    padding: 10px;
    text-align: start;
    font-family: 'Josefin Sans', Helvetica, Arial, sans-serif;
}
.price__body .grey {
    background-color: #eee;
    font-size: calc(100vw /40);
    text-align: center;
}
.wriper__additionalservice {
display: -ms-grid;
display: grid;
-webkit-column-gap: 0;
   -moz-column-gap: 0;
        column-gap: 0;
row-gap: 2%;
-ms-grid-columns: minmax(150px, 1fr) 0 minmax(150px, 1fr) 0 minmax(150px, 1fr);
grid-template-columns: repeat(3, minmax(150px, 1fr));
width: 90%;
height: -webkit-min-content;
height: -moz-min-content;
height: min-content;
padding: 1%;
padding-bottom: 8%;
margin-left: 8.5%;
background-color: #eee;
margin-bottom: 2%;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
justify-items: center;
font-family: 'Dancing Script', cursive;
}
.wriper__additionalservice  div {
border: 1px solid #eee;
width: 27vw;
height: 27vw;
border-radius: 25%;
background-color: white;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
}
.block__additionalservice p {
font-size: calc(100vw /50);}
.block__additionalservice svg {
margin-bottom: 5%;}
@media all and (max-width: 1200px) {
.chaild1 {
margin-left: 2vh;
font-size: calc(100vw /40);
 }
.navigation {
  font-size: calc(100vw /55);
}
 .hamburger-box {
 -webkit-transform: rotate(90deg) translateY(-.3em) scale(0.9);
     -ms-transform: rotate(90deg) translateY(-.3em) scale(0.9);
         transform: rotate(90deg) translateY(-.3em) scale(0.9);
 padding-top: .5em;
  }
}
@media all and (max-width: 900px) {
.chaild1 {
margin-left: 3vh;
font-size: calc(100vw /40);
 }
.navigation {
  font-size: calc(100vw /50);
}
.hamburger-box {
  -webkit-transform: rotate(90deg) translateY(-.2em) scale(0.7);
      -ms-transform: rotate(90deg) translateY(-.2em) scale(0.7);
          transform: rotate(90deg) translateY(-.2em) scale(0.7);
  padding-top: .6em;
  }
  .formorder fieldset {
font-size: calc(100vw /50);
}
}
@media all and (max-width: 800px) {
.chaild1 {
margin-left: 3vh;
font-size: calc(100vw /35);
 }
 .navigation {
  font-size: calc(100vw /45);
}
.formorder fieldset {
font-size: calc(100vw /45);
}
.card-body {
  font-size: calc(100vw /45);
  word-wrap: break-word;
  
  }
  .cont3 details summary {
font-size: calc(100vw /40);
}
.card-body__window {
  height: 80vh;
}
}
@media all and (max-width: 640px) {
  .wrapper  {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  }
  h1 {font-size: calc(100vw /21);
  padding-left: 0;
  }
  .parent {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  grid-gap: 1vw;
  position: -webkit-sticky;
  position: sticky;
  -webkit-transform-origin: left bottom;
  -ms-transform-origin: left bottom;
  transform-origin: left bottom;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  margin-left: 0em;

  }
  .chaild1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-item-align: center;
  align-self: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  align-self: center;
  font-weight: 300;
  line-height: 1.6em;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  font-size: calc(100vw / 17);
  margin-left: 0;
  }
  .hamburger-box {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  padding-top: .5em;
  }
  .chaild2 {-webkit-box-flex: 5;-ms-flex-positive: 5;flex-grow: 5;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-item-align: center;
  align-self: center;

  }
  .logotext {font-family: 'Dancing Script', cursive;  font-size:60%; padding-left:2%;}
  .sidebar {
  display: none;
  }
  .button2 {display: none;}
  .hamburger-box {
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  vertical-align: middle;
  }
  .forbutton {
  vertical-align: center;
  outline: inherit;}
  .forbutton1 {
  font-size: 0.7em;
  }
  .cont3 details summary {
  outline: .06em solid #666;
  }
  .cont4 details summary {
  outline: .06em solid #666;
  }
  .hamburger:hover {
  opacity: 0.9;
  outline: inherit;
  }
  .mobile {display: none;}
.hamburger-box {
  width: 1em;
  height: .7em;
  -webkit-transform:  translateY(-.03em);
      -ms-transform:  translateY(-.03em);
          transform:  translateY(-.03em);
  }
.navigation {font-size: calc(100vw /25);}
.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    width: 100%;
    height: 2.5px;
	border-radius: 2.5px;
    }

.hamburger--elastic-r .hamburger-inner::before {
    top: 4px;
    }
.hamburger--elastic-r .hamburger-inner::after {
    top: 8px;
     }
.hamburger--elastic-r.is-active .hamburger-inner::after {
 -webkit-transform: translate3d(0, -8px, 0) rotate(270deg);
         transform: translate3d(0, -8px, 0) rotate(270deg);
 -webkit-transition-delay: 0.075s;
      -o-transition-delay: 0.075s;
         transition-delay: 0.075s; }
.wrapper1 {
 display: -webkit-box;
 display: -ms-flexbox;
 display: flex;
 padding-top: 12%;
 padding-bottom: 15%;
 -ms-flex-wrap: wrap;
     flex-wrap: wrap;
 -webkit-box-pack: center;
     -ms-flex-pack: center;
         justify-content: center;
 grid-gap: 0;
}
#msg {
    width: 100%;
   }
.box1 {
  display: none;
}

.box2 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  border-bottom: 1px solid #33CCCC;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box3 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  border-bottom: 1px solid #33CCCC;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;

}
.box4 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  border-bottom: 1px solid #33CCCC;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box5 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  border-bottom: 1px solid #33CCCC;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box6 {
 display: -webkit-box;
 display: -ms-flexbox;
 display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  border-bottom: 1px solid #33CCCC;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box7 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  margin-top: 1%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;

}
.box8 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box9 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 33%;
          flex: 1 1 33%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box10 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 33%;
          flex: 1 1 33%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box11 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 33%;
          flex: 1 1 33%;

  -webkit-box-align: center;

      -ms-flex-align: center;

          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.box12 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
a#marker {color: white;
background:#33CCCC;
width: 70%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
    }
a#marker:hover {color: #33CCCC;
background: white;
border: 1px solid #33CCCC;}

a#boxtele {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
width: 70%;
background: #0088cc;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
border-radius: 5px;
   }

a#boxfece {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
width: 70%;
background: #3b5998;

-webkit-box-pack: center;

    -ms-flex-pack: center;

        justify-content: center;
border-radius: 5px;
   }
a#boxviber {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
width: 70%;
background: #8f5db7;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
border-radius: 5px;
   }

#forsvg { -webkit-transform: scale(1, 1); -ms-transform: scale(1, 1); transform: scale(1, 1);}
#forsvg:hover {-webkit-transform: scale(1.2);-ms-transform: scale(1.2);transform: scale(1.2);
       }
#svgfece {fill:white;}
#tele {fill:white;}
#viber {fill:white;}

.aside-1 {
 -webkit-box-flex: 1;
     -ms-flex: 1 100%;
         flex: 1 100%;
 -webkit-box-ordinal-group: 2;
     -ms-flex-order: 1;
         order: 1;
 padding: .1em;
 margin: .2em;}
.msya1    {
 -webkit-box-flex: 1;
     -ms-flex: 1 100%;
         flex: 1 100%;
 -webkit-box-ordinal-group: 3;
     -ms-flex-order: 2;
         order: 2;
 padding: .1em;
 margin: .2em;}
.msya2    {
  -webkit-box-flex: 1;
      -ms-flex: 1 100%;
          flex: 1 100%;
  -webkit-box-ordinal-group: 4;
      -ms-flex-order: 3;
          order: 3;
  padding: .1em;
  margin: .2em;
 }
.aside-2 {
  -webkit-box-ordinal-group: 5;
      -ms-flex-order: 4;
          order: 4;
  -webkit-box-flex: 1;
      -ms-flex: 1 100%;
          flex: 1 100%;
  padding: .1em;
  margin: .2em;
  }
.desctop {display: inherit;}
.desctop1 {display:block;}
#forimage {
width:100%;
height:100%;}
.Rrrrr { font: bold calc(150vw  /25) serif;}
.slider {
width: 98%;
margin: 0 auto;
left: 0;
    }
 .usual { font: bold 1.3em serif; fill: rgba(48, 46, 46, 1); }
 .cont3{
      grid-template-areas:
  'sev1 sev2'
  'sev3 sev4'
  'cbody cbody'
  'cbody cbody';
  -ms-grid-columns: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  margin: 1% auto;
  }
  .cont3 details summary {
font-size: calc(100vw /25);
}
  .card-body {
  font-size: calc(100vw /30);
  width: 95%;
  
  }
  .card-body img {
  width: 90%;
  height: auto;
  }
  .card-body__window {border: 1px solid #666;
  width: 96.4%;
  height: 115vh;
  margin-left: 1.8%;
  margin-top: 0%;}
  .cont3{
  width:  96%;
  }
  .slider__indicators {
 margin-bottom: 0;
    }
  a#marker2 {
  width: 98%;
  margin: 0 auto;
  }
 .btns {
 top: 80%;
 left: 75%;}
 .formorder {
 top: 7.5%;
 }
 .btns details[open] summary::before {
  font-size: 1.1em;
  line-height: 1.8;
}
.formorder {
 margin-top: 7%;
   }
 .formorder fieldset {
 font-size: calc(100vw /40);
 }
 .formorder__form {
 row-gap: .5%;
 margin: 3% auto;
 margin-top: 0%;
 padding-left: 0%;
 padding-right: 0%;
 }
 #message {
width: 80vmin;
height:10vmin;
}
 input[type=datetime-local] {
 }
.formorder__buttonclose::before, .formorder__buttonclose::after {
  top: 3.2%;
}
button.submit {margin: 0 auto;}
.price__columns {
width: 100%;
margin-left: 0;
    }
.wriper__additionalservice {
width: 95%;
margin-left: 2.5%;
-webkit-column-gap: 0;
   -moz-column-gap: 0;
        column-gap: 0;
row-gap: .5%;
-ms-grid-columns: minmax(150px, 1fr) 0 minmax(150px, 1fr);
grid-template-columns: repeat(2, minmax(150px, 1fr));
}
.wriper__additionalservice  div {
width: 25vh;
height: 25vh;
}
.card-body__service {
display: block;
}
.block__additionalservice p {font-size: calc(100vw /40);}
.card-body p {
padding-top: 2%;
}
img {
  max-width: 100%;
}
}
@media all and (max-width: 425px) {
 .formorder {
 margin-top: 1%;
   }
.card-body__window {
  height: 80vh;
}
.card-body {
  
  }
 .block__additionalservice p {font-size: calc(100vw /30);}
 .formorder fieldset {
 font-size: calc(100vw /20);
 }
  .cont3 details summary {
font-size: calc(100vw /20);
}
 }
 @media all and (max-width: 320px) {
 .logotext {font-size:90%;}
 .navigation {font-size: calc(100vw /20);}
 .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
 border-radius: 2px;
 height:2px;
 }
 .cont3{
 display: -ms-grid;
 display: grid;
 grid-template-areas:
 'sev1 sev2 sev3 sev4'
 'cbody';}
 .cont4{
 display: -ms-grid;
 display: grid;
 grid-template-areas:
 'sev1 sev2 sev3 sev4'
 'cbody';}
 .formorder fieldset {
 font-size: calc(100vw /17);
 }
 }
</style>

</head>
<body style="position:absolute; z-index:0; width:100%; height:100%;">

<svg  class="overlay"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  preserveAspectRatio="xMidYMid slice" style="width:100%; height:100%; position:absolute; top:0; left:0;" viewBox="0 0 1400 700">
<rect x="0px" y="0px" width="100%" height="100%" opacity="1" fill="#ffffff"/>
<defs><g transform="matrix(0.1169080138206482 0 0 0.1169080138206482 237.00000185522993 112.00000599381906)" id="L1_8">
<path d="m189.017 164.228 14.615-39.274-47.99 10.09c-7.84 1.649-13.597 8.354-14.041 16.354l-3.711 66.958-2.918 1.675c-21.025 12.072-31.176 36.817-24.686 60.177l15.822 56.945c1.497 5.389.415 11.033-2.97 15.486s-8.534 7.007-14.127 7.007h-9.69v-1.465c0-8.748-7.092-15.84-15.84-15.84h-2.833l-.713-4.361c-1.496-9.158-9.408-15.883-18.688-15.883h-23.174c-9.28 0-17.192 6.725-18.688 15.883l-.712 4.361h-2.833c-8.748 0-15.84 7.092-15.84 15.84v101.948c0 8.644 6.927 15.659 15.532 15.825-.333 1.116-.518 2.296-.518 3.521 0 6.798 5.511 12.309 12.309 12.309s12.309-5.511 12.309-12.309c0-1.219-.184-2.394-.514-3.505h21.083c-.33 1.112-.514 2.286-.514 3.505 0 6.798 5.511 12.309 12.309 12.309s12.309-5.511 12.309-12.309c0-1.224-.185-2.405-.518-3.521 8.605-.166 15.532-7.181 15.532-15.825v-80.582h9.69c11.867 0 22.791-5.418 29.971-14.866 13.084-17.215 5.445-35.049 5.366-36.216-7.369-5.845-10.277-16.039-7.025-25.284l-7.863-28.301c-4.023-14.481 2.196-29.811 15.128-37.413 4.564 3.498 10.558 4.581 16.133 2.805l13.437-36.109 2.064-37.245z"/>
<path d="m500.786 466.908h-31.293l-99.045-197.091c-7.648 2.192-16.155 1.288-23.466-3.207l-8.661-5.324 112.39 223.645c2.112 4.201 6.411 6.853 11.114 6.853h38.963c6.869 0 12.438-5.568 12.438-12.438-.002-6.87-5.571-12.438-12.44-12.438z"/>
<ellipse cx="282px" cy="60px" rx="39px" ry="39px" transform="matrix(0.627 -0.779 0.779 0.627 58.274 242.721)"/>
<path d="m279.858 342.903c3.198.566 6.109 1.082 8.66 1.534 6.01 1.064 11.577-4.084 11.54-10.675l-.549-96.335-23.224-14.276c-2.101-1.562-6.165-2.778-8.32-7.677l-21.946-49.717 31.341 42.845c1.358 1.856 3.063 3.429 5.021 4.632l70.697 43.458c8.387 5.155 19.276 2.467 24.366-5.814 5.123-8.334 2.521-19.243-5.814-24.366l-67.731-41.636-29.286-40.036 24.491 21.627-.15-26.231c-.067-11.733-7.827-21.58-18.537-23.476-13.793-2.443-23.494-4.16-38.802-6.872-10.787-1.909-21.391 4.717-25.472 15.683l-67.494 181.377c-2.313 6.216 1.221 12.935 7.172 13.988 5.557.984 12.8 2.267 21.075 3.732v50.699l-39.726 84.113c-5.339 11.303-.503 24.793 10.799 30.13 11.282 5.328 24.784.524 30.13-10.799l41.894-88.702c1.427-3.023 2.168-6.324 2.168-9.666 0-14.425 0-33.339 0-47.759 2.861.507 5.721 1.013 8.567 1.517 2.664 10.056 8.432 31.829 11.364 42.899l3.963 93.013c.532 12.483 11.086 22.186 23.575 21.649 12.489-.532 22.181-11.087 21.649-23.576l-4.068-95.469c-.07-1.633-.316-3.253-.735-4.832-2.338-8.826-4.322-16.313-6.618-24.982z"/></g>
<g transform="matrix(0.1171872690320015 0 0 0.1171872690320015 74 50)" id="L1_14">
<path d="M162.629,341.12c-19.036-0.198-32.754-22.778-20.838-52.144c3.041-7.493-5.405-25.235-8.596-41.856l-2.708-1.315    l-15.659,80.848c-1.354,6.993,4.036,13.456,11.089,13.456c4.379,0,9.633,0,15.515,0v147.493c0,13.475,10.924,24.399,24.399,24.399    c13.475,0,24.399-10.924,24.399-24.399V344.424C181.53,343.729,173.284,341.231,162.629,341.12z"/>
<circle cx="195" cy="42" r="42"/>
<path d="M161.462,186.613l4.396-35.939c0,0-14.954-42.198-18.147-51.207c-15.615,4.712-22.872,18.011-28.456,28.251    c-5.797,10.633-30.546,49.477-34.403,55.318c-7.322,11.089-2.917,24.68,7.822,29.894l39.248,19.059    c0.456-9.939,3.751-18.68,9.852-26.037c0.084-0.101,3.883-4.618,9.882-9.59c0,0-18.734-9.301-20.248-10.071    c8.139-13.314,14.816-24.236,22.919-37.492l-8.678,30.134L161.462,186.613z"/>
<path d="M163.903,97.715c6.312,17.812,10.565,29.814,17.648,49.801c10.642,0,17.818,0,27.336,0    c4.335-12.23,13.823-39.006,17.648-49.801C200.82,97.715,190.342,97.715,163.903,97.715z"/>
<path d="M201.229,274.839c-6.791-25.489,5.094-38.577-4.716-66.968c-3.37-9.756-8.986-13.233-15.206-13.233    c-11.881,0-25.968,12.688-30.822,18.54c-20.745,25.01,10.091,59.597,1.792,80.053c-8.299,20.456-1.148,36.448,10.469,36.571    c13.293,0.139,22.932,3.481,31.589,3.481c4.611,0,8.945-0.949,13.402-3.833C220.565,321.15,208.02,300.328,201.229,274.839z"/>
<path d="M429.522,53.7c2.781-4.113,0.664-9.747-4.131-11.017l-16.299-4.313L383.534,81.3l12.291-46.441l-54.967-14.546    c-4.782-1.266-9.397,2.558-9.043,7.491l8.918,124.178l-2.977,11.249l-43.508,17.738c-6.266-15.77-12.463-30.109-16.51-41.885    c-7.593-22.091-19.322-35.411-34.955-39.773c-8.898,25.109-17.788,50.193-17.788,50.193s5.41,39.016,20.618,131.353    c1.052,6.124-3.67,11.674-9.828,11.674c-4.735,0-10.603,0-17.06,0c2.715,8.014,4.97,15.086,5.661,21.749    c1.864,17.975-9.799,27.454-23.62,29.779v143.542c0,13.475,10.924,24.399,24.399,24.399s24.399-10.924,24.399-24.399V340.108    c5.883,0,11.137,0,15.515,0c7.09,0,12.442-6.47,11.089-13.456c-20.781-108.067-29.212-154.125-29.212-154.125    s11.143,26.962,16.559,42.014c3.929,10.916,16.15,16.287,26.808,11.943l34.403-14.025l-11.201,42.325    c-1.439,5.439,1.803,11.014,7.241,12.453c5.44,1.439,11.014-1.805,12.453-7.24l15.128-57.168l14.188-5.784    c10.399-4.24,15.392-16.107,11.153-26.505c-2.505-6.142-7.678-10.376-13.631-11.957l0.936-3.538L429.522,53.7z"/></g>
<g transform="matrix(0.1171877309679985 0 0 0.1171877309679985 274.000003318793 -21)" id="L1_15">
<path d="M424.115,0H176.863c-16.195,0-29.372,13.176-29.372,29.372v38.562c5.164-2.558,10.817-4.267,16.778-4.958V29.372    c0-6.945,5.65-12.594,12.594-12.594h247.252c6.944,0,12.594,5.65,12.594,12.594v294.56c0,6.945-5.65,12.594-12.594,12.594H231.586    v16.778h192.529c16.195,0,29.372-13.176,29.372-29.372V29.372C453.487,13.177,440.311,0,424.115,0z"/>
<path d="M170.211,77.884c-19.95,0-36.122,16.173-36.122,36.122c0,11.037,4.956,20.913,12.757,27.538h46.733    c7.801-6.626,12.757-16.5,12.757-27.538C206.335,94.057,190.162,77.884,170.211,77.884z"/>
<path d="M378.93,51.683h-96.976c-2.725,0-4.934,2.209-4.934,4.934v20.341c0,2.725,2.209,4.934,4.934,4.934h37.517v46.132    c-1.476,1.2,1.831-2.218-41.933,44.516c-17.193-4.586-41.926-10.901-53.806-13.92c-4.59-1.167-9.285-1.746-14.021-1.746H123.28    c-22.411,0-41.131,18.232-41.246,41.041l-0.63,125.345c-13.162,6.582-22.304,20.052-22.657,35.662h-0.236l8.749,80.491    c0.338,3.109,2.964,5.465,6.091,5.465h35.016v-85.956H71.826c0.315-9.495,5.414-17.796,12.955-22.575    c3.154,4.293,8.214,7.103,13.95,7.13c0.03,0.001,0.059,0.001,0.089,0.001c3.524,0,6.802-1.055,9.545-2.857    c4.719-3.098,7.851-8.418,7.881-14.486l0.643-128.046c0.01-1.857,1.519-3.354,3.375-3.349c1.856,0.006,3.357,1.51,3.357,3.366    l0.008,292.978c0,11.551,9.364,20.915,20.915,20.915s20.915-9.364,20.915-20.915V323.905h9.031v167.179    c0,11.551,9.364,20.915,20.915,20.915s20.915-9.364,20.915-20.915c0-273.648-0.379-123.208-0.379-298.978    c11.001,2.952,56.949,15.279,62.659,16.81c6.174,1.658,12.816-0.198,17.239-4.92l47.326-50.538    c6.58-7.026,6.218-18.057-0.809-24.635c-0.304-0.284-0.625-0.539-0.943-0.798V81.891h37.517c2.725,0,4.934-2.209,4.934-4.934    v-20.34C383.864,53.891,381.655,51.683,378.93,51.683z"/>
<path d="M383.958,98.648c-5.849,0-10.589,14.281-10.589,20.129s4.74,10.589,10.589,10.589s10.589-4.741,10.589-10.589    S389.807,98.648,383.958,98.648z"/>
<path d="M371.469,149.21c-4.797,0-8.688,11.716-8.688,16.514s3.889,8.688,8.688,8.688c4.797,0,8.688-3.889,8.688-8.688    C380.156,160.925,376.266,149.21,371.469,149.21z"/>
<path d="M248.812,41.482l-8.001-3.197l-3.198-8.002c-0.186-0.465-0.636-0.771-1.138-0.771s-0.952,0.305-1.138,0.771l-3.198,8.002    l-8.001,3.197c-0.465,0.186-0.771,0.636-0.771,1.138s0.305,0.952,0.771,1.138l8.001,3.198l3.198,8.001    c0.186,0.465,0.636,0.771,1.138,0.771s0.952-0.305,1.138-0.771l3.198-8.001l8.001-3.198c0.465-0.186,0.771-0.636,0.771-1.138    S249.278,41.668,248.812,41.482z"/>
<path d="M248.921,85.575l-5.33-2.13l-2.13-5.33c-0.113-0.284-0.388-0.47-0.693-0.47c-0.305,0-0.581,0.186-0.693,0.47l-2.13,5.33    l-5.33,2.13c-0.284,0.113-0.47,0.388-0.47,0.693s0.186,0.581,0.47,0.693l5.33,2.13l2.13,5.33c0.113,0.284,0.388,0.47,0.693,0.47    c0.305,0,0.581-0.186,0.693-0.47l2.13-5.33l5.33-2.13c0.284-0.113,0.47-0.388,0.47-0.693S249.205,85.688,248.921,85.575z"/></g>
<g transform="matrix(0.11719024926424026 0 0 0.11719024926424026 13.0000008297161 178)" id="L1_16">
<path d="M394.556,139.153c-0.538-1.61-1.278-3.09-2.149-4.46l-13.951,31.385l3.243-1.088    C392.384,161.406,398.14,149.837,394.556,139.153z"/>
<g><path d="M173.069,153.773c4.486-19.744,6.669-29.356,7.399-32.567C179.4,125.904,175.622,142.534,173.069,153.773z"/>
<path d="M346.067,209.379l-70.161-7.767l-35.583-68.975c19.289,21.491,43.82,48.823,45.17,50.326l17.134,1.896l19.014-42.774     l-30.167,10.12l1.52-6.692c3.723-16.387-6.542-32.689-22.93-36.412c0,0-33.87-6.992-49.121-11.161     c-13.538-3.699-35.584,1.739-40.202,22.068c-11.812,51.987-11.368,50.034-8.204,36.104c-5.328,23.451-13.7,60.303-26.383,116.127     l0.071,0.016l-11.831,86.371L66.064,476.275c-6.593,11.352-2.736,25.9,8.618,32.494c11.353,6.594,25.9,2.736,32.494-8.618     l20.64-35.538c-0.393-1.874-0.616-3.799-0.616-5.759c-0.001-12.475,8.188-23.071,19.471-26.707l31.19-53.701     c1.557-2.681,2.574-5.641,2.995-8.712l11.904-86.903l16.765,3.809l23.804,54.125c18.864-42.439,25.233-56.768,35.201-79.194     c-2.581-0.285-1.367-0.151-10.145-1.124c-18.737-2.075-30.451-16.518-32.738-25.634l-20.29-80.932     c42.172,81.749,39.393,76.447,40.159,77.666c3.423,5.445,9.021,8.764,15.024,9.428c0.009,0.001,81.032,8.97,81.041,8.97     c11.265,1.248,21.292-6.917,22.523-18.038C365.342,220.717,357.281,210.622,346.067,209.379z"/></g>
<path d="M292.951,358.443L260.789,430.8h12.249c10.147,0,19.051,5.414,23.98,13.503    C294.145,359.008,292.951,358.443,292.951,358.443z"/>
<circle cx="264" cy="45" r="45"/>
<path d="M379.037,446.869c-7.006-2.161-14.437,1.766-16.598,8.772c-0.189,0.613-0.316,1.229-0.413,1.845    c-0.048-0.016-0.092-0.036-0.14-0.052c-6.015-1.856-12.395,1.517-14.251,7.531c-1.523,4.938,0.481,10.117,4.575,12.843    c-4.134,6.815-10.853,12.639-16.24,16.594c-1.062,0.78-1.482,2.167-1.035,3.407c0.447,1.239,1.655,2.037,2.971,1.961    c19.488-1.132,32.021-6.796,32.021-6.796l-0.003-0.006c5.813-0.106,11.157-3.891,12.965-9.749c1.286-4.168,0.498-8.478-1.77-11.83    c3.099-1.57,5.585-4.34,6.69-7.921C389.969,456.461,386.043,449.03,379.037,446.869z"/>
<path d="M380.961,84.534c-5.985-2.662-12.992,0.035-15.652,6.02l-42.893,96.499l24.736,2.738l39.829-89.604    C389.641,94.201,386.946,87.194,380.961,84.534z"/>
<path d="M280.373,470.562c3.895-2.446,6.492-6.767,6.492-11.706c0-7.636-6.191-13.827-13.827-13.827H233.7    c1.35-3.036,76.397-171.874,79.356-178.529l-24.737-2.738c-2.595,5.834-77.362,174.041-80.574,181.267h-52.49    c-7.636,0-13.827,6.191-13.827,13.827c0,5.24,2.916,9.798,7.213,12.143l-10.431,32.857c-1.212,3.818,1.644,7.714,5.645,7.714    h105.981v-26.963l8.226,26.963h27.236c4.005,0,6.856-3.901,5.645-7.714L280.373,470.562z"/><path d="M449.128,456.132c0.178-3.329-1.208-6.376-3.51-8.44c2.005-1.74,3.333-4.254,3.486-7.114    c0.299-5.594-3.993-10.372-9.587-10.672c-5.594-0.3-10.373,3.993-10.671,9.587c-0.027,0.489-0.006,0.969,0.037,1.444    c-0.038-0.002-0.075-0.01-0.113-0.012c-4.803-0.257-8.905,3.428-9.163,8.231c-0.21,3.943,2.237,7.41,5.778,8.668    c-1.797,5.82-5.694,11.386-8.951,15.318c-0.642,0.776-0.696,1.882-0.134,2.718c0.562,0.835,1.605,1.202,2.567,0.901    c14.234-4.462,22.47-10.991,22.47-10.991l-0.003-0.003C445.62,464.608,448.877,460.811,449.128,456.132z"/></g><g transform="matrix(0.11718841642141342 0 0 0.11718841642141342 136.99999917029686 283)" id="L1_17"><path d="M253.738,235.59l0.204-1.733c-16.994-1.917-31.266-15.01-33.924-32.724c-3.174-21.146,11.395-40.861,32.541-44.035    l9.428-1.416c-0.151-0.243-0.308-0.483-0.501-0.701c-0.972-1.094-2.366-1.718-3.829-1.718h-16.58    c1.199-3.351,1.86-6.976,1.86-10.764c0-17.003-13.224-30.788-29.538-30.788c-5.478,0-10.606,1.56-15.004,4.27    c-3.524-7.427-11.553-12.623-20.907-12.623c-12.603,0-22.82,9.421-22.82,21.043c0,1.823,0.277,3.582,0.75,5.268    c-21.68,2.586-37.775,12.136-37.775,23.529c0,0.022,0.003,0.043,0.003,0.066h-7.582c-3.064,0-5.447,2.677-5.09,5.722l0.852,7.247    h-8.881c-6.588,0-11.928,5.34-11.928,11.928c0,6.588,5.34,11.928,11.928,11.928h10.976l5.929,45.669    c0.666,5.132,4.056,9.307,8.598,11.172H25.049c-8.335,0-15.091,6.757-15.091,15.091v33.764h243.905V262.02    c0-6.82-4.526-12.577-10.736-14.447C248.706,246.214,253.041,241.522,253.738,235.59z M184.626,282.421    c-5.536,0-10.023-4.488-10.023-10.023c0-5.536,4.487-10.023,10.023-10.023c5.535,0,10.023,4.487,10.023,10.023    C194.65,277.932,190.162,282.421,184.626,282.421z M222.493,284.648c-6.766,0-12.251-5.485-12.251-12.251    c0-6.766,5.485-12.251,12.251-12.251s12.251,5.485,12.251,12.251C234.744,279.163,229.258,284.648,222.493,284.648z"/><path d="M103.954,377.53c-15.452,15.451-15.454,40.46,0,55.914l55.913-55.914C144.419,362.08,119.407,362.075,103.954,377.53z"/><path d="M9.957,318.06v178.845h0.001c0,8.335,6.757,15.091,15.091,15.091h213.722c8.335,0,15.091-6.757,15.091-15.091V318.06    H9.957z M131.91,467.299c-34.163,0-61.812-27.645-61.812-61.812c0-34.163,27.645-61.812,61.812-61.812    c16.51,0,32.033,6.43,43.708,18.104C214.545,400.707,186.604,467.299,131.91,467.299z"/>
<path d="M501.142,480.357L469.085,363.43c14.457-94.265,13.562-88.282,13.673-89.446l-30.637-158.165    c-3.628-16.955-20.314-27.758-37.268-24.13l-54.747,11.716c-16.688,3.572-27.406,19.792-24.28,36.469l31.122-19.256    l-41.089,43.545l-70.649,10.606c-11.386,1.71-19.231,12.324-17.521,23.711c1.711,11.394,12.336,19.231,23.712,17.521    l77.772-11.675c4.615-0.693,8.864-2.915,12.067-6.309l46.033-48.787l-33.036,61.05c-2.54,4.695-6.636,8.008-11.301,9.659    l14.012,65.477l-25.01,68.189c-0.824,2.247-1.322,4.6-1.477,6.989l-8.127,124.758c-0.899,13.787,9.55,25.691,23.338,26.59    c0.554,0.036,1.104,0.053,1.651,0.053c13.074,0,24.076-10.158,24.94-23.391l7.892-121.157l29.313-79.92l10.998-2.353    l-11.647,75.939c-0.533,3.473-0.327,7.019,0.601,10.408l33.467,122.067c3.654,13.323,17.414,21.165,30.743,17.512    C496.955,507.446,504.795,493.683,501.142,480.357z"/>
<circle cx="361" cy="42" r="42"/></g>
</defs>
<g  opacity="0.17"><pattern id="pattern_L1_8" width="350" height="350" patternUnits="userSpaceOnUse"><use xlink:href="#L1_8" x="-350" y="-350"/><use xlink:href="#L1_8" x="0" y="-350"/><use xlink:href="#L1_8" x="350" y="-350"/><use xlink:href="#L1_8" x="-350" y="0"/><use xlink:href="#L1_8" x="0" y="0"/><use xlink:href="#L1_8" x="350" y="0"/><use xlink:href="#L1_8" x="-350" y="350"/><use xlink:href="#L1_8" x="0" y="350"/><use xlink:href="#L1_8" x="350" y="350"/></pattern>
<rect x="0" y="0" width="100%" height="100%" fill="url(#pattern_L1_8)"/></g>
<g opacity="0.17"><pattern id="pattern_L1_14" width="350" height="350" patternUnits="userSpaceOnUse"><use xlink:href="#L1_14" x="-350" y="-350"/><use xlink:href="#L1_14" x="0" y="-350"/><use xlink:href="#L1_14" x="350" y="-350"/><use xlink:href="#L1_14" x="-350" y="0"/><use xlink:href="#L1_14" x="0" y="0"/><use xlink:href="#L1_14" x="350" y="0"/><use xlink:href="#L1_14" x="-350" y="350"/><use xlink:href="#L1_14" x="0" y="350"/><use xlink:href="#L1_14" x="350" y="350"/></pattern>
<rect x="0" y="0" width="100%" height="100%" fill="url(#pattern_L1_14)"/></g>
<g opacity="0.17"><pattern id="pattern_L1_15" width="350" height="350" patternUnits="userSpaceOnUse"><use xlink:href="#L1_15" x="-350" y="-350"/><use xlink:href="#L1_15" x="0" y="-350"/><use xlink:href="#L1_15" x="350" y="-350"/><use xlink:href="#L1_15" x="-350" y="0"/><use xlink:href="#L1_15" x="0" y="0"/><use xlink:href="#L1_15" x="350" y="0"/><use xlink:href="#L1_15" x="-350" y="350"/><use xlink:href="#L1_15" x="0" y="350"/><use xlink:href="#L1_15" x="350" y="350"/></pattern>
<rect x="0" y="0" width="100%" height="100%" fill="url(#pattern_L1_15)"/></g>
<g opacity="0.17"><pattern id="pattern_L1_16" width="350" height="350" patternUnits="userSpaceOnUse"><use xlink:href="#L1_16" x="-350" y="-350"/><use xlink:href="#L1_16" x="0" y="-350"/><use xlink:href="#L1_16" x="350" y="-350"/><use xlink:href="#L1_16" x="-350" y="0"/><use xlink:href="#L1_16" x="0" y="0"/><use xlink:href="#L1_16" x="350" y="0"/><use xlink:href="#L1_16" x="-350" y="350"/><use xlink:href="#L1_16" x="0" y="350"/><use xlink:href="#L1_16" x="350" y="350"/></pattern>
<rect x="0" y="0" width="100%" height="100%" fill="url(#pattern_L1_16)"/></g>
<g opacity="0.17"><pattern id="pattern_L1_17" width="350" height="350" patternUnits="userSpaceOnUse"><use xlink:href="#L1_17" x="-350" y="-350"/><use xlink:href="#L1_17" x="0" y="-350"/><use xlink:href="#L1_17" x="350" y="-350"/><use xlink:href="#L1_17" x="-350" y="0"/><use xlink:href="#L1_17" x="0" y="0"/><use xlink:href="#L1_17" x="350" y="0"/><use xlink:href="#L1_17" x="-350" y="350"/><use xlink:href="#L1_17" x="0" y="350"/><use xlink:href="#L1_17" x="350" y="350"/></pattern>
<rect x="0" y="0" width="100%" height="100%" fill="url(#pattern_L1_17)"/></g></svg>

<div id="space2" class="wrapper">
<?php require "components/header.php" ?>
<div class="traym">
<div class="sidebar">
<aside>
<p style="font-size: 1em; text-align: right;" class="logotext">
<svg viewBox="0 -4 50 50"  width="50" height="50" fill="#515A39">
<g>
	<path d="M41.7,33.6c2-2.7,3.1-5.8,3.1-9.2c0-8.4-6.8-15.2-15.2-15.2c-2.5,0-5,0.6-7.2,1.8c-0.2,0.1-0.4,0.3-0.4,0.6
		c-0.1,0.2,0,0.5,0.1,0.7c0.1,0.2,0.3,0.4,0.6,0.5c0.2,0.1,0.5,0,0.7-0.1c1.9-1.1,4.1-1.6,6.4-1.6c3.5,0,6.9,1.4,9.4,3.9
		c2.5,2.5,3.9,5.8,3.9,9.4c0,2.9-0.9,5.7-2.7,8c-0.6,0.8-1.4,1.6-2.2,2.3c-4.2-3.1-5.9-1.4-7.7,0.4L30,35.4c-0.2,0.2-0.9,0-2.1-0.7
		c-1.2-0.7-2.6-2-4.3-3.7c-2.8-2.8-3.8-4.4-4.2-5.2c-0.4-0.9-0.2-1.2-0.2-1.2l0.3-0.3c1.9-1.9,3.7-3.6-0.1-8.3
		c-1.3-1.6-2.5-2.4-3.9-2.4c-1.9-0.1-3.4,1.4-4.6,2.7c-0.2,0.2-0.4,0.4-0.5,0.6c-1.4,1.4-1.4,4.3-0.1,7.9c1.4,3.8,4.2,7.9,7.9,11.6
		c3.7,3.7,7.8,6.5,11.6,7.9c1.7,0.6,3.3,1,4.7,1c1.4,0,2.5-0.4,3.2-1.1c0.2-0.2,0.4-0.4,0.6-0.6c1.3-1.2,2.7-2.6,2.7-4.5
		c0-1.1-0.6-2.1-1.6-3.1C40.3,35.3,41.1,34.5,41.7,33.6z M15.4,15.4V15V15.4c0.8,0,1.6,0.6,2.6,1.7c2.7,3.4,1.9,4.2,0.2,5.8
		l-0.3,0.3c-1.6,1.6-0.2,4.4,4.4,9c1.8,1.8,3.3,3.1,4.6,3.9c2,1.3,3.5,1.4,4.4,0.5l0.3-0.3c1.7-1.7,2.4-2.5,5.8,0.2
		c1.1,0.9,1.7,1.7,1.7,2.5c0,1.1-1.1,2.2-2.1,3.1L37,42.4c-0.2,0.2-0.3,0.3-0.5,0.5c-0.7,0.7-2.8,0.8-5.9-0.3
		c-3.5-1.3-7.4-4-10.9-7.5c-3.5-3.5-6.2-7.4-7.5-10.9c-1.2-3.1-1-5.2-0.3-5.9c0.1-0.1,0.3-0.3,0.4-0.5l0.1-0.1
		C13.3,16.5,14.4,15.4,15.4,15.4z"/>
	<path d="M29.1,21.4l-1.8,1.2c-1.1,0.8-1.7,1.9-1.7,3.5v0.6c0,0.3,0.2,0.5,0.5,0.5h5c0.3,0,0.5-0.2,0.5-0.5v-0.9
		c0-0.3-0.2-0.5-0.5-0.5h-3.3c0.1-0.3,0.2-0.6,0.6-0.9l1.8-1.2c1.1-0.7,1.5-1.4,1.5-2.3c0-2.2-2.1-3.2-5.1-2.3L26,18.6
		c-0.2,0-0.3,0.2-0.4,0.3l-0.1,0.2l0.3,1c0.1,0.3,0.4,0.4,0.7,0.3l0.7-0.2c0.4-0.1,0.9-0.2,1.3-0.2c0.3,0,0.9,0.1,0.9,0.7
		C29.6,20.9,29.5,21.1,29.1,21.4z"/>
	<path d="M37.5,18.2h-1.4c-0.2,0-0.4,0.1-0.5,0.3c-0.2,0.3-0.4,0.6-0.6,0.9l-2.2,2.8c-0.3,0.4-0.5,0.7-0.8,1
		c-0.2,0.2-0.2,0.4-0.2,0.5v1c0,0.3,0.2,0.5,0.5,0.5h3.5v1.5c0,0.3,0.2,0.5,0.5,0.5h1c0.3,0,0.5-0.2,0.5-0.5v-1.5h0.3
		c0.3,0,0.5-0.2,0.5-0.5l0-0.9c0-0.3-0.2-0.5-0.5-0.5h-0.3v-4.4C38.1,18.4,37.8,18.2,37.5,18.2z M35.9,21.4c0,0,0,0.1,0,0.1v1.6
		h-1.3c0,0,0.1-0.1,0.1-0.1L35.9,21.4z"/>
</g>
</svg>
<span style="color:#515A39;">+380674016977</span></p>

	</aside>

</div>
    <div class="content">
		<div class="contentwriper">
  <div class="wriper-cont3">
  <h1><strong>Наши услуги</strong></h1>
  <div class="cont3">
  <details class="card">
  <summary class="card-header1">
  <span class="sevice-1 forbutton1">Почасовая уборка</span>
  </summary>
  <ul class="card-body">
  <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
  <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
  </svg><span style="padding-left:.4em;">От 200 гривен за час</span></li>
  <li><p>Мы убираем только то, что Вам нужно, а Вы заплатите за это существенно дешевле.</p></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  </details>
  <details open class="card" id="basic" name="basic">
  <summary class="card-header2">
  <span id="part1" class="sevice-2 forbutton1">Базовая уборка</span>
  </summary>
  <ul class="card-body">
  <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
  <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
  </svg><span style="padding-left:.4em;">От 1000 грн.</span></li>
  <li><p>Это уборка которая охватывает все основные очаги загрязнения. Это разовая уборка, которая полностью наводит чистоту. Если заказать такую уборку + все дополнительные сервисы, то в итоге выйдет генеральная. В среднем на уборку одной комнаты уходит около часа.</p></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  </details>
  <details class="card" id="maintenance" name="maintenance">
  <summary class="card-header3">
  <span id="part2" class="sevice-3 forbutton1">Поддерживающая уборка</span>
  </summary>
  <ul class="card-body">
  <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
  <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
  </svg><span style="padding-left:.4em;">От 450 грн.</span></li>
  <li><p>Это легкая уборка для поддержания чистоты в квартире на постоянной основе. Это тот вид уборки, которую мы советуем заказывать, если уже была проведена генеральная уборка. Уборка одной жилой комнаты длится около 30-40 минут.</p></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  </details>
  <details id="out" name="out" class="card">
  <summary class="card-header4">
  <span id="part3" class="sevice-4 forbutton1">Генеральная уборка</span>
  </summary>
 <ul class="card-body">
 <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
 <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
 </svg><span style="padding-left:.4em;">От 35 грн. м2</span></li>
 <li><p>Раз в пол года рекомендуется делать большую генеральную уборку квартиры. Это означает достать все из шкафчиков, отодвинуть все кровати и диваны и до блеска отмыть вытяжку и плиту. Вытряхнуть ковры, постирать шторы и т.д.</p></li>
 <li></li>
 <li></li>
 <li></li>
 </ul>
  </details>
  <details id="renovation" date="renovation"class="card">
  <summary class="card-header5">
  <span id="part4" class="sevice-5 forbutton1">После ремонта</span>
  </summary>
  <ul class="card-body">
  <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
  <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
  </svg><span style="padding-left:.4em;">От 20 грн. м2</span></li>
  <li><p>Уборка после ремонта – сложное и кропотливое занятие. После косметического, а тем более капитального ремонта очень сложно избавиться от строительной пыли. Если есть возможность, лучше доверить это профессиональным клинерам.  Мы приезжаем к вам со всем необходимым оборудованием и за один день готовим квартиру или другое помещение к заселению или работе. Цена зависит от степени сложности работы. </p></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  </details>
  <details class="card">
  <summary class="card-header6">
  <span class="sevice-6 forbutton1">Уборка кухни</span>
  </summary>
  <ul class="card-body">
  <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
  <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
  </svg><span style="padding-left:.4em;">От 750 грн.</span></li>
  <li><p>Уборка кухни занимает много времени и сил. Чтобы поддерживать кухню в порядке следует после каждого приготовления пищи протирать плиту и возле нее, тогда полноценная генеральная уборка кухни потребуется где-то раз в 3 месяца. Мы делаем и ежидневную и генеральную уборку кухни. </p></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  </details>
  <details class="card">
  <summary class="card-header7">
  <span class="sevice-7 forbutton1">Уборка балкона</span>
  </summary>
  <ul class="card-body">
  <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
  <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
  </svg><span style="padding-left:.4em;">От 250 грн.</span></li>
  <li><p>Мы убираем балкон по принципу жилой комнаты. Клинер протирает все доступные поверхности и подоконники, складывает вещи. Мы соберем весь мусор и оберки, пропылесосим и вымоем пол.</p></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  </details>
  <details class="card">
  <summary class="card-header8">
  <span class="sevice-8 forbutton1">Уборка в офисе</span>
  </summary>
  <ul class="card-body">
  <li class="card-body__service"><img alt="service" src  = "./images/1.jpg">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -20 1000 1000" width="20" height="20">
  <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M8058.8,5002.9c-281.9-55.6-500.5-176.4-730.7-404.6c-172.6-170.7-274.3-312.6-389.3-538.9c-94-187.9-159.2-360.5-201.4-538.9l-34.5-138.1l-1047.1-5.8l-1049-5.8l-153.4-51.8c-324.1-111.2-247.4-42.2-2274.5-2067.4L305.3-618.1l-78.6-163c-187.9-381.6-164.9-826.6,57.5-1171.8c120.8-186,2514.2-2562.2,2683-2663.8c345.2-205.2,759.4-218.6,1131.5-36.4l163,78.6l1869.8,1873.7C7535.3-1297,8018.5-802.2,8066.5-719.7c34.5,61.4,90.1,186,124.7,278.1l59.4,168.8l5.7,1400c5.8,1350.1,3.8,1403.8-32.6,1524.6c-53.7,172.6-155.3,335.6-283.8,456.4c-118.9,109.3-379.7,253.1-406.6,222.5c-42.2-46-65.2-326-76.7-918.6l-11.5-632.9l-55.6-101.6c-65.2-115.1-163-212.9-283.8-276.2c-69-36.4-111.2-44.1-264.6-44.1c-153.4,0-195.6,7.7-264.6,44.1c-120.8,63.3-218.6,161.1-283.8,276.2c-49.9,92.1-55.6,118.9-55.6,283.8c0,197.5,24.9,268.5,138.1,402.7c57.5,69,207.1,172.6,249.3,172.6c19.2,0,24.9-71,24.9-327.9v-327.9l55.6-55.6c78.6-76.7,193.7-78.6,270.4-1.9l53.7,53.7l9.6,613.7c11.5,648.2,28.8,807.4,128.5,1098.9c186,552.3,538.9,934,939.7,1020.3c429.6,92.1,886-195.6,1148.8-724.9c429.6-861.1,287.7-2061.6-314.5-2642.7c-65.2-63.3-149.6-132.3-187.9-153.4l-71-38.4V835.6c0-145.7,7.7-216.7,21.1-216.7c46,0,287.7,141.9,404.6,237.8c803.5,663.5,1037.5,2126.8,508.2,3185.4c-164.9,333.7-441.1,646.3-705.7,801.6C8657.2,4991.4,8327.3,5054.7,8058.8,5002.9z M4781.3,686c76.7-26.8,182.2-72.9,232.1-103.6l92-57.5l57.5,55.6c113.2,109.3,232.1,118.9,320.3,23c92.1-97.8,80.5-226.3-28.8-327.9l-49.9-44.1l57.5-94c184.1-297.2,201.4-688.5,44.1-939.7c-90.1-143.8-195.6-184.1-314.5-122.7c-59.5,30.7-115.1,117-115.1,178.3c0,21.1,26.9,84.4,57.5,143.8c113.2,212.9,55.6,454.5-163,682.7c-140,147.7-283.8,218.6-460.3,228.2c-109.3,3.8-145.8-1.9-197.5-32.6c-207.1-130.4-174.5-362.5,111.2-788.2c230.1-341.4,343.3-655.9,316.4-872.6c-30.7-226.3-178.3-427.7-391.2-533.1c-118.9-57.5-136.2-61.4-337.5-61.4c-232.1,0-349,32.6-525.5,141.9l-94,57.5l-44.1-49.9c-97.8-103.5-197.5-126.6-297.3-65.2c-124.7,74.8-132.3,235.9-19.2,345.2l65.2,63.3l-55.6,88.2C2919.2-1203,2859.7-944.1,2892.3-737c36.4,235.9,180.3,435.3,310.7,435.3c153.4,0,264.7-159.2,197.5-285.7c-17.3-32.6-44.1-86.3-61.4-118.9c-47.9-90.1-30.7-287.7,36.4-423.8c69-138.1,226.3-297.3,370.1-370.1c157.3-80.5,351-90.1,448.8-24.9c197.5,132.3,168.8,345.2-101.6,755.6C3849.3-401.4,3763-182.8,3764.9,62.7c1.9,197.5,42.2,301.1,174.5,443C4144.6,726.3,4461.1,793.4,4781.3,686z"/></g></g>
  </svg><span style="padding-left:.4em;">От 50 грн. м2</span></li>
  <li><p>Чистота после уборки в офисе напрямую влияет и на работоспособность сотрудников. Отсутствие пыли, свежий воздух, чистая офисная техника не просто стимулируют производительность труда, но и обеспечивают здоровье работников. Офис где за день проходит много людей, и находится много техники необходимо убирать ежедневно. И лучше это доверить профи.</p></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  </details>
  </div>
  <div class="card-body__window"></div>
<?php require "components/popup_button.php" ?>
  </div>
  <h1><strong>Дополнительные услуги</strong></h1>
  <div class="wriper__additionalservice">
  <div class="block__additionalservice">
  <svg xmlns="http://www.w3.org/2000/svg" height="82" viewBox="0 0 512 512" width="82"><g><path d="m20.1611 213.8633 16.5909 9.0732 9.0742 16.5908a8 8 0 0 0 14.0371 0l9.0732-16.5908 16.5908-9.0732a8 8 0 0 0 0-14.0371l-16.5908-9.0742-9.0732-16.5909a8 8 0 0 0 -14.0371 0l-9.0742 16.5909-16.5909 9.0742a8 8 0 0 0 0 14.0371zm26.3243-10.1983a7.996 7.996 0 0 0 3.18-3.18l3.18-5.8125 3.1787 5.8125a7.9956 7.9956 0 0 0 3.18 3.18l5.8125 3.18-5.8125 3.1787a7.9952 7.9952 0 0 0 -3.18 3.18l-3.1787 5.8125-3.18-5.8125a7.9956 7.9956 0 0 0 -3.18-3.18l-5.8125-3.1787z" fill="black"/><path d="m106.4727 99.8633 16.5908 9.0732 9.0732 16.5908a8 8 0 0 0 14.0371 0l9.0742-16.5908 16.5909-9.0732a8 8 0 0 0 0-14.0371l-16.5909-9.0742-9.0742-16.5909a8 8 0 0 0 -14.0371 0l-9.0732 16.5909-16.5908 9.0742a8 8 0 0 0 0 14.0371zm26.3242-10.1983a7.9956 7.9956 0 0 0 3.18-3.18l3.1787-5.8125 3.18 5.8125a7.996 7.996 0 0 0 3.18 3.18l5.8125 3.18-5.8125 3.1787a7.9956 7.9956 0 0 0 -3.18 3.18l-3.18 5.8125-3.1787-5.8125a7.9952 7.9952 0 0 0 -3.18-3.18l-5.8125-3.1787z" fill="black"/><path d="m388 272h-292v16h292a12.0131 12.0131 0 0 1 12 12v36h-2a38.0433 38.0433 0 0 0 -38 38v2h-26.7041a27.8331 27.8331 0 0 0 2.7041-12v-24a28.0314 28.0314 0 0 0 -28-28h-24a28.0314 28.0314 0 0 0 -28 28v24a27.8331 27.8331 0 0 0 2.7041 12h-12.7041a37.9566 37.9566 0 0 0 -30 14.7019 37.9566 37.9566 0 0 0 -30-14.7019h-12.7041a27.8331 27.8331 0 0 0 2.7041-12v-24a28.0314 28.0314 0 0 0 -28-28h-24a28.0314 28.0314 0 0 0 -28 28v24a27.8331 27.8331 0 0 0 2.7041 12h-26.7041v-2a38.0433 38.0433 0 0 0 -38-38h-2v-36a12.0131 12.0131 0 0 1 12-12h36v-16h-36a28.0314 28.0314 0 0 0 -28 28v188a8 8 0 0 0 8 8h40a8 8 0 0 0 8-8v-16h240v-16h-240v-16h288v16h-32v16h32v16a8 8 0 0 0 8 8h40a8 8 0 0 0 8-8v-188a28.0314 28.0314 0 0 0 -28-28zm-116 92v-24a12.0131 12.0131 0 0 1 12-12h24a12.0131 12.0131 0 0 1 12 12v24a12.0131 12.0131 0 0 1 -12 12h-24a12.0131 12.0131 0 0 1 -12-12zm-160 0v-24a12.0131 12.0131 0 0 1 12-12h24a12.0131 12.0131 0 0 1 12 12v24a12.0131 12.0131 0 0 1 -12 12h-24a12.0131 12.0131 0 0 1 -12-12zm-56 116h-24v-128h2a22.0248 22.0248 0 0 1 22 22zm16-88h114a22.0248 22.0248 0 0 1 22 22v10h-136zm152 32v-10a22.0248 22.0248 0 0 1 22-22h114v32zm176 56h-24v-106a22.0248 22.0248 0 0 1 22-22h2z" fill="black"/><path d="m496 80v-56a8 8 0 0 0 -8-8h-288a8 8 0 0 0 -8 8v232h16v-16h272v32h-48v16h48v64h-48v16h48v112h-48v16h56a8 8 0 0 0 8-8v-392h-16v32h-80v-96h80v48zm-112 48h-80v-96h80zm-176-96h80v96h-80zm0 112h176v80h-176zm272 80h-32v-80h32zm-48-80v80h-32v-80z" fill="black"/><path d="m224 168h16v32h-16z" fill="black"/><path d="m256 72h16v16h-16z" fill="black"/><path d="m320 72h16v16h-16z" fill="black"/><path d="m424 96h32v16h-32z" fill="black"/><path d="m432 408h16v32h-16z" fill="black"/></g></svg>
  <p>Мойка стен и фасадов</p>
  <p>250 грн/час</p>
  </div>
  <div class="block__additionalservice">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" width="82" height="82">
  <g>
  <path d="M498.05,7.703H105.236c-7.691,0-13.949,6.257-13.949,13.95v214.62l-13.396-13.396c-2.367-2.367-5.518-3.67-8.875-3.67    c-3.357,0-6.508,1.303-8.875,3.67L36.88,246.137c-2.368,2.367-3.67,5.518-3.67,8.875s1.303,6.508,3.67,8.875l54.408,54.408v21.51    c-1.966,2.274-3.047,5.144-3.047,8.188c0,3.044,1.081,5.914,3.047,8.188v23.409L3.671,467.206C1.303,469.573,0,472.725,0,476.082    c0,3.357,1.303,6.508,3.67,8.875l15.672,15.671c2.447,2.447,5.661,3.67,8.875,3.67c3.214,0,6.428-1.223,8.875-3.67l9.323-9.323    c2.941-2.941,2.941-7.709,0-10.649c-2.941-2.941-7.709-2.941-10.649,0l-7.549,7.549l-12.122-12.122l108.9-108.899l12.121,12.122    L61.871,454.55c-2.941,2.941-2.941,7.709,0,10.649c2.941,2.941,7.709,2.941,10.649,0l18.766-18.766v29.652    c0,7.691,6.257,13.95,13.949,13.95h273.223c4.159,0,7.531-3.372,7.531-7.531s-3.372-7.531-7.531-7.531H227.132l10.416-10.416    l2.863,2.862c2.367,2.368,5.518,3.67,8.875,3.67s6.508-1.303,8.875-3.67l23.261-23.261c4.894-4.894,4.894-12.856,0-17.75    l-2.863-2.863l218.379-218.379v269.807H425.65c-4.159,0-7.531,3.372-7.531,7.531s3.372,7.531,7.531,7.531h72.401    c7.691,0,13.95-6.257,13.95-13.95V21.652C512,13.961,505.742,7.703,498.05,7.703z M133.869,354.758    c-2.367-2.367-5.518-3.67-8.875-3.67c-3.357,0-6.508,1.303-8.875,3.67l-2.511,2.511l-9.275-9.276l21.61-21.609l51.971,51.971    l-21.609,21.611l-9.276-9.276l2.511-2.51c4.894-4.894,4.894-12.856,0-17.75L133.869,354.758z M205.834,474.973h-99.486v-43.602    l30.032-30.032l11.05,11.05c2.367,2.367,5.518,3.67,8.875,3.67c3.357,0,6.508-1.303,8.875-3.67l10.101-10.101l51.619,51.619    L205.834,474.973z M249.286,454.995l-63.357-63.357l4.409-4.409c2.367-2.367,3.67-5.518,3.67-8.875    c0-3.357-1.303-6.508-3.67-8.875l-55.52-55.52c-2.367-2.367-5.518-3.67-8.875-3.67c-3.357,0-6.508,1.303-8.875,3.67l-4.409,4.409    l-63.357-63.357l19.712-19.712l199.983,199.983L249.286,454.995z M267.911,412.897l-21.953-21.953l66.145-66.144    c2.941-2.941,2.941-7.709,0-10.65c-2.941-2.942-7.709-2.941-10.65,0l-66.145,66.144l-98.084-98.083l35.907-35.908    c2.941-2.941,2.941-7.709,0-10.649c-2.941-2.941-7.709-2.941-10.649,0l-35.907,35.908l-10.8-10.801l120.889-120.889    c2.941-2.941,2.941-7.709,0-10.649c-2.941-2.941-7.709-2.941-10.649,0L106.347,248.889V22.764h226.124L255.896,99.34    c-2.941,2.941-2.941,7.709,0,10.649c2.941,2.941,7.709,2.941,10.649,0l87.225-87.226h143.167v161.106h0.002L267.911,412.897z" fill="black"/>
  </g>
  <g>
  <path d="M68.72,168.941c-13.707-4.269-15.358-5.921-19.628-19.63c-1.406-4.509-5.523-7.54-10.248-7.54    c-4.726,0-8.845,3.031-10.249,7.542c-4.267,13.707-5.918,15.358-19.623,19.627c-4.514,1.404-7.547,5.521-7.547,10.248    c-0.001,4.726,3.032,8.846,7.543,10.249c13.708,4.268,15.358,5.919,19.626,19.626c1.404,4.512,5.522,7.544,10.25,7.544    c4.724,0,8.843-3.03,10.248-7.542c4.27-13.709,5.921-15.359,19.624-19.626c4.513-1.403,7.546-5.522,7.546-10.251    C76.261,174.461,73.229,170.343,68.72,168.941z M38.845,193.604c-3.343-6.962-7.453-11.073-14.417-14.417    c6.964-3.344,11.073-7.453,14.417-14.417c3.344,6.963,7.452,11.072,14.415,14.417C46.298,182.531,42.188,186.641,38.845,193.604z" fill="black"/>
  </g>
  <g>
  <path d="M377.182,87.099c-18.375-5.723-20.859-8.207-26.582-26.582c-1.522-4.892-5.988-8.178-11.113-8.178    c-5.125,0-9.592,3.287-11.113,8.179c-5.72,18.374-8.204,20.859-26.579,26.581c-4.894,1.523-8.181,5.988-8.181,11.112    c0,5.127,3.288,9.595,8.179,11.114c18.377,5.722,20.861,8.206,26.58,26.578c1.522,4.894,5.988,8.182,11.114,8.182    c5.125,0,9.591-3.287,11.113-8.179c5.723-18.375,8.207-20.859,26.578-26.58c4.895-1.521,8.183-5.988,8.183-11.116    C385.361,93.085,382.073,88.62,377.182,87.099z M339.488,122.013c-5.084-12.821-10.979-18.716-23.803-23.801    c12.822-5.086,18.718-10.982,23.802-23.803c5.086,12.82,10.982,18.716,23.803,23.802    C350.47,103.297,344.574,109.192,339.488,122.013z" fill="black"/>
  </g>
  <g>
  <path d="M373.41,247.648c-10.456-3.257-11.416-4.217-14.673-14.674c-1.32-4.24-5.191-7.089-9.632-7.089s-8.312,2.849-9.632,7.089    c-3.255,10.456-4.215,11.416-14.669,14.672c-4.242,1.319-7.092,5.19-7.092,9.631c0,4.443,2.85,8.315,7.089,9.633    c10.457,3.256,11.417,4.216,14.672,14.672c1.319,4.241,5.19,7.09,9.632,7.09c4.441,0,8.313-2.849,9.631-7.088    c3.257-10.457,4.217-11.417,14.669-14.672c4.242-1.319,7.092-5.19,7.092-9.634C380.499,252.836,377.648,248.965,373.41,247.648z     M349.105,265.584c-2.132-3.594-4.712-6.174-8.306-8.306c3.594-2.132,6.175-4.713,8.306-8.306    c2.132,3.593,4.712,6.174,8.306,8.306C353.818,259.41,351.238,261.99,349.105,265.584z" fill="black"/>
  </g>
  <g>
  <path d="M355.749,162.67c-2.941-2.942-7.709-2.941-10.649,0L235.983,271.786c-2.941,2.941-2.941,7.709,0,10.649    c1.47,1.471,3.398,2.206,5.325,2.206c1.928,0,3.855-0.735,5.325-2.206l109.116-109.115    C358.69,170.38,358.69,165.611,355.749,162.67z" fill="black"/>
  </g>
  </svg>
  <p id="windows" name="windows">Мойка окон</p>
  <p id="part5">110 грн (110×140см)</p>
  </div>
  <div class="block__additionalservice">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 70 70" width="96" height="96">
  <style type="text/css">
  .st0{fill:#F5F5F5;}
  .st1{fill:black;}
  .st2{fill:none;stroke:black;stroke-width:1;stroke-linecap:round;}
  .st3{fill:none;stroke:black;stroke-width:1;}
  </style>
  <g id="illustration_x2F_136_x2F_washing-and-ironing-">
  <g id="washing-and-ironing-" transform="translate(25.000000, 8.000000)">
  <g id="Group-5" transform="translate(37.5, 0.000000)">
  <g id="Group-4" transform="translate(5, 0.000000)">
  <polygon id="Path-3" class="st0" points="-21.4,8.2 -20,10.5 -14.3,8.4 -8.7,10.5 -7.1,8.2 -14.5,5.9 				"/>
  <path id="Path-5" class="st1" d="M-7.5,10.7l2.7-2.4l-9.7-2.6l-9.1,2.6l3,2.7l6-1.8L-7.5,10.7z M-21.7,8.6l7.2-2.1l7.8,2.2
  L-8,9.9l-6.6-1.6l-5.8,1.6L-21.7,8.6z"/>
  <path id="Path-6" class="st1" d="M-14,2.3c2.6-0.5,3.9-1.9,3.9-4.2C-10.1-5-12-6-15-6c-1.5,0-2.4,0.5-3.2,1.4
  c-0.8,0.8-1.2,2-0.8,3.3l0.9-0.2c-0.4-1,0-1.8,0.7-2.6c0.6-0.7,1.4-1,2.6-1c2.4,0,3.8,0.8,3.8,3.3c0,2.1-1.2,3.1-3.7,3.5h-0.4
  v4.5h0.9L-14,2.3L-14,2.3z"/>
  </g>
  <g id="Group-2" transform="translate(0, 13)">
  <path id="Path-4" class="st0" d="M-18.3,28c4.6,1.4,8,2.1,10.1,2.1S-3.3,29.4,0,28c-0.9-4-1.5-7.4-1.5-10S-1,11.2,0,5.6
  c0.5,6,0.7,10.5,0.9,13.5S1.3,26.8,1.5,33h2.7c0.9-8.5,1.4-14.7,1.2-18.6C5.3,11.4,5.3,7,4.3,2.3c-0.2-1-0.7-2.6-1.7-4.7
  C1.7-3.1,1.1-3.5,0.5-3.8c-0.8-0.4-2-1-3.7-1.7c-0.6,1.6-1.2,2.6-1.7,3.1c-1.7,1.7-3.2,2-4.3,2s-3.2-0.3-4.8-2
  c-0.3-0.6-1.1-1.5-1.5-2.9c-3.8,1.6-5.7,2.5-5.7,2.5c-0.8,1.8-1.4,3.6-1.5,5c-0.6,4.6-0.7,10-0.8,12.4
  c-0.3,4.2,0.1,10.3,0.8,18.4h3c0.5-17.4,0.7-26.4,0.9-27c0.2-0.7,0.6-0.2,1.1,1.6c0.7,4.7,1.1,8.2,0.9,10.5
  C-16.9,20.2-17.3,23.7-18.3,28z"/>
  <path id="Path_3_" class="st1" d="M-17.4,8.4c-0.6-0.5-0.8-1.3-0.4-2c0-0.2-0.1-0.6-0.2-0.6c-0.1-0.1-0.2-0.1-0.4-0.2
  c-0.2-0.1-0.5,0.1-0.5,0.3c-0.2,1.7,0,2.8-0.2,3.8c0.2,0.5,0.4,0.7,0.1,1.2l0.1,0.5c0.2,0,0.5-0.2,0.5-0.5c0-0.2,0-0.3,0-0.6
  c0-0.8,0.1-1.6,0.2-2.6c0.2,0.6,0.5,1,0.6,1.6c0-0.1,0.1-0.3,0.1-0.5c0-0.1,0-0.1,0-0.2S-17.4,8.4-17.4,8.4z"/>
  <path id="Path_5_" class="st1" d="M5.3,6.6C5.2,4.2,4.9,2.2,4.6,0.7C4-1.7,3.3-3,2.1-3.7C1.4-4.2,0.4-4.5-0.3-5
  C-1.1-5.5-2.1-5.8-3-6c0,0,0,0-0.1,0c-0.2-0.1-0.5,0.1-0.6,0.3c-0.4,1.3-1.1,2.4-2.1,3.2C-6.7-1.7-8-1.2-9.3-1.2
  s-2.6-0.6-3.5-1.3c-0.9-0.9-1.7-2.1-2-3.2c-0.2-0.1-0.5-0.2-0.7-0.2c0,0,0,0-0.1,0c-0.7,0.3-1.7,0.7-2.7,1
  c-0.8,0.4-1.7,0.8-2.4,1.3c-1.2,0.7-1.9,2-2.5,4.4c-0.2,0.9-0.5,3.2-0.6,5.1c0,1.8,0,3.6,0,3.7c0.1,0.1,0,0.1,0.1,0.2
  c0.2-0.2,0.6-0.3,0.6-0.4c0.5-3.8,0.5-6.6,0.8-8.6c0.6-2.2,1.1-3.3,2-3.8c0.7-0.5,1.7-0.8,2.4-1.2c0.7-0.4,1.5-0.6,2.1-0.9
  c0.5,1.3,1.3,2.4,2.2,3.2c1.2,0.9,2.6,1.5,4,1.5c1.7,0,2.8-0.5,4-1.4c1.1-0.8,1.9-2.1,2.4-3.3c0.6,0.3,1.5,0.3,2.4,0.8
  C0-3.8,0.9-3.5,1.7-3c0.9,0.6,1.4,1.7,1.9,3.8C4,2.3,4.3,4.2,4.5,6.5C5.3,6.6,4.6,6.4,5.3,6.6z"/>
  <path id="Path_6_" class="st2" d="M-0.1,6.1c-2.8,12.1,0.4,20.6,0,21.9"/>
  <path id="Path_7_" class="st2" d="M-18.1,6.5c2.8,12-0.8,20.5-0.2,21.6"/>
  <path id="Path_8_" class="st2" d="M-18.2,28.2c0.4,0,8.8,4.3,18-0.2"/>
  <path id="Path_9_" class="st2" d="M-23.2,6.1C-24.7,21.3-23,31.7-22.7,33"/>
  <path id="Path_10_" class="st2" d="M-18.5,8.3c-0.4,13.3-0.9,23.5-1.1,24.7"/>
  <path id="Path_11_" class="st3" d="M-22.6,33h3.1"/>
  <path id="Path_12_" class="st2" d="M4.8,6.1c1.5,15.2-0.5,25.7-0.6,26.8"/>
  <path id="Path_13_" class="st2" d="M-0.1,6.1c0.5,13.3,1.2,25.7,1.4,26.8L-0.1,6.1z"/>
  <path id="Path_14_" class="st3" d="M4.3,32.9C2.1,32.7,1,32.6,1,32.6"/>
  </g>
  </g>
  <g id="t-shirt" transform="translate(0.000000, 1.8)">
  <path class="st0" d="M12.2,46.1V26.6l2,2.8l7.4-6.6c-3.9-5.4-6.8-9.2-8.8-10.9s-4.7-2.6-8-3.4l-2,0.6
  C0.9,9.6-0.6,9.7-1.8,9.7c-1.2-0.1-2.8-0.6-5-1.6c-3.7,1.2-6.8,2.5-8.8,4.1s-4.8,5.2-8.2,10.6l7.3,6.2l2.2-1.8l0.2,19L12.2,46.1z
  "/>
  <path class="st1" d="M22.1,22.4C22,22.3,22,22.3,22,22.2c-0.1-0.2-0.2-0.3-0.4-0.6c0,0,0-0.1-0.1-0.1
  c-0.1-0.1-0.1-0.2-0.2-0.3c-0.2-0.3-0.5-0.6-0.6-0.9c-0.2-0.3-0.5-0.6-0.6-0.8c-0.6-0.8-1.2-1.6-1.8-2.3
  c-0.4-0.5-0.6-0.8-0.9-1.2c-0.6-0.8-1.3-1.6-2-2.4c-0.4-0.5-0.6-0.8-1.1-1.2c-0.6-0.8-1.5-1.5-2.5-2C10.3,9.5,8.6,8.8,7,8.2
  C6.4,8,5.8,7.7,5.2,7.6C4.8,7.5,4.6,7.5,4.4,7.4c-0.1,0-0.2,0-0.4,0.1C2.6,8.4,0.4,8.8-1.3,8.8S-5,8.5-6.6,7.5c0,0,0,0-0.1,0
  s-0.2,0-0.4,0c-0.2,0.1-0.6,0.1-0.7,0.2C-8.4,7.9-9,8-9.6,8.3c-1.6,0.6-3.4,1.3-4.8,2.2c-0.8,0.6-1.6,1.2-2.3,2c0,0,0,0-0.1,0.1
  c-1.4,1.6-2.7,3.2-4,4.8c-0.3,0.6-0.7,1.3-1.2,1.9c0,0,0,0-0.1,0.1c-0.6,0.6-0.9,1.3-1.4,1.8c-0.2,0.4-0.6,0.8-0.6,1.2
  c0,0.1,0,0.1,0,0.2s0,0.2,0.1,0.3c1.2,1.2,2.3,2.4,3.6,3.6c0.8,0.8,1.6,1.6,2.6,2.3c0.4,0.3,0.6,0.6,0.9,0.8
  c0.2,0.1,0.5,0.3,0.6,0.5c0.1,0.1,0.4,0,0.5-0.1l1.2-1.2v17.5c0,0.2,0.2,0.5,0.5,0.5h26.7c0.2,0,0.5-0.2,0.5-0.5V28.6l1.1,1
  l0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.1h0.1h0.1c0,0,0,0,0.1,0s0.1-0.1,0.2-0.1c0.1-0.1,0.4-0.2,0.5-0.2c0.4-0.2,0.6-0.6,0.9-0.8
  c0.8-0.7,1.6-1.5,2.6-2.3c1.2-1.2,2.5-2.3,3.6-3.6c0.1-0.1,0.1-0.2,0.1-0.2C22.1,22.5,22.1,22.4,22.1,22.4z M13.3,14
  c0.3-0.3,0.5-0.5,0.8-0.6c0.4,0.4,0.6,0.6,0.9,1.1c1.3,1.5,2.6,3,3.7,4.6c0.2,0.2,0.4,0.5,0.6,0.6c-2.1,2.2-4.2,4.3-6.4,6.3v-9.9
  C13,15.9,13,14.5,13.3,14z M-5.5,8.8c1.4,0.6,3,0.8,4.6,0.8c1.5,0,3.2-0.2,4.6-0.8l0.6-0.2L4.2,9.2c-0.1,1-0.5,2-1.1,2.6
  c-1.1,1.2-2.6,1.5-4,1.5c-1.5,0-3-0.3-4-1.5c-0.6-0.7-0.9-1.7-1.1-2.6l-0.1-0.6L-5.5,8.8z M-14.8,27.8l-1.5,1.2l-0.4-0.2
  c-0.4-0.3-0.7-0.6-1.1-0.8c-0.6-0.5-0.9-0.8-1.4-1.3c-1.2-1-2.3-2.2-3.4-3.2c-0.2-0.2-0.5-0.5-0.6-0.7l-0.1-0.1l-0.1-0.1l0.1-0.3
  c0.1-0.1,0.1-0.2,0.2-0.3c0.4-0.6,0.6-0.9,1.1-1.4l0.3-0.3l0.4,0.4c2.1,2.2,4.3,4.3,6.5,6.4l0.2,0.1l-0.1,0.4L-14.8,27.8z
  M-14.5,26c-2.2-2.1-4.5-4.1-6.6-6.3c0.2-0.2,0.4-0.7,0.7-0.8c1.2-1.6,2.5-2.8,3.7-4.4c0.2-0.3,0,0,0.4-0.6l0.5-0.7l0.5,0.5
  c0.2,0.2,0.6,0.9,0.7,1.1c0,0.1,0.1,0.3,0.1,1.3c0.1,1.4,0,3.4,0,3.5L-14.5,26L-14.5,26z M12.6,14.5c-0.2,0.6-0.2,1-0.2,1.6
  l-0.5,10.7v0.1v0.8v18.4h-25.7V27.7v-0.1V16c0-0.6-0.1-1.2-0.4-1.6c-0.2-0.7-0.6-1.3-1.2-1.6c0.7-0.7,1.6-1.4,2.5-1.8
  c1.2-0.7,2.5-1.3,3.7-1.6c0.7-0.3,1.6-0.6,2.3-0.7c0,0.5,0,0.7,0.1,1c0.1,1,0.6,2.1,1.2,2.9c1.2,1.4,2.9,1.7,4.7,1.7
  c1.6,0,3.5-0.5,4.7-1.7c0.7-0.8,1.1-1.8,1.2-2.9c0-0.3,0.1-0.7,0.1-1c0.8,0.2,1.6,0.5,2.3,0.7c1.3,0.5,2.6,0.9,3.7,1.6
  c0.8,0.6,1.6,1.2,2.5,1.8C12.8,13,12.8,13.8,12.6,14.5z M21,22.7c-0.2,0.2-0.5,0.5-0.6,0.6c-1.2,1.2-2.2,2.2-3.4,3.2
  c-0.5,0.5-0.9,0.8-1.4,1.3c-0.4,0.3-0.6,0.6-1.1,0.8l-0.4,0.2l-1.4-1.3l-0.2-0.1v-0.6l0.1-0.1c2.2-2.1,4.3-4.1,6.5-6.3l0.4-0.3
  c0.2,0.2,0.4,0.5,0.6,0.6c0.4,0.5,0.6,0.9,0.9,1.4l0.2,0.2L21,22.7z"/>
  <g id="Group-12_1_" transform="translate(16.681108, 0.000000)">
  <path id="Path-3_1_" class="st0" d="M-22.7,8.5c0-0.1,0,0,0,0.3c0.1,0.3,0.1,0.9,0.4,1.6l4.7-1.4l4.9,1.4l0.6-2.1l-5.7-1.8
  L-22.7,8.5z"/>
  <path id="Path-5_1_" class="st1" d="M-12.3,11.1l0.6-3l-6.1-1.8l-5.6,1.8l0.6,3l4.9-1.5L-12.3,11.1z M-22.9,8.7l5.1-1.6l5.8,1.6
  l-0.5,1.5l-5.4-1.6l-4.8,1.6L-22.9,8.7z"/>
  <path id="Path-6_1_" class="st1" d="M-17.4,2.8c2.7-0.5,4-1.8,4-4.3c0-3.1-1.9-4.3-4.7-4.3c-1.5,0-2.5,0.5-3.2,1.4
  c-0.8,0.9-1.3,2.1-0.8,3.6l0.8-0.3c-0.4-1,0-1.8,0.7-2.6c0.7-0.7,1.4-1,2.6-1c2.3,0,3.7,0.8,3.7,3.3c0,2.1-1.2,3.1-3.6,3.5h-0.4
  v4.5h0.9V2.8L-17.4,2.8z"/>
  </g>
  </g>
  <g id="Group-6" transform="translate(20.522523, 19.738318)">
  <polygon id="Path-5_2_" class="st0" points="-24,16 -14.3,36.9 -14.3,37.5 7.4,37.5 9.4,12.8 7.2,-0.8 8,-1.1 8,-5.8 -14.3,-6 
  -14.2,-1 -14.3,11.7 			"/>
  <path id="Path_15_" class="st2" d="M-14.1,37.5H7.4"/>
  <path id="Path_16_" class="st3" d="M7.3-1.1h-21c-0.4,0-0.6-0.3-0.6-0.6v-3.7c0-0.3,0.4-0.6,0.6-0.6h21c0.3,0,0.6,0.3,0.6,0.6
  v3.7C8-1.4,7.6-1.1,7.3-1.1z"/>
  <path id="Path_17_" class="st3" d="M-7.8-1.1h-1.8c-0.4,0-0.6-0.3-0.6-0.6v-3.4c0-0.3,0.4-0.6,0.6-0.6h1.8c0.4,0,0.6,0.3,0.6,0.6
  v3.5C-7.2-1.4-7.5-1.1-7.8-1.1z"/>
  <path id="Path_18_" class="st3" d="M2.8-1.1H1c-0.4,0-0.6-0.3-0.6-0.6v-3.4c0-0.3,0.4-0.6,0.6-0.6h1.8c0.4,0,0.6,0.3,0.6,0.6v3.5
  C3.3-1.4,3-1.1,2.8-1.1z"/>
  <path id="Path_19_" class="st2" d="M-14.2-1l-0.1,38.6"/>
  <path id="Path_20_" class="st2" d="M7.3-0.8l2.1,13.3"/>
  <path id="Path_21_" class="st2" d="M9.4,12.5L7.5,37.4"/>
  <path id="Path_22_" class="st2" d="M-24,16.1l10,21.3"/>
  <path id="Path_23_" class="st2" d="M-24,16l9.7-4.3"/>
  <path id="Path_24_" class="st2" d="M-22.7,18.1l8.5-3.7"/>
  <path id="Path_25_" class="st2" d="M2.8,7.6H-8.9c-0.4,0-0.6-0.3-0.6-0.6V5.5c0-0.3,0.4-0.6,0.6-0.6H2.7c0.4,0,0.6,0.3,0.6,0.6
  v1.6C3.3,7.3,3,7.6,2.8,7.6z"/>
  <path id="Path_26_" class="st2" d="M-14.2-1v38.4"/>
  <path id="Path_27_" class="st2" d="M-9.1,7.6v6.8"/>
  <path id="Path_28_" class="st2" d="M2.9,7.6v6.8"/>
  <path id="Path_29_" class="st2" d="M-9.1,14.5l5.9,4.3"/>
  <path id="Path_30_" class="st2" d="M2.8,14.6l-5.9,4.3"/>
  </g>
  </g>
  </g>
  </svg><p>Глажка</p>
  <p>160 грн/час</p>
  </div>
  <div class="block__additionalservice"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="82" height="82"><path d="M512 295.5V191c0-7.5-6-13.5-13.4-13.5h-96.5A189 189 0 00222.9 47 189.4 189.4 0 0038.4 276.2H17c-7.8 0-14.2 6.3-14.2 14.2 0 7.2.6 14.3 1.7 21.3a14.2 14.2 0 00-3.6 9.5c0 7.7.6 15.3 1.8 22.7a14.2 14.2 0 00-2.8 8.5C0 408.5 33.3 458.6 84.9 480c1.7.7 3.6 1 5.5 1h108c2 0 3.8-.3 5.5-1a137.1 137.1 0 0067.3-59.8 189 189 0 0099.2-65.4v64.5a32.8 32.8 0 00-21.8 23.9h-6.2c-6.9 0-12.5 5.6-12.5 12.5v14.1c0 7 5.6 12.5 12.5 12.5h150.4c6.9 0 12.5-5.6 12.5-12.5v-14.1c0-7-5.6-12.5-12.5-12.5h-6.2c-3-11.8-11.4-21-21.8-24V350a55 55 0 0047.2-54.5zm-241.1-4.3c0 5.3-.5 10.6-1.2 15.7H19.1c-.7-5.1-1.1-10.4-1.2-15.7h253zM198.3 466H90.5c-15-6.3-28.2-15.2-39.2-26.2h186.3c-11 11-24.3 20-39.3 26.2zm52.1-41.2h-212A123.3 123.3 0 0115 353.1h174a7.5 7.5 0 100-15H17.1c-.7-5.3-1.1-10.7-1.1-16.2h256.8c0 5.5-.4 10.9-1.1 16.2H229a7.5 7.5 0 100 15h44.8c-.1 26.5-8.6 51.4-23.4 71.8zm29.4-23a139 139 0 009-49.5c0-3.2-1-6.1-2.8-8.5 1.2-7.4 1.9-15 1.9-22.7 0-3.7-1.4-7-3.7-9.5 1.1-7 1.7-14.1 1.7-21.3v-.5a82.6 82.6 0 00-3.4-110 7.5 7.5 0 10-10.9 10.2 67.6 67.6 0 015.2 87 14 14 0 00-5-1H168.3a67.5 67.5 0 0171.8-104.9 7.5 7.5 0 103.8-14.4 82 82 0 00-103.2 80c0 14.2 3.6 27.7 10 39.4h-97A174.4 174.4 0 01222.8 62a174 174 0 01163.4 115.5h-49.6c-7.4 0-13.4 6-13.4 13.5v104.5a55 55 0 0034.6 51.1 174.3 174.3 0 01-78 55.3zm98.1 31.3c5.8 0 10.8 4 13.5 10h-27c2.7-6 7.8-10 13.5-10zm7.5-14V350a54.5 54.5 0 0032.2-16.7c8.4 8.8 19.6 15 32.2 16.7v69.3a32.8 32.8 0 00-21.8 23.9h-20.7c-3.1-11.8-11.4-21-21.9-24zm25.5 48.1h-66v-9.1h66v9.1zm79.4-9.1v9.1h-64.4v-9.1h64.4zm-19.5-15h-27c2.7-6 7.7-10 13.5-10 5.7 0 10.8 4 13.5 10zm-13.5-107.7a39.5 39.5 0 01-30.8-14.8 54.9 54.9 0 006.1-25.2V270a7.5 7.5 0 10-15 0v25.5a40 40 0 01-39.7 40 40 40 0 01-39.7-40v-103h79.4V230a7.5 7.5 0 1015 0v-37.5H497v103a40 40 0 01-39.7 40z"/><path d="M60.6 96.8c-9.7-3-10.4-3.7-13.4-13.3a9.8 9.8 0 00-18.9 0c-3 9.6-3.7 10.3-13.3 13.3-4.2 1.3-7 5.1-7 9.5 0 4.3 2.8 8.1 7 9.4 9.6 3 10.3 3.7 13.3 13.4 1.3 4.1 5.1 7 9.5 7 4.3 0 8.1-2.9 9.4-7 3-9.7 3.7-10.4 13.4-13.4a9.8 9.8 0 000-18.9zm-22.8 16.3c-1.8-2.9-4-5-6.8-6.8 2.8-1.8 5-4 6.8-6.8 1.8 2.8 4 5 6.8 6.8-2.9 1.8-5 4-6.8 6.8zM486.5 124.5c-9.7-3-10.4-3.8-13.4-13.4a9.8 9.8 0 00-18.9 0c-3 9.6-3.7 10.4-13.3 13.4-4.2 1.2-7 5-7 9.4 0 4.3 2.8 8.1 7 9.4 9.6 3 10.3 3.8 13.3 13.4 1.3 4.2 5.1 7 9.5 7 4.3 0 8.1-2.8 9.4-7 3-9.6 3.7-10.4 13.4-13.4a9.8 9.8 0 000-18.9zm-22.8 16.2c-1.8-2.8-4-5-6.8-6.8 2.8-1.8 5-4 6.8-6.8 1.8 2.8 4 5 6.8 6.8-2.9 1.8-5 4-6.8 6.8zM413.7 54.1c-12-3.8-13.3-5-17.1-17.1a10.3 10.3 0 00-10-7.3c-4.5 0-8.5 2.9-9.8 7.2-3.8 12.2-5 13.4-17.2 17.2a10.3 10.3 0 00-7.3 10c0 4.5 3 8.5 7.3 9.8 12.1 3.8 13.4 5 17.2 17.2 1.3 4.4 5.3 7.3 9.9 7.3 4.5 0 8.5-3 9.9-7.3 3.8-12.1 5-13.4 17.1-17.2 4.4-1.3 7.3-5.3 7.3-9.9 0-4.5-3-8.5-7.3-9.9zm-27 21.3A25.5 25.5 0 00375.3 64c5.2-2.7 8.6-6.1 11.4-11.4 2.7 5.3 6.1 8.7 11.4 11.4a25.5 25.5 0 00-11.4 11.4z"/></svg>
  <p>Мытье посуды</p>
  <p>160 грн/час</p></div>
  <div class="block__additionalservice"><svg xmlns="http://www.w3.org/2000/svg" height="82" viewBox="0 0 512 512" width="82"><g><path d="m82.5 377c-28.949 0-52.5 23.552-52.5 52.5s23.551 52.5 52.5 52.5 52.5-23.552 52.5-52.5-23.551-52.5-52.5-52.5zm0 90c-20.678 0-37.5-16.822-37.5-37.5s16.822-37.5 37.5-37.5 37.5 16.822 37.5 37.5-16.822 37.5-37.5 37.5z"></path> <path d="m82.5 407c-12.407 0-22.5 10.094-22.5 22.5s10.093 22.5 22.5 22.5 22.5-10.094 22.5-22.5-10.093-22.5-22.5-22.5zm0 30c-4.136 0-7.5-3.364-7.5-7.5s3.364-7.5 7.5-7.5 7.5 3.364 7.5 7.5-3.364 7.5-7.5 7.5z"></path> <path d="m459.5 30c-19.206 0-36.866 10.476-46.091 27.345l-9.637 17.655h-216.272c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h208.084l-109.667 200.906c-1.269 2.324-1.218 5.145.133 7.421 1.351 2.277 3.802 3.673 6.45 3.673 53.762 0 97.5 43.738 97.5 97.5s-43.738 97.5-97.5 97.5h-162.653c21.237-14.941 35.153-39.619 35.153-67.5v-347c0-45.49-37.009-82.5-82.5-82.5s-82.5 37.01-82.5 82.5v347c0 45.49 37.009 82.5 82.5 82.5h210c49.803 0 92.151-32.527 106.913-77.456.018.006 109.987-335.689 109.987-335.689 1.725-5.267 2.6-10.769 2.6-16.355 0-28.948-23.551-52.5-52.5-52.5zm-444.5 52.5c0-37.22 30.28-67.5 67.5-67.5s67.5 30.28 67.5 67.5v299.653c-14.941-21.236-39.619-35.153-67.5-35.153s-52.559 13.917-67.5 35.153zm0 347c0-37.22 30.28-67.5 67.5-67.5s67.5 30.28 67.5 67.5-30.28 67.5-67.5 67.5-67.5-30.28-67.5-67.5zm480.146-335.314-92.499 282.363c-9.814-47.154-49.235-83.584-97.872-88.884l121.797-223.128c6.591-12.051 19.208-19.537 32.928-19.537 20.678 0 37.5 16.822 37.5 37.5 0 3.998-.624 7.93-1.854 11.686z"></path></g></svg>
  <p id="dry" name="dry">Химчистка на дому</p>
  <p ip="part6">250 грн/м2</p></div>
  <div class="block__additionalservice"><svg    version="1.1" xmlns="http://www.w3.org/2000/svg"
  width="82" height="82" viewBox="0 0 1280 1157"
  preserveAspectRatio="xMidYMid meet">
  <g transform="translate(0,1157) scale(0.1,-0.1)"
  fill="#000000" stroke="none">
  <path d="M3490 11558 c-30 -5 -108 -18 -172 -28 -436 -73 -862 -339 -1129
  -706 -34 -46 -67 -83 -72 -81 -6 2 -16 25 -23 53 -16 69 -28 95 -60 133 -59
  71 -151 88 -242 46 -57 -27 -150 -109 -183 -162 -11 -18 -27 -33 -35 -33 -8 0
  -42 23 -76 51 -139 111 -318 172 -452 151 -407 -63 -673 -640 -790 -1712 -33
  -295 -62 -1067 -48 -1240 l7 -85 54 -8 c30 -4 58 -4 61 0 4 5 15 37 24 73 71
  265 207 691 318 995 189 516 364 860 568 1115 77 96 186 207 195 198 4 -3 10
  -36 16 -73 31 -218 175 -301 345 -199 32 19 59 32 62 29 3 -2 0 -44 -7 -93
  -18 -142 -14 -389 9 -527 62 -380 222 -702 484 -973 302 -313 656 -487 1109
  -547 27 -4 47 -11 47 -19 0 -14 -898 -2097 -909 -2109 -4 -4 -367 120 -807
  277 -759 270 -799 285 -797 308 1 12 13 64 27 113 29 105 34 248 12 332 -88
  332 -443 416 -734 174 -75 -63 -152 -163 -202 -266 -40 -81 -90 -265 -90 -329
  0 -50 38 -193 66 -249 35 -68 112 -143 182 -175 51 -24 68 -27 167 -27 95 1
  118 4 171 27 111 46 198 117 302 242 13 15 29 26 35 23 7 -2 371 -132 810
  -288 581 -206 797 -287 797 -298 0 -9 -362 -855 -805 -1881 -443 -1027 -805
  -1872 -805 -1878 0 -9 213 -12 899 -12 810 0 899 -2 905 -16 10 -25 7 -787 -3
  -803 -8 -12 -18 -12 -72 2 -105 26 -266 40 -373 33 -356 -23 -623 -161 -728
  -374 -31 -62 -33 -74 -33 -167 0 -97 2 -104 37 -177 104 -209 379 -347 728
  -364 219 -11 406 23 575 106 241 117 353 288 324 494 -17 126 -120 261 -264
  346 l-60 36 0 439 0 440 780 0 780 0 0 -434 0 -434 -68 -41 c-231 -141 -317
  -366 -221 -574 43 -91 157 -197 274 -255 407 -200 1002 -129 1250 150 130 146
  146 353 39 509 -65 95 -199 191 -338 242 -213 77 -521 93 -731 37 -50 -13 -56
  -13 -67 2 -10 13 -13 106 -13 387 0 204 3 381 6 394 l6 22 900 0 900 0 -4 22
  c-3 13 -366 858 -807 1879 -440 1021 -801 1862 -801 1867 0 6 8 16 19 21 50
  27 1594 569 1606 564 8 -3 15 -9 15 -13 0 -20 134 -149 198 -191 105 -69 156
  -84 282 -84 93 0 112 3 162 27 159 74 247 246 234 458 -6 117 -26 191 -76 295
  -156 322 -480 486 -723 367 -194 -96 -275 -341 -201 -607 14 -49 26 -101 27
  -113 2 -23 -37 -38 -793 -307 -437 -155 -800 -281 -806 -278 -11 4 -914 2089
  -914 2111 0 6 3 12 6 12 29 0 235 35 296 51 667 169 1183 709 1324 1388 41
  200 48 442 19 659 -4 28 -4 52 1 52 5 0 28 -14 52 -30 59 -39 134 -56 190 -41
  89 24 144 103 163 236 6 41 15 75 19 75 15 0 169 -169 237 -261 144 -190 265
  -414 397 -731 123 -297 290 -784 406 -1186 32 -112 60 -206 63 -208 2 -2 28
  -1 58 3 l53 8 9 45 c9 51 1 590 -14 845 -69 1242 -333 1994 -744 2128 -165 54
  -346 10 -524 -128 -67 -51 -101 -67 -101 -46 0 5 -30 41 -67 81 -108 117 -213
  155 -308 111 -68 -30 -106 -85 -129 -186 -6 -27 -17 -50 -23 -50 -6 0 -39 38
  -74 83 -209 281 -496 498 -814 617 -254 95 -592 144 -775 113z"/>
  <path d="M9825 11234 c-326 -44 -626 -169 -880 -369 -103 -81 -266 -248 -341
  -351 -329 -446 -441 -1017 -304 -1558 148 -586 593 -1074 1161 -1274 109 -39
  286 -78 413 -92 54 -6 102 -13 107 -16 11 -7 12 -1801 1 -1808 -10 -6 -1662
  580 -1676 595 -6 5 -4 27 7 56 31 88 47 177 47 263 0 200 -84 350 -238 423
  -62 29 -75 32 -162 31 -150 -2 -266 -54 -388 -175 -269 -266 -322 -679 -116
  -899 121 -129 303 -151 494 -59 72 35 100 57 184 141 86 88 101 99 125 94 14
  -3 409 -142 876 -309 l850 -303 3 -652 2 -652 -712 -2 -713 -3 -3 -1167 -2
  -1168 292 -2 293 -3 3 -454 c1 -250 -1 -458 -6 -463 -4 -4 -52 2 -107 14 -121
  26 -367 31 -485 9 -408 -74 -664 -322 -611 -592 47 -238 269 -402 631 -465
  189 -33 242 -31 475 16 177 35 349 122 442 223 196 212 151 500 -104 666 -43
  27 -86 57 -95 66 -17 14 -18 50 -18 488 0 355 3 476 12 485 9 9 90 12 304 12
  l293 0 11 58 c99 475 158 727 171 727 7 0 15 -9 17 -20 2 -11 39 -185 83 -387
  43 -202 79 -370 79 -373 0 -2 134 -6 298 -7 l297 -3 2 -485 3 -485 -61 -34
  c-362 -208 -356 -608 12 -816 79 -45 205 -90 316 -112 128 -25 376 -23 503 4
  385 83 616 318 570 581 -39 227 -259 397 -600 464 -38 7 -137 12 -240 12 -141
  0 -192 -5 -265 -21 -49 -12 -93 -18 -98 -14 -4 4 -6 209 -5 457 l3 449 293 3
  292 2 -2 1168 -3 1167 -713 3 -712 2 2 652 3 653 835 297 c459 164 853 303
  876 310 l41 11 99 -100 c84 -85 112 -107 184 -142 145 -70 272 -75 395 -15
  104 51 178 155 215 302 25 100 25 137 -4 252 -47 188 -115 309 -240 428 -124
  117 -234 166 -376 167 -176 0 -302 -89 -372 -264 -19 -48 -22 -75 -23 -191 0
  -122 3 -143 29 -223 17 -51 25 -92 20 -97 -14 -14 -1667 -599 -1676 -594 -8 5
  -12 1814 -4 1814 49 0 239 27 325 46 685 153 1229 705 1377 1398 129 609 -47
  1228 -475 1669 -248 256 -526 418 -861 502 -208 53 -466 68 -675 39z"/>
  </g>
  </svg><p>Посидеть с детьми</p>
  <p>250 грн/час</p></div>
  <div class="block__additionalservice"><svg height="82" viewBox="-1 0 484 484.5522" width="82" xmlns="http://www.w3.org/2000/svg" fill="black"><path d="m477.980469 348.800781-45.105469-16.417969c-4.15625-1.503906-8.742188.644532-10.246094 4.800782l-2.738281 7.511718-52.253906-19.054687c-1.3125-.492187-2.734375-.613281-4.113281-.359375l-108.71875 19.199219c-9.855469 1.753906-18.320313 8.011719-22.898438 16.910156l-49.871094-18.191406c-7.964844-2.929688-16.777344-2.539063-24.453125 1.082031-9.753906 4.550781-16.570312 13.683594-18.160156 24.328125-1.992187 15.40625 7.132813 30.089844 21.832031 35.125l164.277344 59.792969c.875.324218 1.804688.492187 2.738281.488281.871094 0 1.734375-.144531 2.558594-.421875l45.878906-15.488281 4.882813 1.773437-2.738282 7.519532c-1.503906 4.15625.644532 8.746093 4.800782 10.25l45.113281 16.414062c.871094.324219 1.796875.492188 2.726563.488281 3.363281.003907 6.371093-2.101562 7.519531-5.261719l43.777343-120.289062c1.472657-4.144531-.675781-8.699219-4.808593-10.199219zm-103.738281 83.269531-45.878907 15.488282-161.640625-58.839844c-7.476562-2.488281-12.246094-9.816406-11.488281-17.664062.675781-4.78125 3.472656-9 7.613281-11.488282 4.140625-2.484375 9.179688-2.964844 13.714844-1.308594l51.90625 18.886719c.027344 1.476563.144531 2.949219.359375 4.40625 3.136719 17.351563 19.667969 28.9375 37.046875 25.960938l90.066406-15.878907-2.785156-15.761718-90.023438 15.882812c-8.667968 1.472656-16.917968-4.277344-18.535156-12.921875-.332031-1.824219-.320312-3.699219.039063-5.519531.058593-.265625.105469-.53125.136719-.800781.105468-.683594.289062-1.351563.550781-1.992188 1.964843-5.371093 6.636719-9.289062 12.265625-10.296875l106.589844-18.796875 50.242187 18.277344-27.363281 75.199219-7.519532-2.726563c-1.703124-.632812-3.570312-.671875-5.296874-.105469zm52.433593 34.25-30.070312-10.945312 38.300781-105.246094 30.074219 10.941406zm0 0"/><path d="m186.621094 129.046875c2.582031 9.453125 7.34375 18.171875 13.902344 25.449219-.121094.640625-.207032 1.285156-.246094 1.9375v43.566406c0 13.253906 10.742187 24 24 24v80c-.019532 3.046875 1.699218 5.839844 4.421875 7.199219l16 8c2.253906 1.125 4.902343 1.125 7.152343 0l16-8c2.726563-1.359375 4.441407-4.152344 4.425782-7.199219v-80c13.253906 0 24-10.746094 24-24v-43.566406c-.042969-.699219-.132813-1.394532-.265625-2.082032 5.34375-5.878906 9.507812-12.730468 12.265625-20.183593 11.8125 1.984375 23.636718-3.441407 29.839844-13.6875 7.605468-12.582031 5.523437-28.75-5.023438-38.992188l-65.105469-65.089843c-10.476562-10.53125-24.734375-16.4375005-39.59375-16.398438h-84.117187c-1.085938-.00390625-2.15625.21875-3.152344.648438l-54.449219 23.351562h-6.398437v-16c0-4.417969-3.582032-8-8-8h-64c-4.417969 0-8 3.582031-8 8v128c0 4.417969 3.582031 8 8 8h64c4.417968 0 8-3.582031 8-8v-16h1.167968c5.726563 19.199219 31.453126 32 54.832032 32 19.394531.398438 37.921875-8.046875 50.34375-22.953125zm-122.34375-1.046875h-48v-112h48zm192 171.054688-8 4-8-4v-75.054688h16zm24-99.054688c0 4.417969-3.582032 8-8 8h-48c-4.417969 0-8-3.582031-8-8v-32.65625c5.378906 3.132812 11.195312 5.453125 17.253906 6.878906 2.765625 6.730469 9.699219 10.769532 16.914062 9.855469 7.21875-.910156 12.929688-6.546875 13.933594-13.753906 1.003906-7.203125-2.949218-14.1875-9.640625-17.039063-6.695312-2.847656-14.46875-.859375-18.964843 4.859375-4.511719-1.183593-8.828126-3.023437-12.800782-5.464843 7.710938-4.675782 16.34375-7.636719 25.304688-8.679688 11.484375 1.613281 22.4375 5.871094 32 12.433594zm5.957031-58.617188c-11.4375-7.355468-24.433594-11.9375-37.957031-13.382812-13.5 1.4375-26.476563 6.011719-37.898438 13.351562-4.878906-6.210937-8.109375-13.554687-9.390625-21.351562h39.289063c11.71875.117188 22.515625-6.34375 27.949218-16.726562l22.402344 22.398437c.894532.835937 1.839844 1.613281 2.832032 2.328125-1.648438 4.832031-4.089844 9.355469-7.226563 13.382812zm-14.335937-57.070312c-.746094-6.546875-3.519532-12.699219-7.925782-17.601562 18.09375 6.285156 30.722656 22.722656 32.128906 41.824218zm-95.621094 27.6875c0 12.113281-19.816406 24-40 24s-40-11.886719-40-24c0-4.417969-3.582032-8-8-8h-8v-64h8c1.082031.003906 2.15625-.21875 3.152344-.648438l54.445312-23.351562h82.480469c10.625-.039062 20.828125 4.179688 28.320312 11.710938l65.089844 65.089843c5.261719 4.914063 6.445313 12.804688 2.855469 19.046875-2.671875 4.230469-7.34375 6.769532-12.34375 6.710938-.128906 0-.25 0-.378906 0 .242187-2.175782.367187-4.367188.378906-6.558594-.039063-35.328125-28.671875-63.960938-64-64-10.75.015625-21.320313 2.769531-30.714844 8h-65.285156v16h88c8.835937 0 16 7.164062 16 16s-7.164063 16-16 16h-56c-4.417969 0-8 3.582031-8 8zm0 0"/></svg>
  <p>Доставка ключей</p>
  <p>50 грн в один конец</p></div>
  <div class="block__additionalservice"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 71.54 122.88" width="82" height="82"><g><path d="M6.14,0H65.4c1.69,0,3.23,0.69,4.34,1.8c1.11,1.11,1.8,2.65,1.8,4.34v29.67v73.73c0,1.69-0.69,3.23-1.8,4.34 c-1.11,1.11-2.65,1.8-4.34,1.8h-4.89v2.72c0,2.47-2.02,4.49-4.49,4.49l0,0c-2.47,0-4.49-2.02-4.49-4.49v-2.72H20.17v2.72 c0,2.47-2.02,4.49-4.49,4.49l0,0c-2.47,0-4.49-2.02-4.49-4.49v-2.72H6.14c-1.69,0-3.23-0.69-4.34-1.8c-1.11-1.11-1.8-2.65-1.8-4.34 V35.81V6.14C0,4.45,0.69,2.91,1.8,1.8C2.91,0.69,4.45,0,6.14,0L6.14,0z M10.2,44.89c0-1.34,1.09-2.43,2.43-2.43 c1.34,0,2.43,1.09,2.43,2.43v20.4c0,1.34-1.09,2.43-2.43,2.43c-1.34,0-2.43-1.09-2.43-2.43V44.89L10.2,44.89z M10.2,10.39 c0-1.34,1.09-2.43,2.43-2.43c1.34,0,2.43,1.09,2.43,2.43v15.15c0,1.34-1.09,2.43-2.43,2.43c-1.34,0-2.43-1.09-2.43-2.43V10.39 L10.2,10.39z M4.87,33.37h61.81V6.14c0-0.35-0.14-0.67-0.38-0.9c-0.23-0.23-0.55-0.38-0.9-0.38H6.14c-0.35,0-0.67,0.14-0.9,0.38 c-0.23,0.23-0.38,0.55-0.38,0.9V33.37L4.87,33.37z M66.67,38.24H4.87v71.29c0,0.35,0.14,0.67,0.38,0.9 c0.23,0.23,0.55,0.38,0.9,0.38H65.4c0.35,0,0.67-0.14,0.9-0.38c0.23-0.23,0.38-0.55,0.38-0.9V38.24L66.67,38.24z"/></g></svg>
  <p>Мойка холодильника</p>
  <p>250 грн/час</p></div>
  <div class="block__additionalservice"><svg width="82" height="82" viewBox="0 0 520 527" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <g stroke="none" stroke-width="1" fill="none">
  <g id="exhaust-black-on-white" transform="translate(5, 8)">
  <rect id="Rectangle-2" x="0" y="0" width="512" height="512" rx="20"></rect>
  <path d="M302.5,26.5 L302.5,141.5" id="Line-5" stroke="#000000" stroke-width="12" stroke-linecap="square"></path>
  <rect id="Rectangle-9" stroke="#000000" stroke-width="16" x="3" y="347" width="504" height="78" rx="20"></rect>
  <path d="M184,167 L328,167 L328,12 C328,5.372583 322.627417,0 316,0 L196,0 C189.372583,0 184,5.372583 184,12 L184,167 Z" id="Rectangle-10" stroke="#000000" stroke-width="16"></path>
  <path d="M184.793209,165.125269 L14.7924646,346.551851" stroke="#000000" stroke-width="16" stroke-linecap="square"></path>
  <path d="M325.725026,165.358813 L501.113467,352.819618 L325.725026,165.358813 Z" stroke="#000000" stroke-width="16" stroke-linecap="square"></path>
  <circle stroke="#000000" stroke-width="16" cx="364" cy="387" r="8"></circle>
  <circle stroke="#000000" stroke-width="16" cx="404" cy="387" r="8"></circle>
  <circle stroke="#000000" stroke-width="16" cx="444" cy="387" r="8"></circle>
  <path d="M167.343351,454 C155.053898,461.746075 154.887825,471.39485 166.84513,482.946324 C178.802435,494.497798 177.473845,504.146573 162.859361,511.892648"  stroke="#000000" stroke-width="16"></path>
  <path d="M257.343351,454 C245.053898,461.746075 244.887825,471.39485 256.84513,482.946324 C268.802435,494.497798 267.473845,504.146573 252.859361,511.892648"  stroke="#000000" stroke-width="16"></path>
  <path d="M347.343351,454 C335.053898,461.746075 334.887825,471.39485 346.84513,482.946324 C358.802435,494.497798 357.473845,504.146573 342.859361,511.892648"  stroke="#000000" stroke-width="16"></path>
  </g>
  </g>
  </svg><p>Мойка вытяжки</p>
  <p>250 грн/час</p></div>
  <div class="block__additionalservice"><svg height="82" viewBox="-43 0 512 512" width="82" xmlns="http://www.w3.org/2000/svg"><path d="m384 0h-341.332031c-23.554688.0273438-42.6406252 19.113281-42.667969 42.667969v409.597656c0 14.140625 11.460938 25.601563 25.601562 25.601563v25.597656c0 4.714844 3.820313 8.535156 8.53125 8.535156h358.402344c4.710938 0 8.53125-3.820312 8.53125-8.535156v-25.597656c14.136719 0 25.601563-11.460938 25.601563-25.601563v-409.597656c-.03125-23.554688-19.113281-42.6406252-42.667969-42.667969zm-341.332031 17.066406h341.332031c14.136719 0 25.601562 11.460938 25.601562 25.601563v59.734375h-392.535156v-59.734375c0-14.140625 11.460938-25.601563 25.601563-25.601563zm341.332031 477.867188h-341.332031v-17.066406h341.332031zm17.066406-34.132813h-375.464844c-4.714843 0-8.535156-3.820312-8.535156-8.535156v-332.800781h392.535156v332.800781c0 4.714844-3.820312 8.535156-8.535156 8.535156zm0 0"/><path d="m42.667969 85.332031h102.398437c4.714844 0 8.535156-3.820312 8.535156-8.53125v-34.132812c0-4.714844-3.820312-8.535157-8.535156-8.535157h-102.398437c-4.714844 0-8.535157 3.820313-8.535157 8.535157v34.132812c0 4.710938 3.820313 8.53125 8.535157 8.53125zm8.53125-34.132812h85.335937v17.066406h-85.335937zm0 0"/><path d="m196.265625 85.332031c14.140625 0 25.601563-11.460937 25.601563-25.597656 0-14.140625-11.460938-25.601563-25.601563-25.601563-14.136719 0-25.597656 11.460938-25.597656 25.601563 0 14.136719 11.460937 25.597656 25.597656 25.597656zm0-34.132812c4.714844 0 8.535156 3.820312 8.535156 8.535156 0 4.710937-3.820312 8.53125-8.535156 8.53125-4.710937 0-8.53125-3.820313-8.53125-8.53125 0-4.714844 3.820313-8.535156 8.53125-8.535156zm0 0"/><path d="m264.53125 85.332031c14.140625 0 25.601562-11.460937 25.601562-25.597656 0-14.140625-11.460937-25.601563-25.601562-25.601563-14.136719 0-25.597656 11.460938-25.597656 25.601563 0 14.136719 11.460937 25.597656 25.597656 25.597656zm0-34.132812c4.714844 0 8.535156 3.820312 8.535156 8.535156 0 4.710937-3.820312 8.53125-8.535156 8.53125-4.710938 0-8.53125-3.820313-8.53125-8.53125 0-4.714844 3.820312-8.535156 8.53125-8.535156zm0 0"/><path d="m315.734375 68.265625h17.066406c4.710938 0 8.53125-3.820313 8.53125-8.53125 0-4.714844-3.820312-8.535156-8.53125-8.535156h-17.066406c-4.714844 0-8.535156 3.820312-8.535156 8.535156 0 4.710937 3.820312 8.53125 8.535156 8.53125zm0 0"/><path d="m366.933594 68.265625h17.066406c4.714844 0 8.535156-3.820313 8.535156-8.53125 0-4.714844-3.820312-8.535156-8.535156-8.535156h-17.066406c-4.714844 0-8.535156 3.820312-8.535156 8.535156 0 4.710937 3.820312 8.53125 8.535156 8.53125zm0 0"/><path d="m213.332031 153.601562c-75.402343 0-136.53125 61.125-136.53125 136.53125s61.128907 136.535157 136.53125 136.535157c75.40625 0 136.535157-61.128907 136.535157-136.535157-.089844-75.367187-61.164063-136.441406-136.535157-136.53125zm0 256c-65.976562 0-119.464843-53.488281-119.464843-119.46875 0-65.980468 53.488281-119.464843 119.464843-119.464843 65.980469 0 119.46875 53.484375 119.46875 119.464843-.070312 65.949219-53.515625 119.398438-119.46875 119.46875zm0 0"/><path d="m213.332031 179.199219c-61.203125-.058594-110.871093 49.507812-110.933593 110.710937-.011719 14.503906 2.820312 28.871094 8.339843 42.285156.050781.171876 0 .347657.066407.519532.070312.171875.230468.332031.316406.53125 23.765625 56.417968 88.769531 82.886718 145.1875 59.121094 31.570312-13.300782 55.214844-40.449219 64.058594-73.542969.046874-.140625.082031-.285157.109374-.429688 15.847657-58.9375-19.085937-119.5625-78.027343-135.40625-9.492188-2.550781-19.285157-3.828125-29.117188-3.789062zm0 17.066406c51.71875-.121094 93.746094 41.707031 93.867188 93.421875.015625 6.984375-.746094 13.945312-2.277344 20.753906-4.449219 1.472656-8.816406 3.183594-13.082031 5.121094-11.070313 5.746094-23.367188 8.730469-35.839844 8.703125-10.621094.285156-21.113281-2.375-30.320312-7.679687-11.585938-6.449219-24.6875-9.6875-37.945313-9.386719-21.675781.882812-43.109375 4.90625-63.625 11.945312-16.085937-49.21875 10.773437-102.15625 59.992187-118.238281 9.4375-3.085938 19.304688-4.652344 29.230469-4.640625zm0 187.734375c-34.398437-.023438-66.035156-18.851562-82.464843-49.074219 18.351562-6.246093 37.5-9.835937 56.867187-10.660156 10.621094-.28125 21.113281 2.375 30.316406 7.679687 11.589844 6.449219 24.691407 9.691407 37.949219 9.386719 14.332031.078125 28.484375-3.191406 41.328125-9.546875-15.816406 31.9375-48.355469 52.167969-83.996094 52.214844zm0 0"/></svg>
  <p>Стирка</p>
  <p>250 грн/час</p></div>
  <div class="block__additionalservice"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="82" height="82"> <g><path d="M60,224H72v56H88V224h16V208H88V173.82458a97.66341,97.66341,0,0,0,20.10693,8.44788C128.49268,188.54541,155.44531,192,184,192s55.50732-3.45459,75.89307-9.72754A97.66341,97.66341,0,0,0,280,173.82458V232h16v-8h12a28,28,0,0,0,0-56H296V152c0-8.11865-5.44922-19.69336-31.40918-28.73291-15.089-5.25378-34.91309-8.88367-56.6123-10.42432.00976-.28027.02148-.56018.02148-.84277a24,24,0,0,0-48,0c0,.28259.01172.5625.02148.84277-21.69921,1.54065-41.52331,5.17054-56.6123,10.42432C77.44922,132.30664,72,143.88135,72,152v16H60a28,28,0,0,0,0,56Zm248-40a12,12,0,0,1,0,24H296V184ZM167.64465,129.54175a23.93887,23.93887,0,0,0,32.7107,0c9.45642,1.89868,14.20263,4.99084,15.43664,6.46948C213.71143,138.63281,202.75537,144,184,144s-29.71143-5.36719-31.792-7.98877C153.442,134.53259,158.18823,131.44043,167.64465,129.54175ZM184,104a8,8,0,1,1-8,8A8.00917,8.00917,0,0,1,184,104Zm-75.32959,34.37744a169.13416,169.13416,0,0,1,27.98926-6.775A14.95123,14.95123,0,0,0,136,136c0,4.49854,2.17529,12.916,16.74561,18.74316C161.22217,158.13281,172.32178,160,184,160s22.77783-1.86719,31.25439-5.25684C229.82471,148.916,232,140.49854,232,136a14.95123,14.95123,0,0,0-.65967-4.39758,169.13416,169.13416,0,0,1,27.98926,6.775C274.49512,143.6582,280,149.41748,280,152c0,2.043-4.45752,8.71631-24.813,14.98C236.28467,172.79688,211.00342,176,184,176s-52.28467-3.20312-71.187-9.02C92.45752,160.71631,88,154.043,88,152,88,149.41748,93.50488,143.6582,108.67041,138.37744ZM60,184H72v24H60a12,12,0,0,1,0-24Z" fill="black"></path> <path d="M149.6167,386.167a95.3998,95.3998,0,0,0,9.42383,3.979C176.51562,396.50049,199.58545,400,224,400s47.48438-3.49951,64.95947-9.854a95.30691,95.30691,0,0,0,9.471-4.00232c-.4834,1.07556-.9906,2.14367-1.53638,3.19958l14.21289,7.34766A80.22778,80.22778,0,0,0,320,360c0-8.603-5.38525-20.81689-31.04053-30.146C271.48438,323.49951,248.41455,320,224,320s-47.48438,3.49951-64.95947,9.854c-3.1377,1.14087-5.96778,2.32544-8.52637,3.5409l-32.79492-21.86316A139.66557,139.66557,0,0,0,40,288a24,24,0,0,0,0,48,97.38166,97.38166,0,0,1,54.188,16.40674l35.42627,23.61743A80.13557,80.13557,0,0,0,208,440V424A64.0758,64.0758,0,0,1,149.6167,386.167Zm14.8916-41.27637C180.27539,339.15771,201.40332,336,224,336s43.72461,3.15771,59.4917,8.89062C297.65869,350.04248,304,356.19141,304,360s-6.34131,9.95752-20.5083,15.10938C267.72461,380.84229,246.59668,384,224,384s-43.72461-3.15771-59.4917-8.89062C150.34131,369.95752,144,363.80859,144,360S150.34131,350.04248,164.5083,344.89062ZM40,320a8,8,0,0,1,0-16,123.72,123.72,0,0,1,68.84424,20.84424l27.17847,18.11889c-4.64747,4.489-6.814,8.99317-7.62085,13.02369L103.063,339.09424A113.32843,113.32843,0,0,0,40,320Z"  fill="black"></path> <path d="M456.46436,367.208a24.31172,24.31172,0,0,0-18.81885-2.49463l-56.17725,15.32129a24.65847,24.65847,0,0,0-18.02661,23.23315L320.794,415.45288l-29.21631-14.60815a7.99929,7.99929,0,0,0-5.51807-.606l-64,16a8.00031,8.00031,0,0,0-5.752,9.959l16,56a7.99982,7.99982,0,0,0,10.22217,5.39161l72-24a8.00044,8.00044,0,0,0,5.23144-5.64893l6.87939-27.51746,41.76709-11.93347a24.424,24.424,0,0,0,25.94678,8.79712l56.17725-15.32129a24.62388,24.62388,0,0,0,17.31445-29.56494A24.30186,24.30186,0,0,0,456.46436,367.208ZM305.3042,449.79932,245.397,469.76855l-11.43261-40.01367,53.105-13.27588,23.61328,11.80664Zm141.01807-53.27051L390.14453,411.8501a8.48782,8.48782,0,0,1-10.46826-6.13037v-.00049a8.53486,8.53486,0,0,1,6.00146-10.24805l56.17774-15.32129a8.53946,8.53946,0,0,1,2.24951-.30371,8.50056,8.50056,0,0,1,8.21875,6.43457A8.53486,8.53486,0,0,1,446.32227,396.52881Z"  fill="black"></path> <path d="M472,240a228.71109,228.71109,0,0,0-80.26318,14.55078l-2.36988.89q-6.98107-4.61079-18.49975-8.0741C355.03223,242.61621,334.126,240,312,240s-43.03223,2.61621-58.86719,7.3667C233.80176,253.166,224,261.4541,224,272a16.38579,16.38579,0,0,0,.14941,2.18152l2.95411,38.43176,15.95312-1.22656-1.46179-19.01831a89.44471,89.44471,0,0,0,11.538,4.26489C268.96777,301.38379,289.874,304,312,304s43.03223-2.61621,58.86719-7.3667a89.40771,89.40771,0,0,0,11.54394-4.26782l-2.40722,31.31909A48.2307,48.2307,0,0,1,332.14014,368H328v16h4.14014a64.00985,64.00985,0,0,0,63.8164-59.08789L397.5293,304.47l15.32031-5.7395A167.86992,167.86992,0,0,1,472,288a24,24,0,0,0,0-48ZM312,288c-46.38184,0-70.36035-11.47266-71.97412-16,1.61377-4.52734,25.59228-16,71.97412-16s70.36035,11.47266,71.97412,16C382.36035,276.52734,358.38184,288,312,288Zm165.67236-18.34668A7.98512,7.98512,0,0,1,472,272a183.80908,183.80908,0,0,0-64.7666,11.74854l-8.35059,3.12817.98621-12.81812A16.42884,16.42884,0,0,0,400,272a16.16923,16.16923,0,0,0-.34241-3.30127A212.22607,212.22607,0,0,1,472,256a8.00851,8.00851,0,0,1,5.67236,13.65332Z"  fill="black"></path> <path d="M400,240V112a16.01833,16.01833,0,0,0-16-16H272a16.01833,16.01833,0,0,0-16,16H384V240Z"  fill="black"></path> <path d="M344,88a7.99977,7.99977,0,0,0,8-8V72a24,24,0,0,0-48,0v8a7.99977,7.99977,0,0,0,8,8ZM328,64a7.978,7.978,0,0,1,8,8H320A8.00917,8.00917,0,0,1,328,64Z"  fill="black"></path> <path d="M272,88h16a7.99977,7.99977,0,0,0,8-8V72a32,32,0,0,1,64,0v8a7.99977,7.99977,0,0,0,8,8h16a24.0275,24.0275,0,0,1,24,24V224h16V112a40.04521,40.04521,0,0,0-40-40h-8a48,48,0,0,0-96,0h-8a39.97893,39.97893,0,0,0-38.73926,30.00586l15.49512,3.98828A23.98271,23.98271,0,0,1,272,88Z"  fill="black"></path> </g></svg>
  <p>Приготовление пищи</p>
  <p>250 грн/час</p></div>
  <div class="block__additionalservice"><svg height="82" viewBox="0 0 60 60" width="82" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="rgb(0,0,0)" fill-rule="nonzero"><path d="m58 21h-2.5c-.6290706-.0018746-1.221058-.2978683-1.6-.8l-1.2-1.6c-.7574757-1.0047541-1.9417113-1.5968719-3.2-1.6h-2.34c-1.7231741-.0050465-3.2534635 1.1004766-3.79 2.738-.862081 2.8149711-2.5555896 5.3032923-4.858 7.138l-15.956-15.763c1.6931984-2.38237888 1.4143983-5.6399831-.659-7.7l-2.831-2.829c-.7804238-.77743743-2.0425762-.77743743-2.823 0l-5.66 5.659c-.77810178.7805395-.77810178 2.0434605 0 2.824l2.828 2.833c2.0710821 2.0847324 5.3506127 2.3539982 7.734.635l15.676 15.475c-2.2905014 1.2991275-4.8777321 1.9846007-7.511 1.99h-10.31c-2.1201069.0142627-4.174881.7353163-5.839 2.049-2.4.23-8.227.209-10.161-2.34-.39523393-.5903172-1.13237758-.8493356-1.81-.636-.70559405.2089903-1.18974835.8571061-1.19 1.593v1.351c.00495836 3.8639376 3.13606244 6.9950416 7 7h2.065c-.04146133.3260569-.06316762.6543227-.065.983-.04464482 1.6530171.11523433 3.3052135.476 4.919l.045.2c.33429738 1.6000385.4948944 3.2314893.479 4.866v7.015c0 1.6568542 1.3431458 3 3 3h2.76c1.2364327-.0016526 2.2383474-1.0035673 2.24-2.24.0033026-.8433897-.4728555-1.6154018-1.228-1.991-.2984089-.1432517-.4262929-.4997228-.287-.8.7807666-1.639269 2.1258574-2.9424699 3.789-3.671 2.2416211-.9632035 3.8983347-2.9263591 4.471-5.298h15.5c.4968538 1.6203164.7512744 3.3052212.755 5v6c0 1.6568542 1.3431458 3 3 3h2.76c1.2364327-.0016526 2.2383474-1.0035673 2.24-2.24.0025084-.8450301-.4751584-1.6181369-1.232-1.994l-.215-.108c-.3398868-.1679935-.554451-.5148658-.553-.894v-3.764c.0003172-2.0209956.2389652-4.0349029.711-6h.289c2.7600532-.0033061 4.9966939-2.2399468 5-5v-11h2c2.7600532-.0033061 4.9966939-2.2399468 5-5v-1c0-1.1045695-.8954305-2-2-2zm-43.173-10.517-2.827-2.825 5.653-5.658 2.832 2.832c.7506922.74744728 1.1727006 1.76315291 1.1727006 2.8225s-.4220084 2.07505272-1.1727006 2.8225c-.7481981.7527166-1.7656882 1.1759703-2.827 1.1759703s-2.0788019-.4232537-2.827-1.1759703zm-5.281 26.534h-2.546c-2.76005315-.0033061-4.99669388-2.2399468-5-5v-.451c2.315 2.18 6.43 2.569 9.1 2.568-.6611945.8766398-1.18518823 1.8487595-1.554 2.883zm38.754 5.953c.1701306-.5195843.370472-1.0287852.6-1.525.246319-.494571.045071-1.095181-.4495-1.3415s-1.095181-.045071-1.3415.4495c-1.4417554 3.2915216-2.1609227 6.8539404-2.109 10.447v3.764c-.0034957 1.1371358.639402 2.1774823 1.658 2.683l.215.108c.0967616.0507198.1460636.1612214.1191751.2671096-.0268885.1058883-.1229378.1794804-.2321751.1778904h-2.76c-.5522847 0-1-.4477153-1-1v-6c-.0026193-2.1383615-.3597968-4.2614896-1.057-6.283-.013941-.0537701-.032338-.1062851-.055-.157-.499531-1.4768633-1.202279-2.8769743-2.088-4.16-.2143594-.2858125-.5649147-.4355547-.9196152-.3928203-.3547006.0427344-.6596589.2714531-.8.6-.1403412.3285469-.0947442.7070078.1196152.9928203.5146747.7548844.9534745 1.5587924 1.31 2.4h-17.51c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h.658c-.5111462 1.5480597-1.6606873 2.8031635-3.158 3.448-2.1043689.9113898-3.8088831 2.5519848-4.8 4.62-.6358621 1.2878065-.109913 2.8473172 1.176 3.487.0973337.0509447.1466413.1623136.1189297.268621s-.1251123.1794333-.2349297.176379h-2.76c-.5522847 0-1-.4477153-1-1v-7.015c.0156654-1.7773585-.160013-3.5512408-.524-5.291l-.05-.219c-.3282994-1.468027-.4714135-2.9713972-.426-4.475.1652191-4.3480038 3.6519962-7.8347809 8-8h10.31c3.2051303-.0078945 6.3447393-.9081905 9.067-2.6 3.6502561 2.7601247 8.0514155 4.3489771 12.623 4.557v6.043c-.004427 1.536207-1.1711648 2.8196186-2.7 2.97zm9.7-18.97c0 1.6568542-1.3431458 3-3 3h-5c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h1v2.957c-3.9287317-.1913826-7.720805-1.5022485-10.929-3.778.9304491-.7733488 1.7692498-1.6507344 2.5-2.615.7259162 1.0676099 2.0105891 1.6100878 3.2819974 1.3858866 1.2714083-.2242011 2.2930422-1.173375 2.6100026-2.4248866.2005448-.7933159.3544748-1.597692.461-2.409.0639227-.5483784-.3286533-1.0448058-.877-1.109-.2638975-.0337561-.5302658.0402339-.7389471.2052596s-.3420743.407168-.3700529.6717404c-.0979108.7293076-.2371347 1.4524704-.417 2.166-.1454223.5643171-.6572826.9564681-1.24.95-.7070864.0000002-1.280448-.5729138-1.281-1.28v-.4c.5090919-.9477541.9343767-1.9381892 1.271-2.96.268327-.8148539 1.0311131-1.3640275 1.889-1.36h2.34c.6290706.0018746 1.221058.2978683 1.6.8l1.2 1.6c.7574757 1.0047541 1.9417113 1.5968719 3.2 1.6h2.5z"/><path d="m16.95 5.535-1.415 1.415c-.2599566.25107447-.3642126.62287789-.2726972.97250732.0915155.34962944.3645604.6226744.7141899.71418984.3496294.09151544.7214328-.01274058.9725073-.27269716l1.415-1.415c.2599566-.25107447.3642126-.62287789.2726972-.97250732-.0915155-.34962944-.3645604-.6226744-.7141899-.71418984-.3496294-.09151544-.7214328.01274058-.9725073.27269716z"/></g></g></svg>
  <p>Уход за домашним животным</p>
  <p>50 грн/день</p></div>
  </div>
  </div>
 </div>
 <footer>
 <?php require "components/footer_services.php" ?>
</footer>
	</div>
	<?php require "components/modal.php" ?>
  </div>
<?php require "components/popup_menu.php" ?>
 <?php require "components/form.php" ?>
 <script>
  // Look for .hamburger
var hamburger = document.querySelector(".hamburger");
var traym = document.getElementsByClassName('traym');
var btns = document.getElementsByClassName('intro__btn');
var par = document.getElementsByClassName('menu-button-text');
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
	par[0].classList.add("open1");
  });
   hamburger.addEventListener("click", function() {
    // Do something else, like open/close menu
	if (document.getElementById('msg').style.display == "grid"){
	document.getElementById('msg').style.display = 'none';

}
	else {document.getElementById('msg').style.display = "grid";}
	if (document.getElementById('msg').style.display == "grid")
	par[0].classList.add("open1")
	else {par[0].classList.remove("open1");}
  if (document.getElementById('msg').style.display == "grid")
	traym[0].classList.add("open2")
	else {traym[0].classList.remove("open2");}
  });


</script>

<script>

        function S()
        {
            if (event.type=="mouseover")
            {
               document.getElementById("window").style.fill = "yellow";
			   }
            if (event.type=="mouseout")
            {document.getElementById("window").style.fill = "none";}
        }

    </script>
<script>
function F()
        {
            if (event.type=="mouseover")
            {
               document.getElementById("svgfece").style.fill = "yellow";
			   }
            if (event.type=="mouseout")
            {document.getElementById("svgfece").style.fill = "white";}
        }
</script>
<script>
function V()
        {
            if (event.type=="mouseover")
            {
               document.getElementById("viber").style.fill = "yellow";
			   }
            if (event.type=="mouseout")
            {document.getElementById("viber").style.fill = "white";}
        }
</script>
<script>
	function T()
        {
            if (event.type=="mouseover")
            {
               document.getElementById("tele").style.fill = "yellow";
			   }
            if (event.type=="mouseout")
            {document.getElementById("tele").style.fill = "white";
			}
        }
</script>
<script>
  function onToggle(event) {
  if (event.target.open) {
  document.querySelectorAll(".cont3 > details[open]").forEach((el) => {
  // Исключаем из перебора елемент который мы только что открыли
  if (el === event.target) {
  return;
  }

  // Закрываем все остальные елементы <details>
  el.open = false;
  });
  }
  }

  // Вешаем наблюдатель на все елементы <details>
  document
  .querySelectorAll(".cont3 > details")
  .forEach((el) => el.addEventListener("toggle", onToggle));
  // По клику на тело документа
 /* document.body.onclick = () => {
  // Найти все открытые <details>
  document.body.querySelectorAll('.cont3 > details')
  // И закрыть каждый из них
  .forEach(e => e.open = false)
  }*/
</script>
<script>
// открытие, закрытие и очистка формы
let ordermsg = document.getElementById("marker");
var formorder = document.querySelector(".formorder");
var formclose = document.querySelector(".formorder__buttonclose");
const formElementAdd = document.querySelector(".formorder__form");
formclose.addEventListener("click", function() {
formorder.classList.toggle("togleform");
formElementAdd.reset();
  });
ordermsg.addEventListener("click", function() {
formorder.classList.toggle("togleform");
formElementAdd.reset();
  });
</script>
<script>
setTimeout(function() {
            if (window.location.hash) {               
             let hash = window.location.hash.substr(1);  
                    if(hash) var details = document.getElementById(hash);
                    if(details && details.tagName.toLowerCase() === 'details') details.open = true;
            }
        }, 1);
</script>
<script>
var defstrigger2 = document.querySelector(".link2");
  defstrigger2.addEventListener("click", function() {
  document.getElementById("maintenance").open = true;});
  var defstrigger1 = document.querySelector(".link1");
  defstrigger1.addEventListener("click", function() {
  document.getElementById("basic").open = true;});
var defstrigger3 = document.querySelector(".link3");
  defstrigger3.addEventListener("click", function() {
  document.getElementById("out").open = true;});
  var defstrigger4 = document.querySelector(".link4");
  defstrigger4.addEventListener("click", function() {
  document.getElementById("renovation").open = true;});
</script>
</body>
</html>