<?php namespace EAPIIS\Core;
	
	use EAPIIS\Config\VariablesGlobales;

    class HelpersView
    {
        
        /*		BRINDA EL URL PARA LAS VISTAS 		*/
        
        public function url($controlador = "", $accion = "", $param = "")
        {
            $controlador = $controlador == "" ? VariablesGlobales::$controlador_defecto : $controlador;
            $accion      = $accion == "" ?VariablesGlobales::$accion_defecto : $accion;
            
            if(isset($param) && $param != "")
                $urlString = "index.php?controller=" . $controlador . "&action=" . $accion . "&args=" . $param;
            else 
                $urlString = "index.php?controller=" . $controlador . "&action=" . $accion ;

            return $urlString;
        }
        
        /*	**	*/

        /*        MENU         */
        
        public function menu_header()
        {
            return '<header id="cabezera">
                <div class="grupo">
                    <div class="caja centrar-contenido">
                        <h1><span>GESTIÓN</span> <span>ACADÉMICA</span></h1>
                    </div>
                </div>
            </header>

            <nav id="menu">
                <div class="grupo">
                    <div class="caja tablet-20 centrar-contenido no-padding"><a href="'.$this->url('alumno','gestion').'" class="menu__item first">Alumnos</a></div>
                    <div class="caja tablet-20 centrar-contenido no-padding"><a href="'.$this->url('curso','gestion').'" class="menu__item">Cursos</a></div>
                    <div class="caja tablet-20 centrar-contenido no-padding"><a href="'.$this->url('profesor','gestion').'" class="menu__item">Profesores</a></div>
                    <div class="caja tablet-20 centrar-contenido no-padding"><a href="'.$this->url('matricula','gestion').'" class="menu__item">Matricula</a></div>
                    <div class="caja tablet-20 centrar-contenido no-padding"><a href="'.$this->url('horario','gestion').'" class="menu__item">Horario</a></div>
                </div>
            </nav>'; 
        }
        
        /*    **    */

        /*        PIE         */
        
        public function pie()
        {
            return '<footer id="pie">
            <div class="grupo">
                <div class="tablet-70 caja icon-usuario espacio"><span class="item__pie">Robert BJ Huamán Cáceres</span></div>
                <div class="tablet-15 caja centrar-contenido"><a class="item__pie icon-telefono espacio">946709007</a></div>
                <div class="tablet-5 caja centrar-contenido"><a class="item__pie social icon-facebook" href="https://www.facebook.com/rbjpepo" target="_blank"></a></div>
                <div class="tablet-5 caja centrar-contenido"><a class="item__pie social icon-twitter" href="https://twitter.com/BJPepO" target="_blank"></a></div>
                <div class="tablet-5 caja centrar-contenido"><a class="item__pie social icon-github" href="https://github.com/PepoBJ" target="_blank"></a></div>
            </div>
        </footer>';
        }
        
        /*    **    */

        /*        EAPIIS FAVICON         */
        
        public function favicon()
        {
            $protocol      = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $domainName    = $_SERVER['HTTP_HOST'].'/';
            $host_protocol = $protocol.$domainName;

            return '<link rel="shortcut icon" href="' . $host_protocol . 'proyecto/public/favicon.ico" />
            <link rel="icon" type="image/png" href="' . $host_protocol . 'img/logo.png" />';
        }
        
        /*    **    */

        /*        LINKER CSS         */
        
        public function css($css_name)
        {
            return "<link rel='stylesheet' href='css/$css_name.css'>";
        }
        
        /*    **    */

        /*        LINKER JS         */
        
        public function js($js_name)
        {
            return "<script src='js/$js_name.js'></script>";
        }
        
        /*    **    */

        /*        CONVERT FECHA AMIGABLE         */
        
        public function fecha_amigable($fecha)
        {
            $meses = array( 
                1  => 'Enero',
                2  => 'Febrero',
                3  => 'Marzo',
                4  => 'Abril',
                5  => 'Mayo',
                6  => 'Junio',
                7  => 'Julio',
                8  => 'Agosto',
                9  => 'Setiembre',
                10 => 'Octubre',
                11 => 'Noviembre',
                12 => 'Diciembre',
            );
            //intval
            $date_time = explode(" ", $fecha);
            $date      = explode('-', $date_time[0]);
            $time      = explode(':', $date_time[1]);
            
            return $date[2] . ' de ' . $meses[intval($date[1])] . ' del ' . $date[0] . ' ' . $time[0] . ':' . $time[1];
        }
        
        /*    **    */

        //Helpers para las vistas
    }

/*		FIN CLASS HELPERS PARA LA VISTA		*/
