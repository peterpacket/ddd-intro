<?php

namespace src;

class Manager
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private array $employeesManagedByThisManager
    )
    {}
}