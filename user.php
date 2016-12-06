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

      public function createTable($noOfQuestion,$nameOfTest,$nameOfSubject)
      {
        $table = $nameOfTest;
        try 
        {
             $sql ="CREATE table $table(
             question VARCHAR( 250 ) NOT NULL, 
             answer1 VARCHAR( 150 ) NOT NULL,
             answer2 VARCHAR( 150 ) NOT NULL, 
             answer3 VARCHAR( 150 ) NOT NULL, 
             answer4 VARCHAR( 150 ) NOT NULL, 
             correctAnswer VARCHAR( 100 ) NOT NULL);" ;
             $this->db->exec($sql);
        } 
        catch(PDOException $e) 
        {
            echo $e->getMessage();//Remove or change message in production code
        }
      }
      public function destroyTable($tableName)
      {
        try 
        {
            $sql= $this->db->prepare("DROP TABLE  $tableName ");
            $sql->execute();
        } 
        catch(PDOException $e) 
        {
            echo $e->getMessage();//Remove or change message in production code
        }
      }    
      public function createPaper($queryString1,$queryString2,$tableName)
      {
            $questionArray= explode("&",$queryString1 );
            $answerArray = explode("&", $queryString2);
            $noOfQuestion=count($questionArray);
            for($i=0;$i<$noOfQuestion;$i++)
            {
              $question=$questionArray[$i];
              $answer1=$answerArray[$i*4];
              $answer2=$answerArray[$i*4+1];
              $answer3=$answerArray[$i*4+2];
              $answer4=$answerArray[$i*4+3];

              try
              {
              $stmt = "INSERT INTO $tableName (question,answer1,answer2,answer3,answer4,correctAnswer) VALUES ('$question', '$answer1', '$answer2','$answer3' ,'$answer4','$answer1')";
              $this->db->exec($stmt);
              }
              catch(PDOException $e)
              {
                echo "Error: " . $e->getMessage();
              }
            }
      }        
}

      

	
