<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{

	public function shirt()
	{
		return $this->db->get_where('product', array('kategori' => 'T-Shirt'));
	}

	public function jacket()
	{
		return $this->db->get_where('product', array('kategori' => 'Jacket'));
	}

}
