<?php 
	function login(){
	session_destroy();
	// require_once('Model/Admin/login.class.php');
	// $log = new Login();
	include('Vues/login.php');
}
	function home(){
	     session_destroy();		
	     include('Vues/Admin/home.php');
}

function categories(){
	session_destroy();	
	require_once('Model/Admin/categories.class.php');
	$cat = new Categories();	
	include('Vues/Admin/categories.php');
}
function articles(){
	session_destroy();		
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	$getCat = $cat->getCategories();
	include('Vues/Admin/articles.php');
}
function users(){
	session_destroy();	
	require_once('Model/Admin/user.class.php');
	$user = new Users();	
	include('Vues/Admin/users.php');
}
function quincailleries(){
	session_destroy();	
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	$getStock = $art->StockQId();	
	include('Vues/Admin/quincailleries.php');
}

function stock_quincailleries(){
	session_destroy();		
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	$getStock = $art->StockQId();
	include('Vues/Admin/stock_quincailleries.php');
}
function stock_magasin(){
	session_destroy();		
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	$getStock = $art->StockMId();	
	include('Vues/Admin/stock_magasin.php');
}

function magasin(){
	session_destroy();	
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	$getStock = $art->StockMId();		
	include('Vues/Admin/magasin.php');
}
