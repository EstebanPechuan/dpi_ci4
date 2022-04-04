<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
		$data['contenido'] = 'servicios';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function sistemas() {
		$data['contenido'] = 'servicios/sistemas';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function aplicaciones() {
		$data['contenido'] = 'servicios/aplicaciones';
        $data['filtros1'] = ['Soporte','Principal (Core)'];
		$data['hero'] = false;
        return view('template', $data);


    }

    //  foreach ($data->campos as $reg) {
    //     if(!empty($reg->data)) {
    //         foreach ($reg->data as $key => $value) {
    //             if($key != 'url')
    //                 $col[] =  $key;
    //         }
    //     }
    //     break;
    // }


    

    // public function sistema() {
	// 	$data['contenido'] = 'sistema';
    //     return view('template', $data);
    // }

    // public function soporte() {
	// 	$data['contenido'] = 'soporte';
    //     return view('template', $data);
    // }

}
