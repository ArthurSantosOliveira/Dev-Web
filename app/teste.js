const carousel = document.querySelector('.carousel');
		const imgs = carousel.querySelectorAll('img');
		const prevBtn = carousel.querySelector('.prev');
		const nextBtn = carousel.querySelector('.next');
		let currentIndex = 0;
		let imgWidth = imgs[0].clientWidth;

		function slide() {
			carousel.style.transform = `translateX(${-imgWidth * currentIndex}px)`;
		}

		function nextSlide() {
			currentIndex++;
			if (currentIndex > imgs.length - 1) {
				currentIndex = 0;
			}
			slide();
		}

		function prevSlide() {
			currentIndex--;
			if (currentIndex < 0) {
				currentIndex = imgs.length - 1;
			}
			slide();
		}

		nextBtn.addEventListener('click', nextSlide);
		prevBtn.addEventListener('click', prevSlide);

		setInterval(() => {
			nextSlide();
		}, 3000);