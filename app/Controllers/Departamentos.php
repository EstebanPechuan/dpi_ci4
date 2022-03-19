<?php

namespace App\Controllers;

class Departamentos extends BaseController {

    public function index() {
		$data['contenido'] = 'sueldos';
        return view('template', $data);
    }

    public function sueldos() {
		$data['contenido'] = 'sueldos';
        return view('template', $data);
    }

    public function interoperabilidad() {
		$data['contenido'] = 'interoperabilidad';
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
