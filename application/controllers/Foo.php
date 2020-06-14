<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foo extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function bar(){
		echo password_hash('su_alurr', PASSWORD_DEFAULT);
	}
	public function tested(){
		$optionData = [
	      [
	        'value'=>'p-aktif',
	        'wording'=>'Produk Aktif',
	        'selectedStatus'=> ''
	      ],
	      [
	        'value'=>'p-nonaktif',
	        'wording'=>'Produk Non Aktif',
	        'selectedStatus'=> 'selected'
	      ],
	      [
	        'value'=>'l-aktif',
	        'wording'=>'Laporan Aktif',
	        'selectedStatus'=> ''
	      ],
	      [
	        'value'=>'l-nonaktif',
	        'wording'=>'Laporan Non Aktif',
	        'selectedStatus'=> ''
	      ]
    	];

    	$hasSelectedStatus=array_reduce($optionData, function($carry,$item){
    		if($carry) return true;

    		return $item['selectedStatus'] == 'selected' ;
    	},false);
	
		var_dump($hasSelectedStatus);
		exit;    	
    	// var_dump(in_array('p-nonaktif', $optionData));
    	// exit;
	}

}