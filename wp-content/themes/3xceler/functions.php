<?php


// telefones
function getNumbers($type){
    if($type == 'fixo-sp'){
        return '11 2729.8581';
    }if($type == 'fixo-sp-2'){
        return '11 2729.8583';
    }elseif($type == 'fixo-natal'){
        return '84 3113.1420' ;
    }elseif($type == 'whatsapp'){
        return '11 94982-6261' ;
    }
}

//registrando visitas
function ed_set_post_views($postID) {
	$count_key = 'ed_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count); 
	}
}

function hoist_object() {
	global $wp;
  
	// URLS
	$theme_url = get_bloginfo('template_url');
	$admin_url = admin_url('admin-ajax.php');
	$home_url = home_url('/');
	$current_url = home_url($wp->request);
	$is_front_page = is_front_page();
	$page_obj = get_queried_object();
  
	$hoist = [
	  'theme_url'       => $theme_url,
	  'admin_url'       => $admin_url,
	  'home_url'        => $home_url,
	  'current_url'     => $current_url,
	  'is_single'       => is_single(),
	  'is_front_page'   => $is_front_page,
	  'page'            => $page_obj,
	  'currentObjectID' => get_queried_object_id()
	];
  
	$hoist = json_encode($hoist);
  
	if ( $hoist ) {
	  wp_localize_script('app-js', 'hoist', $hoist);
	}
}
add_action('wp_enqueue_scripts', 'hoist_object');


// get post more visited
function load_post_more_visited(){
	$requested_page = intval($_POST['pageOffset']);
	$dlist = explode(",", $_POST['list']);

	// var_dump($dlist);
	$posts = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 8,
		'meta_key' => 'ed_post_views_count',
		'orderby' => 'meta_value_num',
		'paged' => $paged = $requested_page,
		'post__not_in' => $dlist,
	));
	if($posts->have_posts()){
		while($posts->have_posts()){
			$posts->the_post();
			$args = array(
				'link' => get_permalink(),
				'title' => get_the_title(), 
				'image' => get_field('imagem')
			);
			echo '<div class="col-lg-3 col-12">';
				get_template_part('includes/components/card-blog', null, $args);
			echo '</div>';
		} 
		wp_die();
	}else{
		echo "<h3><strong style='font-size:20px;'> Nenhum Post Encontrado!')</strong></h3>";
	}

}
add_action('wp_ajax_load_post_more_visited', 'load_post_more_visited');
add_action('wp_ajax_nopriv_load_post_more_visited', 'load_post_more_visited');

// removendo library wp css
function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

//Removendo pré-buscas para melhorar a precisão dos dados
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function setup_menus() {
	register_nav_menus( array(
	  'header'   => 'Header',
	  'footer-1'   => 'Footer 1',
	  'footer-2'   => 'Footer 2',
	  'footer-3'   => 'Footer 3'
	));
}
add_action('after_setup_theme', 'setup_menus');

// MENU
function buildTree(array $elements, $parentId = 0) {
	$branch = array();
	foreach ($elements as $x) {
	$element = json_decode(json_encode($x), True);
	if ($element['menu_item_parent'] == $parentId) {
		$children = buildTree($elements, $element['ID']);
		if ($children) {
		$element['children'] = $children;
		}
		$branch[] = $element;
	}
	}
	return $branch;
}
// FIM MENU

// suport thumb
function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}
add_action('after_setup_theme', 'ed_support_thumbnails');

// limit words
function limit_words($texto, $limite, $quebra = false){
   $tamanho = strlen($texto);
   if($tamanho <= $limite){ //Verifica se o tamanho do texto é menor ou igual ao limite
      $novo_texto = $texto;
   }else{ // Se o tamanho do texto for maior que o limite
      if($quebra == true){ // Verifica a opção de quebrar o texto
         $novo_texto = trim(substr($texto, 0, $limite))."...";
      }else{ // Se não, corta $texto na última palavra antes do limite
         $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
         $novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; // Corta o $texto até a posição localizada
      }
   }
   return $novo_texto; // Retorna o valor formatado
}

/**
 * ACF Pro repeater field shortcode
 *
 * I created this shortcode function because it didn't exist and it was being requested by others
 * I originally posted it here: https://support.advancedcustomfields.com/forums/topic/repeater-field-shortcode/
 * 
 * @attr {string} field - (Required) the name of the field that contains a repeater sub group
 * @attr {string} sub_fields - (Required) a comma separated list of sub field names that are part of the field repeater group
 * @attr {string} post_id - (Optional) Specific post ID where your value was entered. Defaults to current post ID (not required). This can also be options / taxonomies / users / etc
 */
