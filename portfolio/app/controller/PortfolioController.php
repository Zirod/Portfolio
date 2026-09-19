<?php

class PortfolioController
{
    private Portfolio $portfolio;

    public function __construct(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    public function index(): void
    {
        $portfolio = $this->portfolio;

        require VIEW_PATH . '/index.php';
    }
}
