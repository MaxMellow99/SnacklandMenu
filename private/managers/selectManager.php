<?php
    class selectmanager{
        public static function selectPatat(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM patat");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidPatat($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM patat WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
   
         public static function selectSauzen(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM sauzen");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidSauzen($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM sauzen WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectSnacks1(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM snacks LIMIT 17");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectSnacks2(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM snacks LIMIT 17, 13");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidSnacks($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM snacks WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectBroodjes(){
            global $con;
            
            $stmt = $con->prepare("SELECT * FROM broodjes");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidBroodjes($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM broodjes WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectHamburgers(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM hamburgers");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidHamburgers($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM hamburgers WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectKip(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM kip");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidKip($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM kip WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectPita(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pita");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidPita($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pita WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectMenu1(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM menu LIMIT 14");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
        public static function selectMenu2(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM menu LIMIT 14, 3");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
         public static function selectidMenu($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM menu WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectSpecialiteiten(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM specialiteiten");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidSpecialiteiten($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM specialiteiten WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectPizza(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pizza");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidPizza($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pizza WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectPasta(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pasta");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidPasta($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM pasta WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectPorties(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM porties");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidPorties($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM porties WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectKindermenu(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM kindermenu");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidKindermenu($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM kindermenu WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectSmoothies(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM smoothies");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidSmooties($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM smoothies WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectMilkshakes(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM milkshakes");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidMilkshakes($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM patat WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectDranken1(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM dranken LIMIT 4");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectDranken2(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM dranken LIMIT 4, 2");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
         public static function selectidDranken($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM dranken WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
         public static function selectIjs(){
            global $con;

            $stmt = $con->prepare("SELECT * FROM ijs");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);       
         }
         public static function selectidIjs($id){
            global $con;

            $stmt = $con->prepare("SELECT * FROM ijs WHERE id=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject();       
         }
    }
