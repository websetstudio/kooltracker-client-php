<?php

namespace WebsetStudio\KoolTrackerClient\Model;

interface ResponseInterface
{
    public function isSuccessful(): bool;
    public function getMessage(): string;
}
