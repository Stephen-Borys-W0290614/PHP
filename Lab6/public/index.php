<?php

require_once '../controller/FilmController.php';
$true = true;
$filmController = new FilmController();

if(isset($_GET['idUpdate']))
{
    $filmController->updateAction($_GET['idUpdate']);
}
elseif (isset($_POST['UpdateBtn']))
{
    $custController->commitUpdateAction($_POST['editCustId'],$_POST['firstName'],$_POST['lastName']);
}

else
{
    $filmController->displayAction();
}

?>