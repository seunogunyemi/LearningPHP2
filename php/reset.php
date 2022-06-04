<?php
if(isset($_POST['submit'])){
    $email = 'email'; //complete this;
    $password ='password';
    $newpassword = 'newpassword'; //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){

    $file = '../storage/users.csv';
    $handle = fopen($file, 'w');

    fwrite($handle, 'newpassword');
    fclose($handle);
    //open file and check if the username exist inside
    //if it does, replace the password
}
echo 'Password reset successful';
echo '<br>';
echo 'Press'.''. ' <a href = "../forms/login.html">Back</a>'.''.' to continue';


