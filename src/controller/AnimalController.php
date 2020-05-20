<?php
namespace App\Controller;


class AnimalController {

    public static function index(){

        echo "voici la liste des animaux";
    }

    public static function show($id){

        echo "Voici l'animal numéro ".$id;
    }

}