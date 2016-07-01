<?php

session_start();


function validarSessao()
{

if(!isset($_SESSION['email'])){
			header("location: login.php");
		}


}