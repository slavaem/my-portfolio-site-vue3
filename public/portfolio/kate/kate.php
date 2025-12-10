<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<meta charset="UTF-8" content="notranslate">
<link rel="icon" href="">
<link rel="manifest" href="manifest.json">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<meta name="description" content= "">
<link rel="stylesheet" href="./pages/index.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
</style>
</head>
<body translate="no">
<div  class = "wriper">
<?php require "html components/header.php" ?>
  <main class="main">
<section class="main-swiper">
  <div class="main-slider">

    <div class="painting-slide">
       <div class="slide-media">
        <img class="painting-slide-image" src="images/pt3.jpg" alt="">
          <div class="swiper-slide-like">
            <img class="like__heart" src="./images/heart.svg">
              <div class="like__count">66</div>
          </div>
          <div class="slide-like-btn">
            <img class="like__btn" src="./images/btnheart.svg">
          </div>
        </div>
      <p>Name of the painting</p>
      <p>(12.05.2020)</p>
      <p>330.00 USD</p>
      <button class="snipcart-add-item slide-buy"
        data-item-id="pt3"
        data-item-name="Name of the painting"
        data-item-price="330"
        data-item-url="/"
        data-item-image="images/pt3.jpg"
        data-item-description="Original painting by Kate Kulish">
        Buy
      </button>
    </div>

    <div class="painting-slide">
       <div class="slide-media">
        <img class="painting-slide-image" src="images/pt4.jpg" alt="">
          <div class="swiper-slide-like">
            <img class="like__heart" src="./images/heart.svg">
              <div class="like__count">66</div>
          </div>
          <div class="slide-like-btn">
            <img class="like__btn" src="./images/btnheart.svg">
          </div>
</div>
      <p>Name of the painting</p>
      <p>(12.05.2020)</p>
      <p>330.00 USD</p>
      <button class="snipcart-add-item slide-buy"
        data-item-id="pt4"
        data-item-name="Name of the painting"
        data-item-price="330"
        data-item-url="/"
        data-item-image="images/pt4.jpg"
        data-item-description="Original painting by Kate Kulish">
        Buy
      </button>
    </div>

    <div class="painting-slide">
       <div class="slide-media">
        <img class="painting-slide-image" src="images/pt1.jpg" alt="">
          <div class="swiper-slide-like">
            <img class="like__heart" src="./images/heart.svg">
              <div class="like__count">66</div>
          </div>
          <div class="slide-like-btn">
            <img class="like__btn" src="./images/btnheart.svg">
          </div>
</div>
      <p>Name of the painting</p>
      <p>(12.05.2020)</p>
      <p>330.00 USD</p>
      <button class="snipcart-add-item slide-buy"
        data-item-id="pt1"
        data-item-name="Name of the painting"
        data-item-price="330"
        data-item-url="/"
        data-item-image="images/pt1.jpg"
        data-item-description="Original painting by Kate Kulish">
        Buy
      </button>
    </div>

    <div class="painting-slide">
       <div class="slide-media">
        <img class="painting-slide-image" src="images/pt5.jpg" alt="">
          <div class="swiper-slide-like">
            <img class="like__heart" src="./images/heart.svg">
              <div class="like__count">66</div>
          </div>
          <div class="slide-like-btn">
            <img class="like__btn" src="./images/btnheart.svg">
          </div>
</div>
      <p>Name of the painting</p>
      <p>(12.05.2020)</p>
      <p>330.00 USD</p>
      <button class="snipcart-add-item slide-buy"
        data-item-id="pt5"
        data-item-name="Name of the painting"
        data-item-price="330"
        data-item-url="/"
        data-item-image="images/pt5.jpg"
        data-item-description="Original painting by Kate Kulish">
        Buy
      </button>
    </div>

    <div class="painting-slide">
       <div class="slide-media">
        <img class="painting-slide-image" src="images/pt2.jpg" alt="">
          <div class="swiper-slide-like">
            <img class="like__heart" src="./images/heart.svg">
              <div class="like__count">66</div>
          </div>
          <div class="slide-like-btn">
            <img class="like__btn" src="./images/btnheart.svg">
          </div>
