<template>
  <div :class="{ dark: app.isDark }" class="wriper">
    <audio id="sound" src="/audio/antdie.mp3" preload="auto"></audio>

    <main>
      <router-view />
    </main>

    <Footer />
    <FormOrder />
    <LadybugButton />
  </div>
</template>

<style scoped>
  /* Тёмная тема */
.dark.wriper {
  filter: brightness(0.7) contrast(1.15) saturate(0.85) hue-rotate(10deg);
  transition: filter 0.5s ease-in-out, background-color 0.5s;
}


</style>

<script setup>
import { useAppStore } from '@/stores/app'
import Footer from '@/components/Footer.vue'
import FormOrder from '@/components/FormOrder.vue'
import LadybugButton from '@/components/LadybugButton.vue'
const app = useAppStore()
</script>

