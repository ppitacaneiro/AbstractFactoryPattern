<?php
class Imac implements TechnicalSheetInterface {
    public function getModel(): string
    {
        return 'iMac';
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