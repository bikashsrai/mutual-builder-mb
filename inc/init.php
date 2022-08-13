<?php
/**
 * load all the required files
 * @packages kangaroo education
 */

 $files_loader=array(
   
   'inc/acf-blocks/mb-theme-acf-block-category.php',
   'inc/acf-blocks/mb-theme-acf-blocks.php',
   'inc/acf-blocks/mb-theme-render-callback.php',
   
 );

 foreach ($files_loader as $file){
    if(file_exists(get_template_directory().'/'.$file)){
        locate_template($file,true,true);
    }
 }
 unset($file);