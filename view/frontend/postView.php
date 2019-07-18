<?php $title = htmlspecialchars('Accueil - Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<section class="row middle-content">
  <article class="col-md-12">
<h1> <?= htmlspecialchars($post['title']) ?></h1>
<span class="date-title">le <?= $post['creation_date_fr'] ?></span>


<div class="news">

    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<section id="comments" class="text-center">
  <h2>Commentaires</h2>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label class="author" for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label class="commentaire" for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input class="validate" type="submit" />
    </div>
</form>
</section>

<?php
while ($comment = $comments->fetch())
{
?>
    <div class="comment-ind">
      <p><strong><?= htmlspecialchars($comment['author']) ?></strong><span class="date-comment"> le <?= $comment['comment_date_fr'] ?></span></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
  </div>
<?php
}
?>
<?php $content ?>
</article>
</section>
