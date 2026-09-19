<?php

class Service
{
    private string $title;
    private string $description;
    private string $icon;
    private array $tags;

    public function __construct(
        string $title,
        string $description,
        string $icon,
        array $tags = []
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->icon = $icon;
        $this->tags = $tags;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getTags(): array
    {
        return $this->tags;
    }
}
