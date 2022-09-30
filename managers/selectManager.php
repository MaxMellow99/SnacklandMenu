<?php
    class selectmanager{
        public static function selectPatat(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM patat");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectSauzen(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM sauzen");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectSnacks(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM snack");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectBroodjes(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM broodjes");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectHamburgers(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM hamburgers");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectKip(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM kip");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectMenu(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM menu");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectSpecialiteiten(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM specialiteiten");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectPizza(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pizza");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectPasta(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pasta");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectPorties(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM porties");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectKindermenu(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM kindermenu");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectSmoothies(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM smoothies");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectMilkshakes(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM milkshakes");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectDranken(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM dranken");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
         public static function selectIjs(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM ijs");
            $stmt->execute();

            return $stmt -> fetchObject();       
         }
    }
