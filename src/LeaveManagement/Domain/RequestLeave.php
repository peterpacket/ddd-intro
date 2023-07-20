<?php

namespace src\LeaveManagement\Domain;

readonly class RequestLeave
{
    public function __construct(
        public string $employeeId
    ) {}

}