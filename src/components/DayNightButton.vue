<template>
  <div
    class="daynightbutton"
    @click="app.toggleTheme"
  >
    <span
      class="icon sun"
      :class="{ active: !app.isDark }"
    >🌞</span>
    /
    <span
      class="icon moon"
      :class="{ active: app.isDark }"
    >🌙</span>
  </div>
</template>

<script setup>
import { useAppStore } from '@/stores/app'
const app = useAppStore()

</script>

<style scoped>
.daynightbutton {
  font-size: clamp(1.4rem, 1.4vw, 1.6rem);
  cursor: pointer;
  opacity: 0.8;
  user-select: none;
  transition: opacity 0.3s ease, transform 0.3s ease;
  animation: pulse 3s infinite ease-in-out;
  position: absolute;
  left: 50vw;
  transform: translate(-50vw, -50vw);
  margin-top: 1vw;
}

.daynightbutton:hover {
  opacity: 1;
  transform: scale(1.2) rotate(5deg);
  transition: all 0.4s ease;
}

.icon {
  font-size: 2vw;
  transition: all 0.4s ease;
  opacity: 0.6;
}

.sun.active {
  font-size: 3vw;
  transform: scale(1.4);
  opacity: 1;
  filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.5));
  text-shadow: 0 0 6px #ffcc00, 0 0 12px #ffaa00;
}


.moon.active {
  font-size: 3vw;
  transform: scale(1.4);
  opacity: 1;
  filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.5));
  text-shadow: 0 0 6px #aee0ff, 0 0 12px #99ccff;
}

@keyframes pulse {
  0%, 100% {
    transform: translateX(-60%) scale(1);
  }
  50% {
    transform: translateX(-60%) scale(1.05);
  }
}

@media (width <= 767px) {
  .icon {
  font-size: 4vw;
}

.sun.active {
  font-size: 5vw;
}


.moon.active {
  font-size: 5vw;
}
}
@media (width <= 425px) {
  .icon {
  font-size: 6vw;
}

.sun.active {
  font-size: 7vw;
}


.moon.active {
  font-size: 7vw;
}
}
</style>
