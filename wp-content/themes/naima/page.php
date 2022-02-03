<?php 

get_header();

if(is_page(510)) get_template_part('wyslano', 'page'); 
elseif(is_page(26)) get_template_part('index', 'page');
else get_template_part('content', 'page');

get_footer(); 

?>