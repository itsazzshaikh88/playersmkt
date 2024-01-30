<?php

$this->load->view('partials/__header');
if (isset($view_path))
	$this->load->view($view_path);
$this->load->view('partials/__footer');