</div>
      <p>Name of the painting</p>
      <p>(12.05.2020)</p>
      <p>330.00 USD</p>
      <button class="snipcart-add-item slide-buy"
        data-item-id="pt2"
        data-item-name="Name of the painting"
        data-item-price="330"
        data-item-url="/"
        data-item-image="images/pt2.jpg"
        data-item-description="Original painting by Kate Kulish">
        Buy
      </button>
    </div>

  </div>

  <div class="main-slider-nav">
    <div class="arrow-left main-prev"></div>
    <div class="slider-dots main-dots"></div>
    <div class="arrow-right main-next"></div>
  </div>

</section>

<div  class="new-painting-block"> 
<p class="new-painting">new painting</p>
<img class="new-painting-image" src="./images/Stage1.jpg" alt="New painting">
<p class="new-painting-text">Name of the painting (15.03.2020)</p>
<p class="new-painting-price">330.00 USD</p>
		<button
  class="snipcart-add-item new-painting-button"
  data-item-id="Stage1.jpg"
  data-item-name="Name of the painting"
  data-item-price="330"
  data-item-url="/"
  data-item-image="images/Stage1.jpg"
  data-item-description="New painting by Kate Kulish"
>
  Buy
</button>
</div>
<div  class="philosophy__block">
<p class="philosophy">philosophy</p>
<p class="main__text">My name is Kate Kulish. I am an artist from Ukraine. For a long time, I have been living in Bali, Indonesia. I live my life based on the teachings of Buddhist philosophy by practicing mindfulness, non-violence, and compassion.
The intention of my art is to reflect my inner calm. My technique has been shaped over the years by visiting many European museums and studying painting at university. I was strongly influenced by the works of masters, such as Gustav Klimt, Raphael, and Picasso. The main topics of my paintings are stroke, abstract landscapes, and decomposed cityscapes.
</p>
<article> 
<img class="img__philosophy__one" src="./images/philosophy.svg" alt="Philosophy">
<p class="stroke">Women</p> 
<p class="main__text">In my paintings, stroke represent an object of pureness. They are a concentration of beauty and the divine. I create faces of stroke as archaic objects without individuality of character. This helps to bring me to explore all the qualities of pureness and divine creation, such as that seen in Madonna del Prato (Raphael).</p>
</article>
<article class="philosophy__block__article__one">
<p class="stroke abstract">Abstract Landscapes</p>
<p class="main__text">If we remove some forms of standard objects, all that remains is pure energy, which merges everything together. Everything passes from one to another and is constantly moving. This energy fills everything around us. Everything that we see serves as a vessel for this energy.</p>
</article>
<article class="philosophy__block__article__two"> 
<img class="img__philosophy__two" src="./images/philo.jpg" alt="philo">
<p class="stroke decomposed">Decomposed Cityscapes</p>
<p class="main__text">For me, the city represents one of the highest manifestations of unity among people. The most important part of any city is its soul. Each of my cityscapes is an experiment in decomposing the city and bringing all the details together. After connecting all the details in a completely unthinkable sequence, with an incomprehensible perspective, one thing remains unchanged: the soul of the city. You can change all the details, but the soul will remain unchanged and unshakable.
In fact, I understand this more than ever, as since many of the cities in my beloved Ukraine have been destroyed. Regardless, the soul of each city remains unshakable. The cities continue to live, even if 90 buildings have been partially destroyed.</p>
</article>
<img class="img__philosophy__group__1920" src="./images/NFT Marketplace1920.jpg" alt="Mask group">
<img fetchpriority="high" class="img__philosophy__group__768" src="./images/NFT Marketplace768.jpg" alt="Mask group">
<img fetchpriority="high" class="img__philosophy__group__360" src="./images/NFT Marketplace360.jpg" alt="Mask group">
<div class="block__nft__marketplace">
<p class="nft">Nft</p> 
<p class="nft__cryptos nft__cryptos__1920">An NFT is a digital asset that represents real-world objects like art, music, in-game items and videos. They are bought and sold online, frequently with cryptocurrency, and they are generally encoded with the same underlying software as many cryptos.</p>
<p class="nft__cryptos nft__cryptos__768">Marketpkace dolor sit amet, in sed dicta eirmod labitur. Ea mazim libris quo, ex viris adipiscing nam. Et qui offendit facilisis explicari, an quo eros dolorum, brute civibus euripidis at mel.Est ea congue iudicabit, est eu facete consulatu definitionem, nec aperiri principes intellegat ei. Mel debitis oportere eu. Ius minim conceptam at, mei no nonumes propriae persequeris. Mea modo insolens id, an has eros mediocrem.</p>
<p class="nft__marketplace">marketplace</p>
</div>
<div class="swiper-container swiper2">
 <div class="swiper-wrapper wrapper-swiper2">
    <div class="swiper-slide swiper__slide__swiper2">
		<img src="images/blockparty.svg" alt="Blockparty">
	</div>
    <div class="swiper-slide swiper__slide__swiper2">
		<img src="images/socialnft.svg" alt="Social NFT">
	</div>
	<div class="swiper-slide swiper__slide__swiper2">
		<img src="images/airnfts.svg" alt="AIRNFTS">
	</div>
	<div class="swiper-slide swiper__slide__swiper2">
		<img src="images/kbase.svg" alt="Kbase">
	</div>
	<div class="swiper-slide swiper__slide__swiper2">
		<img src="images/blockparty.svg" alt="Blockparty">
	</div>
	<div class="swiper-slide swiper__slide__swiper2">
		<img src="images/socialnft.svg" alt="Social NFT">
	</div>
	 </div>
