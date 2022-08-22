
<?php
include("view.php");
class connection{
    public $host;
    public $user;
    public $pass;
    public $dsn;

    public function connect(){
        
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dsn='mysql:host=localhost;dbname=user';
        
            $name1=$_POST['firstName'];
            $name2=$_POST['lastName'];
        $db= new PDO($dsn, $user, $pass) ;
        $query="INSERT INTO identity (first_name,last_name) VALUES ('$name1','$name2')";
    $db->exec($query);
            }
}
        
    


?>