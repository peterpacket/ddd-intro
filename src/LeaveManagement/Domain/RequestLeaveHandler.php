<?php

namespace src\LeaveManagement\Domain;

use src\EventDispatcher;

readonly class RequestLeaveHandler
{
    public function __construct(
        private LeavePlanningRepository $leavePlanningRepository,
        private EventDispatcher $eventDispatcher
    ) {}


    public function __invoke(RequestLeave $command)
    {
        $employee = new Employee($command->employeeId);
        $leavePlanning = $this->leavePlanningRepository->fetchForEmployee($employee);

        $leavePlanning->requestLeave();

        $this->leavePlanningRepository->store($leavePlanning);

        $events = $leavePlanning->recordedEvents();
        foreach ($events as $event) {
            $this->eventDispatcher->dispatch($event);
        }
    }
}