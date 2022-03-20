<?php

namespace App\Controllers;

class Departamentos extends BaseController {

    public function index() {
		$data['contenido'] = 'departamentos/sueldos';
        return view('template', $data);
    }

    public function sueldos() {
		$data['contenido'] = 'departamentos/sueldos';
        return view('template', $data);
    }

    public function interoperabilidad() {
		$data['contenido'] = 'departamentos/interoperabilidad';
        return view('template', $data);
    }

    public function sistema() {
		$data['contenido'] = 'departamentos/sistema';
        return view('template', $data);
    }

    public function soporte() {
		$data['contenido'] = 'departamentos/soporte';
        return view('template', $data);
    }

}
