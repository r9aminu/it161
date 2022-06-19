const options = document.querySelector('.header .nav-bar .nav-menu .options');
const mobile_menu = document.querySelector('.header .nav-bar .nav-menu ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-menu ul li a');
const header = document.querySelector('.header.div');

options.addEventListener('click', () => {
	options.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		options.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});


