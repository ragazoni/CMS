<?php
/**
* Plugin Name: Gerenciador de treino
* Plugin URI: http://www.senac.com.br
* Description: Plugin para Atletas
* Author: Adriana e Anna
* Author URI: http://www.adrianaeanna.com.br
* License: CC BY
*/
//_FILE_ constante (arquivo)

register_activation_hook( __FILE__ , 'criar_tabelas_gerenciador');

function criar_tabelas_gerenciador(){
	
	global $wpdb;

	$nome_tabela = $wpdb->prefix . 'gerenciador_treinos';

	$sql = 'CREATE TABLE ' . $nome_tabela . '(
		nome VARCHAR(255) NOT NULL,
		atividade VARCHAR(255) NOT NULL,
		data DATE,
		pace INT NOT NULL,
		distancia INT NOT NULL,
		calorias INT NOT NULL,
		carga_horaria INT NOT NULL);';

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);

		}

//Tela para gravar diploma dentro do wp-admin
add_action('admin_menu', 'tela_gravar_treino');
function tela_gravar_treino(){ 

	add_submenu_page( 	'options-general.php',
						'Gerenciado de Treinos',
						'Gravar Treino',
						'administrator',
						'validador-de-treino-config',
						'pagina_para_gravar_treino');
}

function pagina_para_gravar_treino(){

    global $wpdb;
    global $table_prefix;

    if(isset($_POST['nome_usuario']) && 
		isset($_POST['data']) &&
		isset($_POST['nome_atividade']) &&
		isset($_POST['carga_hora']) && 
		isset($_POST['calorias']) &&
		isset($_POST['pace']) &&
    	isset($_POST['km'])){
        
        if(!empty($_POST['nome_usuario']) && 
			!empty($_POST['data']) &&
			!empty($_POST['nome_atividade']) &&
			!empty($_POST['carga_hora']) &&
			!empty($_POST['calorias']) &&
			!empty($_POST['pace']) &&
			!empty($_POST['km'])){
            


            $cod_autenticacao = md5(microtime());

            if($wpdb->query("INSERT INTO 
									{$table_prefix}validador_de_diploma
									( nome,
									  curso,
									  data,
									  cod_autenticacao)
									VALUES
									( 

										'{$_POST['nome_do_aluno']}',
										'{$_POST['nome_do_curso']}',
										'{$_POST['emitido_em']}',
										'$cod_autenticacao')")) {

					$msg = "Código gerado: $cod_autenticacao";					
				
			}else{
					$msg = 'Erro ao gravar diploma';
			}


        } else {
            $msg = 'Os campos são obrigatórios';
        }
    }

    $diplomas = $wpdb->get_results("SELECT
    									nome,
    									curso,
    									data,
    									cod_autenticacao
    									FROM {$table_prefix}validador_de_diploma");
    									
    
    include('template_config.php');

}
?>