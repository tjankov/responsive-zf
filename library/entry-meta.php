<?php
if(!function_exists('ResponsiveZF_entry_meta')) :
    function ResponsiveZF_entry_meta() {
        echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('Posted on %s at %s.', 'ResponsiveZF'), get_the_date(), get_the_time()) .'</time>';
        echo '<p class="byline author">'. __('Written by', 'ResponsiveZF') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
    }
endif;
?>
