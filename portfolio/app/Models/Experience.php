<?php

class Experience
{
    private string $date;
    private string $title;
    private string $company;
    private string $description;

    public function __construct(
        string $date,
        string $title,
        string $company,
        string $description
    ) {
        $this->date = $date;
        $this->title = $title;
        $this->company = $company;
        $this->description = $description;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
