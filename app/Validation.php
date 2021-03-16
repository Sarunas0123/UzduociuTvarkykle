<?php


namespace TaskManager;


class Validation
{
    private static $errors = [];
    public static function validate($data){
        self::validateTitle($data['subject']);
        self::validatePriority($data['priority']);
        self::validateDueDate($data['dueDate']);
        return self::$errors;
    }

    private static function validateTitle($title){

            if (!preg_match('/^([A-Za-z]{5,150})/', $title)) {
               Validation::$errors[] = "nepasirinkai pavadinimo";
            }

    }
    private static function validatePriority($priority){

            if (!isset($priority)) {
                Validation::$errors[] = "nepasirinkai priority";
            }

    }
    private static function validateDueDate($dueDate){
        if (!$dueDate=='0000-00-00') {
            Validation::$errors[] = "nepasirinkai datos";
        }
    }

}