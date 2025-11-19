import { defineStore } from 'pinia'
import { ref, watch } from 'vue'

export const useAppStore = defineStore('app', () => {
  const savedTheme = localStorage.getItem('theme')
  const isDark = ref(
    savedTheme ? savedTheme === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches,
  )

  const isFormVisible = ref(false)
  const isScrollIndicatorVisible = ref(localStorage.getItem('showScroll') !== 'false')

  function toggleTheme() {
    isDark.value = !isDark.value
  }

  function hideScrollIndicator() {
    isScrollIndicatorVisible.value = false
    localStorage.setItem('showScroll', 'false')
  }

  watch(isDark, (val) => {
    localStorage.setItem('theme', val ? 'dark' : 'light')
  })

  return {
    isDark,
    toggleTheme,
    isFormVisible,
    isScrollIndicatorVisible,
    hideScrollIndicator,
  }
})
