<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="theme-color" content="#ffffff">
<link rel="icon" href="favicon.svg">
<link rel="mask-icon" href="mask-icon.svg" color="#000000">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="manifest" href="manifest.json">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cleaning service</title>
<link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

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
  max-width: 100%;
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
h1 { color : rgba(89, 81, 81, .7); }
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
 outline: .06em solid #33CCCC;
 margin-top: 3%;
 font: inherit;
 list-style-type: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
 -webkit-box-orient: vertical;
 -webkit-box-direction: normal;
     -ms-flex-direction: column;
         flex-direction: column;
 }
 details[open] .card-body {
 animation: slide .3s ease-in-out;
 }
 
 @keyframes slide {
 0%    {opacity: 0; transform:  translate(0, -10px); }
 100%  {opacity: 1; transform:  translate(0, 0);}
 }
.card-body li{
 margin-left: -30px;
 white-space: pre-line;
 line-height: 200%;
 }
 .card-body li:before {
  color: blue; /* Цвет маркера */
  content: "\25C8"; /* Сам маркер */
  padding-right: 5px;

 }
details summary::-webkit-details-marker {
  display: none
}
/* Убираем стандартный маркер Firefox */
details > summary {
  list-style: none;
  transition-duration: 1s;
}
.cont3 details[open] summary {
  background-color: #33CCCC;
  transition-duration: .5s;
}
.cont3 details[open] summary .forbutton1 {
color: white;
transition-duration: .5s;
}
.cont3 details summary {
 background-color: rgba(89, 81, 81, .7);
 
}
.btns details summary{
width: 50px;
height: 50px;
border-radius: 100%;
background: -webkit-gradient(linear, left top, right top, from(rgba(129,230,217,1)), to(rgba(79,209,197,1)));
background: -o-linear-gradient(left, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
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
  font-size: 1.4em;
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
text-align:start;
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
  h1 {font-size: calc(100vw /25);}
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
  .card-body {
 font-size: calc(100vw /30);
  }
  .card-body li{
  }
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
}
@media all and (max-width: 425px) {
 .formorder {
 margin-top: 1%;
   }
 .formorder fieldset {
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
 .formorder fieldset {
 font-size: calc(100vw /17);
 }
 }
</style>
</head>
<body translate="yes" style="position:absolute; z-index:0; width:100%; height:100%;">
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
<p style="font-size: 1em; text-align: right;" class="logotext"><svg viewBox="0 -4 50 50"  width="50" height="50" fill="#515A39">
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
	<path class="st0" d="M29.1,21.4l-1.8,1.2c-1.1,0.8-1.7,1.9-1.7,3.5v0.6c0,0.3,0.2,0.5,0.5,0.5h5c0.3,0,0.5-0.2,0.5-0.5v-0.9
		c0-0.3-0.2-0.5-0.5-0.5h-3.3c0.1-0.3,0.2-0.6,0.6-0.9l1.8-1.2c1.1-0.7,1.5-1.4,1.5-2.3c0-2.2-2.1-3.2-5.1-2.3L26,18.6
		c-0.2,0-0.3,0.2-0.4,0.3l-0.1,0.2l0.3,1c0.1,0.3,0.4,0.4,0.7,0.3l0.7-0.2c0.4-0.1,0.9-0.2,1.3-0.2c0.3,0,0.9,0.1,0.9,0.7
		C29.6,20.9,29.5,21.1,29.1,21.4z"/>
	<path class="st0" d="M37.5,18.2h-1.4c-0.2,0-0.4,0.1-0.5,0.3c-0.2,0.3-0.4,0.6-0.6,0.9l-2.2,2.8c-0.3,0.4-0.5,0.7-0.8,1
		c-0.2,0.2-0.2,0.4-0.2,0.5v1c0,0.3,0.2,0.5,0.5,0.5h3.5v1.5c0,0.3,0.2,0.5,0.5,0.5h1c0.3,0,0.5-0.2,0.5-0.5v-1.5h0.3
		c0.3,0,0.5-0.2,0.5-0.5l0-0.9c0-0.3-0.2-0.5-0.5-0.5h-0.3v-4.4C38.1,18.4,37.8,18.2,37.5,18.2z M35.9,21.4c0,0,0,0.1,0,0.1v1.6
		h-1.3c0,0,0.1-0.1,0.1-0.1L35.9,21.4z"/>
</g>
</svg><span style="color:#515A39;">+380674016977</span></p>

	</aside>

</div>
    <div class="content">
		<div class="contentwriper">
<div class="cont1">
<p style="text-align:center;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 600" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%; background-color: white;" >
<g><image id="forimage" xlink:href="./images/cont1.jpg" height="100%" width="100%"/></g>
<a href="#" role="button" aria-label = "order service">
<g id="buttoncontent1">
<rect  x="600" y="380" rx="20" ry="15" height="1" width="1" stroke="#33CCCC" stroke-width=".1"  />
<text x="540" y="103" class="heavy">Мы Сделаем </text>
<text x="600" y="200" class="heavy">чистым </text>
<text x="550" y="300" class="heavy">Ваш дом</text>
<text text-anchor="middle" x="725" y="413" class="Rrrrr">ЗАКАЗАТЬ</text>
</g>
</a>
 </svg></p>
</div>
<div class="cont2 mobile">
<div  class = "wriperslider" id="mainContent">
<article class="scroller">
<div class="sticky">
<ul>
  <li><a data-index="1" href="#head1" class="indactive">1</a></li>
  <li><a  data-index="2" href="#head2">2</a></li>
  <li><a  data-index="3" href="#head3">3</a></li>
  <li><a data-index="4" href="#head4">4</a></li>
</ul>
</div>
<section id="head1" class="section" data-index="1">
<p style="text-align:center;"><svg class="illustration-to-animate"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 600" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%; background-color: white;" >
<g><image x="400" y="0" class="imageslider50" xlink:href="https://sweethome.ua/wp-content/uploads/2019/02/1.jpg" height="100%" width="100%"/></g>
<g>
<text x="0" y="102" class="medium big-text--1 head1text">Ответственный</text>
<text x="0" y="152" class="medium big-text--2 head1text">персонал</text>
<text x="0" y="250" class="usual big-text--3 head1text">Перед тем, как взять на работу </text>
<text x="0" y="290" class="usual big-text--4 head1text">мы собеседуем и проверяем персонал.</text>
</g>
 </svg></p>
</section>
<section id="head2" class="section" data-index="2">
<p style="text-align:center;"><svg class="illustration-to-animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 600" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%; background-color: white;" >
	<g ><image x="0" y="80" class="imageslider100" xlink:href="./images/cont2.jpg" height="70%" width="70%" /></g>
	<g>
	<text x="0" y="40" class="medium big-text--1 head2text">Качественное оборудование и моющие средства</text>
	<text x="0" y="80" class="usual big-text--2 head2text">Мы используем только качественные моющие и чистящие средства.</text>
	<text x="0" y="120" class="usual big-text--3 head2text">Мы заботимся о Вашем здоровье.</text>
	</g>
 </svg></p>
</section>
<section id="head3" class="section" data-index="3">
<svg class="illustration-to-animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 600" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%; background-color: white;" >
	<g ><image x="400" y="0" class="imageslider50" xlink:href="https://clean-c.com.ua/sites/default/files/inline-images/uborka%20ofis.jpg" height="100%" width="100%" /></g>
<g>
<text x="0" y="102" class="medium big-text--1 head1text">Заявки принимаем</text>
<text x="0" y="152" class="medium big-text--2 head1text">круглосуточно</text>
<text x="0" y="250" class="usual big-text--3 head1text">Вы можете оставить заявку в любое</text>
<text x="0" y="290" class="usual big-text--4 head1text"> время и утром к Вам приедет клинер.</text>
</g>
 </svg>
</section>
<section id="head4" class="section" data-index="4">
<p style="text-align:center;"><svg class="illustration-to-animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 600" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%; background-color: white;" >
	<g ><image x="0" y="110" class="imageslider100" xlink:href="https://exo.in.ua/images/news/2014/11/new-28305-2014-11-21.jpg" height="100%" width="100%" /></g>
	<g>
	<text x="0" y="40" class="medium big-text--1 head2text">Мы контролируем качество</text>
	<text x="0" y="80" class="usual big-text--2 head2text">Мы обязательно просим оценить нашу работу и оставить отзыв. </text>
	<text x="0" y="150" class="usual big-text--3 head2text"></text>
	</g>

 </svg></p>
</section>
</article>
</div>
</div>
   <h1 class="mobile" style="padding-left: 5%; font-family: 'Caveat', cursive;">Знакомьтесь наши клинеры</h1>
    <div class="slider">
     <div class="slider__wrapper">
      <div class="slider__items">
        <div class="slider__item">
          <div style="height: 40vh;">
		  <div class="desctop"><svg class="illustration-to-animate"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 1200" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%;" >
		  <g ><image x="400" y="-20" class="imageslider50" xlink:href="https://sweethome.ua/wp-content/uploads/2019/02/1.jpg" height="100%" width="100%" /></g>
		  <g>
		  <text x="0" y="300" class="medium big-text--1 head1text">Ответственный персонал</text>
		  <text x="0" y="340" class="medium big-text--2 head1text"></text>
		  <text x="0" y="410" class="usual big-text--3 head1text">Мы собеседуем и </text>
		  <text x="0" y="480" class="usual big-text--4 head1text">проверяем персонал</text>
		  <text x="0" y="550" class="usual big-text--5 head1text">который берём на работу.</text>
		  </g>
		  </svg></div>
		  <div class="mobile"><figure class="workers">
		  <img src  = "./images/1.jpg">
		  <figcaption>Анита.
		  <p style="text-shadow: none;
		  font-size: 80%">28 лет. Модель.</p></figcaption>
		  </figure>
		  </div>
		  </div>
        </div>
        <div class="slider__item">
          <div style="height: 40vh;">
		  <div class="desctop"><svg class="illustration-to-animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 1200" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%;" >
		  <g ><image x="0" y="100" class="imageslider100" xlink:href="./images/cont2.jpg" height="100%" width="100%" /></g>
		  <g>
		  <text x="0" y="130" class="medium big-text--1 head2text">Качественное оборудование и химия</text>
		  <text x="0" y="200" class="usual big-text--2 head2text">Мы используем только качественные моющие и чистящие средства.</text>
		  <text x="0" y="270" class="usual big-text--3 head2text">Мы заботимся о Вашем здоровье.</text>
		  </g>

		  </svg></div>
		  <div class="mobile"><figure class="workers">
		  <img src  = "https://wpapers.ru/wallpapers/girls/5791/PREV_%D0%94%D0%B6%D0%B5%D1%81%D1%81%D0%B8%D0%BA%D0%B0-%D0%90%D0%BB%D1%8C%D0%B1%D0%B0.jpg">
		  <figcaption>Джесика.
		  <p style="text-shadow: none;
		  font-size: 80%;">28 лет. Актриса.</p></figcaption>
		  </figure>
		  </div>
		  </div>
        </div>
        <div class="slider__item">
          <div style="height: 40vh;">
		  <div class="desctop"><svg class="illustration-to-animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 1200" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%;" >
		  <g><image x="400" y="-200" class="imageslider50" xlink:href="https://clean-c.com.ua/sites/default/files/inline-images/uborka%20ofis.jpg" height="100%" width="100%" /></g>
		  <g>
		  <text x="0" y="102" class="medium big-text--1 head1text">Заявки принимаем круглосуточно</text>
		  <text x="0" y="200" class="usual big-text--2 head1text">Вы можете оставить</text>
		  <text x="0" y="270" class="usual big-text--3 head1text">заявку в любое время</text>
		  <text x="0" y="340" class="usual big-text--4 head1text">суток и утром к Вам </text>
		  <text x="0" y="410" class="usual big-text--5 head1text">приедет клинер.</text>
		  </g>
		  </svg></div>
		  <div class="mobile"><figure class="workers">
		  <img src  = "https://art-assorty.ru/wp-content/uploads/2019/04/21-1.jpg">
		  <figcaption>Анастасия.
		  <p style="text-shadow: none;
		  font-size: 80%">28 лет. Модель.</p></figcaption>
		  </figure></div>
		  </div>
        </div>
        <div class="slider__item">
          <div style="height: 40vh;">
		  <div class="desctop"><svg class="illustration-to-animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97%" height="100%" viewBox="0 0 1080 1200" preserveAspectRatio="xMidYMid slice" style="padding-left:.1%;" >
		  <g><image x="0" y="-20" class="imageslider100" xlink:href="https://exo.in.ua/images/news/2014/11/new-28305-2014-11-21.jpg" height="100%" width="100%" /></g>
		  <g>
		  <text x="0" y="70" class="medium big-text--1 head2text">Мы контролируем качество</text>
		  <text x="0" y="130" class="usual big-text--2 head2text">Мы обязательно просим оценить нашу работу и оставить отзыв. </text>
		  <text x="0" y="150" class="usual big-text--3 head2text"></text>
		  </g>
		  </svg></div>
		  <div class="mobile"><figure class="workers">
		  <img src  = "https://storge.pic2.me/c/1360x800/115/53d25be7ca937.jpg">
		  <figcaption>Инна.
		  <p style="text-shadow: none;
		  font-size: 80%">28 лет. Певица.</p></figcaption>
		  </figure></div>
		  </div>
        </div>
      </div>
    </div>
    <a class="slider__control slider__control_prev" href="#" role="button"></a>
    <a class="slider__control slider__control_next" href="#" role="button"></a>
  </div>
  <div class="wriper-cont3">
  <h1><strong>Что мы делаем</strong></h1>
  <div class="cont3">
  <details open class="card">
  <summary class="card-header1">
  <span class="sevice-1 forbutton1">Кухня</span>
  </summary>
  <ul class="card-body">
  <li>чистим фасад вытяжки</li>
  <li>моем посуду</li>
  <li>моем столешницу</li>
  <li>моем фасады мебели</li>
  <li>выносим мусор</li>
  <li>чистим плиту и духовку</li>
  </ul>
  </details>
  <details class="card">
  <summary class="card-header2">
  <span class="sevice-2 forbutton1">Ванная</span>
  </summary>
  <ul class="card-body">
  <li>чистим плитку</li>
  <li>моем ванную</li>
  <li>убираем водный налет</li>
  <li>пробиваем засоры</li>
  <li>дезинфицируем унитаз</li>
  </ul>
  </details>
  <details class="card">
  <summary class="card-header3">
  <span class="sevice-3 forbutton1">Комнаты</span>
  </summary>
  <ul class="card-body">
  <li>вытираем пыль</li>
  <li>пылесосим</li>
  <li>моем полы</li>
  <li>моем зеркала и окна</li>
  <li>перестилаем постель</li>
  </ul>
  </details>
  <details class="card">
  <summary class="card-header4">
  <span class="sevice-4 forbutton1">Вся квартира</span>
  </summary>
  <ul class="card-body">
  <li>стирам и гладим одежду</li>
  <li>чистим ковры</li>
  <li>делаем дезинфицию</li>
  <li>предоставляем няню</li>
  </ul>
  </details>
  </div>
  <div><a href="./servicesRUS.php" id="marker2">Все услуги</a></div>
  
  </div>
   <?php require "components/popup_button.php" ?>
  </div>
 </div>
 <footer>
 <?php require "components/footer.php" ?>
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


<script> // вертикальный слайдер // скрипт для якорной прокрутки

const anchors = document.querySelectorAll('a[href*="#"]');

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })

	for(let x = 0;x<anchors.length;x++){
    anchors[x].classList.remove('indactive');
  }
	{document.querySelector('a[href="#' + blockID + '"]').className = "indactive";}

  })
}
</script>