function my_acf_repeater($atts, $content = '') {
	extract(shortcode_atts(array(
		"field" => null,
		"sub_fields" => null,
		"post_id" => null
	), $atts));

	if (empty($field) || empty($sub_fields)) {
		// silently fail? is that the best option? idk
		return "";
	}

	$sub_fields = explode(",", $sub_fields);

	$_finalContent = '';

	if (have_rows($field, $post_id)) :
		while (have_rows($field, $post_id)) : the_row();

			$_tmp = $content;
			foreach ($sub_fields as $sub) {
				if($sub == 'slug'){
					$subValue = '/' . get_sub_field(trim($sub)) . '/';
				}else{
					$subValue =  get_sub_field(trim($sub));

				}
				$_tmp = str_replace("%$sub%", $subValue, $_tmp);
			}
			$_finalContent .= do_shortcode($_tmp);

		endwhile;
	else :
		$_finalContent = "$field does not have any rows";
	endif;

	return $_finalContent;
}

add_shortcode("acf_repeater", "my_acf_repeater");

// send forms
function enviaDados(){

	require_once ABSPATH . WPINC . '/class-phpmailer.php';
	require_once ABSPATH . WPINC . '/class-smtp.php';

	$secret_key = '6Lek9mQjAAAAAGP8B4Kb1yapBF-R9weQYjV5QbDU';
	$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response'];
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	$data = curl_exec($curl);
	curl_close($curl);
	$responseCaptchaData = json_decode($data);
	$sucess = $responseCaptchaData->success;

	$values = $_POST;

	if($sucess) {
		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
	   // $mail->SMTPDebug  = 4;
		$mail->isSMTP();
		$mail->Host       = 'mail.3xceler.com.br';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'disparo3x@3xceler.com.br';
		$mail->Password   = '12345879';
		$mail->SMTPSecure = 'tls';
		$mail->Port       = 587;
		$mail->From       = "Envio";
		$mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

		$mail_body = '<table style="border-collapse: collapse; border: 1px solid;">';
		$subject = !empty( $values['subject'] ) ? $values['subject'] : 'Contato pelo Site';

		unset($values['TCM_PostShown']);
		unset($values['TCM_SnippetsWrittenIds']);
		unset($values['TCM_SnippetsWrittenMd5']);
		unset($values['TCM_Cache_Query_2_']);
		unset($values['type']);
		unset($values['subject']);
		unset($values['action']);

		foreach ($values as $field => $value) {
			if($field != 'g-recaptcha-response'){
				$mail_body .= '<tr><td style="padding:10px; font-size: 16px;">' . $field . ':' . '</td>';
				$mail_body .= '<td style="font-size: 16px; padding: 10px;">';
				$mail_body .= $value;
				$mail_body .= '</td></tr>';
			}

			if ($field == 'E-mail') {
				$replyto = $value;
			}
		}

		$mail_body .= '</table>';

		if ( isset($replyto) ) {
			$mail->addReplyTo($replyto);
		}

		if  ( isset($subject) ) {
			$mail->Subject = $subject;
		}

 		$mail->setFrom('disparo3x@3xceler.com.br', 'Envio');
        $mail->addAddress('contato@3xceler.com.br', '3xceler');
        $mail->AddBCC('desenvolvimento1@3xceler.com.br', 'DEV'); // Cópia Oculta

		$mail->isHTML(true);
		$mail->Body = $mail_body;
		$mail->send();

		
		echo "
			<script> 
		
				gtag('event', 'Formulário', {
					'event_category': 'Formulário',
					'event_action' : 'Envio',
					'event_label': 'Formulário',
					'value': 'Formulário'
				});
		

    			Swal.fire({
    				title: 'Enviado com sucesso!',
    				icon: 'success'
    			});
			</script>
		";
		
	}else {
		echo "
			<script>   
				Swal.fire({
					title: 'Não foi possível enviar, você foi detectado como um robô. Tente novamente',
					icon: 'error'
				});
			</script>
		";
	}
}

// option page
function create_acf_option_pages() : void {

	if (function_exists('acf_add_options_page')) {

	  acf_add_options_page([

		'page_title'    => 'Informações Gerais',

		'menu_title'    => 'Informações',

		'menu_slug'     => 'informacoes-gerais',

	  ]);

	}

}

add_action('init', 'create_acf_option_pages');

// option page 
function create_acf_sections_pages() : void {

	if (function_exists('acf_add_options_page')) {

	  acf_add_options_page([

		'page_title'    => 'Sessões Globais',

		'menu_title'    => 'Sessões Globais',

		'menu_slug'     => 'sessoes-globais',

	  ]);

	}

}

add_action('init', 'create_acf_sections_pages');