<center><div class="swiper-block-nav swiper__block__nav__swiper2">
<div class="swiper-button-prev swiper2-prev"></div>
<div class="swiper-button-next swiper2-next"></div>

<div class="swiper-pagination swiper2-pagination pagination__swiper2"></div>
</div></center>   
</div>  
</div>
<div  class="exhibitions__block">
<center><p class="exhibitions__text">exhibitions</p></center>
<div class="exhibitions__slider">
  <div class="exhibitions__slider__item">
		  <figure>
		  <div class="exhibitions__slider__slide__image"><img src="./images/exh1.jpg"></div>
		  <figcaption>
		  <p>International Symposium in Mallnitz,<br> Austria</p>
		  <p>It so happened that I was not used to living without traveling, and since there are a lot…
		  <details>
		    <summary>continue reading</summary>
             <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
		  </details>
		  </p></figcaption>
		  </figure> 
 </div>
 <div class="exhibitions__slider__item">
		  <figure>
		  <div class="exhibitions__slider__slide__image"><img src="./images/exh2.jpg"></div>
		  <figcaption>
		  <p>International Symposium in Mallnitz,<br> Austria</p>
		  <p>It so happened that I was not used to living without traveling, and since there are a lot…
		  <details>
		    <summary>continue reading</summary>
             <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
		  </details>
		  </p></figcaption>
		  </figure> 
 </div>
  <div class="exhibitions__slider__item">
		  <figure>
		  <div class="exhibitions__slider__slide__image"><img src="./images/exh3.jpg"></div>
		  <figcaption>
		  <p>International Symposium in Mallnitz,<br> Austria</p>
		  <p>It so happened that I was not used to living without traveling, and since there are a lot…
		  <details>
		    <summary>continue reading</summary>
             <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
		  </details>
		  </p></figcaption>
		  </figure> 
 </div>
   <div class="exhibitions__slider__item">
		  <figure>
		  <div class="exhibitions__slider__slide__image"><img src="./images/exh1.jpg"></div>
		  <figcaption>
		  <p>International Symposium in Mallnitz,<br> Austria</p>
		  <p>It so happened that I was not used to living without traveling, and since there are a lot…
		  <details>
		    <summary>continue reading</summary>
             <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
		  </details>
		  </p></figcaption>
		  </figure> 
 </div>
 <div class="exhibitions__slider__item">
		  <figure>
		  <div class="exhibitions__slider__slide__image"><img src="./images/exh2.jpg"></div>
		  <figcaption>
		  <p>International Symposium in Mallnitz,<br> Austria</p>
		  <p>It so happened that I was not used to living without traveling, and since there are a lot…
		  <details>
		    <summary>continue reading</summary>
             <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
		  </details>
		  </p></figcaption>
		  </figure> 
 </div>
  <div class="exhibitions__slider__item">
		  <figure>
		  <div class="exhibitions__slider__slide__image"><img src="./images/exh3.jpg"></div>
		  <figcaption>
		  <p>International Symposium in Mallnitz,<br> Austria</p>
		  <p>It so happened that I was not used to living without traveling, and since there are a lot…
		  <details>
		    <summary>continue reading</summary>
             <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
		  </details>
		  </p></figcaption>
		  </figure> 
 </div>
  
</div>
 <div class="slider-nav">
  <div class="arrow-left exh-prev"></div>
  
  <div class="slider-dots exh-dots"></div>
  
  <div class="arrow-right exh-next"></div>
