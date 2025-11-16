<template>
  <footer class="footer">
    <div class="footer__inner">
      <p class="footer__line">Click <span class="footer__emoji">🐞</span> on the right to contact!</p>
      <p class="footer__line">Click logo <span class="footer__emoji">🐞</span> to go to the top ⬆️</p>
    </div>
  </footer>
</template>

<style scoped>
.footer__line {
  margin: 0.5rem auto;
  font-family: 'Yusei Magic', sans-serif;
  font-size: clamp(0.8rem, 1.2vw + 0.4rem, 1.6rem);
  text-shadow: 0 0 8px rgba(255,255,255,0.3);
  transition: transform 0.4s ease, color 0.4s ease;
  animation: float 5s ease-in-out infinite;
}

.footer__emoji {
  display: inline-block;
  animation: wiggle 2s infinite ease-in-out;
}

@keyframes wiggle {
  0%, 100% { transform: rotate(0deg) translateY(0); }
  25% { transform: rotate(10deg) translateY(-2px); }
  75% { transform: rotate(-10deg) translateY(2px); }
}

@keyframes float {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.9; transform: scale(1.05); }
}

.footer__line:hover {
  transform: scale(1.05);
  color: #fffae5;
}

.footer__sparkles {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  font-size: 1.5rem;
  animation: sparkle 3s ease-in-out infinite;
  opacity: 0.7;
}

@keyframes sparkle {
  0%, 100% { opacity: 0.4; transform: translateX(-50%) scale(1); }
  50% { opacity: 1; transform: translateX(-50%) scale(1.2); }
}

.footer__inner {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.3rem;
}
</style>
