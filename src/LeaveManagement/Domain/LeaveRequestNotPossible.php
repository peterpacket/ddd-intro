<?php

namespace src\LeaveManagement\Domain;

class LeaveRequestNotPossible extends \Exception
{
    public static function notEnoughAvailableDays(): self
    {
        return new self('Not enough available days');
    }
}