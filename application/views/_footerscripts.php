<script src="<?php echo base_url(); ?>webassets/js/main.min.js"></script>
	<script src="<?php echo base_url(); ?>webassets/js/backgroundVideo.js"></script>
	<script src="<?php echo base_url(); ?>webassets/js/strip.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>webassets/js/script.js"></script>
	
	<script>
		jQuery(window).on('load',function() {
			"use strict";
			// video parallax for top featured
			const backgroundVideo = new BackgroundVideo('.bv-video', {
			  src: [
				'<?php echo base_url(); ?>webassets/videos/video3.MP4',
			  ]
			});
		});
			
	</script>