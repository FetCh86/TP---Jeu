<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 06/07/2018
 * Time: 16:16
 */

spl_autoload_register(function($classe){
    include 'Classes/' .$classe. '.php';
});

$program = new Program();

$program->jeu1();