<script> //скрипт триггер пролистывания
// the callback function that will be fired
// when the element apears in the viewport
// because it fires on initialization
// we have to check for change.isIntersecting parameter

function onEntry(entry, observer) {
  entry.forEach(change => {

    if (change.isIntersecting) {
      change.target.classList.add('visible');
	  {document.querySelector('a[href="#' + change.target.id + '"]').className = "indactive";}

    }else {
      change.target.classList.remove('visible');
	  {document.querySelector('a[href="#' + change.target.id + '"]').className = "";}

    }
  });

}

// list of options
let options = { threshold: [0.1] };
// instantiate a new Intersection Observer
let observer1 = new IntersectionObserver(onEntry, options);

// list of paragraphs
let indikators = document.querySelectorAll('.scroller section');

for (let indi of indikators) {
  observer1.observe(indi);
}

</script>

<script> //скрипт автоматической прокрутки
let n;
let j;
let myVar;
function autoScroll() {

    for (n=0; n<1; n++) {
    myVar = setInterval( function myTimer(){
    j = Math.floor(Math.random() * anchors.length);
    let anchorsID = anchors[j].getAttribute('href').substr(1)
    document.getElementById(anchorsID).scrollIntoView({
    behavior: 'smooth',
    block: 'start'
    });
    }, 6000 );
    }
}


