<?php

namespace App\Controllers;

class Contacto extends BaseController {

    public function index() {
		$data['contenido'] = 'contacto';
		$data['hero'] = false;
        return view('template', $data);
    }

}
