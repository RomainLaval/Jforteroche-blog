    	     <section class="row middle-content">
             <article class="col-md-8">
             <?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>#comments">Commentaires</a></em>
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire le chapitre</a></em>


        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
           </article>
<aside class="col-md-4" id="auteur">
  <?php
   include('view/frontend/author.php');
   ?>
 </aside>
</section>
