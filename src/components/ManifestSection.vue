<template>
  <section class="manifest__section" :class="{ animate: isVisible }">
    <ul class="manifest__section-line">
      <li class="animation-delay--1 illustration-to-animate manifest-image-conteiner">
<LadybugEyes
  class="manifest__section-image"
  alt="avatar"
/>
        <img class="manifest__section-image-tools" src="/images/tools.svg" alt="tools" />
      </li>
<li class="animation-delay--2 illustration-to-animate">Hello!</li>
<li class="animation-delay--3 illustration-to-animate">This small and beautiful site</li>
<li class="animation-delay--4 illustration-to-animate">was built with Vue 3 — modern and powerful.</li>
<li class="animation-delay--5 illustration-to-animate">Serious technology behind a playful design ✨</li>
    </ul>
<div v-if="appStore.isScrollIndicatorVisible" class="scroll-indicator">
    ↓
  </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import LadybugEyes from '@/components/LadybugEyes.vue'
import { useAppStore } from '@/stores/app.js'
const appStore = useAppStore()
const isVisible = ref(false)
defineProps({
  isHidden: {
    type: Boolean
  }
  })
onMounted(() => {
  isVisible.value = true
})
</script>

<style scoped>
@keyframes glow {
  0%, 100% {
    text-shadow:
      0 0 4px #00ccff,
      0 0 8px #00ccff,
      0 0 12px rgba(0,204,255,0.6);
  }
  50% {
    text-shadow:
      0 0 6px #00e0ff,
      0 0 16px #00ccff,
      0 0 32px rgba(0,255,255,0.8);
  }
}

.manifest__section-line li {
  animation: glow 3.5s ease-in-out infinite;
  transition: color 0.5s ease;
}


.scroll-indicator {
  position: fixed;
  bottom: 2vw;
  left: 50%;
  transform: translateX(-50%);
  font-size: clamp(18px, 6vw, 48px);
  color: #00ccff;
  text-shadow: 0 0 10px #00ccff;
  animation: pulse 2s infinite;
}


.scroll-indicator {
  position: fixed;
  bottom: -2vw;
  left: 50%;
  transform: translateX(-50%);
  font-size: clamp(18px, 8vw + 2rem, 64px);
  color: #00ccff;
  text-shadow: 0 0 10px #00ccff;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { opacity: 1; }
  50% { opacity: 0.5; }
  100% { opacity: 1; }
}

@media screen and (max-width: 640px) {
.scroll-indicator {
  bottom: -4vw;
}
}
@media screen and (max-width: 425px) {
.scroll-indicator {
  bottom: -6vw;
}
}
</style>