</div>
</div>
<div class="social-block">
<center><div class="social__block__socialicon"><img class="block__socialicon__socialicon" src="./images/socialicon.svg" alt="Socialicon"></div></center>
<p class="social__block__text"><nobr>Share Kate’s art with the world</nobr></p>
<a class="socialmedia__link__fecebook " href="#"><div class="social__block__socialmedia"><img class="block__socialicon__socialfecebook" src="./images/socialfecebook.svg" alt="Fecebook"></div>
</a>
<a class="socialmedia__link__tiktok" href="#"><div class="social__block__socialmedia "><img class="block__socialicon__socialtiktok" src="./images/socialtiktok.svg" alt="Tiktok"></div>
</a>
<a class="socialmedia__link__insta" href="#"><div class="social__block__socialmedia"><img class="block__socialicon__socialinsta" src="./images/socialinsta.svg" alt="Instagram"></div>
</a>
<a class="socialmedia__link__youtube" href="#"><div class="social__block__socialmedia"><img class="block__socialicon__youtube" src="./images/socialyoutube.svg" alt="Youtube"></div>
</a>
</div>
  </main>
<?php require "html components/footer.php" ?>
</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="./scripts/index.js"></script>
<script src="./scripts/swiper-bundle.min.js"></script> 
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script src="./scripts/main.js"></script>
<script>
  window.SnipcartSettings = {
    publicApiKey: 'ZjFkODIzYzItODAyMS00ODY3LTk2NGYtZDRhZmYzYTEyNmEyNjM5MDAyODQ3NTU0MDMyODk0',

    loadStrategy: "on-user-interaction",
    timeoutDuration: 4000,

    currency: "usd",

    addProductBehavior: "open",
    modalStyle: "side",

    version: "3.7.1",

    loadCSS: true
  };

  (function(){
    var c,d;(d=(c=window.SnipcartSettings).version)!=null||(c.version="3.0");
    var s,S;(S=(s=window.SnipcartSettings).timeoutDuration)!=null||(s.timeoutDuration=2750);
    var l,p;(p=(l=window.SnipcartSettings).domain)!=null||(l.domain="cdn.snipcart.com");
    var w,u;(u=(w=window.SnipcartSettings).protocol)!=null||(w.protocol="https");
    var f=window.SnipcartSettings.version.includes("v3.0.0-ci")||(
      window.SnipcartSettings.version!="3.0" &&
      window.SnipcartSettings.version.localeCompare("3.4.0",void 0,{numeric:true,sensitivity:"base"})===-1
    ),
    m=["focus","mouseover","touchmove","scroll","keydown"];

    window.LoadSnipcart=o;

    document.readyState==="loading"
      ? document.addEventListener("DOMContentLoaded",r)
      : r();

    function r(){
      window.SnipcartSettings.loadStrategy==="on-user-interaction" &&
        (m.forEach(t=>document.addEventListener(t,o)),
         setTimeout(o,window.SnipcartSettings.timeoutDuration));
    }

    var a=false;
    function o(){
      if(a) return;
      a=true;

      let t=document.getElementsByTagName("head")[0],
          e=document.querySelector("#snipcart"),
          i=document.querySelector(`script[src^="${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}"][src$="snipcart.js"]`),
          n=document.querySelector(`link[href^="${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}"][href$="snipcart.css"]`);

      e || (e=document.createElement("div"),
            e.id="snipcart",
            e.hidden=true,
            document.body.appendChild(e));

      v(e);

      i || (i=document.createElement("script"),
            i.src=`${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}/themes/v${window.SnipcartSettings.version}/default/snipcart.js`,
            i.async=true,
            t.appendChild(i));

      if (!n && window.SnipcartSettings.loadCSS){
        n=document.createElement("link");
        n.rel="stylesheet";
        n.href=`${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}/themes/v${window.SnipcartSettings.version}/default/snipcart.css`;
        t.prepend(n);
      }

      m.forEach(g=>document.removeEventListener(g,o));
    }

    function v(t){
      if(!f) return;
      t.dataset.apiKey = window.SnipcartSettings.publicApiKey;
      t.dataset.configAddProductBehavior = window.SnipcartSettings.addProductBehavior;
      t.dataset.configModalStyle = window.SnipcartSettings.modalStyle;
      t.dataset.currency = window.SnipcartSettings.currency;
    }
  })();
</script>

</body>
</html>