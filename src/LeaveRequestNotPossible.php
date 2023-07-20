<?php

namespace src;

class LeaveRequestNotPossible extends \Exception
{

    public static function notEnoughAvailableDays(): self
    {
        return new self;
    }
}