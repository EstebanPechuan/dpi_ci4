<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
		$data['contenido'] = 'servicios';
        $data['hero'] = false;
        return view('template', $data);
    }

    public function sistemas() {
		$data['contenido'] = 'servicios/sistemas';
        $data['hero'] = false;
        return view('template', $data);
    }

    public function aplicaciones() {
		$data['contenido'] = 'servicios/aplicaciones';
        $data['filtros2'] = ['Soporte','Principal (Core)'];
        $data['filtros1'] = ['Coordinación de Diseño',
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
        $data['table'] = [
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión de Seguridad',
                'alcance' => 'Carga digital de: Registros (Denuncias, Efectos  denunciados, Form. de Violencia Familiar, Exposiciones, Actuaciones Preliminares, Expedientes Contravencionales, Aprehensiones, Depósito Judicial )
                Vinculación con: Sistema de Digitalización de Juzgado de Faltas, Antecedentes y Pedido de Captura. 
                - Registro digital de Novedades (Diario de Guardia). 
                - Georeferenciación de hechos delictivos
                - Gestión de Pedidos de Pericia e Informes a la División Criminalística. 
                - Generación de informes en el Dpto. Planeamiento.
                - Derivación de registros a la dependencia correspondiente.',
                'sistema'=> 'SIIS'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Documentos',
                'alcance' => 'Colaboración y Cloud Interno',
                'sistema'=> 'Owncloud/NextCloud'
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión de la Demanda',
                'alcance' => 'Control de Productos de Origen Animal',
                'sistema'=> 'SICPOA - Sistema Integrado de Control de Productos de Origen Animal'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gobierno Abierto',
                'alcance' => 'Equipo y gestión de aplicaciones móviles orientada a desarrollar de forma unificada las funcionalidades de gobierno sobre tecnologías estándar. El concepto consiste en ofrecer a la repartición es que no necesiten aplicaciones orientadas verticalmente pero que puedan ser aglomeradas en una aplicación de gobierno centralizada de esa manera celebraría una mejor accesibilidad todos los servicios',
                'sistema'=> 'GA APPs'
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión de Datos Espaciales',
                'alcance' => 'Fomentar el intercambio de información territorial respetando competencias de los organismos involucrados, conforme su marco normativo.
                Definir lineamientos y estrategias para apoyar a los distintos organismos en el desarrollo de información espacial relacionada con la UNIDE teniendo en cuenta las necesidades de cada uno.
                Transparentar y democratizar la información georreferenciada.
                Agosto de 2017 la IDE para San Juan esté operativa y funcional.',
                'sistema'=> 'UNIDE'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Ciberseguridad',
                'alcance' => 'Gestión de Contraseñas',
                'sistema'=> 'Passbolt'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión Financiera',
                'alcance' => 'Gestión de procedimientos e información financiera, y brinda información en
                línea sobre el presupuesto, la tesorería y los subsistemas contables, al mismo tiempo que facilita
                la generación oportuna de informes confiables sobre la ejecución presupuestaria. ',
                'sistema'=> 'SIIF - Sistema Integrado de Información Financiera'
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión de Eventos',
                'alcance' => 'Gestión y correlación de logs',
                'sistema'=> 'Graylog Grafana'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Proyectos de Tecnología',
                'alcance' => 'Herramienta de gestión de proyectos estándar agnóstica con la posibilidad de personalizar la con metodologías de gestión o utilizarla para gestionar incidencias o peticiones a distintas áreas. actualmente está disponible para todas las reparticiones a través de redmine.sanjuan. gov. ar',
                'sistema'=> 'Redmine'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Ciberseguridad',
                'alcance' => 'Herramienta intra gobierno para automatizar las tareas de gestión de dominios y subdominios certificados https y enlace entre servidores teniendo de frente servidor Proxy que permite canalizar en una sola IP pública y privada todos los portales y sus portales y facilitando la visibilidad intranet y externa. sobre la misma plataforma está montado un servicio nodejs que recibe peticiones con parámetros y las redirige con el mismo mecanismo hacia las distintas bases de datos. simulando una especie de Proxy de web services con controles de seguridad, utilizando otro servidor con acceso a las bases. Es usado para inyectar consultas a redmine desde los portales o para consultar expedientes por ejemplo.',
                'sistema'=> 'Proyecto SYRAH'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Identidades',
                'alcance' => 'Historia clínica digital',
                'sistema'=> 'ANDES'
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Reporte y Mejora Continua',
                'alcance' => 'Inteligencia de Negocios',
                'sistema'=> 'Knowage'
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión de Incidentes',
                'alcance' => 'Mesa de Ayuda - Gestión de Incidentes, Problemas y Cambios',
                'sistema'=> 'GLPI'
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión de Disponibilidad',
                'alcance' => 'Monitoreo de performance y disponibilidad de componentes y Sistemas',
                'sistema'=> 'Zabbix'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Identidades',
                'alcance' => 'Padrón único de entidades físicas (registro civil) y jurídicas (igpj, dirección de cooperativas, dirección de mutualidades, dirección de culto y ong, Registro Público de Comercio (Poder Judicial)). Proveer información certera y actualizada de personas a todos los sistemas de la Administración Pública que lo requieran.',
                'sistema'=> 'SIPE'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gobierno Abierto',
                'alcance' => 'Portales sanjuan.gov.ar',
                'sistema'=> 'Portales sanjuan.gov.ar'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Integraciones',
                'alcance' => 'Proyecto de interoperabilidad entre sistemas cuyo concepto Central es intentar modificar lo menos posible los sistemas Y lograr lo máximo posible de integración en una capa de servicios a nivel de aplicaciones. perfeccionando el uso de estándares en autenticación y utilización de servicios y en la metodología de creación de los mismos. sinovial la flexibilidad de adaptarse a los clientes ya que somos conscientes de que hay una distribución tecnológica importante a la que hay que dar soporte de integración. en este proyecto el gran esfuerzo es la definición de objetos de negocio y de reglas intrasistemas y luego la aplicación dentro de una plataforma a nivel mundial de Oracle por lo que no implica desarrollos alentandonos a un crecimiento más veloz y estándar.',
                'sistema'=> 'SOA'
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión de Seguridad',
                'alcance' => 'Realizar un fork del sistema utilizado en Patronato y adaptarlo a las necesidades de la Oficina de Medidas alternativas y Sustitutivas de Flagrancia. Utilizar una base de datos única que soporte las nuevas necesidades. Actualizar el sistema de Patronato para utilizar la nueva base de datos. Repetir para Servicio Penitenciario Provincial y Juzgados Provinciales',
                'sistema'=> 'HALCON'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Ciberseguridad',
                'alcance' => 'Security Information and Event Management (SIEM)',
                'sistema'=> 'Wazuh'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Activos',
                'alcance' => 'Sistema de Gestión de Activos',
                'sistema'=> 'CONSUMAN'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Documentos',
                'alcance' => 'Sistema de Gestión Documental (Seguimiento de expedientes)',
                'sistema'=> 'SIGED - Sistema Integrado de Gestión Documental'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión Educativa',
                'alcance' => 'Sistema de Gestión Educativa. Administración de Ministerio, Establecimientos, Junta de Clasificación y Soporte de Liquidación de Haberes. ',
                'sistema'=> 'SIGE - Sistema de Gestión Educativa'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Capital Humano',
                'alcance' => 'Sistema Integrado de Recursos Humanos. Gestión de Legajos y todo lo que refiere a la trazabilidad de los agentes del estado impactando en la Liquidación de Haberes. Administración de Legajos y armas policiales. Gestión de adicionales de la Policía de San Juan.',
                'sistema'=> 'SIARH - Sistema Integrado de Administración de Recursos Humanos'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Vivienda',
                'alcance' => 'Sistema integral de la operatoria del IPV. Desde la inscripción en la operatoria hasta la escrituración de la casa.
                Integración al SIIF permitiendo una registración financiera y contable de la obra. 
                Integración al SIGOP, permitiendo un seguimiento completo del proceso de ejecución de la obra. 
                Migración de datos históricos para confección de la Base de Datos del IPV. ',
                'sistema'=> 'IPV - Sistema Integrado del Instituto Provincial de la Vivienda'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de la Obra Pública',
                'alcance' => 'Sistema integral que permita realizar un seguimiento completo de todo de la obra pública  desde el proyecto, adjudicación, ejecución y su registración patrimonial.
                Integración al SIIF permitiendo una registración financiera y contable de la obra. 
                Supervisar la carga de datos histórica para la confección de la Base de Datos de obras activas.',
                'sistema'=> 'SIGOP - Sistema Integrado de Obra Pública'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gobierno Abierto',
                'alcance' => 'Sitio de publicación de set de datos estándar a nivel mundial basados en la iniciativa CKan. Está inspirado en los pilares de gobierno abierto. orientado a que el ciudadano puede acceder de manera contemporánea a datos oficiales y válidos.',
                'sistema'=> ''
            ],
            [
                'tipo' => 'Soporte',
                'proceso' => 'Gestión del Conocimiento',
                'alcance' => 'Videoconferencia Segura',
                'sistema'=> 'Jitsi'
            ],
            [
                'tipo' => 'Principal (Core)',
                'proceso' => 'Gestión de Identidades',
                'alcance' => 'Sistema de Gestión de Registro Civil',
                'sistema'=> 'RC Digital'
            ]
        ];
        $data['hero'] = false;
        return view('template', $data);
    }

}
