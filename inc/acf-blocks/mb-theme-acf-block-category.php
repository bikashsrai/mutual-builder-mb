<?php 
function mb_theme_block_category($categories,$post){
    return array_merge(
        $categories,
        array(
            array(
            'slug'=>'mb-blocks',
            'title'=>__('MB-Blocks','mb-blocks'),
           ),
        )
        
    );

}
add_filter('block_categories','mb_theme_block_category',10,2);