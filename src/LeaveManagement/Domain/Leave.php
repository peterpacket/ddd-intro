<?php

namespace src\LeaveManagement\Domain;

class Leave
{
    private LeaveId $id;

    private Employee $employee;

    private LeaveRequestStatus $status;

    private function __construct(){}

    public static function requestNew(Employee $employee): self
    {
        $request = new self;
        $request->id = new LeaveId(uniqid());
        $request->employee = $employee;
        $request->status = LeaveRequestStatus::Pending;

        return $request;
    }

    public function id(): LeaveId
    {
        return $this->id;
    }
}