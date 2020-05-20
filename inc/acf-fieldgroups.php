<?
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ebbfa05183c5',
	'title' => 'Cat',
	'fields' => array(
		array(
			'key' => 'field_5ebbffb1bd7a9',
			'label' => 'Cat name',
			'name' => 'cat_name',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ebbfc05cd146',
			'label' => 'Cat description',
			'name' => 'cat_description',
			'type' => 'textarea',
			'instructions' => 'What we need to know about this cat.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5ebbfb7a624ac',
			'label' => 'Cat age',
			'name' => 'cat_age',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y g:i a',
			'return_format' => 'm.d.20y',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5ebbfc47cd147',
			'label' => 'Cat color',
			'name' => 'cat_color',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ebbfc9dcd148',
			'label' => 'Cat weight',
			'name' => 'cat_weight',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5ebbfcc8cd149',
			'label' => 'Cat adopted',
			'name' => 'cat_adopted',
			'type' => 'date_time_picker',
			'instructions' => 'Fill in the date it got adopted.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y g:i a',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cat',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ebbb3e14a6cc',
	'title' => 'Hero content',
	'fields' => array(
		array(
			'key' => 'field_5ebbb40908596',
			'label' => 'Hero',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5ebbb42b08597',
			'label' => 'Hero titel',
			'name' => 'hero_titel',
			'type' => 'text',
			'instructions' => 'Add hero title for front page hero',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ebbb45f08598',
			'label' => 'Hero subtitle',
			'name' => 'hero_subtitle',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ebbb48108599',
			'label' => 'Image',
			'name' => 'hero_image',
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
			'preview_size' => 'large',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5ebbb4f20859a',
			'label' => 'Background Color',
			'name' => 'hero_background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ed8588',
		),
		array(
			'key' => 'field_5ec3c2b39d774',
			'label' => 'Hero CTA',
			'name' => 'hero_cta',
			'type' => 'url',
			'instructions' => 'Add a link to a Call to action, example; donation page or adoption page. If left blank, button will not show.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ec44ed90b4b4',
			'label' => 'Hero Text Size',
			'name' => 'hero_text_size',
			'type' => 'number',
			'instructions' => 'Adjust size of the content text, Hero Front Page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 1,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'Rem',
			'min' => 1,
			'max' => 2,
			'step' => '0.1',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
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
));

acf_add_local_field_group(array(
	'key' => 'group_5ebe598bc31d9',
	'title' => 'How to adopt',
	'fields' => array(
		array(
			'key' => 'field_5ebe59cfbb1fa',
			'label' => 'How to adopt',
			'name' => 'how_to_adopt',
			'type' => 'textarea',
			'instructions' => 'Explain one step of the adoption process',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'adoption',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ec24f793e3f7',
	'title' => 'Success Stories',
	'fields' => array(
		array(
			'key' => 'field_5ec24f816e661',
			'label' => 'Success Story',
			'name' => 'success_story',
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
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'success_stories',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ec3f16c86031',
	'title' => 'Theme Options',
	'fields' => array(
		array(
			'key' => 'field_5ec3f17946746',
			'label' => 'Latest Cats Options',
			'name' => '',
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'open' => 0,
			'multi_expand' => 0,
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5ec3f1d446747',
			'label' => 'Max Cats Shown',
			'name' => 'max_cats_shown',
			'type' => 'number',
			'instructions' => 'How many cats to display on front page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 4,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'items',
			'min' => 1,
			'max' => 6,
			'step' => '',
		),
		array(
			'key' => 'field_5ec41335f373f',
			'label' => 'Background Latest cats',
			'name' => 'background_latest_cats',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#f8caa2',
		),
		array(
			'key' => 'field_5ec43f9f13c65',
			'label' => 'Background Text Box Latest cats',
			'name' => 'background_text',
			'type' => 'color_picker',
			'instructions' => 'Add a Custom color for the text-box for Latest cats on the front page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#000000',
		),
		array(
			'key' => 'field_5ec442e62b422',
			'label' => 'Text Box Color',
			'name' => 'text_box_color',
			'type' => 'color_picker',
			'instructions' => 'Add a Color for All the text in the Text box on the Front Page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#f8caa2',
		),
		array(
			'key' => 'field_5ec445adc996f',
			'label' => 'Title Text size',
			'name' => 'title_text_size',
			'type' => 'number',
			'instructions' => 'Maximum value 4',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 4,
			'placeholder' => 'Change the size of the Title text on the Front Page, Maximum 7rem.',
			'prepend' => '',
			'append' => 'Rem',
			'min' => 1,
			'max' => 4,
			'step' => '0.5',
		),
		array(
			'key' => 'field_5ec44730910ba',
			'label' => 'Link Primary color',
			'name' => 'link_primary_color',
			'type' => 'color_picker',
			'instructions' => 'Choose the Primary color for the Button of the Front Page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#faebdd',
		),
		array(
			'key' => 'field_5ec448d55bc9b',
			'label' => 'Text Size',
			'name' => 'text_size',
			'type' => 'number',
			'instructions' => 'Edit the Text Size for the Front Page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 1,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'Rem',
			'min' => '0.5',
			'max' => 2,
			'step' => '0.1',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
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
));

endif;