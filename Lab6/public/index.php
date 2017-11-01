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
    $filmController->commitUpdateAction($_POST['editCustId'],$_POST['firstName'],$_POST['lastName']);
}
elseif (isset($_POST['search'])){
    $filmController->searchAction($_POST['search']);
}

elseif (isset($_GET['idDelete'])){
    $filmController->deleteAction($_GET['idDelete']);
}

elseif (isset($_POST['DeleteBtn']))
{
    $filmController->commitDeleteAction($_POST['editCustId']);
}

elseif(isset($_POST['add'])){
    $filmController->addActor();
}

elseif(isset($_POST['AddBtn'])){
    $filmController->commitAddAction($_POST['id'],$_POST['firstName'],$_POST['lastName']);

}


else
{
    $filmController->displayAction();
}


?>