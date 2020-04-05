<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fabelio_model extends CI_Model
{
	public function insertData($data)
	{
		$listData = [
			'name' => $data->name,
			'product_id' => $data->product_id,
			'unit_price' => $data->unit_price,
			'unit_sale_price' => $data->unit_sale_price,
			'url' => $data->url,
			'product_image_url' => $data->product_image_url,
			'created_at' => date('Y-m-d H:i:s')
		];
		
		if ($this->db->insert('fabelio', $listData)) {
            return $this->db->insert_id();
        }else {
            return false;
        }
	}

	public function getList()
	{
		$this->db->order_by('fabelio.created_at', 'DESC');
        $query = $this->db->get('fabelio');
        return $query->result();
	}

	public function getListCron()
	{
		$this->db->distinct();
		$this->db->select('product_id');
		$query = $this->db->get('fabelio');
        return $query->result();
	}

	public function updateData($data)
	{
		$listData = [
			'name' => $data->name,
			'unit_price' => $data->unit_price,
			'unit_sale_price' => $data->unit_sale_price,
			'url' => $data->url,
			'product_image_url' => $data->product_image_url,
			'updated_at' => date('Y-m-d H:i:s')
		];
		
		$this->db->where('product_id', $data->product_id);
        return $this->db->update('fabelio', $listData);
	}

	public function getDataById($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('fabelio');
        return $query->row();
	}
}