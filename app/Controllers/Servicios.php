<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
		$data['contenido'] = 'servicios';
        return view('template', $data);
    }

    public function sistemas() {
		$data['contenido'] = 'servicios/sistemas';
        return view('template', $data);
    }

    public function aplicaciones() {
		$data['contenido'] = 'servicios/aplicaciones';
        $data['filtros2'] = ['Soporte','Principal (Core)'];
        $data['filtros1'] =['Coordinación de Diseño',
        'Desarrollo y personalización de aplicaciones',
        'Gestión de Accesos',
        'Gestión de Activos',
        'Gestión de Cambios',
        'Gestión de Capital Humano',
        'Gestión de Catálogo de Servicios',
        'Gestión de Ciberseguridad',
        'Gestión de Compras y Contratos',
        'Gestión de Continuidad del Servicio de TI (ITSCM)',
        'Gestión de Despliegue e Implementación',
        'Gestión de Disponibilidad',
        'Gestión de Documentos',
        'Gestión de Eventos',
        'Gestión de Identidades',
        'Gestión de Incidentes',
        'Gestión de Integraciones',
        'Gestión de la Capacidad',
        'Gestión de la Demanda',
        'Gestión de la Estrategia',
        'Gestión de la Obra Pública',
        'Gestión de Nivel de Servicio',
        'Gestión de Presupuesto',
        'Gestión de Problemas',
        'Gestión de Proveedores',
        'Gestión de Proyectos de Tecnología',
        'Gestión de Relaciones Comerciales',
        'Gestión de Requerimientos',
        'Gestión de Seguridad',
        'Gestión de Seguridad',
        'Gestión de Vivienda',
        'Gestión del Cambio & Comunicación',
        'Gestión del Catálogo de Servicios',
        'Gestión del Conocimiento',
        'Gestión Educativa',
        'Gestión Financiera',
        'Gestón de Datos Espaciales',
        'Gobierno Abierto',
        'Planificación y Soporte de Transición',
        'Reporte y Mejora Continua',
        'Servicio de Gestión de Activos y Configuración',
        'Servicio de Validación y Pruebas',
    ];
        return view('template', $data);


    }

    //  foreach ($data->campos as $reg) {
    //     if(!empty($reg->data)) {
    //         foreach ($reg->data as $key => $value) {
    //             if($key != 'url')
    //                 $col[] =  $key;
    //         }
    //     }
    //     break;
    // }


    

    // public function sistema() {
	// 	$data['contenido'] = 'sistema';
    //     return view('template', $data);
    // }

    // public function soporte() {
	// 	$data['contenido'] = 'soporte';
    //     return view('template', $data);
    // }

}
