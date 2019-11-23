<?php

namespace WebsetStudio\KoolTrackerClient\Model;

class Response implements ResponseInterface
{
    /** @var array $answer */
    protected $answer;

    /**
     * Response constructor.
     *
     * @param array $answer
     */
    public function __construct(array $answer)
    {
        $this->answer = $answer;
    }

    public function isSuccessful(): bool
    {
        return (bool)$this->answer['success'];
    }

    public function getMessage(): string
    {
        return $this->answer['message'] ?? '';
    }
}
