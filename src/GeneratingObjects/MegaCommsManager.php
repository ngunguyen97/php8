<?php

namespace App\GeneratingObjects;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "MegaCal header\n";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "MegaCal footer\n";
    }
}
