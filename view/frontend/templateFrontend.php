<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/4aa4a8c4ae.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
        
    <body>
    <?php 
	include('view/frontend/header.php');
?>
   
        <h1 id="titreLivre">Billet simple pour l'Alaska</h1>

    <section class="row middle-content">
    	<article class="col-md-8">
                <?= $content ?>
        </article>
        <aside class="col-md-4" id="auteur">
            <h1>À propos de Jean Forteroche</h1>
            <p><img src="/projet-4-php/public/images/jean-forteroche-fake.png" alt="portrait Jean forteroche" /></p>
            <p>Auteur à succès, Jean Forteroche réinvente le Road Trip novel dans les terres sauvages de l'Alaska</p>
            <p>Volontairement angoissant et prenant, Jean vous invite à suivre les aventures au fil de l'écriture de son livre en vous livrant régulièrement les chapitres qu'il écrit</p>
        </aside>
    </section>
    </div>

    <?php 
	include('view/frontend/footer.php');
?>
</body>
</html>
