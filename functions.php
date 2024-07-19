<?php 
add_theme_support('title-tag');
add_theme_support('menus');

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_6687db5d464fa',
	'title' => 'Accueil',
	'fields' => array(
		array(
			'key' => 'field_66990e74d4b95',
			'label' => 'Home Header',
			'name' => 'home__header',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_669914b9c4f16',
			'label' => 'header_presentation',
			'name' => 'header_presentation',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_6687db5fa11fa',
			'label' => 'Titre Header',
			'name' => 'home__header_presentation_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6687e9dbfb9ed',
			'label' => 'Sous-titre Header',
			'name' => 'home__header_presentation_subtitle',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6699152bf929c',
			'label' => 'header blocs',
			'name' => 'home__header_blocs',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_6699157ef929d',
			'label' => 'Bloc 1',
			'name' => 'bloc_1',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_6690293a3da58',
			'label' => 'Titre',
			'name' => 'home__header_bloc_1_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_669915f3420f8',
			'label' => 'sous-titre',
			'name' => 'home__header_bloc_1_subtitle',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66991712876d6',
			'label' => 'Bouton',
			'name' => 'home__header_bloc_1_button',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_66991712876d7',
					'label' => 'Texte bouton',
					'name' => 'home__header_bloc_1_button_text',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_66991712876d8',
					'label' => 'Lien bouton',
					'name' => 'home__header_bloc_1_button_link',
					'aria-label' => '',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
				),
			),
		),
		array(
			'key' => 'field_6699164a83828',
			'label' => 'Bloc 2',
			'name' => 'bloc_2',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_6699164a83829',
			'label' => 'Titre',
			'name' => 'home__header_bloc_2_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6699164a8382a',
			'label' => 'sous-titre',
			'name' => 'home__header_bloc_2_subtitle',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66991692ee7af',
			'label' => 'Bouton',
			'name' => 'home__header_bloc_2_button',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_66991692ee7b0',
					'label' => 'Texte bouton',
					'name' => 'home__header_bloc_2_button_text',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_66991692ee7b1',
					'label' => 'Lien bouton',
					'name' => 'home__header_bloc_2_button_text',
					'aria-label' => '',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
				),
			),
		),
		array(
			'key' => 'field_66991767b2bb1',
			'label' => 'Home Body',
			'name' => 'home__body',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_66991767b2bb2',
			'label' => 'Call to action',
			'name' => 'home__body_calltoaction',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_66991767b2bb3',
			'label' => 'Titre',
			'name' => 'home__body_calltoaction_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66991767b2bb4',
			'label' => 'Sous-titre',
			'name' => 'home__body_calltoaction_subtitle',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668a8b718b7fb',
			'label' => 'Image',
			'name' => 'home__body_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_66991767b2bb5',
			'label' => 'Soft kills',
			'name' => 'home__body_softkills',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
			),
		),
		array(
			'key' => 'field_66992490f1450',
			'label' => 'Titre',
			'name' => 'home__body_softkills_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_669919b0923f6',
			'label' => 'soft kills',
			'name' => 'home__body_softkills',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Ajouter un élément',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_66991f4025350',
					'label' => 'Texte',
					'name' => 'texte',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_669919b0923f6',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '6',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_668fae61ecc0f',
	'title' => 'Expériences',
	'fields' => array(
		array(
			'key' => 'field_6690ecc9fa878',
			'label' => 'Experiences__job_title',
			'name' => 'experiences__job_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668fd524bad0f',
			'label' => 'experiences job',
			'name' => 'experiences__job',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Ajouter un élément',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_668fae63f795c',
					'label' => 'job',
					'name' => 'job',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_668fd524bad0f',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'experiences',
			),
		),
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '49',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_6690f5d0a4c9b',
	'title' => 'Poste occupé',
	'fields' => array(
		array(
			'key' => 'field_6690f5ecea99f',
			'label' => 'Intitulé du poste',
			'name' => 'job-held__job_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6690f716e2122',
			'label' => 'sous-titre du poste occupé',
			'name' => 'job-held__job_subtitle',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668fce19e6953',
			'label' => 'entreprise',
			'name' => 'job-held__entreprise_name',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668fcdd7415ce',
			'label' => 'Image entreprise',
			'name' => 'job-held__entreprise_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_668faeb5f795d',
			'label' => 'Description',
			'name' => 'job-held__job_description',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_6690f65eea9a0',
			'label' => 'Date début',
			'name' => 'job-held__date_start',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd M Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
		array(
			'key' => 'field_668fb025e067f',
			'label' => 'Date fin',
			'name' => 'job-held__date_end',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'j M Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
		array(
			'key' => 'field_668fb0a064792',
			'label' => 'date-fin',
			'name' => 'date-fin',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd M Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'jobs_held',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_669132545f53f',
	'title' => 'Projet',
	'fields' => array(
		array(
			'key' => 'field_669132544f27a',
			'label' => 'Titre projet',
			'name' => 'project_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'project',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

function cptui_register_my_cpts() {

	/**
	 * Post Type: projects.
	 */

	$labels = [
		"name" => esc_html__( "projects", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "project", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Projet", "custom-post-type-ui" ),
		"all_items" => esc_html__( "Tous les projets", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Ajouter un nouveau", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Ajouter un nouveau projet", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Modifier projet", "custom-post-type-ui" ),
		"new_item" => esc_html__( "Nouveau projet", "custom-post-type-ui" ),
		"view_item" => esc_html__( "Voir projet", "custom-post-type-ui" ),
		"view_items" => esc_html__( "Voir projets", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Recherche de projets", "custom-post-type-ui" ),
		"not_found" => esc_html__( "Aucun projets trouvé", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "Aucun projets trouvé dans la corbeille", "custom-post-type-ui" ),
		"parent" => esc_html__( "projet parent :", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Image mise en avant pour ce projet", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Définir l’image mise en avant pour ce projet", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Retirer l’image mise en avant pour ce projet", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Utiliser comme image mise en avant pour ce projet", "custom-post-type-ui" ),
		"archives" => esc_html__( "Archives de projet", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insérer dans projet", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Téléverser sur ce projet", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filtrer la liste de projets", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Navigation de liste de projets", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Liste de projets", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Attributs de projets", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "projet", "custom-post-type-ui" ),
		"item_published" => esc_html__( "projet publié", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "projet publié en privé.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "projet repassé en brouillon.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "projet mis à la corbeille.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "projet planifié", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "projet mis à jour.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "projet parent :", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "projects", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "project", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "project", $args );

	/**
	 * Post Type: jobs_held.
	 */

	$labels = [
		"name" => esc_html__( "jobs_held", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "job_held", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Poste occupé", "custom-post-type-ui" ),
		"all_items" => esc_html__( "Tous les postes occupés", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Ajouter un nouveau", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Ajouter un nouveau poste occupé", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Modifier poste occupé", "custom-post-type-ui" ),
		"new_item" => esc_html__( "Nouveau poste occupé", "custom-post-type-ui" ),
		"view_item" => esc_html__( "Voir poste occupé", "custom-post-type-ui" ),
		"view_items" => esc_html__( "Voir postes occupés", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Recherche de postes occupés", "custom-post-type-ui" ),
		"not_found" => esc_html__( "Aucun postes occupés trouvé", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "Aucun postes occupés trouvé dans la corbeille", "custom-post-type-ui" ),
		"parent" => esc_html__( "poste occupé parent :", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Image mise en avant pour ce poste occupé", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Définir l’image mise en avant pour ce poste occupé", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Retirer l’image mise en avant pour ce poste occupé", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Utiliser comme image mise en avant pour ce poste occupé", "custom-post-type-ui" ),
		"archives" => esc_html__( "Archives de poste occupé", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insérer dans poste occupé", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Téléverser sur ce poste occupé", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filtrer la liste de postes occupés", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Navigation de liste de postes occupés", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Liste de postes occupés", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Attributs de postes occupés", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "poste occupé", "custom-post-type-ui" ),
		"item_published" => esc_html__( "poste occupé publié", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "poste occupé publié en privé.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "poste occupé repassé en brouillon.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "poste occupé mis à la corbeille.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "poste occupé planifié", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "poste occupé mis à jour.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "poste occupé parent :", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "jobs_held", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "jobs_held", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "jobs_held", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

