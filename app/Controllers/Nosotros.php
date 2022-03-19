<?php

namespace App\Controllers;

class Nosotros extends BaseController {

    public function index() {
		$data['contenido'] = 'nosotros';
        return view('template', $data);
    }

}
