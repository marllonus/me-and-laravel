import './bootstrap';


document.addEventListener('DOMContentLoaded', function(){
	const toggle = document.querySelector('.toggle');
	toggle.addEventListener('click', function(e){
		e.preventDefault();

		let siblings = e.target.closest('.category')
			.parentNode
			.querySelectorAll(':scope > :not(.category)');
		for(const item of siblings)
			item.classList.remove('active')

		e.target.closest('.category').classList.toggle('active')
	});
});
