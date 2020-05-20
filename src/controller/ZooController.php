<?php
namespace App\Controller;


class ZooController {

    public static function index(){

        echo "voici la liste des zoos";
    }

    public static function show($id){

        echo "Voici le zoo numéro ".$id;
    }

}