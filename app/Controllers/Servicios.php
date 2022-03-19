<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
		$data['contenido'] = 'servicios';
        return view('template', $data);
    }

    public function sueldos() {
		$data['contenido'] = 'sueldos';
        return view('template', $data);
    }

    public function institucional() {
		$data['contenido'] = 'institucional';
        return view('template', $data);
    }

    public function sistema() {
		$data['contenido'] = 'sistema';
        return view('template', $data);
    }

    public function soporte() {
		$data['contenido'] = 'soporte';
        return view('template', $data);
    }

}
