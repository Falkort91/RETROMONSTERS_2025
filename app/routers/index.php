<?php

//ROUTE DETAIL MONSTER
//PATERN : "?monster=show&id=id
//CTRL : monstersController
//ACTION : showAction
if(isset($_GET['monsters'])):
    include_once '../app/routers/monsters.php';

//VIEW : monsters/show.php
//ROUTE PAR DEFAUT
//PATERN : ?
//CTRL : PagesController
//ACTION : homeAction
//VIEW: pages.home
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;
