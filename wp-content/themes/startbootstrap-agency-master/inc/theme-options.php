<?php
 function consult_intigratewithvc(){
	 
	//section 1 
	 vc_map(array(
	 'name'=>__('First Section','text-donain'),
	 'description'=>'This is First Addon',
	 'base'=>'section_1_base',
	 'category'=>'Consult',
	 'icon'=> get_template_directory_uri().'/images/favicon.ico',
	 'params'=>array(
	 
		 array(
		 'param_name'=>'title_sec_1',
		 'type'=>'textfield',
		 'heading'=>'Section One Title ',
		 'value'=>'Placeholder',
        'holder'=>'div'

		 ),
			 
			 
		array(
		 'param_name'=>'title_sec_desc_1',
		 'type'=>'textarea',
		 'heading'=>'Section One Description ',
		 'value'=>'Placeholder',
       'holder'=>'div'

		 ),
			 
			 
		array(
		 'param_name'=>'title_sec_desc_1_color',
		 'type'=>'colorpicker',
		 'heading'=>'Section One Description color ',
		 ),
		 
		 
		array(
		 'param_name'=>'title_sec_1_image',
		 'type'=>'attach_image',
		 'heading'=>'Section One Image ',
		 ),
		 
	 
	 ),
	 
	));
	 
	 
 //section 3
 
 
 vc_map(array(
 	 'name'=>__('Third Section','text-donain'),
	 'description'=>'This is Third Addon',
	 'base'=>'section_3_base',
	 'category'=>'Consult',
	 'icon'=> get_template_directory_uri().'/images/favicon.ico',
	 'params'=>array(
	 
     array(
	 
	 'type'=>'param_group',
	 'heading'=>'Section 3 Items',
	 'param_name'=>'sec_3_grp',
	 'params'=>array(
	 
	 	 array(
	 
	 	 'param_name'=>'icon_image',
		 'heading'=>'Section 3 Dropdown',
		 'type'=>'dropdown',
		 'value'=>array(
		   'Select a value'=>'',
		   'Icon'=>'fontawesome',
		   'Image'=>'custom',
		 ),
	 
	 ),
	
	 array(
	 	 'param_name'=>'sec_3_icon',
		 'heading'=>'Section 3 Icon',
		 'type'=>'iconpicker',
		'dependency' => array(
			    'element' => 'icon_image',
				'value' => 'fontawesome',
			),
 
	    ),	 	 	

	 array(
	 	 'param_name'=>'sec_3_image',
		 'heading'=>'Section 3 Image',
		 'type'=>'attach_image',
		 'dependency'=>array(
		   'element'=>'icon_image',
		   'value'=>'custom',
		 ),
		 
	 ),	 
	 
	 array(
	 	 'param_name'=>'sec_3_title',
		 'heading'=>'Section 3 Title',
		 'type'=>'textfield',
		 'group'=>'Amit',
       'holder'=>'div'
		 
	 ),	 
	 
	 array(
	 	 'param_name'=>'sec_3_desc',
		 'heading'=>'Section 3 Description',
		 'type'=>'textarea',
		 'group'=>'Amit',
       'holder'=>'div'
		 
	 ),
	 
	 
	 )
	 
	 
	 ),
	 
	 

 
	 )

 ));
 
 //Blog Options
 
 
 vc_map(array(
 'name'=>'Blog Section',
 'description'=>'This is Blog',
 'base'=>'section_3_blog',
 'category'=>'Consult',
 'icon'=> get_template_directory_uri().'/images/favicon.ico',
 'params'=>array(
 
     array(
	 'param_name'=>'sec_blog_title',
	 'heading'=>'Latest Title',
	 'type'=>'textfield', 
	 ),
	 array(
                    "type" => "textfield",
                    "heading" => "Number of Posts",
                    "param_name" => "number_of_posts",
                    "admin_label" => true,
                    "holder" => "div",
                    "class" => "",
                    "value" => ''
                ),

   )
 
 ));
 
 
  
 vc_map(array(
 'name'=>'Contact Form 7 Section',
 'description'=>'This is Contact Form 7',
 'base'=>'section_cf',
 'category'=>'Consult',
 'icon'=> get_template_directory_uri().'/images/favicon.ico',
 'params'=>array(
 
     array(
	 'param_name'=>'content',
	 'heading'=>'Contact Form 7',
	 'type'=>'textarea_html', 
	 )
 )
 
 ));

 // Icon box
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Icon Box", 'buildpro'),
   "base" => "servicesbox",
   "class" => "",
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Type Box', 'buildpro'),
         "param_name" => "style",
         "value" => array(
            esc_html__('Icon', 'buildpro')     => 'icon', 
            esc_html__('Number', 'buildpro')   => 'number',
         ), 
      ),  
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'buildpro'),
         "param_name" => "icon",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'icon' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number", 'buildpro'),
         "param_name" => "num",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'number' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'buildpro'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title of box", 'buildpro')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'buildpro'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("content right.", 'buildpro')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Light Text", 'buildpro'),
         "param_name" => "light",
         "value" => "",
      ),   
    )
    ));
}


// Lastest Blog
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Latest Blog", 'buildpro'),
   "base" => "lastest_blog",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Visible", 'buildpro'),
         "param_name" => "cols",
         "value" => array(                        
                     esc_html__('3 Items', 'buildpro')   => '3',
                     esc_html__('2 Items', 'buildpro')   => '2',
                     esc_html__('4 Items', 'buildpro')   => '4',
                     ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts", 'buildpro'),
         "param_name" => "number",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Read More", 'buildpro'),
         "param_name" => "rm",
         "value" => "",
      ),
   )));
}
 
// Portfolio section


 
 
 vc_map(array(
 'name'=>'Portfolio Section',
 'description'=>'This is Portfolio',
 'base'=>'section_3_portfolio',
 'category'=>'Consult',
 'icon'=> get_template_directory_uri().'/images/favicon.ico',
 'params'=>array(
 
     array(
	 'param_name'=>'sec_portfolio_post_per_page',
	 'heading'=>'Post Per Page',
	 'type'=>'textfield', 
	 )

   )
 
 ));
 


  vc_map( array(
   "name" => esc_html__("OT Portfolio Filter", 'buildpro'),
   "base" => "portfoliof",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Consult',
   "params" => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Show", 'buildpro'),
         "param_name" => "num",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Show All", 'buildpro'),
         "param_name" => "all",
      ),
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Column', 'buildpro'),
         "param_name" => "col",
         "value" => array(
                     esc_html__('3 Columns', 'buildpro')     => '3', 
                     esc_html__('4 Columns', 'buildpro')     => '4',
                     esc_html__('2 Columns', 'buildpro')     => '2',
                  ), 
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Popup", 'buildpro'),
         "param_name" => "popup",
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Gutter", 'buildpro'),
         "param_name" => "gutter",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Width (px)", 'buildpro'),
         "param_name" => "gw",
         "dependency"  => array( 'element' => 'gutter', 'value' => 'true' ),
         "description" => esc_html__("Just enter number. Default: 10", 'buildpro'),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Filter", 'buildpro'),
         "param_name" => "filter",
         "value" => array(
                     esc_html__('Default', 'buildpro')    => 'default', 
                     esc_html__('Center', 'buildpro')     => 'center',
                     esc_html__('Hidden', 'buildpro')     => 'none',
                  ), 
      ),
    )));

 }

add_action('vc_before_init','consult_intigratewithvc');




?>