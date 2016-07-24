
<?php 
	if($this->uri->segment(1) == "") {
		$this->load->view('guest/home_content.php');
	}
?>