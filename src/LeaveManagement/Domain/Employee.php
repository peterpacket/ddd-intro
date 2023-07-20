<?php

namespace src\LeaveManagement\Domain;

class Employee
{
    public function __construct(private string $id) {}

    public function id(): string
    {
        return $this->id;
    }
}