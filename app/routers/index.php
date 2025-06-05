<?php
//ROUTE PAR DEFAUT
//PATERN : ?
//CTRL : PagesController
//ACTION : homeAction
//VIEW: pages.home

    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
