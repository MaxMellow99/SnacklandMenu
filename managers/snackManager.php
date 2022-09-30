<?php
    class snackmanager{
        public static function select(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM snack");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
        public static function insert(){
            global $con;
            $stmt = $con->prepare("INSERT INTO snack ()  VALUES (?, ?)");
            // $stmt->bindValue();
            // $stmt->bindValue();

            $stmt->execute();

        }
        public static function update(){
            global $con;
            
        }
    }
