<?php

namespace MercadoPago\Resources\Payment;

use MercadoPago\Serialization\Mapper;

/** BankInfo class. */
class BankInfo
{
    /** Class mapper. */
    use Mapper;

    /** Payer info. */
    public $payer;

    /** Collector info. */
    public $collector;

    /** Is same bank account owner. */
    public $is_same_bank_account_owner;

    private $map = [
        "payer" => "MercadoPago\Resources\Payment\BankInfoPayer",
        "collector" => "MercadoPago\Resources\Payment\BankInfoCollector",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap()
    {
        return $this->map;
    }
}
