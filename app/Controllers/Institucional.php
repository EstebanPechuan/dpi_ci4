<?php

namespace App\Controllers;

class Institucional extends BaseController {

    public function index() {
		$data['contenido'] = 'institucional';
        return view('template', $data);
    }

}
