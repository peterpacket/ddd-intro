<?php

namespace src;

interface EventDispatcher
{

    public function dispatch($event): void;

}