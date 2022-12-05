<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view("customer_panel/header"); ?>
<?php $this->load->view("customer_panel/sidebar"); ?>
<?php $this->load->view($page); ?>
<?php $this->load->view("customer_panel/footer"); ?>