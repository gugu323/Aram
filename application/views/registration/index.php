<?php


$data['title'] = "Registration";

$this->load->view('/templates/header', $data);

$this->load->view('/templates/start_content', $data);
$this->load->view('/home/lol_logo_div', $data);
$this->load->view('/registration/marketingContent', $data);
$this->load->view('/forms/registration_form', $data);
$this->load->view('/templates/stop_content', $data);
$this->load->view('/templates/footer', $data);
