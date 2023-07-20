<?php

namespace src;

class LeavePlanningRepository
{
    private array $leavePlannings = [];

    public function fetchForEmployee(Employee $employee): LeavePlanning
    {
        return $this->leavePlannings[$employee->id()];
    }

    public function add(LeavePlanning $planning)
    {
        $this->leavePlannings[$planning->employee()->id()] = $planning;
    }
}