<?php 
//Require hara que el codigo se detenga si no se puede ingresar a el archivo que se le especica
require "funciones.php";
//Require_once es lo mismo que require, pero llama a los archivos si y solo si no fue llamado antes, si ya fue llamado antes salta la instruccion y sigue adelante
require_once "funciones.php";
//Include traera el codigo pero no se detiene si no se puede ingresar a el archivo que se le especica
include 'includes/header.php';

iniciarApp();



include 'includes/footer.php';