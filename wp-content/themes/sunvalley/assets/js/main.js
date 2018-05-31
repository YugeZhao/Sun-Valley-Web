( function( $ ) {

//$(this).makeBackground();
//Barba.Pjax.Dom.containerClass = "main-container";
//Barba.Pjax.Dom.wrapperId = "page-content";
//Barba.Prefetch.init();

//Barba.Pjax.start();
	$(document).ready(function(){
		$(".popup").iziModal({
			width: 1000,
			overlayColor: 'rgba(0, 0, 0, 0.8)',
			transitionIn: 'fadeInDown',
			transitionOut: 'fadeOutUp',
			zindex: 9999,
			closeButton: false
		});
		/* SUBMIT RFP MODAL */
		$("#rfp-modal").iziModal({
			width: 1000,
			overlayColor: 'rgba(0, 0, 0, 0.8)',
			transitionIn: 'fadeInDown',
			transitionOut: 'fadeOutUp',
			zindex: 9999,
			closeButton: false
		});

		$(".popup-close").on("click",function(){
			var popup = $(this).parents(".popup");
			$(popup).iziModal("close");
		});
		$(".hex.pop").on("click", function(){
			var id = $(this).data("popup");
			var popup = $('.popup[data-popup='+id+']');
			$(popup).iziModal('open');
		});
		$(".hex.link").on("click", function(){
			window.location.replace($(this).data("link"));
		});
		$(".submit-rfp").on("click",function(){
			$("#rfp-modal").iziModal("open");
		});

		$(this).sideMenu();
		$(this).toggleSubMenu();
		$(this).toggleFocusedProblemsSubMenu();
	});

	$(this).stickyHeader();
	

} )( jQuery );
