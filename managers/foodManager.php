<?php
    class foodmanager{
        public static function select(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM food");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
        public static function insert(){
            global $con;

        }
        public static function update(){
            global $con;

        }
    }
