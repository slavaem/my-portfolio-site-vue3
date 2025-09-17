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
      <li class="animation-delay--3 illustration-to-animate">This small and beautiful website</li>
     <li class="animation-delay--4 illustration-to-animate">was built using</li>
     <li class="animation-delay--5 illustration-to-animate">the most powerful modern framework — Vue 3</li>
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
.manifest__section {
min-height: 100vh;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
flex-direction: column;
width: 100vw;
height: calc(100vh - 160px);
}

.manifest-image-conteiner {
display: flex;
flex-direction: row;
}

.next-button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 18px;
}
.scroll-indicator {
  position: fixed;
  bottom: 20px;
  margin: 0 auto;
  font-size: 32px;
  color: #00ccff;
  text-shadow: 0 0 10px #00ccff;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { opacity: 1; }
  50% { opacity: 0.5; }
  100% { opacity: 1; }
}
/* Дневная тема */
.manifest__section {
background-repeat: no-repeat;
background-size: 100% 100%;
background-position-y: top;
background-color: rgba(86, 97, 242, 0.8);
background-image:
url(./images/dandelion1.svg),
url(./images/dandelion2.svg),
url(./images/dandelion3.svg);
}
/* 🌙 Тёмная тема */
.dark .manifest__section {
  background-color: #1f2a68;
  background-image:
    url(./images/fireflies.svg);
  
}
</style>
