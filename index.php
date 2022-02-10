<?php
session_start();
include 'Controlleur/ctrl.php';
if(isset($_GET['page'])){
	if($_GET['page']=='login'){
		login();
	}
	else if($_GET['page']=='home')
	{
		home();
	}
	else if($_GET['page']=='categories')
	{
		categories();
	}
	else if($_GET['page']=='articles')
	{
		articles();
	}
	
	else if($_GET['page']=='stock_quincailleries')
	{
		stock_quincailleries();
	}
	else if($_GET['page']=='depot')
	{
		depot();
	}
	else if($_GET['page']=='user')
	{
		users();
	}
	else if($_GET['page']=='stock_magasin')
	{
		stock_magasin();
	}
	else if($_GET['page']=='approv')
	{
		approv();
	}
	else if($_GET['page']=='recquism')
	{
		recquism();
	}
	else if($_GET['page']=='recquisq')
	{
		recquisq();
	}
	else{
		login();
	}	
}
else{
	login();
}
?>