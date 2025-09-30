<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home fa-3x"></i>'
		),
		
		array(
			'path' => 'surat_masuk', 
			'label' => 'Surat Masuk', 
			'icon' => '<i class="fa fa-envelope fa-3x"></i>'
		),
		
		array(
			'path' => 'status_surat', 
			'label' => 'Status Surat', 
			'icon' => '<i class="fa fa-hourglass-start fa-3x"></i>'
		),
		
		array(
			'path' => 'user', 
			'label' => 'User', 
			'icon' => '<i class="fa fa-user-plus fa-3x"></i>'
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Role Permissions', 
			'icon' => '<i class="fa fa-cogs fa-3x"></i>'
		),
		
		array(
			'path' => 'roles', 
			'label' => 'Roles', 
			'icon' => '<i class="fa fa-cog fa-3x"></i>'
		)
	);
		
	
	
			public static $sifat_surat = array(
		array(
			"value" => "Penting", 
			"label" => "Penting", 
		),
		array(
			"value" => "Biasa", 
			"label" => "Biasa", 
		),);
		
}