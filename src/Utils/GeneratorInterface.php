<?php


namespace WebsetStudio\KoolTrackerClient\Utils;

use WebsetStudio\KoolTrackerClient\Model\UserInterface;

interface GeneratorInterface
{
    public function prepareData(UserInterface $user): array;
}
