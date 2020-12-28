<?php

class IsValid {
    public  $errorMessage;

    private function isInvalid($message) {
        $this->errorMessage.= $message;
    }
    public function checkLength($field, $min, $max) {
        if(strlen($field) < $min) {
            $this->isInvalid("This Field need minimum $min characters");
        } else if(strlen($field) > $max) {
            $this->isInvalid("Please enter you dont enter $max characters");
        } 
    }
    public function checkEmail($field) {
        echo "Check Email";
        if(!filter_var($field, FILTER_VALIDATE_EMAIL)) {
            $this->errorMessage = "Please enter a valid email <br>";
        }
    }
    
    public function checkField($field, $typeField, $typeFilter) {
        if(empty($field)) {
            $this->isInvalid("Please enter a $typeField <br>");
            return;
        }
        $field = trim($field);
        $field = filter_var($field, $typeFilter);
        echo $field;
        $this->clenDataByField($typeField);
    }
    
    public function clenDataByField($field) {
        switch ($field) {
            case 'email':
                $this->checkEmail($field);
                break;
            case 'message':
                $field = htmlspecialchars($field);
                $field = stripslashes($field);
            default:
                $field = trim($field);
                break;
        }
    }

}