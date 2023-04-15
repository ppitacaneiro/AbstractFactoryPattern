<?php

class MacBookPro implements TechnicalSheetInterface {
    public function getModel(): string
    {
        return 'Macbook Pro';
    }

    public function getProccesor(): string
    {
        return 'Intel Core i7';
    }

    public function getCores(): int
    {
        return 6;
    }
}

?>