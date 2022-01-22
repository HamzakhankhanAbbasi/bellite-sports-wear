// NAVIGATION
initializeStellarNav(1, '#main-nav');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1024,
		position: 'left'
	});
}

// SEC-1 SLIDER  
var swiper = new Swiper(".sec-1-slider", {
	loop:true,
	pagination: {
		el: ".sec-1-slider .swiper-pagination",
		clickable: true,
	},
	autoplay: {
		delay: 3000,
	}
});

//BLOG SLIDER
var swiper = new Swiper(".blog-slider", {
	loop:true,
	navigation: {
		nextEl: ".prev-btn-1",
		prevEl: ".next-btn-1",
	},
	autoplay: {
		delay: 3000,
	}
});
	
// TESTIMONIAL SLIDER
var swiper = new Swiper(".testmonial-slider", {
	loop:true,
	navigation: {
		nextEl: ".prev-btn-2",
		prevEl: ".next-btn-2",
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});


var swiper = new Swiper(".team-slider", {
	slidesPerView: 4,
	loop: true,
	spaceBetween: 20,
	freeMode: true,
	navigation: {
		nextEl: ".prev-btn-3",
		prevEl: ".next-btn-3",
	},
	autoplay: {
		delay: 3000,
	},
	breakpoints: {
		250: {
			slidesPerView: 1,
		},
		575: {
			slidesPerView: 2,
		},
		768	: {
			slidesPerView: 3,
		},
		991: {
			slidesPerView: 4,
		},
	},
});


var swiper = new Swiper(".product-detail-slide", {
	spaceBetween: 10,
	slidesPerView: 4,
	loop: true,
	watchSlidesProgress: true,
});
var swiper2 = new Swiper(".product-detail-slide-2", {
	spaceBetween: 10,
	loop: true,
	thumbs: {
		swiper: swiper,
	},
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});

// LOGIN SIGNUP FORM
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const login_wrap = document.getElementById('login-modal-wrap');

signUpButton.addEventListener('click', () => {
	login_wrap.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	login_wrap.classList.remove("right-panel-active");
});


// CATEGORIES TOGGLE
$(document).ready(function(){
	$(".category-list-item").click(function(e){
		$(this).toggleClass("active");
		$(this).find(".abs-tab-body").toggleClass("active");
		e.stopPropagation();
	});
	$(".category-list-item .abs-tab-body").click(function(e){
		e.stopPropagation();
	});

	$(".header-general-navs .login-btn, .header-general-navs .side-cart-toggle").click(function(){
		$(".category-list-item").removeClass("active");
		$(".category-list-item .abs-tab-body").removeClass("active");
		$(".category-box").removeClass("active");
		$("body").removeClass("body-fixed")
	});
	$(".categoy-btn").click(function(){
		$(".category-box").toggleClass("active");
		$("body").toggleClass("body-fixed");
	});
});	