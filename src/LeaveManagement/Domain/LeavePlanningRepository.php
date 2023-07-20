<?php

namespace src\LeaveManagement\Domain;

interface LeavePlanningRepository
{
    public function fetchForEmployee(Employee $employee): LeavePlanning;

    public function add(LeavePlanning $leavePlanning): void;

    public function store(LeavePlanning $leavePlanning): void;
}