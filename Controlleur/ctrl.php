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

function approv(){
	session_destroy();	
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	include('Vues/Admin/approv.php');
}


function recquisq(){
	session_destroy();	
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	include('Vues/Admin/recquisq.php');
}

function recquism(){
	session_destroy();	
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	include('Vues/Admin/recquism.php');
}


function stock_quincailleries(){
	session_destroy();		
	require_once('Model/Admin/articles.class.php');
	// require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	// $cat = new Categories();
	$getStock = $art->getQ();
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

function depot(){
	session_destroy();	
	require_once('Model/Admin/articles.class.php');
	require_once('Model/Admin/categories.class.php');
	$art = new Articles();
	$cat = new Categories();
	$getStock = $art->getArticlesId();		
	include('Vues/Admin/depot.php');
}
