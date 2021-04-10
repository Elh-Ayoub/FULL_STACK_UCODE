<?php

interface ControllerInterface
{
    public function __construct($view);

    public function execute();
}
