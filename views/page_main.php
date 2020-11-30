<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fogyás</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header>
            <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">A fogyás kulcsa</h1>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        
        <section>
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer></footer>
    </body>
</html>
