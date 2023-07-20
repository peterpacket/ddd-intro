<?php

namespace src\LeaveManagement\Domain;

class LeavePlanning
{
    private LeavePlanningId $id;
    private Employee $employee;

    private int $entitledLeaveDays;

    /** @var Leave[] */
    private array $leaveRequests;

    private array $recordedEvents = [];

    private function __construct(){}

    public static function openForEmployee(Employee $employee, int $entitledLeaveDays): self
    {
        $planning = new self;
        $planning->id = new LeavePlanningId(uniqid());
        $planning->employee = $employee;
        $planning->entitledLeaveDays = $entitledLeaveDays;
        $planning->leaveRequests = [];

        $planning->record(new LeavePlanningOpened($planning->id->value, $employee->id(), $entitledLeaveDays));

        return $planning;
    }

    public function requestLeave(): void
    {
        if ($this->balance() <= 0) {
            throw LeaveRequestNotPossible::notEnoughAvailableDays();
        }

        $leave = Leave::requestNew($this->employee);
        $this->leaveRequests[] = $leave;

        $this->record(new LeaveRequested($leave->id()->value, $this->employee->id()));
    }

    public function record($event): void
    {
        $this->recordedEvents[] = $event;
    }

    public function recordedEvents(): array
    {
        return $this->recordedEvents;
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