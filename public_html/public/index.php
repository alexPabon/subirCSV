<?php
session_start();	//usaremos sesiones
include '../../products/config/config.php';
include '../../products/libraries/Autoload.php';
//include '../../products/templates/Template.php';     //añadido en autoload


//invocar al controlador frontal que se encargara de gestrionar los controladores
FrontController::main();

