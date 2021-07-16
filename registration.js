function check_username() {
    var username = document.getElementById("username");
    if (username) {
        if (username.value.length >= 6 && username.value.length <= 50) {
            // alert("Username meets all requirements!");
            username_message = document.getElementById("username_message");
            username_message.style.color = "green";
            username_message.innerHTML = "Username meets all requirements!";
            document.getElementById("username").style.borderColor = "green";
            return true;
        }
        else if (username.value == "") {
            username_message = document.getElementById("username_message");
            username_message.style.color = "red";
            username_message.innerHTML = "Username is required!";
            document.getElementById("username").style.borderColor = "red";
            return false;
        }
        else {
            // alert("Username must be 6-50 characters long!");
            username_message = document.getElementById("username_message");
            username_message.style.color = "red";
            username_message.innerHTML = "Username must be 6-50 characters long!";
            document.getElementById("username").style.borderColor = "red";
            return false;
        }
    }
}
function check_password() {
    var password = document.getElementById("password");
    if (password) {
        var password = String(password.value).trim()
        if (password.length >= 8 && password.length <= 50) {
            var special_char = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            var capital = /[ABCDEFGHIJKLMNOPQRSTUVWXYZ]/
            var lowercase = /[abcdefghijklmnopqrstuvwyxz]/
            var digit = /[0123456789]/
            var match_special = special_char.test(password);
            var match_capital = capital.test(password);
            var match_lower = lowercase.test(password);
            var match_digit = digit.test(password);
            if (match_special && match_capital && match_lower && match_digit) {
                var repeat_password =String(document.getElementById("repeat_password").value).trim();
                if (repeat_password == password) {
                    message = document.getElementById("password_message");
                    message.style.color = "green";
                    message.innerHTML = "Passwords match and meet all requirements!";
                    document.getElementById("password").style.borderColor = "green";
                    document.getElementById("repeat_password").style.borderColor = "green";
                    return true;
                }
                else {
                    // alert("Passwords do not match!");
                    message = document.getElementById("password_message");
                    message.style.color = "red";
                    message.innerHTML = "Passwords do not match!";
                    document.getElementById("password").style.borderColor = "red";
                    document.getElementById("repeat_password").style.borderColor = "red";
                    return false;
                } 
            }
            else {
                // alert("Password must contain 1 capital, 1 lowercase, 1 digit, and 1 special character");
                message = document.getElementById("password_message");
                message.style.color = "red";
                message.innerHTML = "Password must contain 1 capital, 1 lowercase, 1 digit, and 1 special character";
                document.getElementById("password").style.borderColor = "red";
                document.getElementById("repeat_password").style.borderColor = "red";
                return false;
            }  
        }
        else if (password == "") {
            // alert("Password is required!");
            message = document.getElementById("password_message");
            message.style.color = "red";
            message.innerHTML = "Password is required!";
            document.getElementById("password").style.borderColor = "red";
            return false;
        }
        else {
            // alert("Password must be 8-50 characters long!");
            message = document.getElementById("password_message");
            message.style.color = "red";
            message.innerHTML = "Password must be 8-50 characters long!";
            document.getElementById("password").style.borderColor = "red";
            return false;
        }
    }
}
function check_password_repeat() {
    var password = document.getElementById("repeat_password");
    if (password) {
        var password = String(password.value).trim();
        if (password.length >= 8 && password.length <= 50) {
            var special_char = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            var capital = /[ABCDEFGHIJKLMNOPQRSTUVWXYZ]/
            var lowercase = /[abcdefghijklmnopqrstuvwyxz]/
            var digit = /[0123456789]/
            var match_special = special_char.test(password);
            var match_capital = capital.test(password);
            var match_lower = lowercase.test(password);
            var match_digit = digit.test(password);
            if (match_special && match_capital && match_lower && match_digit) {
                var first_password =String(document.getElementById("password").value).trim();
                if (first_password == password) {
                    // alert("Passwords match and meet all requirements!");
                    password_message = document.getElementById("password_message");
                    password_message.style.color = "green";
                    password_message.innerHTML = "Passwords match and meet all requirements!";
                    document.getElementById("repeat_password").style.borderColor = "green";
                    document.getElementById("password").style.borderColor = "green";
                    return true;
                }
                else {
                    // alert("Passwords do not match!");
                    password_message = document.getElementById("password_message");
                    password_message.style.color = "red";
                    password_message.innerHTML = "Passwords do not match!";
                    document.getElementById("repeat_password").style.borderColor = "red";
                    document.getElementById("password").style.borderColor = "red";
                    return false;
                }  
            }
            else {
                // alert("Password must contain 1 capital, 1 lowercase, 1 digit, and 1 special character");
                password_message = document.getElementById("password_message");
                password_message.style.color = "red";
                password_message.innerHTML = "Password must contain 1 capital, 1 lowercase, 1 digit, and 1 special character";
                document.getElementById("repeat_password").style.borderColor = "red";
                document.getElementById("password").style.borderColor = "red";
                return false;
            }  
        }
        else if (password == "") {
            // alert("Repeated password is required!");
            password_message = document.getElementById("password_message");
            password_message.style.color = "red";
            password_message.innerHTML = "Repeated password is required!";
            document.getElementById("repeat_password").style.borderColor = "red";
            return false;
        }
        else {
            // alert("Password must be 8-50 characters long!");
            password_message = document.getElementById("password_message");
            password_message.style.color = "red";
            password_message.innerHTML = "Password must be 8-50 characters long!";
            document.getElementById("repeat_password").style.borderColor = "red";
            return false;
        }
    }
}
function check_firstname() {
    var first_name = document.getElementById("firstName");
    if (first_name) {
        if (first_name.value.length >= 1 && first_name.value.length <= 50) {
            // alert("First name meets all requirements!");
            firstName_message = document.getElementById("firstName_message");
            firstName_message.style.color = "green";
            firstName_message.innerHTML = "First name meets all requirements!";
            document.getElementById("firstName").style.borderColor = "green";
            return true;
        }
        else if (first_name.value == "") {
            firstName_message = document.getElementById("firstName_message");
            firstName_message.style.color = "red";
            firstName_message.innerHTML = "First name is required!";
            document.getElementById("firstName").style.borderColor = "red";
            return false;
        }
        else {
            // alert("First name must be at most 50 characters long!");
            firstName_message = document.getElementById("firstName_message");
            firstName_message.style.color = "red";
            firstName_message.innerHTML = "First name must be at most 50 characters long!";
            document.getElementById("firstName").style.borderColor = "red";
            return false;
        }
    }
}
function check_lastname() {
    var last_name = document.getElementById("lastName");
    if (last_name) {
        if (last_name.value.length >= 1 && last_name.value.length <= 50) {
            // alert("First name meets all requirements!");
            lastName_message = document.getElementById("lastName_message");
            lastName_message.style.color = "green";
            lastName_message.innerHTML = "Last name meets all requirements!";
            document.getElementById("lastName").style.borderColor = "green";
            return true;
        }
        else if (last_name.value == "") {
            lastName_message = document.getElementById("lastName_message");
            lastName_message.style.color = "red";
            lastName_message.innerHTML = "Last name is required!";
            document.getElementById("lastName").style.borderColor = "red";
            return false;
        }
        else {
            // alert("First name must be at most 50 characters long!");
            lastName_message = document.getElementById("lastName_message");
            lastName_message.style.color = "red";
            lastName_message.innerHTML = "Last name must be at most 50 characters long!";
            document.getElementById("lastName").style.borderColor = "red";
            return false;
        }
    }
}
function check_address_1() {
    var address_1 = document.getElementById("address_1");
    if (address_1) {
        if (address_1.value.length >= 1 && address_1.value.length <= 100) {
            // alert("First name meets all requirements!");
            address_1_message = document.getElementById("address_1_message");
            address_1_message.style.color = "green";
            address_1_message.innerHTML = "Address Line 1 meets all requirements!";
            document.getElementById("address_1").style.borderColor = "green";
            return true;
        }
        else if (address_1.value == "") {
            address_1_message = document.getElementById("address_1_message");
            address_1_message.style.color = "red";
            address_1_message.innerHTML = "Address Line 1 is required!";
            document.getElementById("address_1").style.borderColor = "red";
            return false;
        }
        else {
            // alert("First name must be at most 50 characters long!");
            address_1_message = document.getElementById("address_1_message");
            address_1_message.style.color = "red";
            address_1_message.innerHTML = "Address Line 1 must be at most 100 characters long!";
            document.getElementById("address_1").style.borderColor = "red";
            return false;
        }
    }
}
function check_address_2() {
    var address_2 = document.getElementById("address_2");
    if (address_2) {
        if (address_2.value.length <= 100) {
            // alert("First name meets all requirements!");
            address_2_message = document.getElementById("address_2_message");
            address_2_message.style.color = "green";
            address_2_message.innerHTML = "Address Line 2 meets all requirements!";
            document.getElementById("address_2").style.borderColor = "green";
            return true;
        }
        else {
            // alert("First name must be at most 50 characters long!");
            address_2_message = document.getElementById("address_2_message");
            address_2_message.style.color = "red";
            address_2_message.innerHTML = "Address Line 2 must be at most 100 characters long!";
            document.getElementById("address_2").style.borderColor = "red";
            return false;
        }
    }
}
function check_city() {
    var city = document.getElementById("city");
    if (city) {
        if (city.value.length >= 1 && city.value.length <= 50) {
            // alert("First name meets all requirements!");
            city_message = document.getElementById("city_message");
            city_message.style.color = "green";
            city_message.innerHTML = "City meets all requirements!";
            document.getElementById("city").style.borderColor = "green";
            return true;
        }
        else if (city.value == "") {
            // alert("First name must be at most 50 characters long!");
            city_message = document.getElementById("city_message");
            city_message.style.color = "red";
            city_message.innerHTML = "City is required!";
            document.getElementById("city").style.borderColor = "red";
            return false;
        }
        else {
            // alert("First name must be at most 50 characters long!");
            city_message = document.getElementById("city_message");
            city_message.style.color = "red";
            city_message.innerHTML = "City must be at most 50 characters long!";
            document.getElementById("city").style.borderColor = "red";
            return false;
        }
    }
}
function check_state() {
    var state = document.getElementById("state");
    if (state) {
        if (state.value == "NA") {
            var state_message = document.getElementById("state_message");
            state_message.style.color = "red";
            state_message.innerHTML = "State is required!";
            state.style.borderColor = "red";
            return false;
        }
        else {
            var state_message = document.getElementById("state_message");
            state_message.style.color = "green";
            state_message.innerHTML = "State meets all requirements!";
            state.style.borderColor = "green";
            return true;
        }
    }
}
function check_zip() {
    var zip = document.getElementById("zip");
    if (zip) {
        zip_value = zip.value;
        var search1 = zip_value.search(/^\d{5}$/);
        var search2 = zip_value.search(/^\d{9}$/);
        if (search1 == 0 && search2 == -1) {
            var zip_message = document.getElementById("zip_message");
            zip_message.style.color = "green";
            zip_message.innerHTML = "Zip format meets all requirements!";
            zip.style.borderColor = "green";
            return true;
        }
        else if (search1 == -1 && search2 == 0) {
            var zip_message = document.getElementById("zip_message");
            zip_message.style.color = "green";
            zip_message.innerHTML = "Zip format meets all requirements!";
            zip.style.borderColor = "green";
            zip.value = zip_value.slice(0,5) + "-" + zip_value.slice(5);
            return true;
        }
        else {
            var zip_message = document.getElementById("zip_message");
            zip_message.style.color = "red";
            zip_message.innerHTML = "Zip format should be either 5 or 9 digits long";
            zip.style.borderColor = "red";
            return false;
        }
    }
}
function check_phone() {
    var phone = document.getElementById("number");
    if (phone) {
        phone_value = phone.value;
        var search = phone_value.search(/^\d{10}$/);
        if (search == 0) {
            var phone_message = document.getElementById("number_message");
            phone_message.style.color = "green";
            phone_message.innerHTML = "Phone number format meets all requirements!";
            phone.style.borderColor = "green";
            phone.value = phone_value.slice(0,3) + "-" + phone_value.slice(3,6) + "-" + phone_value.slice(6);
            return true;
        }
        else {
            var phone_message = document.getElementById("number_message");
            phone_message.style.color = "red";
            phone_message.innerHTML = "Phone number should be 10 digits long";
            phone.style.borderColor = "red";
            return false;
        }
    }
}
function check_email() {
    var email = document.getElementById("email");
    // var email_message = document.getElementById("email_message");
    // email_message.style.color = "green";
    // email_message = "Email format meets all requirements!";
    if (email) {
        var email_value = email.value;
        var match = email_value.search(/^\w+@\w+\.\w+$/);
        if (match == 0) {
            var email_message = document.getElementById("email_message");
            email_message.style.color = "green";
            email_message.innerHTML = "Email format meets all requirements!";
            email.style.borderColor = "green";
            return true;
        }
        else {
            var email_message = document.getElementById("email_message");
            email_message.style.color = "red";
            email_message.innerHTML = "Email format is incorrect!";
            email.style.borderColor = "red";
            return false;
        }
    }
}
function check_gender() {
    var male_gender = document.getElementById("maleGender");
    var female_gender = document.getElementById("femaleGender");
    var other_gender = document.getElementById("otherGender");
    if (male_gender.checked != true && female_gender.checked != true && other_gender.checked != true) {
        var gender_message = document.getElementById("gender_message");
        gender_message.style.color = "red";
        gender_message.innerHTML = "Gender field is required";
        return false
    }
    else {
        var gender_message = document.getElementById("gender_message");
        gender_message.style.color = "green";
        gender_message.innerHTML = "Gender field filled out successfully!";
        return true;
    }
}
function check_marital() {
    var single = document.getElementById("single");
    var married = document.getElementById("married");
    if (single.checked != true && married.checked != true) {
        var marital_message = document.getElementById("marital_message");
        marital_message.style.color = "red";
        marital_message.innerHTML = "Marital status field is required";
        return false
    }
    else {
        var marital_message = document.getElementById("marital_message");
        marital_message.style.color = "green";
        marital_message.innerHTML = "Marital status field filled out sucessfully!";
        return true;
    }
}
function check_birthday() {
    var birthday = document.getElementById("birthday");
    if (birthday) {
        var birthday_value = birthday.value;
        var check = birthday_value.charAt(4);
        if (check != "-") {
            var birthday_message = document.getElementById("birthday_message");
            birthday_message.style.color = "red";
            birthday_message.innerHTML = "Birthday year must be 4 digits long!";
            return false;
        }
        else {
            var birthday_message = document.getElementById("birthday_message");
            birthday_message.style.color = "green";
            birthday_message.innerHTML = "Birthday format is correct!";
            return true;
        }
    }
}
function Validation() {
    document.getElementById("username").onblur = check_username;
    document.getElementById("password").onblur = check_password;
    document.getElementById("repeat_password").onblur = check_password_repeat;
    document.getElementById("firstName").onblur = check_firstname;
    document.getElementById("lastName").onblur = check_lastname;
    document.getElementById("address_1").onblur = check_address_1;
    document.getElementById("address_2").onblur = check_address_2;
    document.getElementById("city").onblur = check_city;
    document.getElementById("state").onclick = check_state;
    document.getElementById("zip").onblur = check_zip;
    document.getElementById("number").onblur = check_phone;
    document.getElementById("email").onblur = check_email;
    document.getElementById("birthday").onblur = check_birthday;
    document.getElementById("maleGender").onclick = check_gender;
    document.getElementById("femaleGender").onclick = check_gender;
    document.getElementById("otherGender").onclick = check_gender;
    document.getElementById("single").onclick = check_marital;
    document.getElementById("married").onclick = check_marital;
}
function check_zip_final() {
    var zip = document.getElementById("zip");
    if (zip) {
        zip_value = zip.value;
        var search1 = zip_value.search(/^\d{5}$/);
        var search2 = zip_value.search(/^\d{5}-\d{4}$/);
        if (search1 == 0 && search2 == -1) {
            var zip_message = document.getElementById("zip_message");
            zip_message.style.color = "green";
            zip_message.innerHTML = "Zip format meets all requirements!";
            zip.style.borderColor = "green";
            return true;
        }
        else if (search1 == -1 && search2 == 0) {
            var zip_message = document.getElementById("zip_message");
            zip_message.style.color = "green";
            zip_message.innerHTML = "Zip format meets all requirements!";
            zip.style.borderColor = "green";
            return true;
        }
        else {
            var zip_message = document.getElementById("zip_message");
            zip_message.style.color = "red";
            zip_message.innerHTML = "Zip format should be either 5 or 9 digits long";
            zip.style.borderColor = "red";
            return false;
        }
    }
}
function check_phone_final() {
    var phone = document.getElementById("number");
    if (phone) {
        phone_value = phone.value;
        var search = phone_value.search(/^\d{3}-\d{3}-\d{4}$/);
        if (search == 0) {
            var phone_message = document.getElementById("number_message");
            phone_message.style.color = "green";
            phone_message.innerHTML = "Phone number format meets all requirements!";
            phone.style.borderColor = "green";
            return true;
        }
        else {
            var phone_message = document.getElementById("number_message");
            phone_message.style.color = "red";
            phone_message.innerHTML = "Phone number should be 10 digits long";
            phone.style.borderColor = "red";
            return false;
        }
    }
}
function submit_form() {
    if (check_username() == true & check_password() == true & check_password_repeat() == true & check_firstname() == true & check_lastname() == true & check_address_1() == true & check_address_2() == true 
    & check_city() == true & check_state() == true & check_email() == true & check_birthday() == true & check_gender() == true & check_marital() == true & check_phone_final() & check_zip_final()) {
        var submit_message = document.getElementById("submit_message");
        submit_message.style.color = "green";
        submit_message.innerHTML = "All fields filled out properly!";
        var submit = document.getElementById("submit");
        submit.disabled = false;
    }
    else {
        var submit_message = document.getElementById("submit_message");
        submit_message.style.color = "red";
        submit_message.innerHTML = "Please fix the above errors!";
    }
}
