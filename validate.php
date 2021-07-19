<?php
    $isValid = false;
    $firstNameError = $lastNameError = $usernameError = $passwordError = $cityError = 
    $stateError = $address1Error = $address2Error = $zipError = $phoneError = $emailError = $birthdayError =  $genderError = $maritalError = "";
    $firstName = $lastName = $username = $password = $repeat_password = 
    $city = $state = $address_1 = $address_2 = $zip = $phone = $email = $birthday = $gender = $marital = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeat_password"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $address_1 = $_POST["address_1"];
        $address_2 = $_POST["address_2"];
        $zip = $_POST["zip"];
        $phone = $_POST["number"];
        $email = $_POST["email"];
        $birthday = $_POST["birthDay"];
        if (isset($_POST["gender"])) {
            $gender = $_POST["gender"];
        }
        if (isset($_POST["mar_status"])) {
            $marital = $_POST["mar_status"];
        }
        $special_char = "/[$&+,:;=?@#|'<>.^*()%!-]/";
        $zip_format1 = "/^\d{5}$/";
        $zip_format2 = "/^\d{5}-\d{4}$/";
        $phone_format = "/^\d{3}-\d{3}-\d{4}$/";
        $email_format = "/^\w+@\w+\.\w+$/";
        $birthday_format = "/^\d{4}-\d{2}-\d{2}$/";
        if (empty($firstName)) {
            $firstNameError = "First name is required!";
            $isValid = false;
        }
        elseif (strlen($firstName) > 50) {
            $firstNameError = "First name must be at most 50 characters long!";
            $isValid = false;
        }
        if (empty($lastName)) {
            $lastNameError = "Last name is required!";
            $isValid = false;
        }
        elseif (strlen($lastName) > 50) {
            $lastNameError = "Last name must be at most 50 characters long!";
            $isValid = false;
        }
        if (empty($username)) {
            $usernameError = "username is required!";
            $isValid = false;
        }
        elseif (strlen($username) < 6 || strlen($username) > 50) {
            $usernameError = "username must be 6-50 characters long!";
            $isValid = false;
        }
        if (empty($password)) {
            $passwordError = "Password is required!";
            $isValid = false;
        }
        elseif (strlen($password) < 8 || strlen($password) > 50) {
            $passwordError = "Password must be 8-50 characters!";
            $isValid = false;
        }
        elseif (!preg_match($special_char,$password) || !preg_match("/[A-Z]/",$password) || !preg_match("/[a-z]/",$password) || !preg_match("/[0-9]/",$password) ) {
            $passwordError = "Password requires 1 capital, 1 lowercase, 1 digit, and 1 special character!";
            $isValid = false;
        }
        elseif ($password != $repeat_password) {
            $passwordError = "Passwords must match!";
            $isValid = false;
        }
        if (empty($city)) {
            $cityError = "City is required!";
            $isValid = false;
        }
        elseif (strlen($city) > 50) {
            $cityError = "City must be at most 50 characters long!";
            $isValid = false;
        }
        if ($state == "NA") {
            $stateError = "You must select a state!";
            $isValid = false;
        }
        if (empty($address_1)) {
            $address1Error = "Address is required!";
            $isValid = false;
        }
        elseif (strlen($address_1) > 100) {
            $address1Error = "Address line 1 should be at most 100 characters!";
            $isValid = false;
        }
        if (strlen($address_2) > 100) {
            $address2Error = "Address line 2 should be at most 100 characters!";
            $isValid = false;
        }
        if (empty($zip)) {
            $zipError = "Zip code is required!";
            $isValid = false;
        }
        elseif (!preg_match($zip_format1,$zip) && !preg_match($zip_format2,$zip)) {
            $zipError = "Zip code should follow format XXXXX or XXXXX-XXXX!";
            $isValid = false;
        }
        if (empty($phone)) {
            $phoneError = "Phone number is required!";
            $isValid = false;
        }
        elseif (!preg_match($phone_format,$phone)) {
            $phoneError = "Phone number should follow format XXX-XXX-XXXX!";
            $isValid = false;
        }
        if (empty($email)) {
            $emailError = "Email is required!";
            $isValid = false;
        }
        elseif (!preg_match($email_format,$email)) {
            $emailError = "Email should follow format x@x.x!";
            $isValid = false;
        }
        if (empty($birthday)) {
            $birthdayError = "Birthday is required!";
            $isValid = false;
        }
        elseif (!preg_match($birthday_format,$birthday)) {
            $birthdayError = "Birthday should follow format MM/dd/yyyy!";
            $isValid = false;
        }
        if (empty($gender)) {
            $genderError = "Gender must be selected!";
            $isValid = false;
        }
        if (empty($marital)) {
            $maritalError = "Marital status must be selected!";
            $isValid = false;
        }
    }
?>