// Formata número para whatsapp ou fixo
function formatNumber($number) {

	return preg_replace('/[^0-9]/', '', $number);

}

// Remover acentuação da string
function tirarAcentos($string){
    $string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
	return strip_tags(strtolower ($string));
}

/**
 * Enqueue scripts and styles.
 */
add_action('init', 'register_custom_styles_scripts');
function register_custom_styles_scripts() {

	// Carregar arquivos JS e CSS aqui

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/dist/build/css/bootstrap.min.css');
	wp_register_style( 'main-css', get_template_directory_uri() . '/dist/css/main.css' , array('bootstrap-css'),'1.0','all');
	wp_register_style( 'page-home', get_template_directory_uri() . '/dist/css/pages/home.css' ,  array('bootstrap-css'),'1.0','all');
	wp_register_style( 'page-otimizacao-de-sites', get_template_directory_uri() . '/dist/css/pages/otimizacao-de-sites.css' ,  array('bootstrap-css'),'1.0','all');
	wp_register_style( 'page-links-patrocinados', get_template_directory_uri() . '/dist/css/pages/links-patrocinados.css' ,  array('bootstrap-css'),'1.0','all');
	wp_register_style( 'page-criacao-de-sites', get_template_directory_uri() . '/dist/css/pages/criacao-de-sites.css' ,  array('bootstrap-css'),'1.0','all');
	wp_register_style( 'page-blog', get_template_directory_uri() . '/dist/css/pages/blog.css' ,  array('bootstrap-css'),'1.0','all');
	wp_register_style( 'page-single', get_template_directory_uri() . '/dist/css/pages/single.css' ,  array('bootstrap-css'),'1.0','all');

	wp_register_style( 'font-awesome', get_template_directory_uri() . '/dist/css/font-awesome.min.css' ,  array('bootstrap-css'),'1.0','all');
	wp_register_style( 'tracking', get_template_directory_uri() . '/dist/css/tracking.min.css' ,  array('bootstrap-css'),'1.0','all');
	wp_register_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/css/splide.min.css' ,  array('bootstrap-css'),'1.0','all');

	
	wp_register_script ( 'app-js', get_template_directory_uri() . '/dist/js/app.min.js','', null, true);
	wp_register_script ( 'popper', get_template_directory_uri() . '/dist/js/popper.min.js', '', null, true);
	wp_register_script ( 'bootstrap-js', get_template_directory_uri() . '/dist/js/bootstrap.min.js', '', null, true);
	wp_register_script ( 'splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/js/splide.min.js', '', null, true);
	wp_register_script ( 'recaptcha-js', 'https://www.google.com/recaptcha/api.js?render=6Lek9mQjAAAAAI9nJUTE9s7Qf_MN07l1LICPNlFw', '', null, true );
	wp_register_script ( 'tracking-js', get_template_directory_uri() . '/dist/js/tracking.js', array(),'1.0.0',true);
	wp_register_script ( 'polyfill', 'https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver', '', null, true);
	wp_register_script ( 'swall-alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@9', '', null, true);
	wp_register_script ( 'vanilla-js', 'https://cdn.rawgit.com/lagden/vanilla-masker/lagden/build/vanilla-masker.min.js' , '', null, true);
	wp_register_script ( 'axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js' , '', null, true);


}

function theme_scripts() {
	// css global
	wp_enqueue_style('bootstrap-css');
	wp_enqueue_style('main-css');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('splide-css');
	wp_enqueue_style('tracking');


	// $styles = array('page-home', 'page-sobre', 'page-consultorio', 'page-equipe', 'page-outras-especialidades', 'page-contato', 'page-tireoide', 'page-tratamento', 'page-blog');
	
	// css page 
	$styles = array('page-home', 'page-otimizacao-de-sites', 'page-links-patrocinados', 'page-criacao-de-sites');

	foreach ($styles as $style) {
	  if ( is_page_template($style.'.php') ) {
		wp_enqueue_style( $style );
	  }
	}
  
	if(is_single()) {
	  wp_enqueue_style( 'page-single');
	}
	if(is_home() || is_search() || is_category() || is_tag()) {
		wp_enqueue_style( 'page-blog');
		wp_enqueue_script( 'axios' );
	}
	if(is_404()) {
	  wp_enqueue_style( '404');
	}

	//global css

	// js global
	wp_enqueue_script( 'app-js' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_script( 'popper' );
	wp_enqueue_script( 'splide-js' );
	wp_enqueue_script( 'recaptcha-js' );
	wp_enqueue_script( 'tracking-js' );
	wp_enqueue_script( 'polyfill' );
	wp_enqueue_script( 'swall-alert' );
	wp_enqueue_script( 'vanilla-js' );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


?>