<?php

namespace WebsetStudio\KoolTrackerClient\Model;

class User implements UserInterface
{
    /** @var string $birthDate */
    protected $birthDate;

    /** @var string $email */
    protected $email;

    /** @var string $firstName */
    protected $firstName;

    /** @var string $lastName */
    protected $lastName;

    /** @var string|null $phone */
    protected $phone;

    /** @var string|null $title */
    protected $title;

    /** @var string|null $zipCode */
    protected $zipCode;

    /** @var string|null $custom1 */
    protected $custom1;

    /** @var string|null $custom2 */
    protected $custom2;

    /** @var string $uid */
    protected $uid;

    /** @var \DateTimeInterface $optInDate */
    protected $optInDate;

    /** @var string $optInUrl */
    protected $optInUrl;

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     *
     * @return User
     */
    public function setBirthDate(string $birthDate): User
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return User
     */
    public function setPhone(string $phone): User
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return User
     */
    public function setTitle(string $title): User
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return User
     */
    public function setZipCode(string $zipCode): User
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustom1(): ?string
    {
        return $this->custom1;
    }

    /**
     * @param string|null $custom1
     *
     * @return User
     */
    public function setCustom1(?string $custom1): User
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustom2(): ?string
    {
        return $this->custom2;
    }

    /**
     * @param string|null $custom2
     *
     * @return User
     */
    public function setCustom2(?string $custom2): User
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUid(): string
    {
        return $this->uid ?? '';
    }

    /**
     * @param string $uid
     *
     * @return User
     */
    public function setUid(string $uid): User
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOptInDate(): \DateTimeInterface
    {
        return $this->optInDate;
    }

    /**
     * @param \DateTimeInterface $optInDate
     *
     * @return User
     */
    public function setOptInDate(\DateTimeInterface $optInDate): User
    {
        $this->optInDate = $optInDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOptInUrl(): string
    {
        return $this->optInUrl ?? '';
    }

    /**
     * @param string $optInUrl
     *
     * @return User
     */
    public function setOptInUrl(string $optInUrl): User
    {
        $this->optInUrl = $optInUrl;

        return $this;
    }
}
