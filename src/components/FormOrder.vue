<template>
  <div class="formorder" v-if="app.isFormVisible">
    <button type="button" aria-label="Close" class="formorder__buttonclose" @click="hideForm">
      <span class="formorder__buttonclose__text">Close</span>
      <span></span>
    </button>

    <form ref="formRef" class="formorder__form" @submit.prevent="submitForm">

      <!-- Honeypot -->
      <input type="text" name="website" v-model="honeypot" class="hidden-input" />

      <!-- Time Trap -->
      <input type="hidden" name="form_time" :value="formTime" />

      <fieldset class="formorder__contact-info">
        <p>
          <label for="name">Name</label>
          <input
            type="text"
            id="name"
            name="name"
            required
            placeholder="Your name.."
            v-model="name"
          />
        </p>

        <p>
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            placeholder="Your email.."
            v-model="email"
          />
        </p>
      </fieldset>

      <fieldset class="formorder__order-info">
        <div>
          <label for="message">Message</label>
          <textarea
            id="message"
            name="message"
            required
            placeholder="Your message.."
            v-model="message"
          ></textarea>
        </div>

        <!-- SUBMIT BUTTON -->
        <button
          class="formorder__button__submit"
          :class="{
            'formorder__button__submit--sent': isSent,
            'formorder__button__submit--error': isError
          }"
          type="submit"
          :disabled="isSent"
        >
          <span v-if="!isSent && !isError">
            <img src="/images/telegram-icon.svg" class="formorder__button__icon pulse" />
            Send to Telegram
          </span>

          <span v-if="isSent">✈️ Sent!</span>
          <span v-if="isError">❌ Not sent</span>
        </button>
      </fieldset>

    </form>
  </div>
</template>

<script setup>
import { ref, watch, onUnmounted } from 'vue'
import { useAppStore } from '@/stores/app'

const app = useAppStore()

// Refs
const formRef = ref(null)
const honeypot = ref('')
const name = ref('')
const email = ref('')
const message = ref('')

// UI States
const isSent = ref(false)
const isError = ref(false)

// TIME TRAP timestamp
const formTime = ref(Date.now())

// Reset form
function resetForm() {
  name.value = ''
  email.value = ''
  message.value = ''
  honeypot.value = ''
  isSent.value = false
  isError.value = false

  // new timestamp for each open
  formTime.value = Date.now()
}

function hideForm() {
  app.isFormVisible = false
  resetForm()
}

// Close on ESC
const onEsc = (e) => e.key === 'Escape' && hideForm()

// Close on OUTSIDE click
const onClickOutside = (e) => {
  const wrapper = formRef.value?.parentElement
  if (wrapper && !wrapper.contains(e.target)) hideForm()
}

// Watch form visibility
watch(() => app.isFormVisible, (visible) => {
  if (visible) {
    resetForm()
    document.addEventListener('keydown', onEsc)
    document.addEventListener('mousedown', onClickOutside)
  } else {
    document.removeEventListener('keydown', onEsc)
    document.removeEventListener('mousedown', onClickOutside)
  }
})

// Clean up
onUnmounted(() => {
  document.removeEventListener('keydown', onEsc)
  document.removeEventListener('mousedown', onClickOutside)
})

// FORM SUBMIT
const submitForm = async () => {
  if (honeypot.value) return // bot ignore

  try {
    const formData = new FormData(formRef.value)
    formData.append('act', 'order')

    const res = await fetch('/send.php', { method: 'POST', body: formData })

    const contentType = res.headers.get('content-type')
    if (!contentType || !contentType.includes('application/json')) {
      throw new Error('Non-JSON response from server.')
    }

    const result = await res.json()

    if (result.status === 'success') {
      isSent.value = true
      isError.value = false
      setTimeout(() => hideForm(), 1200)
    } else {
      triggerError(result.message)
    }
  } catch (e) {
    triggerError(e.message)
  }
}

function triggerError(msg = 'Unknown error') {
  isSent.value = false
  isError.value = true
  console.error(msg)
  setTimeout(() => (isError.value = false), 2000)
}
</script>

<style scoped>
/* Стили оставлены без изменений */
.formorder__contact-info {
  padding-top: 10vw;
}
  
.hidden-input {
  display: none !important;
}
/* SUCCESS */
.formorder__button__submit--sent span {
  background: #28c76f !important; 
}

/* ERROR */
.formorder__button__submit--error span {
  background: #ff4d4d !important;
}

.formorder__button__submit--error {
  animation: errorShake 0.45s ease;
}

@keyframes errorShake {
  0% { transform: translateX(0); }
  20% { transform: translateX(-4px); }
  40% { transform: translateX(4px); }
  60% { transform: translateX(-4px); }
  80% { transform: translateX(4px); }
  100% { transform: translateX(0); }
}

</style>