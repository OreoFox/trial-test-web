<?php 
class Register {
	
	public static function save(array $values) {
        //not in exercise

	}
    public static function checkForm(array $values){
        $name = htmlspecialchars($values['name']);
        $street = htmlspecialchars( $values['street']);
        $zip = htmlspecialchars($values['zip']);
        $city = htmlspecialchars($values['city']);
        $email = htmlspecialchars($values['email']);

        if(!isset($name) || $name == ""){
            echo "<p style=\"color:red;\">please enter a name!</p>";
            return false;
        }

        if(!isset($street) || $street == ""){
            echo "<p tyle=\"color:red;\">please enter a street!</p>";
            return false;
        }

        if(!isset($zip) || $zip == "" || !preg_match("@[0-9]{4}@", $zip)){
            echo "<p tyle=\"color:red;\">please enter a zip!</p>";
            return false;
        }

        if(!isset($city) || $city == ""){
            echo "<p tyle=\"color:red;\">please enter a city!</p>";
            return false;
        }

        if(!isset($email) || $email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p tyle=\"color:red;\">please enter an email!</p>";
            return false;
        }

        return true;
    }
}