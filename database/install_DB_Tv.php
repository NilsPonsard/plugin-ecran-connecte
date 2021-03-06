<?php

/**
 * Script for the creation of the database
 */
function createDatabase()
{
	global $wpdb;
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );


	$charset_collate = $wpdb->get_charset_collate();

	$query = "CREATE TABLE IF NOT EXISTS alert (
			`id` INT(10) NOT NULL AUTO_INCREMENT,
			`content` VARCHAR (280) NOT NULL ,
			`author` INT(10) NOT NULL ,
			`creation_date` date NOT NULL,
			`end_date` date NOT NULL,
			`for_everyone` INT(1) NOT NULL,
			PRIMARY KEY (id)
			) $charset_collate;";

	dbDelta($query);


	$query = "CREATE TABLE IF NOT EXISTS code_ade (
			`id` INT(11) NOT NULL AUTO_INCREMENT,
			`type` VARCHAR( 255 ) NOT NULL ,
			`title` VARCHAR ( 255 ) NOT NULL ,
			`code` VARCHAR ( 255 ) NOT NULL,
			PRIMARY KEY (id)
			) $charset_collate;";

	dbDelta($query);

	$query = "CREATE TABLE IF NOT EXISTS code_alert (
			`id_alert` INT(10) NOT NULL ,
			`id_code_ade` INT(10) NOT NULL ,
			PRIMARY KEY (id_alert, id_code_ade)
			) $charset_collate;";

	dbDelta($query);

	$query = "CREATE TABLE IF NOT EXISTS code_user (
			`id_user` INT(10) NOT NULL ,
			`id_code_ade` INT(10) NOT NULL ,
			PRIMARY KEY (id_user, id_code_ade)
			) $charset_collate;";

	dbDelta($query);

	$query = "CREATE TABLE IF NOT EXISTS code_delete_account (
			`id` INT(10) NOT NULL AUTO_INCREMENT,
			`user_id` INT(10) NOT NULL ,
			`code` VARCHAR(20) NOT NULL ,
			PRIMARY KEY (id)
			) $charset_collate;";

	dbDelta($query);

	$query = "CREATE TABLE IF NOT EXISTS informations (
			`ID_info` INT(20) NOT NULL AUTO_INCREMENT,
			`title` VARCHAR ( 255 ) NOT NULL ,
			`author` VARCHAR ( 255 ) NOT NULL ,
			`creation_date` date NOT NULL,
			`end_date` date NOT NULL,
			`content` VARCHAR( 255 ) NOT NULL ,
			`type` VARCHAR ( 255 ) NOT NULL ,
			PRIMARY KEY  (ID_info)
			) $charset_collate;";

	dbDelta($query);
}

/**
 * Create all roles
 */
function createRoles()
{
	$result = add_role(
		'secretaire',
		__('Secretaire'),
		array(
			'read' => true,  // true allows this capability
			'edit_posts' => true,
			'delete_posts' => false, // Use false to explicitly deny
		)
	);

	$result = add_role(
		'television',
		__('Television'),
		array(
			'read' => true,  // true allows this capability
			'edit_posts' => true,
			'delete_posts' => false, // Use false to explicitly deny
		)
	);

	$result = add_role(
		'etudiant',
		__('Etudiant'),
		array(
			'read' => true,  // true allows this capability
			'edit_posts' => true,
			'delete_posts' => false, // Use false to explicitly deny
		)
	);

	$result = add_role(
		'enseignant',
		__('Enseignant'),
		array(
			'read' => true,  // true allows this capability
			'edit_posts' => true,
			'delete_posts' => false, // Use false to explicitly deny
		)
	);

	$result = add_role(
		'technicien',
		__('Technicien'),
		array(
			'read' => true,  // true allows this capability
			'edit_posts' => true,
			'delete_posts' => false, // Use false to explicitly deny
		)
	);

	$result = add_role(
		'directeuretude',
		__('Directeur etude'),
		array(
			'read' => true,  // true allows this capability
			'edit_posts' => true,
			'delete_posts' => false, // Use false to explicitly deny
		)
	);
}