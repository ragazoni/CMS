<?php
/**
* Plugin Name: Gerenciador de treino
* Plugin URI: http://www.senac.com.br
* Description: Plugin para Atletas
* Author: Adriana e Anna
* Author URI: http://www.adrianaeanna.com.br
* License: CC BY
*/

 register_activation_hook(__FILE__, 
                            'gerenciador_de_treinos');

function gerenciador_de_treinos(){
	global $wpdb;
	global $table_prefix;

	$wpdb -> query("CREATE TABLE {$table_prefix}gerenciador_de_treinos(id NULL AUTO_INCREMENT PRIMARY KEY,
																		nome VARCHAR(30) NOT NULL,
																		atividade VARCHAR(20) NOT NULL,
																		data DATE NOT NULL,
																		pace INT NOT NULL,
																		distancia INT NULL,
																		calorias INT NULL,
																		carga_horaria INT");


	$page_title = 'Gerenciador de treinos';

	$page = get_page_by_title($page_title);

	//
}
?>