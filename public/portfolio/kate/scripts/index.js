const bar = document.querySelector('.burger')
document.addEventListener('click', function (e) {
  const $target = e.target
  if ($target.matches('.burger') || $target.matches('.navigation__menu__burger')) {
    bar.classList.toggle('animate')
  } else {
    bar.classList.remove('animate')
  }
})

const wrip = document.querySelector('.main-swiper')
wrip.addEventListener('click', function (e) {
  const $target = e.target
  if ($target.className === 'like__btn') {
    let parent = $target.parentNode.previousElementSibling
    let picture = parent.querySelector('.like__count')
    let btnContent = parseInt(picture.textContent)
    picture.textContent = ++btnContent
  }
  return false
})
