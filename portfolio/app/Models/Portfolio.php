<?php

class Portfolio
{
    private string $name;
    private string $job;
    private string $description;
    private string $profileImage;

    private array $stats;
    private array $services;
    private array $experiences;
    private array $projects;
    private array $technologies;
    private array $contact;
    private array $socials;

    public function __construct(
        string $name,
        string $job,
        string $description,
        string $profileImage,
        array $stats,
        array $services,
        array $experiences,
        array $projects,
        array $technologies,
        array $contact,
        array $socials
    ) {
        $this->name = $name;
        $this->job = $job;
        $this->description = $description;
        $this->profileImage = $profileImage;
        $this->stats = $stats;
        $this->services = $services;
        $this->experiences = $experiences;
        $this->projects = $projects;
        $this->technologies = $technologies;
        $this->contact = $contact;
        $this->socials = $socials;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getJob(): string
    {
        return $this->job;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getProfileImage(): string
    {
        return $this->profileImage;
    }

    public function getStats(): array
    {
        return $this->stats;
    }

    public function getServices(): array
    {
        return $this->services;
    }

    public function getExperiences(): array
    {
        return $this->experiences;
    }

    public function getProjects(): array
    {
        return $this->projects;
    }

    public function getTechnologies(): array
    {
        return $this->technologies;
    }

    public function getContact(): array
    {
        return $this->contact;
    }

    public function getSocials(): array
    {
        return $this->socials;
    }
}
