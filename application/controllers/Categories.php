<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function shirt()
	{
		$data['title'] = 'Shirt Categories';
		$data['shirt'] = $this->model_kategori->shirt()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('shirt', $data);
		$this->load->view('layout/home/footer');
	}

	public function jacket()
	{
		$data['title'] = 'Jacket Categories';
		$data['jacket'] = $this->model_kategori->jacket()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('jacket', $data);
		$this->load->view('layout/home/footer');
	}
}