<template>
  <div
    id="buttonladybug"
    :class="[app.isFormVisible ? 'connection_good' : 'connection']"
    @click="toggleForm"
  ></div>
</template>

<script setup>
import { useAppStore } from '@/stores/app'
const app = useAppStore()

const toggleForm = () => {
  app.isFormVisible = !app.isFormVisible
}
</script>
