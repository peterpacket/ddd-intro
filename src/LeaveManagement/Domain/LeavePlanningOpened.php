<?php

namespace src\LeaveManagement\Domain;

readonly class LeavePlanningOpened
{
    public function __construct(
        public string $id,
        public string $employeeId,
        public int $entitledLeaveDays
    ) {}
}