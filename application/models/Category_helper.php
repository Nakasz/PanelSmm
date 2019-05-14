<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_helper extends CI_Model
{
    public function get_category()
    {
        $query = "SELECT `services`.*,`categories`.`name`
                FROM `services` JOIN `categories`
                ON `services`.`category_id`=`categories`.`id`
        ";
        return $this->db->query($query)->result_array();
    }
    public function service($id)
    {
        $service = $this->db->get_where('services',['category_id'=>$id])->result_array();
        if ($service == 0) {
		 $tampilkan = print('<option value="0">Layanan tidak ditemukan...</option>');
    	} else {
    		$tampilkan = print('<option value="0">Pilih...</option>');
    		if ($service == 1) {
    			$tampilkan = print('<option value="'.$service['id'].'">'.$service['service_name'].'</option>');
    		} else {
    			foreach ($service as $key) {
    			  $tampilkan = print('<option value="'.$key['id'].'">'.$key['service_name'].'</option>');
    			}
    		}
    	}
        return json_encode($tampilkan);
    }
    
    public function data_layanan($id){
        $service = $this->db->get_where('services',['id'=>$id])->result_array();
        if ($service == 0) {
			 $result = array(
			     'min' => '0', 
			     'max' => '0', 
			     'description' => 'Deskripsi layanan.', 
			     'price' => 2
			 );
		} else {
			 $result = array(
			    'min' => number_format($service['min'],0,',','.'), 
				'max' => number_format($service['max'],0,',','.'), 
				'description' => nl2br($service['note']), 
				'price' => $service['price']
			);
			
		}
		return print(json_encode($result));
    }
}