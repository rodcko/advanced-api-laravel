<?php

namespace App\Exceptions;

use Exception;

class InvalidScore extends Exception
{
    private $from;
    private $to;

    public function __construct($from, $to)
    {

    }

    public function render()
    {
        return response()->json([
            trans('rating.invalidScore', [
                'from' => $this->from,
                'to' => $this->to,
            ])
        ]);
    }
}
