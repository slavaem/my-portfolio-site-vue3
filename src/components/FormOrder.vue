<template>
  <div class="formorder" v-if="app.isFormVisible">
    <button
      type="button"
      aria-label="Close"
      class="formorder__buttonclose"
      @click="hideForm"
    >
      <span class="formorder__buttonclose__text">Close</span>
      <span></span>
    </button>

    <form
      ref="formRef"
      class="formorder__form"
      autocomplete="on"
      @submit.prevent="submitForm"
    >
      <!-- Honeypot field (invisible to users) -->
      <input type="text" name="website" v-model="honeypot" class="hidden-input" tabindex="-1" autocomplete="off" />

      <input type="hidden" name="form_time" :value="formTime" />

      <fieldset class="formorder__contact-info">
        <p class="formorder__contact-name">
          <label for="name">Name</label>
          <input
            type="text"
            name="name"
            id="name"
            required
            placeholder="Your name.."
            v-model="name"
          />
        </p>
        <p class="formorder__contact-email">
          <label for="email">Email address</label>
          <input
            type="email"
            name="email"
            id="email"
            required
            placeholder="Your email.."
            v-model="email"
          />
        </p>
      </fieldset>

      <fieldset class="formorder__order-info">
        <div class="formorder__wrapermessage">
          <label for="message">Message</label>
          <textarea
            name="message"
            id="message"
            placeholder="Your message.."
            v-model="message"
          ></textarea>
        </div>

        <button
          class="formorder__button__submit"
          :class="{ 'formorder__button__submit--sent': isSent }"
          :disabled="isSent"
          type="submit"
        >
          <span v-if="!isSent">
            <img
              src="/images/telegram-icon.svg"
              alt="Telegram"
              class="formorder__button__icon"
              :class="{ pulse: !isSent }"
            />
            Отправить в Telegram
          </span>
          <span v-else>✈️ Отправлено!</span>
        </button>
      </fieldset>

      <input type="hidden" name="act" value="order" />

      <p v-if="successMessage" class="formorder__success">
        {{ successMessage }}<br />
        <small>Сообщение отправлено в Telegram ✅</small>
      </p>
      <p v-if="errorMessage" class="formorder__error">{{ errorMessage }}</p>
    </form>
  </div>
</template>

<script setup>
import { ref, watch, onUnmounted } from 'vue'
import { useAppStore } from '@/stores/app'
const app = useAppStore()
const formRef = ref(null)
const isSent = ref(false)

const name = ref('')
const email = ref('')
const message = ref('')
const honeypot = ref('')
const formTime = Math.floor(Date.now() / 1000)

const successMessage = ref('')
const errorMessage = ref('')

const hideForm = () => {
  app.isFormVisible = false
  formRef.value?.reset()
  name.value = ''
  email.value = ''
  message.value = ''
  honeypot.value = ''
  successMessage.value = ''
  errorMessage.value = ''
  // Очистка статуса отправки
  setTimeout(() => (isSent.value = false), 300)
}

// ESC key
const onEsc = (e) => {
  if (e.key === 'Escape') hideForm()
}

// Outside click
const onClickOutside = (e) => {
  const formElement = document.querySelector('.formorder__form')
  if (formElement && !formElement.contains(e.target)) hideForm()
}

watch(
  () => app.isFormVisible,
  (visible) => {
    if (visible) {
      document.addEventListener('keydown', onEsc)
      document.addEventListener('mousedown', onClickOutside)
      setTimeout(() => (isSent.value = false), 300)
      formRef.value?.reset()
    } else {
      document.removeEventListener('keydown', onEsc)
      document.removeEventListener('mousedown', onClickOutside)
    }
  }
)

onUnmounted(() => {
  document.removeEventListener('keydown', onEsc)
  document.removeEventListener('mousedown', onClickOutside)
})

// Submit logic
const submitForm = async () => {
  if (honeypot.value.trim() !== '') {
    errorMessage.value = 'Bot detected'
    return
  }

  const formData = new FormData(formRef.value)
  formData.append('act', 'order')
  formData.append('form_time', formTime)
  formData.append('website', honeypot.value)

  try {
    const res = await fetch('/send.php', {
      method: 'POST',
      body: formData
    })
    const result = await res.json()

    if (result.status === 'success') {
      successMessage.value = result.message
      errorMessage.value = ''
      isSent.value = true
      formRef.value?.reset()
    } else {
      errorMessage.value = result.message || 'Something went wrong'
      successMessage.value = ''
    }
  } catch (err) {
    errorMessage.value = 'Network error'
    successMessage.value = ''
  }
}
</script>

<style scoped>
input,
textarea,
button {
  all: unset;
  box-sizing: border-box;
  font: inherit;
}

input,
textarea {
  border: 0.5px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  padding: 0.4em 0.6em;
}

input:focus,
textarea:focus {
  outline: 1px solid red;
}

.formorder__button__submit {
  transition: all 0.6s ease;
  background-color: #2aabee;
  color: #fff;
  padding: 10px 25px;
  border-radius: 6px;
  font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 1rem;
}

.formorder__button__submit:hover {
  opacity: 0.85;
}

.formorder__button__submit:disabled {
  cursor: default;
  opacity: 0.7;
}

.formorder__button__submit--sent {
  transform: translate(150%, -150%) rotate(-20deg) scale(0.4);
  opacity: 0;
}

.formorder__button__submit:active {
  transform: scale(0.98);
  box-shadow: 0 2px 6px rgba(80, 145, 30, 0.5) inset;
}

.formorder__button__icon {
  width: 20px;
  height: 20px;
}

.pulse {
  animation: pulse 1.4s infinite;
}

@keyframes pulse {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.15);
    opacity: 0.7;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

.hidden-input {
  display: none !important;
}

.formorder__success {
  color: green;
  margin-top: 1rem;
}

.formorder__error {
  color: red;
  margin-top: 1rem;
}

@media all and (max-width: 480px) {
  .formorder__button__submit {
    width: fit-content;
    font-size: 1.1rem;
    padding: 10px;
    margin: 1rem auto 0;
    display: block;
  }
}
</style>