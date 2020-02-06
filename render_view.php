<?php
    // Basic template rendering - also accepts a true/false flag which returns the buffered output instead of rendering it - essential for Wordpress shortcodes
    function render_view($view, $data = [], $return = false){
        extract($data);
        $path = './views/'. $view . '.php';
        if($return){
          ob_start();
          require($path);
          return ob_get_clean();
        } else {
          require($path);
        }        
    }