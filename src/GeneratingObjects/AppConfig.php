<?php

namespace App\GeneratingObjects;

class AppConfig
{
    private static ?AppConfig $instance = null;
    private CommsManager $commsManager;

    private function __construct()
    {
        $this->init();
    }

    public static function getInstance(): AppConfig
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getCommsManager(): CommsManager
    {
        return $this->commsManager;
    }

    private function init(): void
    {
        $this->commsManager = match (Settings::$COMMSTYPE) {
            'Mega' => new MegaCommsManager(),
            default => new BloggsCommsManager(),
        };
    }
}
