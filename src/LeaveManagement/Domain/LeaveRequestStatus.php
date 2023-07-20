<?php

namespace src\LeaveManagement\Domain;

enum LeaveRequestStatus
{
    case Denied;
    case Approved;
    case Pending;
}