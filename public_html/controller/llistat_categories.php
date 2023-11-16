<?php
 // controller/llistat_categories.php

 require_once __DIR__.'/model/connectBD.php';
 require_once __DIR__.'/model/categoria.php';
 
 $categories = getCategories(); // Aquesta crida és al model

 include __DIR__.'/view/llistat_categories.php';

 ?>
