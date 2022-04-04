<?php

namespace App\Controllers;

class Pilares extends BaseController {

    public function index() {
		$data['contenido'] = 'pilares_site';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function innovacion() {
		$data['contenido'] = 'innovacion';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function transparencia() {
		$data['contenido'] = 'transparencia';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function colaboracion() {
		$data['contenido'] = 'colaboracion';
		$data['hero'] = false;
        return view('template', $data);
    }

    public function participacion() {
		$data['contenido'] = 'participacion';
		$data['hero'] = false;
        return view('template', $data);
    }

}
