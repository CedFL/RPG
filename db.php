    <?php 
       $host = "localhost";
       $dbname = "RPG";
       $user = "root";
       $password = "root";

       try {
        $db = new PDO('mysql:host='. $host. ';dbname=' .$dbname. ';charset=utf8', $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }

       catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
       }?>
     
  	    
