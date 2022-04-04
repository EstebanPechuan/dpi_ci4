<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
		$data['contenido'] = 'home';
		$data['hero'] = true;
        return view('template', $data);
    }

    // public function nosotros() {
	// 	$data['contenido'] = 'nosotros/nosotros';
	// 	$data['nombrePage'] = 'Esteban Pechuan';
    //     return view('template', $data);
    // }

}
