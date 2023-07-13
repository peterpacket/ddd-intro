# Intro to DDD

## Use Case

As an employee, I want to request a leave. I can request a leave for a period of 1 or more days. 
I can not request a leave longer then the days I have open in my balance. 
If I want, I can add an additional comment to my request to provide context for my manager.

As a manager, I should be aware of pending leave requests. 
I can either approve or deny a request. When I deny a request, 
I must give a reason for the denial. No reason is needed when approving a request.

### Ubiquitous Language
Employee
Leave
Balance
LeaveRequest
Manager
Pending leave request
Deny a request
Reason for the denial
Approving a request
Comment of request
Day
Period
Requesting a leave
Context

### Entities
LeaveRequest
Balance

### Value objects
Employee
Manager
Leave
OpenDays
LeaveRequestStatus: Denied/Approved/Pending
DenialReason
ContextComment
Day
Period