<?php

namespace App\Controllers;

class Contacto extends BaseController {

    public function index() {
		$data['contenido'] = 'contacto';
        return view('template', $data);
    }

}
