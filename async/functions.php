<?php

include('connection.php');


function escapeString($string){
    global $connection;
    
    return $string = mysqli_real_escape_string($connection,$string);
    
    }
    
    function checkQuery($result){
    global $connection;
    if($result){
    
    }else{
        die("Query failed".mysqli_error($connection));
    
    }  
    }

function generateUsername() {
    // Arrays of adjectives and nouns
    $adjectives = ["Happy", "Brave", "Clever", "Daring", "Jolly", "Mighty", "Fierce", "Gentle", "Wise", "Swift", "Bold", "Courageous"];
    $nouns = ["Lion", "Eagle", "Tiger", "Panther", "Wolf", "Hawk", "Bear", "Dragon", "Phoenix", "Leopard", "Falcon", "Ram"];
    
    
    // Select random adjective and noun
    $randomAdjective = $adjectives[array_rand($adjectives)];
    $randomNoun = $nouns[array_rand($nouns)];
    
    // Generate a random number
    $randomNumber = rand(100, 999);
    
    // Combine elements to create a username
    $username = $randomAdjective . $randomNoun . $randomNumber;
    
    return $username;
}

function getRandomImage() {
    $images = ["avatar_1.png", "avatar_2.png", "avatar_3.png", "avatar_4.png", "avatar_5.png","avatar_6.png", "avatar_7.png", "avatar_8.png", "avatar_9.png", "avatar_10.png","avatar_11.png","avatar_12.png"];
    $randomIndex = array_rand($images);
    return $images[$randomIndex];
}
function generateUserId(){
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';   // Shuffle the $str_result and returns substring
    // of specified length
    
    $gen_order_id = substr(str_shuffle($str_result),
                        0, 15);
      
    return $gen_order_id;  
    }

    function getUserData($attribute,$usr_id){
    global $connection;
    $query  = "SELECT * FROM wbsockets_users WHERE usr_id = '$usr_id'";
    $get_user_data = mysqli_query($connection,$query);
    checkQuery($get_user_data);
    while($row = mysqli_fetch_assoc($get_user_data)){
    $username = $row['username'];
    $profile_url = $row['profile_url'];

    }
    if($attribute == 'profile_url'){
        return $profile_url;
    }else if($attribute == 'username'){
        return $username;
    }

    }
