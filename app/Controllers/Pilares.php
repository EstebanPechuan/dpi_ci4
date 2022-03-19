<?php

namespace App\Controllers;

class Pilares extends BaseController {

    public function index() {
		$data['contenido'] = 'pilares_site';
        return view('template', $data);
    }

    public function innovacion() {
		$data['contenido'] = 'innovacion';
        return view('template', $data);
    }

    public function transparencia() {
		$data['contenido'] = 'transparencia';
        return view('template', $data);
    }

    public function colaboracion() {
		$data['contenido'] = 'colaboracion';
        return view('template', $data);
    }

    public function participacion() {
		$data['contenido'] = 'participacion';
        return view('template', $data);
    }

}
