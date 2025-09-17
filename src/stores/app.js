import { defineStore } from 'pinia'
import { ref, watch } from 'vue'

export const useAppStore = defineStore('app', () => {
  // проверяем, есть ли сохранённая тема в localStorage
  const savedTheme = localStorage.getItem('theme')
  // если сохранено → берём её
  // если нет → смотрим prefers-color-scheme
  const isDark = ref(
    savedTheme
      ? savedTheme === 'dark'
      : window.matchMedia('(prefers-color-scheme: dark)').matches
  )

  const isFormVisible = ref(false)
  // стрелка прокрутки при первом заходе
  const isScrollIndicatorVisible = ref(localStorage.getItem('showScroll') !== 'false')

  function toggleTheme() {
    isDark.value = !isDark.value
  }

  function hideScrollIndicator() {
    isScrollIndicatorVisible.value = false
    localStorage.setItem('showScroll', 'false')
  }
  // следим и сохраняем в localStorage
  watch(isDark, val => {
    localStorage.setItem('theme', val ? 'dark' : 'light')
  })

  return {
    isDark,
    toggleTheme,
    isFormVisible,
    isScrollIndicatorVisible,
    hideScrollIndicator
  }
})