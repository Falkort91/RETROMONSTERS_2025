<?php

//ROUTE DETAIL MONSTER
//PATERN : "?monster=show&id=x
//CTRL : monstersController
//ACTION : showAction
if(isset($_GET['monsters'])):
    include_once '../app/routers/monsters.php';

//ROUTE ADD MONSTER
//PATERN : "?addmonster
//CTRL : addmonsterController
//ACTION : addAction
elseif(isset($_GET['addmonster'])):
    include_once '../app/controllers/addmonsterController.php';
    \App\Controllers\AddMonsterController\addAction($connexion);

//VIEW : monsters/show.php
//ROUTE PAR DEFAUT
//PATERN : ?
//CTRL : pagesController
//ACTION : homeAction
//VIEW: pages.home
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;
