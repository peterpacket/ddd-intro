<?php

namespace src\LeaveManagement\Domain;

readonly class LeaveId
{
    public function __construct(public string $value) {}

    public function __toString(): string
    {
        return $this->value;
    }
}