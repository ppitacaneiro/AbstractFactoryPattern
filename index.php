<?php
require_once('./ModelFactory.php');
require_once('./TechnicalSheetClass.php');

$modelFactory = new ModelFactory();
$technicalSheet = new TechnicalSheet($modelFactory);
echo $technicalSheet->getTechnicalSheet('MAC');


?>