<?php

namespace src\LeaveManagement\Infrastructure;

use src\LeaveManagement\Domain\Employee;
use src\LeaveManagement\Domain\LeavePlanning;
use src\LeaveManagement\Domain\LeavePlanningRepository;

class InMemoryLeavePlanningRepository implements LeavePlanningRepository
{
    private array $leavePlannings = [];

    public function fetchForEmployee(Employee $employee): LeavePlanning
    {
        return $this->leavePlannings[$employee->id()];
    }

    public function add(LeavePlanning $leavePlanning): void
    {
        $this->store($leavePlanning);
    }

    public function store(LeavePlanning $leavePlanning): void
    {
        $this->leavePlannings[$leavePlanning->employee()->id()] = $leavePlanning;
    }
}