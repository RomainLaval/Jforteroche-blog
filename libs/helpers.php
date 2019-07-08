<?php
//helper
function view ($path,$args){
    ob_start();
    extract($args);
    require('view/'.$path.'.php');
    $content = ob_get_clean();
    require('view/frontend/templateFrontend.php');
} 
