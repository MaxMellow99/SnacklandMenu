<?php
    class updateManager{
        public static function updatePatat($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE patat SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateSaus($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE sauzen SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateSnacks($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE snacks SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateBroodjes($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE broodjes SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateHamburgers($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE hamburgers SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateKip($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE kip SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updatePita($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE pita SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateMenu($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE menu SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateSpecialiteiten($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE specialiteiten SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updatePizza($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE pizza SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updatePasta($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE pasta SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updatePorties($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE porties SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateKindermenu($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE kindermenu SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateSmooties($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE smooties SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateMilkshakes($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE milkshakes SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateDranken($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE dranken SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
         public static function updateIjs($id, $firstname, $price, $description){
            global $con;
                $stmt = $con->prepare("UPDATE ijs SET name=?, price=?, description=? WHERE id=?");
                $stmt->bindValue(1, $firstname);
                $stmt->bindValue(2, $price);
                $stmt->bindValue(3, $description);
                $stmt->bindValue(4, $id);

                $stmt->execute();
         }
    }
