<?php
add_action('acf/init','mb_theme_init_block_types');
function mb_theme_init_block_types(){

    //check function exists
    if(function_exists('acf_register_block_type')){
        //register the home block
        acf_register_block_type(array(
            'name'=>'mb-theme-home', //a unique name that identifies the block
            'title'=>__('The Home'), //The display for your block
            'description'=>__('A custom block for home'), //optional
            'render_template' => 'template-parts/blocks/content-home.php',
			'category'        => 'mb-blocks',
			'icon'            => 'admin-appearance',// optional
			'keywords'        => array( 'quote', 'mention' ), //optional
			'mode'            => 'edit', //optional
			'supports'        => array( //optional
					'mode'  => false,
					'align' => false,
				), 
            
            ));

        
                 
                 






    }
}