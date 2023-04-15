<?php
interface TechnicalSheetInterface {
    public function getModel() : string;
    public function getProccesor() : string;
    public function getCores() : int;
}

?>