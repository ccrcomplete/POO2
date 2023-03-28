<?php
    class Loguin{

        public $array = [
            "name" => "juan",
            "password" => "123"
        ];

        public $user= "";
        public $password= "";
        public $usu="juand@gmail.com";
        public $pass = "123";
        public $cadena = "true";
        public $cadena2 = "false";

        function entrarDatos($variable1, $variable2){
            $this->user = $variable1;
            $this->password = $variable2;
        }

        function loguear(){
            $us = $this -> usu;
            $ps = $this -> pass;

            $us1 = $this -> user;
            $pass = $this -> password;

            if(($us === $us1) && ($ps === $pass)){
                return $this -> cadena;
            }
            else {
                return $this -> cadena2;
            }
        }


    }

    class lista{
        public $array = [
            "dashboard" => array(
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/tablero2.png' width='35' height='35'><b>ㅤProduct</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/list.png' width='35' height='35'><b>ㅤOrder list</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/analyct.png' width='35' height='35'><b>ㅤAnalytics</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/box.png' width='35' h'ight='35'><b>ㅤStock</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/todos.png' width='35' height='35'><b>ㅤTotal order</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/interesado.png' width='35' height='35'><b>ㅤTeam</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/charla.png' width='35' height='35'><b>ㅤMessages</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/favorito.png' width='35' height='35'><b>ㅤFavorites</b></a>",
                "<a href='#' class='list-group-item navbarList text-light'><img src='img/config.png' width='35' height='35'><b>ㅤSetting</b></a>",
               
                
                "<a href='#' class='list-group-item navbarList text-light pt-5'><img src='img/log-out.png' width='35' height='35'><b>ㅤLog out</b></a>"
            )
            ];

            function listaDash(){
                $lista = $this -> array["dashboard"];
                for($i = 0; $i <= 10; $i++){
                    echo "$lista[$i]";
                }
            }
    }


?>