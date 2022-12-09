const showBtn= document.querySelector('.navBtn');
const nav= document.querySelector('.nav');

showBtn.addEventListener('click', function(){
    if(nav.classList.contains('showNav')){
        nav.classList.remove('showNav');
        showBtn.innerHTML='<i class="fas fa-bars"></i>';
    }
    else{
        nav.classList.add('showNav');
        showBtn.innerHTML='<i class="fas fa-times"></i>';
    }
});

/* lightbox */
var lightbox = new SimpleLightbox('.gallery a', { /* options */ });