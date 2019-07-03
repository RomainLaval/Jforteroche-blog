<?php
require('libs/helpers.php');
require('controller/frontend.php');

//introspection php
// check existe
$params = [];

try {
    $params = array_filter($_REQUEST,function($key){
        return $key != 'action';
    },ARRAY_FILTER_USE_KEY);
    if (isset($_GET['action'])) {
        if (function_exists ($_GET['action'])) {
            $_GET['action']($params);
                }
        else {
            throw new Exception('erreur 404');
        }
    }
    else {
        listPosts();
    }
}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