// Target element to be observed.
let observerElement = document.querySelector('.scroller');
// Intersection Observer Configuration
const observerOptions = {
  root: null,
  rootMargin: "0px",
  threshold: 0.5
};
// Intersection Observer Constructor.
const observerscroller = new IntersectionObserver(
  handleIntersect,
  observerOptions
);
// Intersection Observer Callback Function
function handleIntersect(entry) {
  if (entry[0].isIntersecting) {
    let f = 1;
   autoScroll(f);

  } else {
 setTimeout(() => { clearInterval(myVar); }, 500);
  }
};
observerscroller.observe(observerElement);

</script>
<script>//анимация  svg
let optionintersecsanime = { threshold: [0.8] };
const images = document.querySelectorAll('.illustration-to-animate');

let observeranimation = new IntersectionObserver((entries, optionintersecsanime) => {
  entries.forEach(entry => {
  
   if (entry.isIntersecting) {
      entry.target.classList.add('animate');
	  return;
    } 
	entry.target.classList.remove('animate');
  });
});


images.forEach((image)=> {
observeranimation.observe(image);
})
</script>

<script>         // ГОРИЗОНТАЛЬНЫЙ СЛАЙДЕР
    'use strict';
    var slideShow = (function () {
      return function (selector, config) {
        var
          _slider = document.querySelector(selector), // основный элемент блока
          _sliderContainer = _slider.querySelector('.slider__items'), // контейнер для .slider-item
          _sliderItems = _slider.querySelectorAll('.slider__item'), // коллекция .slider-item
          _sliderControls = _slider.querySelectorAll('.slider__control'), // элементы управления
          _currentPosition = 0, // позиция левого активного элемента
          _transformValue = 0, // значение транфсофрмации .slider_wrapper
          _transformStep = 100, // величина шага (для трансформации)
          _itemsArray = [], // массив элементов
          _timerId,
          _indicatorItems,
          _indicatorIndex = 0,
          _indicatorIndexMax = _sliderItems.length - 1,
          _stepTouch = 50,
          _config = {
            isAutoplay: true, // автоматическая смена слайдов
            directionAutoplay: 'next', // направление смены слайдов
            delayAutoplay: 6000, // интервал между автоматической сменой слайдов
            isPauseOnHover: true // устанавливать ли паузу при поднесении курсора к слайдеру
          };

        // настройка конфигурации слайдера в зависимости от полученных ключей
        for (var key in config) {
          if (key in _config) {
            _config[key] = config[key];
          }
        }

        // наполнение массива _itemsArray
        for (var i = 0, length = _sliderItems.length; i < length; i++) {
          _itemsArray.push({ item: _sliderItems[i], position: i, transform: 0 });
        }

        // переменная position содержит методы с помощью которой можно получить минимальный и максимальный индекс элемента, а также соответствующему этому индексу позицию
        var position = {
          getItemIndex: function (mode) {
            var index = 0;
            for (var i = 0, length = _itemsArray.length; i < length; i++) {
              if ((_itemsArray[i].position < _itemsArray[index].position && mode === 'min') || (_itemsArray[i].position > _itemsArray[index].position && mode === 'max')) {
                index = i;
              }
            }
            return index;
          },
          getItemPosition: function (mode) {
            return _itemsArray[position.getItemIndex(mode)].position;
          }
        };

        // функция, выполняющая смену слайда в указанном направлении
        var _move = function (direction) {
          var nextItem, currentIndicator = _indicatorIndex;;
          if (direction === 'next') {
            _currentPosition++;
            if (_currentPosition > position.getItemPosition('max')) {
              nextItem = position.getItemIndex('min');
              _itemsArray[nextItem].position = position.getItemPosition('max') + 1;
              _itemsArray[nextItem].transform += _itemsArray.length * 100;
              _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
            }
            _transformValue -= _transformStep;
            _indicatorIndex = _indicatorIndex + 1;
            if (_indicatorIndex > _indicatorIndexMax) {
              _indicatorIndex = 0;
            }
          } else {
            _currentPosition--;
            if (_currentPosition < position.getItemPosition('min')) {
              nextItem = position.getItemIndex('max');
              _itemsArray[nextItem].position = position.getItemPosition('min') - 1;
              _itemsArray[nextItem].transform -= _itemsArray.length * 100;
              _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
            }
            _transformValue += _transformStep;
            _indicatorIndex = _indicatorIndex - 1;
            if (_indicatorIndex < 0) {
              _indicatorIndex = _indicatorIndexMax;
            }
          }
          _sliderContainer.style.transform = 'translateX(' + _transformValue + '%)';
          _indicatorItems[currentIndicator].classList.remove('active');
          _indicatorItems[_indicatorIndex].classList.add('active');
        };

        // функция, осуществляющая переход к слайду по его порядковому номеру
        var _moveTo = function (index) {
          var i = 0, direction = (index > _indicatorIndex) ? 'next' : 'prev';
          while (index !== _indicatorIndex && i <= _indicatorIndexMax) {
            _move(direction);
            i++;
          }
        };

        // функция для запуска автоматической смены слайдов через промежутки времени
        var _startAutoplay = function () {
          if (!_config.isAutoplay) {
            return;
          }
          _stopAutoplay();
          _timerId = setInterval(function () {
            _move(_config.directionAutoplay);
          }, _config.delayAutoplay);
        };

        // функция, отключающая автоматическую смену слайдов
        var _stopAutoplay = function () {
          clearInterval(_timerId);
        };

        // функция, добавляющая индикаторы к слайдеру
        var _addIndicators = function () {
          var indicatorsContainer = document.createElement('ol');
          indicatorsContainer.classList.add('slider__indicators');
          for (var i = 0, length = _sliderItems.length; i < length; i++) {
            var sliderIndicatorsItem = document.createElement('li');
            if (i === 0) {
              sliderIndicatorsItem.classList.add('active');
            }
            sliderIndicatorsItem.setAttribute("data-slide-to", i);
            indicatorsContainer.appendChild(sliderIndicatorsItem);
          }
          _slider.appendChild(indicatorsContainer);
          _indicatorItems = _slider.querySelectorAll('.slider__indicators > li')
        };

        var _isTouchDevice = function () {
          return !!('ontouchstart' in window || navigator.maxTouchPoints);
        };

        // функция, осуществляющая установку обработчиков для событий
        var _setUpListeners = function () {
          var _startX = 0;
          if (_isTouchDevice()) {
            _slider.addEventListener('touchstart', function (e) {
              _startX = e.changedTouches[0].clientX;
              _startAutoplay();
            });
            _slider.addEventListener('touchend', function (e) {
              var
                _endX = e.changedTouches[0].clientX,
                _deltaX = _endX - _startX;
              if (_deltaX > _stepTouch) {
                _move('prev');
              } else if (_deltaX < -_stepTouch) {
                _move('next');
              }
              _startAutoplay();
            });
          } else {
            for (var i = 0, length = _sliderControls.length; i < length; i++) {
              _sliderControls[i].classList.add('slider__control_show');
            }
          }
          _slider.addEventListener('click', function (e) {
            if (e.target.classList.contains('slider__control')) {
              e.preventDefault();
              _move(e.target.classList.contains('slider__control_next') ? 'next' : 'prev');
              _startAutoplay();
            } else if (e.target.getAttribute('data-slide-to')) {
              e.preventDefault();
              _moveTo(parseInt(e.target.getAttribute('data-slide-to')));
              _startAutoplay();
            }
          });
          document.addEventListener('visibilitychange', function () {
            if (document.visibilityState === "hidden") {
              _stopAutoplay();
            } else {
              _startAutoplay();
            }
          }, false);
          if (_config.isPauseOnHover && _config.isAutoplay) {
            _slider.addEventListener('mouseenter', function () {
              _stopAutoplay();
            });
            _slider.addEventListener('mouseleave', function () {
              _startAutoplay();
            });
          }
        };

        // добавляем индикаторы к слайдеру
        _addIndicators();
        // установливаем обработчики для событий
        _setUpListeners();
        // запускаем автоматическую смену слайдов, если установлен соответствующий ключ
        _startAutoplay();

        return {
          // метод слайдера для перехода к следующему слайду
          next: function () {
            _move('next');
          },
          // метод слайдера для перехода к предыдущему слайду
          left: function () {
            _move('prev');
          },
          // метод отключающий автоматическую смену слайдов
          stop: function () {
            _config.isAutoplay = false;
            _stopAutoplay();
          },
          // метод запускающий автоматическую смену слайдов
          cycle: function () {
            _config.isAutoplay = true;
            _startAutoplay();
          }
        }
      }
    }());

    slideShow('.slider', {
      isAutoplay: true
    });
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
// Скрипт управления формой
let togleform = document.getElementById("buttoncontent1");
let ordermsg = document.getElementById("marker");
var formorder = document.querySelector(".formorder");
var formclose = document.querySelector(".formorder__buttonclose");
const formElementAdd = document.querySelector(".formorder__form");
togleform.addEventListener("click", function() {
formorder.classList.add("togleform");
formElementAdd.reset();
document.addEventListener("keydown", closePopupClickEsc);
formorder.addEventListener("mousedown", closePopupClickOverlay);

  });
formclose.addEventListener("click", function() {
formorder.classList.remove("togleform");
formElementAdd.reset();
document.removeEventListener("keydown", closePopupClickEsc);
formorder.removeEventListener("mousedown", closePopupClickOverlay);

  });
ordermsg.addEventListener("click", function() {
formorder.classList.toggle("togleform");
  });
//закрытие формы кликом на ESC
  function closePopupClickEsc(e) {
  if (e.key === "Escape") {
  formorder.classList.remove("togleform");
  formElementAdd.reset();
  }
  }
</script>
</body>
</html>