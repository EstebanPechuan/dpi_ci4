<main>
    <?php
        $clase['menu_activo'] = 'sistemas';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Sevicios / Sistemas</h3>
            <p>Desde la Dirección Provicial de Informática brindamos el sevicio de analizar, diseñar, desarrolar sistemas informáticos transversales y verticales del Gobierono de la Provincia de San Juan.</p>
        </div>
    </section>


    <!-- let flecha = document.createElement('div')
    flecha.setAttribute('class', 'flecha-ver-mas')

    flecha.innerText = 'hola'

    item.appendChild(flecha) -->


    <section class="depto-servicios">
        <div class="tabla-servicios">
            <div class="cada-servicio">
                <div class="serv-nombre">Servicio / Aplicación</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>
            
            <div class="cada-servicio">
                <div class="serv-nombre">SIIF</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Gestión de procedimientos e información financiera</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">SIGED</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema de Gestión Documental (Seguimiento de expedientes)</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">SIPE</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Gestión de procedimientos e información financiera, y brinda información en línea sobre el presupuesto, la tesorería y los subsistemas contables, al mismo tiempo que facilita la generación oportuna de informes confiables sobre la ejecución presupuestaria.</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">SIARH</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema integrado de las personas jurídicas y el registro civil</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">IPV</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema Integrado de Administración de Recursos Humanos</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">SIGOP</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema de Gestión Instituto Provincial de la Vivienda</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">COMPRAS PÚBLICAS</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div></div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">SUELDOS</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema de carga de novedades y liquidación de sueldos</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">SIIS</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema Integral Informático de Seguridad ( carga digital de sumarios; efectos denunciados, personas desaparecidas, formulario de violencia familiar, exposiciones, actuaciones preliminares, expedientes contravencionales, aprehensiones, depósito judicial)</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">UNIDE</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Unidad de Infraestructura de Datos Espaciales. Garantiza la generación, el acceso y la distribución de datos e información georreferenciada confiable en todo el territorio provincial</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">SUSIP</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema Único de Seguimiento Integral de Personas</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">RCDIGITAL</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Registro Civil</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">RUNMEPI</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Registro Único Nominal de Medidas de Protección Integral. Permite contar con información actualizada y en tiempo real de las acciones que se desarrolla con cada niño y adolescente, favoreciendo la comunicación e intercambio entre los equipos, contribuyendo a mejorar las prácticas y agilizar los procedimientos a la vez que brinda datos estadísticos de valor para la construcción de la política pública.</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">ANDES</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Plataforma digital orientada a pacientes y miembros de equipos de salud. Permite acceder y gestionar datos de salud de manera ágil y segura.</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">DIGESTO JURIDICO</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div></div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">DIGESTO ADMIN.</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div></div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">TURNERO</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema de Gestión Documental (Seguimiento de expedientes)</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">CIDI APP</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Aplicación móvil de autogestión que permite al ciudadano realizar de manera online, a través de una única cuenta personal, diversos trámites y servicios que brinda el Gobierno de la Provincia de San Juan</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">CIDI WEB</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sitio web de autogestión que permite al ciudadano realizar de manera online, a través de una única cuenta personal, diversos trámites y servicios que brinda el Gobierno de la Provincia de San Juan.</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">CONSUMAN</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema de gestión de activos físicos y mantenimiento</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">BI</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Sistema para inteligencia de negocios</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <div class="cada-servicio">
                <div class="serv-nombre">BPM</div>
                <div class="linea-vert"></div>
                <div class="serv-descripcion">
                    <div>Plataforma de Gestión de Procesos de Negocios (BPM)</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>
        </div>
    </section>
    

    <section class="links-utiles-servicios">
        <h3>Links Útiles</h3>

        <div class="link">
            <a href="#c">
                <h4>Formulario de GLPI</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>
    </section>

    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>