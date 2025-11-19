<template>
  <section class="scroller__section" :class="{ animate: isVisible }">
    <div class="scroller__content">
      <ul class="scroller__text">
        <li class="animation-delay--1 illustration-to-animate">
          <p>The idea was simple:</p>
        </li>
        <li class="animation-delay--2 illustration-to-animate">
          <p>take the imagination of my two children,</p>
        </li>
        <li class="animation-delay--3 illustration-to-animate">
          <p>add the wonderful Vue 3,</p>
        </li>
        <li class="animation-delay--4 illustration-to-animate">
          <p>and create the most unusual and beautiful portfolio website 🙂</p>
        </li>
      </ul>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const isVisible = ref(false)

onMounted(() => {
  isVisible.value = true
})
</script>

<style scoped>
.next-button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 18px;
}
</style>
