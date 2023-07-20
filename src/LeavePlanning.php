<?php

namespace src;

class LeavePlanning
{

    private Employee $employee;

    private int $entitledLeaveDays;

    /** @var Leave[] */
    private array $leaveRequests;

    private function __construct(){}

    public static function openForEmployee(Employee $employee, int $entitledLeaveDays): self
    {
        $planning = new self;
        $planning->employee = $employee;
        $planning->entitledLeaveDays = $entitledLeaveDays;
        $planning->leaveRequests = [];

        return $planning;
    }

    public function requestLeave(): void
    {
        if ($this->balance() <= 0) {
            throw LeaveRequestNotPossible::notEnoughAvailableDays();
        }

        $this->leaveRequests[] = Leave::requestNew($this->employee);
    }

    private function balance(): int
    {
        return $this->entitledLeaveDays - count($this->leaveRequests);
    }

    public function employee(): Employee
    {
        return $this->employee;
    }
}