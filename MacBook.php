<?php
require_once('./TechnicalSheetInterface.php');

class MacBook implements TechnicalSheetInterface {

    public function getModel(): string
    {
        return 'Macbook';
    }

    public function getProccesor(): string
    {
        return 'Intel Core i5';
    }

    public function getCores(): int
    {
        return 4;
    }
}

?>