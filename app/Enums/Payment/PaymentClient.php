<?php

namespace App\Enums\Payment;

enum PaymentClient : int {
    case NULL = 1;
    case YOO_KASSA = 2;

    /**
     * Возвращает полное или сокращённое представление статуса.
     **/
    public function text(): string
    {

        return match ($this) {
            self::NULL => 'Без оплаты',
            self::YOO_KASSA => 'ЮКаса'
        };
    }

/*    public function relation(): string
    {

        return match ($this) {
            self::NULL => 'Без оплаты',
            self::YOO_KASSA => 'ЮКаса'
        };
    }*/
}
