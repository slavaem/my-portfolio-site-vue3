const sliderMain = new Swiper('.slider_main', {
	freeMode: true,
	centeredSlides: true,
	mousewheel: true,
	parallax: true,
	breakpoints: {
		0: {
			slidesPerView: 2.5,
			spaceBetween: 20
		},
		680: {
			slidesPerView: 3.5,
			spaceBetween: 60
		}
	}
})
const sliderBg = new Swiper('.slider_bg', {
	centeredSlides: true,
	parallax: true,
	spaceBetween: 60,
	slidesPerView: 3.5
})
sliderMain.controller.control = sliderBg

 let divPosts = document.createElement("div");
 divPosts.classList.add("posts");
 divPosts.innerHTML = `<p>...only<br>war and<br>destruction<br>look the same everywhere...</p>`;
 document.body.append(divPosts);
 const tr = document.querySelector('.posts');
 
const anchors = document.querySelectorAll('.slider__item');
for(var i=0; i<anchors.length;i++){
    anchors[i].addEventListener('click', selectDate, true);
}
function selectDate(){
    event.stopPropagation();
    if(this.classList.contains('opened')){
        for(let j = 0;j<anchors.length;j++){
        anchors[j].classList.remove('opened');
        anchors[j].removeEventListener("mousedown", closeSlideClickOverlay);}
    } 
    else {
    for(let x = 0;x<anchors.length;x++){
    anchors[x].classList.remove('opened');
    anchors[x].addEventListener("mousedown", closeSlideClickOverlay);}
    
    this.classList.toggle('opened');
    
    }
}
document.addEventListener('click', closeSlide);
  function closeSlide(){
  for(let h = 0;h<anchors.length;h++){
  anchors[h].classList.remove('opened');}
  }
 function closeSlideClickOverlay(e) {
 if (e.target === e.currentTarget) {
 closeSlide()
 }
 }
function playMusic(){
  document.getElementById('sound').play();
  };
function pauseMusic(){
  document.getElementById('sound').pause();
  };
  function playVideo(urlvid){
  urlvid.play();
  };
  function pauseVideo(urlvid){
  urlvid.pause();
  };
 
let desc = document.querySelector('.description')
sliderMain.on('slideChange', e => {
	sliderMain.activeIndex > 0 ? desc.classList.add('hidden') : desc.classList.remove('hidden')
})
sliderMain.on('slideChange', e => {
	sliderMain.activeIndex < 8 ? tr.classList.add('hidden') : tr.classList.remove('hidden')
})
sliderMain.on('slideChange', e => {
	sliderMain.activeIndex > 0 ? playMusic() : pauseMusic()
})
sliderMain.on('slideChange', e => {
    sliderMain.activeIndex < 4 ? playVideo(document.getElementById('sea')) : pauseVideo(document.getElementById('sea'))
})
sliderMain.on('slideChange', e => {
    sliderMain.activeIndex < 5  ? playVideo(document.getElementById('fvideo')) : pauseVideo(document.getElementById('fvideo'))
  })
sliderMain.on('slideChange', e => {
    sliderMain.activeIndex < 3 ? playVideo(document.getElementById('Burito1')) : pauseVideo(document.getElementById('Burito1'))
 })
sliderMain.on('slideChange', e => {
 sliderMain.activeIndex > 4 ? playVideo(document.getElementById('Burito2')) : pauseVideo(document.getElementById('Burito2'))
 })
sliderMain.on('slideChange', e => {
 sliderMain.activeIndex > 3 ? playVideo(document.getElementById('slavutich')) : pauseVideo(document.getElementById('slavutich'))
 })
sliderMain.on('slideChange', e => {
 sliderMain.activeIndex > 5 ? playVideo(document.getElementById('salute')) : pauseVideo(document.getElementById('salute'))
 })
 sliderMain.on('slideChange', e => {
 sliderMain.activeIndex > 5 ? playVideo(document.getElementById('sky')) : pauseVideo(document.getElementById('sky'))
 })
 sliderMain.on('slideChange', e => {
 sliderMain.activeIndex > 7 ? playVideo(document.getElementById('war')) : pauseVideo(document.getElementById('war'))
 })
 sliderMain.on('slideChange', e => {
 sliderMain.activeIndex < 4 ? playVideo(document.getElementById('flashlights')) : pauseVideo(document.getElementById('flashlights'))
 })
