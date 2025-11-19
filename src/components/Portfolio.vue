<template>
  <section class="scroller__section portfolio-page" :class="{ animate: isVisible }">
    <div class="scroller__content">
      <h1
        class="scroller__content-hide"
        :class="{ scaleminus: hoveredIndex !== null }"
      >
        Work examples:
      </h1>
      <ul class="scroller__text scroller__text__portfolio">
        <li
          v-for="(item, index) in portfolioItems"
          :key="index"
          :class="[
            'illustration-to-animate',
            `animation-delay--${index + 1}`
          ]"
          :style="hoveredIndex === index ? getTransformStyle(item) : null"
          @mouseenter="hoveredIndex = index"
          @mouseleave="hoveredIndex = null"
        >
          <a :href="item.href" :title="item.title">
            <img
              class="scroller__content-porfolio"
              :class="{
                scaleplus: hoveredIndex === index,
                scaleminus: hoveredIndex !== null && hoveredIndex !== index
              }"
              :src="item.imgSrc"
              :alt="item.alt"
            />
          </a>
        </li>
      </ul>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const isVisible = ref(false)
const hoveredIndex = ref(null)

const portfolioItems = [
  {
    href: '/portfolio/cleaning/index.php',
    title: 'The first website for cleaning',
    imgSrc: '/images/cleaning.jpg',
    alt: 'Cleaning',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '25%' }
    }
  },
  {
    href: '/portfolio/letter.html',
    title: 'Example of letter layout',
    imgSrc: '/images/letter.jpg',
    alt: 'Letter',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '0%', ty: '25%' }
    }
  },
  {
    href: '/portfolio/example/banerletter.html',
    title: 'An example of an animated banner for a website',
    imgSrc: '/images/example.jpg',
    alt: 'Example',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '-70%', ty: '25%' }
    }
  },
  {
    href: '/portfolio/world/world.html',
    title: 'Our World (parallax effect, video background, picture-in-picture)',
    imgSrc: '/images/world.jpg',
    alt: 'World',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '-15%' }
    }
  },
  {
    href: '/portfolio/quiz/quiz.html',
    title: 'A tutorial project using pure JavaScript ',
    imgSrc: '/images/quiz.jpg',
    alt: 'Quiz',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '0%', ty: '-15%' }
    }
  },
  {
    href: '/portfolio/kate/kate.php',
    title: 'Precise responsive layot of a sales landin page',
    imgSrc: '/images/Katy.jpg',
    alt: 'Kate Kulish',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '-70%', ty: '-15%' }
    }
  },
  {
    href: '/portfolio/reactplayer/player.html',
    title: 'Educatuional project React Player',
    imgSrc: '/images/Reactplayer.jpg',
    alt: 'React Player',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '-55%' }
    }
  },
  {
    href: 'https://web.archive.org/web/20241115012632/http://www.mriy-dom.com/',
    title: 'Website on WordPress Elementor',
    imgSrc: '/images/mriydom.png',
    alt: 'Mriy Dom',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '0%', ty: '-55%' }
    }
  },
  {
    href: 'https://saaskit.us',
    title: 'Website Fernir Company',
    imgSrc: '/images/Fernir.png',
    alt: 'Fernir Company',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '-70%', ty: '-55%' }
    }
  },
  {
    href: '/portfolio/quiz vue/quiz_vue.html',
    title: 'Educatuional project Quiz Vue3',
    imgSrc: '/images/quiz_vue.jpg',
    alt: 'Quiz Vue',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '-55%' }
    }
  },
  {
    href: 'https://interactive-landing-vue3.vercel.app/',
    title: 'interactive landing constructor vue3',
    imgSrc: '/images/landing vue3.jpg',
    alt: 'landing page vue3',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '0%', ty: '-55%' }
    }
  },
  {
    href: 'https://7cobag.com',
    title: 'Online store of Korean cosmetics',
    imgSrc: '/images/7cobag.jpg',
    alt: 'Online store 7cobag.com',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '-70%', ty: '-55%' }
    }
  }
]

