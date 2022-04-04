<?php

namespace App\Controllers;

class Nosotros extends BaseController {

    public function index() {
		$data['contenido'] = 'nosotros';
		$data['hero'] = false;
        return view('template', $data);
    }

}
