<?php

namespace src\LeaveManagement\Domain;

readonly class LeaveRequested
{
    public function __construct(
        public string $leaveId,
        public string $employeeId
    ) {}
}