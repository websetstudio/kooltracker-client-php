<?php

namespace WebsetStudio\KoolTrackerClient\Model;

interface UserInterface
{
    /**
     * @return string|null
     */
    public function getBirthDate(): ?string;

    /**
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * @return string|null
     */
    public function getFirstName(): ?string;

    /**
     * @return string|null
     */
    public function getLastName(): ?string;

    /**
     * @return string|null
     */
    public function getPhone(): ?string;

    /**
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * @return string|null
     */
    public function getZipCode(): ?string;

    /**
     * @return string|null
     */
    public function getCustom1(): ?string;

    /**
     * @return string|null
     */
    public function getCustom2(): ?string;

    /**
     * @return string|null
     */
    public function getUid(): string;

    /**
     * @return \DateTimeInterface
     */
    public function getOptInDate(): \DateTimeInterface;

    /**
     * @return string|null
     */
    public function getOptInUrl(): string;
}
