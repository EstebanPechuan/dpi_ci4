<?php

namespace App\Controllers;

class Departamentos extends BaseController {

    public function index() {
		$data['contenido'] = 'departamentos/sueldos';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function sueldos() {
		$data['contenido'] = 'departamentos/sueldos';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function interoperabilidad() {
		$data['contenido'] = 'departamentos/interoperabilidad';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function sistemas() {
		$data['contenido'] = 'departamentos/sistemas';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function soporte() {
		$data['contenido'] = 'departamentos/soporte';
		$data['hero'] = false;
        return view('template', $data);
    }

}
