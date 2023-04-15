<?php
require_once('./MacBook.php');
require_once('./MacBookAir.php');
require_once('./MacBookPro.php');
require_once('./Imac.php');

class ModelFactory {
    const MACBOOK = 'MAC';
    const MACBOOK_AIR = 'MACAIR';
    const MACBOOK_PRO = 'MACPRO';
    const IMAC = 'IMAC';

    public function create(string $model) {
        switch ($model) {
            case self::MACBOOK:
                return new MacBook();

            case self::MACBOOK_AIR:
                return new MacBookAir();

            case self::MACBOOK_PRO:
                return new MacBookPro();
            
            case self::IMAC:
                return new Imac();

            default:
                return new InvalidArgumentException("The model does not exists");

        }
    }
        
}

?>