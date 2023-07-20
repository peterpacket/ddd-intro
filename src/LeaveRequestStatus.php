<?php

namespace src;

enum LeaveRequestStatus
{
    case Denied;
    case Approved;
    case Pending;
}