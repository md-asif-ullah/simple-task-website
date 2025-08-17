<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    include("../utils/dbConnection.php");

    $firstName       = $_POST["firstName"];
    $lastName        = $_POST["lastName"];
    $email           = $_POST["email"];
    $password        = $_POST["password"];

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)) {
        
        try {
         $hashPassword = password_hash($password, PASSWORD_DEFAULT);

         $stmt=$connection ->prepare("INSERT INTO users (firstName,lastName,email,hashPassword) VALUES (?,?,?,?)");
         $stmt->bind_param("ssss",$firstName,$lastName,$email,$hashPassword);

         if ($stmt->execute()) {

            $token =bin2hex(random_bytes(32));

            $updateStmt=$connection->prepare("UPDATE users SET sessionToken=? WHERE email=?");
            $updateStmt->bind_param("ss",$token,$email);
            $updateStmt->execute();

            setcookie("authToken",$token,[
                "expires"  => time()+86400,
                "path"     => "/",
                "secure"   => false,  
                "httponly" => true,
                "samesite" => "Lax"
            ]);

            echo "User registered successfully!";
         } else {
            echo "Error: " . $stmt->error;
         }

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

    } else {
        echo "All fields are required";
    }
}
?>
