<html>
	<head>
		<!-- CSS FILES -->
		<?php $this->load->view('common/css/css_files_includes.php'); ?>
	</head>
	<body>
		
		<?php 
			if($this->uri->segment(1) == "") {
				$this->load->view('guest/home_content.php');
			}
		 ?>

        <!-- JS FILES  -->
		<?php $this->load->view('common/js/js_files_includes.php'); ?>
	</body>
</html>
