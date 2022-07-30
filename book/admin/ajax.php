<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if ($action == 'login') {
	$login = $crud->login();
	if ($login)
		echo $login;
}

if ($action == 'logout') {
	$logout = $crud->logout();
	if ($logout)
		echo $logout;
}
if ($action == 'save_user') {
	$save = $crud->save_user();
	if ($save)
		echo $save;
}
if ($action == 'delete_user') {
	$save = $crud->delete_user();
	if ($save)
		echo $save;
}
if ($action == 'signup') {
	$save = $crud->signup();
	if ($save)
		echo $save;
}
if ($action == "save_settings") {
	$save = $crud->save_settings();
	if ($save)
		echo $save;
}
if ($action == "save_venue") {
	$save = $crud->save_venue();
	if ($save)
		echo $save;
}
if ($action == "save_book") {
	$save = $crud->save_book();
	if ($save)
		echo $save;
}
if ($action == "save_custombook") {
	$save = $crud->save_custombook();
	if ($save)
		echo $save;
}

if ($action == "delete_book") {
	$save = $crud->delete_book();
	if ($save)
		echo $save;
}

if ($action == "save_register") {
	$save = $crud->save_register();
	if ($save)
		echo $save;
}
if ($action == "delete_register") {
	$save = $crud->delete_register();
	if ($save)
		echo $save;
}
if ($action == "delete_venue") {
	$save = $crud->delete_venue();
	if ($save)
		echo $save;
}
if ($action == "update_order") {
	$save = $crud->update_order();
	if ($save)
		echo $save;
}
if ($action == "delete_order") {
	$save = $crud->delete_order();
	if ($save)
		echo $save;
}
if ($action == "save_event") {
	$save = $crud->save_event();
	if ($save)
		echo $save;
}
if ($action == "delete_event") {
	$save = $crud->delete_event();
	if ($save)
		echo $save;
}
if ($action == "get_audience_report") {
	$get = $crud->get_audience_report();
	if ($get)
		echo $get;
}
if ($action == "get_venue_report") {
	$get = $crud->get_venue_report();
	if ($get)
		echo $get;
}
if ($action == "save_art_fs") {
	$save = $crud->save_art_fs();
	if ($save)
		echo $save;
}
if ($action == "delete_art_fs") {
	$save = $crud->delete_art_fs();
	if ($save)
		echo $save;
}
