<template>
  <section class="scroller__section" :class="{ animate: isVisible }">
    <div class="scroller__content">
      <ul class="scroller__text">
<li class="animation-delay--1 illustration-to-animate"><p>The main thing for me is quality.</p></li>
<li class="animation-delay--2 illustration-to-animate"><p>I love bringing ideas to life</p></li>
<li class="animation-delay--3 illustration-to-animate"><p>in the most simple and elegant way.</p></li>
<li class="animation-delay--4 illustration-to-animate"><p>Check out my portfolio on the last page!</p></li>
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