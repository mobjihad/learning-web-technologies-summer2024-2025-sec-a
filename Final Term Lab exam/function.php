<?php
 class CrudApp{

    private $conn;

    public function __construct(){
 
         $dbhost = "Localhost";
         $dbuser = "root";
         $dbpass = "";
         $dbname = "crudop";

         $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

         if(!$this->conn){

            die("Connection Error!!");
         }
               
    }

    public function addInfo($data){

         $name = $data['Name'];
         $cname = $data['CompanyName'];
         $cn = $data['cn'];
         $uname = $data['username'];
         $pass = $data['pass'];
        

         $query = "INSERT into employees(EmployerName,CompanyName,Contact,Username,password) Value('$name','$cname','$cn','$uname','$pass')";

         if(mysqli_query($this->conn, $query)){
           
            return "Information Added Succesfully";
         }
    }

    public function displayData(){

      $query = "SELECT * from employees" ; 

      if(mysqli_query($this->conn,$query)){
          
         $rtn_data = mysqli_query($this->conn,$query);
         return $rtn_data; 

      }
       
    }

    public function checkLogin($username, $password) {
   
    $query = "SELECT * FROM employees WHERE Username = '$username'";

    $result = mysqli_query($this->conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

      
        if ($password === $user_data['password']) {
            return $user_data; 
        }
    }

    return false; 
}
       

 }





?>