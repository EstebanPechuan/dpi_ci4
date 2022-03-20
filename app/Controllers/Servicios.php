<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
		$data['contenido'] = 'servicios';
        return view('template', $data);
    }

    public function sistemas() {
		$data['contenido'] = 'servicios/sistemas';
        return view('template', $data);
    }

    public function aplicaciones() {
		$data['contenido'] = 'servicios/aplicaciones';
        return view('template', $data);
    }

    // public function sistema() {
	// 	$data['contenido'] = 'sistema';
    //     return view('template', $data);
    // }

    // public function soporte() {
	// 	$data['contenido'] = 'soporte';
    //     return view('template', $data);
    // }

}
