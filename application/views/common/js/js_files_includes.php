
<!-- JQUERY -->
<script src="<?php echo base_url();?>public/js/jquery-2.2.3.min.js"></script>

<!-- BOOTSTRAP -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>

<script>
	
	// TOOLTIP
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
		$(document).on('hover', '[rel=tooltip]', function () { $(this).tooltip('show'); });
		$(document).on('focus', '[rel=tooltip]', function () { $(this).tooltip('show'); });
	})
	// END OF TOOLTIP

	// POPOVER
	$(function () {
	  	$('[data-toggle="popover"]').popover()
	})
	// END OF POPOVER

	
</script>