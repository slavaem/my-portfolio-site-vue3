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
    href: '/cleaning/index.php',
    title: 'Cleaning',
    imgSrc: '/images/cleaning.jpg',
    alt: 'Cleaning',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '25%' }
    }
  },
  {
    href: '/letter.html',
    title: 'Letter',
    imgSrc: '/images/letter.jpg',
    alt: 'Letter',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '0%', ty: '25%' }
    }
  },
  {
    href: '/example/banerletter.html',
    title: 'Example',
    imgSrc: '/images/example.jpg',
    alt: 'Example',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '-70%', ty: '25%' }
    }
  },
  {
    href: '/world/world.html',
    title: 'Our World',
    imgSrc: '/images/world.jpg',
    alt: 'World',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '-15%' }
    }
  },
  {
    href: '/quiz/quiz.html',
    title: 'Quiz',
    imgSrc: '/images/quiz.jpg',
    alt: 'Quiz',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '0%', ty: '-15%' }
    }
  },
  {
    href: '/kate/kate.php',
    title: 'Artist Kate Kulish',
    imgSrc: '/images/Katy.jpg',
    alt: 'Kate Kulish',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '-70%', ty: '-15%' }
    }
  },
  {
    href: '/reactplayer/player.html',
    title: 'React Player',
    imgSrc: '/images/Reactplayer.jpg',
    alt: 'React Player',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '-55%' }
    }
  },
  {
    href: 'https://www.mriy-dom.com',
    title: 'Mriy Dom',
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
    title: 'Fernir Company',
    imgSrc: '/images/Fernir.png',
    alt: 'Fernir Company',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '-70%', ty: '-55%' }
    }
  },
  {
    href: '/quiz vue/quiz_vue.html',
    title: 'Quiz Vue',
    imgSrc: '/images/quiz_vue.jpg',
    alt: 'Quiz Vue',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '70%', ty: '-55%' }
    }
  },
  {
    href: 'https://7cobag.com',
    title: '7cobag',
    imgSrc: '/images/7cobag.jpg',
    alt: '7cobag',
    transforms: {
      desktop: { scale: 2.5, tx: '0%', ty: '0%' },
      tablet: { scale: 2.5, tx: '0%', ty: '5%' },
      mobile: { scale: 3.0, tx: '0%', ty: '-55%' }
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

</style>