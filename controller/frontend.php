<?php

require('model/frontendModel.php');



function listPosts()
{
    $posts = getPosts();

    view('frontend/listPostsView',[
        'posts' => $posts
    ]);
}

function post($params)
{
    $post = getPost($params['id']);
    $comments = getComments($params['id']);

    view('frontend/postView',[
        'post' => $post,
        'comments' => $comments
    ]);
}

// Visualisation de la page contact
function contact()
{
   view('frontend/Contact',['']);
}

// Visualisation de la page contact
function inscription()
{
   view('frontend/inscription',['']);
}



function addComment($param)
{
    $affectedLines = postComment($param['id'], $param['author'],$param ['comment']);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $param['id']);
    }
}
