// Side bar

// Open
$('button.side-bar-toggler').on('click', () => {

	$('.side-bar-container').addClass('open')

})

// Close
$('.side-bar .close').on('click', function(){
	
	$(this).parent('.side-bar').parent('.side-bar-container').removeClass('open')

})

$('.category .sub-menu-opener').on('click', function(){

	const category = $(this).prev('a')

	const subCategory = $(this).parent('.category-name').next('.sub-category')

	// Run own elements action


	$(this).toggleClass('open')
	category.toggleClass('open')
	subCategory.toggleClass('open')
	

})