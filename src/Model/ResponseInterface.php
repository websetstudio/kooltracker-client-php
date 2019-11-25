<?php

namespace WebsetStudio\KoolTrackerClient\Model;

interface ResponseInterface
{
    public function isSuccessful();
    public function getMessage();
}
