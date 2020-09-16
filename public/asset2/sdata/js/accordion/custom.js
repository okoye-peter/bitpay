	/* ---------------------------------------------------------------------- */
	/*	Accordion
	/* ---------------------------------------------------------------------- */
	
	(function() {

		var $container = $('.acc-container'),
			$trigger   = $('.acc-trigger');
		
		var $container02 = $('.acc-container02'),
			$trigger02   = $('.acc-trigger02');
			
		$container.hide();
		$trigger.first().addClass('active').next().show();
		
		$container02.hide();
		$trigger02.first().addClass('active').next().show();
		
		var fullWidth = $container.outerWidth(true);
		$trigger.css('width', fullWidth);
		$container.css('width', fullWidth);
		
		var fullWidth = $container02.outerWidth(true);
		$trigger02.css('width', fullWidth);
		$container02.css('width', fullWidth);
		
		$trigger.on('click', function(e) {
			if( $(this).next().is(':hidden') ) {
				$trigger.removeClass('active').next().slideUp(300);
				$(this).toggleClass('active').next().slideDown(300);
			}
			e.preventDefault();
		});
		
		$trigger02.on('click', function(e) {
			if( $(this).next().is(':hidden') ) {
				$trigger02.removeClass('active').next().slideUp(300);
				$(this).toggleClass('active').next().slideDown(300);
			}
			e.preventDefault();
		});

		// Resize
		$(window).on('resize', function() {
			fullWidth = $container.outerWidth(true)
			$trigger.css('width', $trigger.parent().width() );
			$container.css('width', $container.parent().width() );
			$trigger02.css('width', $trigger.parent().width() );
			$container02.css('width', $container.parent().width() );
		});

	})();