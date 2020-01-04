<?php 
class Register {
	
	public static function save(array $values) {
		$values = $_POST['register'];
		$name = $values['name'];
		$street = $values['street'];
		$zip = $values['zip'];
		$city = $values['city'];
		$email = $values['email'];

		if(!isset($name) || $name == ""){
		    echo "<p style=\"color:red;\">please enter a name!</p>";
        }

        if(!isset($street) || $street == ""){
            echo "<p tyle=\"color:red;\">please enter a street!</p>";
        }

        if(!isset($zip) || $zip == "" || !preg_match("@[0-9]{4}@", $zip)){
            echo "<p tyle=\"color:red;\">please enter a zip!</p>";
        }

        if(!isset($city) || $city == ""){
            echo "<p tyle=\"color:red;\">please enter a city!</p>";
        }

        if(!isset($email) || $email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p tyle=\"color:red;\">please enter an email!</p>";
        }

	}

}