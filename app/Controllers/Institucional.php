<?php

namespace App\Controllers;

class Institucional extends BaseController {

    public function index() {
		$data['contenido'] = 'institucional';
		$data['hero'] = false;
        return view('template', $data);
    }

}
