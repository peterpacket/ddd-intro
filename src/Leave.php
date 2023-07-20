<?php

namespace src;

class Leave
{
    private Employee $employee;

    private LeaveRequestStatus $status;

    private function __construct(){}

    public static function requestNew(Employee $employee): self
    {
        $request = new self;
        $request->employee = $employee;
        $request->status = LeaveRequestStatus::Pending;

        return $request;
    }













    public function employeeThatMadeTheRequest(): Employee
    {
        return $this->employeeThatMadeTheRequest;
    }

    public function leaveRequestStatus(): LeaveRequestStatus
    {
        return $this->leaveRequestStatus;
    }

    public function finalisedBy(): ?Manager
    {
        return $this->finalisedBy;
    }
}