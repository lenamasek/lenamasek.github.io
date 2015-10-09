$(document).ready(function() {
	
	var scrollContainer = $('#scroll-container');
	var lightBox = $('.lightbox');

	var lightBoxImage = $('#lightbox-image')[0];
	var lightBoxQuit = $('.lightbox-close')[0];
	var lightBoxArrowLeft = $('.lightbox-arrow-left')[0];
	var lightBoxArrowRight = $('.lightbox-arrow-right')[0];

	var allImages = $('.gallery-item');
	var currentGalleryIndex = 0;

	var lightboxActive = false;

	//smooth scroll on local links
	$(document).on('click', '.local-link', function(e){
		var target = $(this.hash);
		$('html,body').animate({
			scrollTop: target.offset().top
		}, 500);
		return false;
	});

	$(document).on('click', '.gallery-item', function(e){
		var imgElement = $(this).children('#gallery-image')[0];
		currentGalleryIndex = $(allImages).index(this);

		$(lightBoxImage).attr('src', $(imgElement).attr('src'));

		showLightBox(true);
	});

	$(document).keydown(function(e){
		if(lightboxActive){
			if(e.keyCode === 37){ //left
				gotoPreviousImage();
			} else if(e.keyCode === 39){ // right
				gotoNextImage();
			}
			else if(e.keyCode === 27){
				showLightBox(false);
			}
		}
	});

	$(lightBox).on('click', function(e){
		var clickTarget = e.target;

		var prevGalleryIndex = currentGalleryIndex;

		if(clickTarget === lightBoxImage){
			//goto next image
			gotoNextImage();
		} else {
			if(clickTarget === lightBoxArrowLeft){
				//goto previous image
				gotoPreviousImage();

			} else if(clickTarget === lightBoxArrowRight){
				//goto next image
				gotoNextImage();
			} else {
				//close lightbox
				showLightBox(false);
			}
		}
	});

	var gotoNextImage = function(){
		currentGalleryIndex = (currentGalleryIndex + 1) % allImages.length;

		var imgElement = $($(allImages).get(currentGalleryIndex)).children('#gallery-image')[0];
		$(lightBoxImage).attr('src', $(imgElement).attr('src'));
	}

	var gotoPreviousImage = function(){
		currentGalleryIndex -= 1;
		if(currentGalleryIndex < 0)
			currentGalleryIndex = allImages.length - 1;
		
		var imgElement = $($(allImages).get(currentGalleryIndex)).children('#gallery-image')[0];
		$(lightBoxImage).attr('src', $(imgElement).attr('src'));
	}

	var showLightBox = function(show){
		if(show){
			$(lightBox).css('visibility', 'visible');
			$(scrollContainer).addClass("unscrollable");
			
			lightboxActive = true;
		} else {
			$(lightBox).css('visibility', 'hidden');
			$(scrollContainer).removeClass("unscrollable");

			lightboxActive = false;
		}
	}
});