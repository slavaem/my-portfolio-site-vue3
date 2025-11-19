<template>
  <nav
    :class="['navigation', { navShadow: isCollapsed && !isHovered, navHover: isHovered }]"
    @mouseenter="emit('mouseenter')"
    @mouseleave="emit('mouseleave')"
  >
    <div class="navigation__brand" @mouseout="removeActive">
      <div class="navigation__logo" :class="{ active: isActive }" @click="handleLogoClick">
        <img class="navigation__logo-avatar" src="/images/avatar(1).svg" alt="avatar" />
      </div>

      <div class="navigation__word-mark__wriper">
        <div class="navigation__word-mark">
          <img class="navigation__word-mark-text" src="/images/name.svg" alt="name" />
        </div>
      </div>
    </div>

    <div class="navigation__menu" ref="menuRef">
      <div class="navigation__menu-toggle" :class="{ closeMenu: isOpen }" @click.stop="toggleMenu">
        <div class="navigation__menu-icon">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>

      <ul :class="{ showMenu: isOpen }" class="navigation__menu-list">
        <li v-for="item in menuItems" :key="item.label" @click.stop="handleClick(item.path)">
          <img :src="item.icon" :alt="item.label" />
        </li>
      </ul>
    </div>
    <DayNightButton />
  </nav>

  <audio ref="sound" src="/audio/antdie.mp3" preload="auto"></audio>
</template>

<script setup>
import { ref, onUnmounted, defineEmits } from 'vue'
import { useRouter } from 'vue-router'
import DayNightButton from '@/components/DayNightButton.vue'
const emit = defineEmits(['navigate', 'mouseenter', 'mouseleave'])
const router = useRouter()

const isOpen = ref(false)
const menuRef = ref(null)
const isActive = ref(false)
const sound = ref(null)

const menuItems = [
  { label: 'Idea', path: 'idea', icon: '/images/idea.svg' },
  { label: 'Tools', path: 'tools', icon: '/images/toolswebmaster.svg' },
  { label: 'Principles', path: 'principles', icon: '/images/principles.svg' },
  { label: 'Portfolio', path: 'portfolio', icon: '/images/portfolio.svg' },
]

defineProps({
  isCollapsed: Boolean,
  isHovered: Boolean,
})

// Божья коровка
function handleLogoClick() {
  if (isActive.value) return

  isActive.value = true
  sound.value.currentTime = 0
  sound.value.play()

  setTimeout(() => {
    isActive.value = false
    emit('navigate', 'manifest')
  }, 800) // Под звук
}

function removeActive() {
  isActive.value = false
}

// Меню логика
function toggleMenu() {
  isOpen.value = !isOpen.value
  if (isOpen.value) {
    document.addEventListener('click', handleOutsideClick)
  } else {
    document.removeEventListener('click', handleOutsideClick)
  }
}

function handleClick(path) {
  isOpen.value = false
  document.removeEventListener('click', handleOutsideClick)
  emit('navigate', path)
}

function handleOutsideClick(e) {
  if (menuRef.value && !menuRef.value.contains(e.target)) {
    isOpen.value = false
    document.removeEventListener('click', handleOutsideClick)
  }
}

onUnmounted(() => {
  document.removeEventListener('click', handleOutsideClick)
})
</script>

<style scoped>
.navigation {
  height: 160px;
  transition: height 0.4s ease;
}

.navigation__menu-list li img {
  cursor: pointer;
}

.navigation.navShadow {
  height: 100px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.navigation.navHover {
  height: 160px !important;
}
.navigation__word-mark__wriper {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
}

.navigation__word-mark {
  display: flex;
  justify-content: center;
}
</style>
