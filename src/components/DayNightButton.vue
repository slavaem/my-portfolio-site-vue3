<template>
  <div 
    class="daynightbutton" 
    @click="app.toggleTheme"
  >
    🌞 / 🌙
  </div>
</template>

<script setup>
import { useAppStore } from '@/stores/app'
const app = useAppStore()

</script>

<style scoped>
.daynightbutton {
  font-size: 1.4rem;
  cursor: pointer;
  opacity: 0.6;
  user-select: none;
  transition: opacity 0.3s ease, transform 0.3s ease;
  animation: pulse 3s infinite ease-in-out;
}

.daynightbutton:hover {
  opacity: 1;
  transform: scale(1.1);
}

@keyframes pulse {
  0%, 100% {
    transform: translateX(-50%) scale(1);
  }
  50% {
    transform: translateX(-50%) scale(1.05);
  }
}
</style>