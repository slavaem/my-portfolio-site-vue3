<template>
  <audio ref="flipSound" src="/audio/page-flip.mp3" preload="auto"></audio>

  <div
    ref="containerRef"
    @touchstart="onTouchStart"
    @touchend="onTouchEnd"
    @wheel="onWheel"
    @keydown="onKeydown"
    tabindex="0"
    :class="['interactive-container', currentBgClass]"
  >
    <Navigation
      :isCollapsed="isCollapsed"
      :isHovered="isHovered"
      @mouseenter="isHovered = true"
      @mouseleave="isHovered = false"
      @navigate="goToSection"
    />

    <transition name="fade" mode="out-in">
      <component :is="currentComponent" :key="current" :is-hidden="isHidden" />
    </transition>

  </div>
</template>
<script setup>
import { ref, computed, watch, onMounted, nextTick } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { useAppStore } from '@/stores/app.js'
import Navigation from '@/components/Navigation.vue'
import ManifestSection from '@/components/ManifestSection.vue'
import Idea from '@/components/Idea.vue'
import Tools from '@/components/Tools.vue'
import Principles from '@/components/Principles.vue'
import Portfolio from '@/components/Portfolio.vue'

const appStore = useAppStore()
const router = useRouter()
const route = useRoute()
const sections = ['manifest', 'idea', 'tools', 'principles', 'portfolio']
const current = ref(route.params.section || 'manifest')

const isHidden = ref(true)
const isHovered = ref(false)
const isCollapsed = computed(() => current.value !== 'manifest')
const hasInteracted = ref(false)
const componentsMap = {
  manifest: ManifestSection,
  idea: Idea,
  tools: Tools,
  principles: Principles,
  portfolio: Portfolio
}
const currentComponent = computed(() => componentsMap[current.value])
const flipSound = ref(null)
function handleFirstInteraction() {
  if (!hasInteracted.value) hasInteracted.value = true
}
function playFlip() {
  if (hasInteracted.value && flipSound.value) {
    flipSound.value.currentTime = 0
    flipSound.value.play().catch(console.error)
  }
}

watch(() => route.params.section, (val) => {
  current.value = val || 'manifest'
})

const containerRef = ref(null)
onMounted(() => {
  nextTick(() => containerRef.value?.focus())
  document.addEventListener('click', handleFirstInteraction, { once: true })
  document.addEventListener('touchstart', handleFirstInteraction, { once: true })
})

function navigateTo(index) {
  if (index < 0 || index >= sections.length) return
  if (index !== sections.indexOf(current.value)) {
    current.value = sections[index]
    router.push(`/${sections[index]}`)
  }
  playFlip()
  nextTick(() => containerRef.value?.focus())
}

function navigate(direction) {
  const idx = sections.indexOf(current.value)
  if (direction === 'next') navigateTo(idx + 1)
  if (direction === 'prev') navigateTo(idx - 1)
}

let touchStartY = 0
function onTouchStart(e) { touchStartY = e.touches[0].clientY }
function onTouchEnd(e) {
  const deltaY = touchStartY - e.changedTouches[0].clientY
  if (Math.abs(deltaY) > 30) {
    if (deltaY > 0) navigate('next')
    else navigate('prev')
  }
}

let isScrolling = false
function throttleScroll(callback) {
  if (!isScrolling) {
    isScrolling = true
    callback()
    setTimeout(() => (isScrolling = false), 600)
  }
}
function onWheel(e) {
  throttleScroll(() => {
    if (e.deltaY > 0) navigate('next')
    else navigate('prev')
  })
}

function onKeydown(e) {
  if (e.key === 'ArrowDown') navigate('next')
  if (e.key === 'ArrowUp') navigate('prev')
}

function hideIndicatorIfVisible() {
  if (appStore.isScrollIndicatorVisible) appStore.hideScrollIndicator()
}

function goToSection(section) {
  hideIndicatorIfVisible()
  const idx = sections.indexOf(section)
  if (idx !== -1) navigateTo(idx)
}

const backgrounds = ['eagle', 'dragonfly', 'mountain']
const backgroundOrder = ref([])

onMounted(() => {
  const startIndex = Math.floor(Math.random() * backgrounds.length)
  backgroundOrder.value = sections.map((sec, i) => {
    if (sec === 'manifest') return ''
    const idx = i - 1
    return backgrounds[(startIndex + idx) % backgrounds.length]
  })
})

const currentBgClass = computed(() => {
  const idx = sections.indexOf(current.value)
  return backgroundOrder.value[idx] || ''
})
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.8s;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}

.interactive-container {
  outline: none;
  width: 100%;
  height: 100%;
  position: relative;
  transition: background 1s cubic-bezier(0.77, 0, 0.175, 1);
}
.eagle {
background-color: rgba(121, 237, 252, .8);
background-image:
url(/images/cloud.svg),
url(/images/cloud1.svg),
url(/images/cloud2.svg),
url(/images/cloud3.svg),
url(/images/cloud4.svg),
url(/images/cloud5.svg),
url(/images/cloud6.svg),
url(/images/bird.svg);

background-repeat: no-repeat;
background-size: 100% 100%;
background-position-y: top;
color: rgba(255,255,240, 0.95);
}

.dragonfly {
background-repeat: repeat-x;
background-size: contain;
background-position-y: bottom;
 }

.mountain {
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-position: top;
}

/* Дневная тема */
.dragonfly {
color: rgba(255,255,240, 0.95);
background-color: rgba(63, 155, 11, .8);
background-image:
url(/images/grass4.svg),
url(/images/dragonfly.svg);
 }

@media (min-width: 768px) {
  .mountain {
    background-image:
      url(/images/cloud.svg),
      url(/images/cloud1.svg),
      url(/images/cloud2.svg),
      url(/images/cloud3.svg),
      url(/images/cloud5.svg),
      url(/images/cloud6.svg),
      url('/images/mountain-desktop.svg');
  }
}
@media (max-width: 767px) {
  .mountain {
    background-image:
      url(/images/cloud.svg),
      url(/images/cloud1.svg),
      url(/images/cloud2.svg),
      url(/images/cloud3.svg),
      url(/images/cloud4.svg),
      url(/images/cloud5.svg),
      url(/images/cloud6.svg),
      url('/images/mountain-mobile.svg');
  }
}

/* 🌙 Тёмная тема */
.dark .eagle {
  background-color: rgba(18, 24, 45, 0.95);
  background-image:
    url(/images/cloud-night.svg),
      url(/images/cloud1-night.svg),
      url(/images/cloud2-night.svg),
    url(/images/crescent-moon.svg);


  color: rgba(250, 245, 225, 0.9);
}

.dark .dragonfly {
  background-image:
    url(/images/grass-night.svg),
    url(/images/fireflies.svg),
    linear-gradient(to top, #1c224c, #0d122b);
}

@media (min-width: 768px) {
  .dark .mountain {
    background-image:
      url(/images/cloud-night.svg),
      url(/images/cloud1-night.svg),
      url(/images/cloud2-night.svg),
      url(/images/cloud3-night.svg),
      url(/images/cloud5-night.svg),
      url(/images/cloud6-night.svg),
      url('/images/mountain-desktop-night.svg');
  }
}
@media (max-width: 767px) {
  .dark .mountain {
    background-image:
      url(/images/cloud-night.svg),
      url(/images/cloud1-night.svg),
      url(/images/cloud2-night.svg),
      url(/images/cloud3-night.svg),
      url(/images/cloud4-night.svg),
      url(/images/cloud5-night.svg),
      url(/images/cloud6-night.svg),
      url('/images/mountain-mobile-night.svg');
  }
}



</style>
