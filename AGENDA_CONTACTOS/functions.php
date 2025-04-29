<?php 
require "conexao.php";
    function connect(){
     
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    
        // Check if there is a connection error.
        if($mysqli->connect_errno != 0){
        
        }
    }

 function registerUser($email, $username, $password, $confirm_password) {
    // Establish a database connection.
    $mysqli = connect();
    
    // Trim whitespace from input values.
    $email = trim($email);
    $username = trim($username);
    $password = trim($password);
    $confirm_password = trim($confirm_password);
 
    // Check if any field is empty.
    $args = func_get_args();
    foreach ($args as $value) {
        if (empty($value)) {
            // If any field is empty, return an error message.
            return "Ambos os campos são necessários!";
        }
    }
 
    // Check for disallowed characters (< and >).
    foreach ($args as $value) {
        if (preg_match("/([<|>])/", $value)) {
            // If disallowed characters are found, 
            // return an error message.
            return "< and > characters are not allowed";
        }
    }
 
    // Validate email format.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // If email is not valid, return an error message.
        return "O Email não é válido";
    }

 
    // Hash the password for security.
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
 
    // Insert user data into the 'users' table.
    $stmt = $mysqli->prepare("INSERT INTO Agenda_Contactos (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $hashed_password, $email);
    $stmt->execute();
 
}