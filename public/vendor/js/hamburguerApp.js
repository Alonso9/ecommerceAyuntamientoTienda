const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');
// const map = document.getElementById('mapa');

hamburger.addEventListener('click', () =>{
	navLinks.classList.toggle("open");
	links.forEach(link => {
		link.classList.toggle("fade");
		// map.style.visibility = 'hidden';
		// map.style.display = 'none';
	});
});




// console.log(map)position:absolute;