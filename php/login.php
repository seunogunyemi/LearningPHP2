<?php
if(isset($_POST['submit'])){
    $username = 'email';//finish this line
    $password = 'password';//finish this

// loginUser($email, $password);

}


function loginUser($email, $password){

    $file = '../storage/users.csv';
    $handle = fopen($file, 'r');

    if(!$handle =fopen($file, 'r')){
        die('<p>could not access password');
    }
        

    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
}

// echo "HANDLE THIS PAGE";

