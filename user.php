<?php
session_start();
class User {
      private $db;
      function __construct ($DB_conn)
      {
		    $this->db = $DB_conn;
		  }
	    public function signIn($credentials, $password)
      {
		    try{
      			$stmt = $this->db->prepare("SELECT * FROM professorsdetail WHERE userName=:name OR emailId=:name AND password=:password");
      			$stmt->execute(array(":name"=>$credentials, ":password"=>$password));
      			$user=$stmt->fetch(PDO::FETCH_ASSOC);
      			
            if($stmt->rowCount() > 0)
          		{ 
                  if($password==$user['password'])
                  {
                    $_SESSION['userName'] = $user['userName'];
                    return "true";
                  }
                  else 
                  {
                    return "false";
                  }
                
          		} 

		    }
		    catch(PDOException $error){
			      echo "Error: " . $error->getMessage();
	      }

	    }
    


      
	    public function signUp ($userName,$contact,$emailId,$password)
      {
          try{
            $stmt = "INSERT INTO professorsdetail (userName, password, emailId,contact) VALUES ('$userName', '$password', '$emailId','$contact')";
            $this->db->exec($stmt);
   		      return "New record created successfully";

            }
        catch(PDOException $e)
        {
       	  echo "Error: " . $e->getMessage();
 		    }
      }


      public function logout()
      {
        session_destroy();
        return "loggedOut";
      }  
}

      

	
