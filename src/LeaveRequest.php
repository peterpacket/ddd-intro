<?php

namespace src;

class LeaveRequest
{
    public function __construct(
        private Employee $employeeThatMadeTheRequest,
        private string $denialReason,
        private LeaveRequestStatus $leaveRequestStatus = LeaveRequestStatus::Pending,
    )
    {}


    public function approve(Manager $aprovedBy){
        $this->finalisedBy = $aprovedBy;
        $this->leaveRequestStatus = LeaveRequestStatus::Approved;
    }

    public function deny(Manager $deniedBy, string $reason){
        $this->finalisedBy = $deniedBy;
        $this->denialReason = $reason;
        $this->leaveRequestStatus = LeaveRequestStatus::Denied;
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