<?php

class Project
{
    private string $title;
    private string $description;
    private string $image;
    private array $technologies;
    private string $projectUrl;
    private string $githubUrl;

    public function __construct(
        string $title,
        string $description,
        string $image,
        array $technologies = [],
        string $projectUrl = '#',
        string $githubUrl = '#'
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->technologies = $technologies;
        $this->projectUrl = $projectUrl;
        $this->githubUrl = $githubUrl;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getTechnologies(): array
    {
        return $this->technologies;
    }

    public function getProjectUrl(): string
    {
        return $this->projectUrl;
    }

    public function getGithubUrl(): string
    {
        return $this->githubUrl;
    }
}
