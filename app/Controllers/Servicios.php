<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
		$data['contenido'] = 'servicios';
        return view('template', $data);
    }

}
