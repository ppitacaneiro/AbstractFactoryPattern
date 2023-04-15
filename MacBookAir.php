<?php
class MacBookAir implements TechnicalSheetInterface {
    public function getModel(): string
    {
        return 'Macbook Air';
    }

    public function getProccesor(): string
    {
        return 'Intel Core i3';
    }

    public function getCores(): int
    {
        return 2;
    }
}

?>