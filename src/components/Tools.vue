<template>
<section class="scroller__section" :class="{ animate: isVisible }">
  <div class="scroller__content">
    <ul class="scroller__text">
      <li class="animation-delay--1 illustration-to-animate"><p>This site was built on Vue 3 with Vite.</p></li>
<li class="animation-delay--2 illustration-to-animate"><p>I use Pinia, Vue Router and adaptive BEM styles.</p></li>
<li class="animation-delay--3 illustration-to-animate"><p>I can also work with WordPress, PrestaShop, React, Shopify.</p></li>
<li class="animation-delay--4 illustration-to-animate"><p>I adapt easily to any stack you prefer.</p></li>
      <li class="animation-delay--5 illustration-to-animate"><p></p></li>
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