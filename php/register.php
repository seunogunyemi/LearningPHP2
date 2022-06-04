<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    
    $file = '../storage/users.csv';

    $handle = fopen($file, 'a');
    
    fputcsv($handle, [$username, $email, $password]);

    fclose($handle);
    //save data into the file
    
    // echo "OKAY";
}
echo 'user successfully registered';