const getTransformStyle = (item) => {
  const w = window.innerWidth
  let t
  if (w <= 425) t = item.transforms.mobile
  else if (w <= 820) t = item.transforms.tablet
  else t = item.transforms.desktop

  return {
    '--scale': t.scale,
    '--tx': t.tx,
    '--ty': t.ty
  }
}

onMounted(() => {
  const played = localStorage.getItem('portfolioAnimationPlayed')
  if (!played) {
    isVisible.value = true
    localStorage.setItem('portfolioAnimationPlayed', 'true')
  }
})
</script>

<style scoped>
.scroller__content-porfolio {
max-width: 80%;
width: 15%;
height: auto;
opacity: .8;
-webkit-transition: -webkit-transform 1s linear;
transition: -webkit-transform 1s linear;
-o-transition: transform 1s linear;
margin-top: 1%;

}

.scroller__text__portfolio {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: min-content;
  grid-auto-flow: row;
  grid-gap: 0.5%;
}

.scroller__text__portfolio img {
  max-width: 80%;
  margin: 10px 0;
  transition: transform 1s linear, opacity 1s linear !important;
}

.scaleplus {
  transform: scale(var(--scale)) translate(var(--tx), var(--ty));
  opacity: 1;
}


.scaleminus {
  transform: scale(0.8);
  opacity: 0.5;
}

@media screen and (max-width: 1100px) {
  .scroller__content-porfolio {
    width: 25%;
  }
}

@media screen and (max-width: 820px) {
  .scroller__content-porfolio {
    width: 35%;
  }
}

@media screen and (max-width: 640px) {
  .scroller__content-porfolio {
    width: 40%;
  }
}

@media screen and (max-width: 425px) {
  .scroller__text__portfolio {
    grid-template-columns: repeat(3, 1fr);
  }
  .scroller__content-porfolio {
    width: 40%;
  }
}

@media screen and (max-width: 320px) {
  .scroller__content h1 {
    margin-top: -20%;
  }
}


.dark .scroller__content-porfolio {
    filter:
    drop-shadow(0 0 3px rgba(0, 255, 255, 0.8))
    drop-shadow(0 0 10px rgba(0, 255, 255, 0.8))
    drop-shadow(0 0 20px rgba(0, 255, 255, 0.6))
    drop-shadow(0 0 40px rgba(0, 255, 255, 0.4));
  animation: breatheStrong 8s ease-in-out infinite;
}

@keyframes breatheStrong {
  0%, 100% {
    filter:
      drop-shadow(0 0 4px rgba(0, 255, 255, 0.6))
      drop-shadow(0 0 10px rgba(0, 255, 255, 0.5))
      drop-shadow(0 0 20px rgba(0, 255, 255, 0.4))
      drop-shadow(0 0 40px rgba(0, 255, 255, 0.2));
  }
  50% {
    filter:
      drop-shadow(0 0 10px rgba(0, 255, 255, 1))
      drop-shadow(0 0 20px rgba(0, 255, 255, 0.9))
      drop-shadow(0 0 40px rgba(0, 255, 255, 0.6))
      drop-shadow(0 0 80px rgba(0, 255, 255, 0.4));
  }
}

.dark .scroller__content h1 {
  color: #f8faff;
  text-shadow:
    0 0 4px rgba(255, 255, 255, 0.3),
    0 0 8px rgba(255, 255, 255, 0.2),
    0 0 16px rgba(255, 255, 255, 0.15);
  animation: softGlow 8s ease-in-out infinite;
  letter-spacing: 0.05em;
  transition: all 3s ease;
}

@keyframes softGlow {
  0%, 100% {
    text-shadow:
      0 0 3px rgba(255, 255, 255, 0.3),
      0 0 6px rgba(255, 255, 255, 0.2),
      0 0 10px rgba(255, 255, 255, 0.1);
  }
  50% {
    text-shadow:
      0 0 6px rgba(255, 255, 255, 0.5),
      0 0 12px rgba(255, 255, 255, 0.3),
      0 0 20px rgba(255, 255, 255, 0.2);
  }
}


</style>
