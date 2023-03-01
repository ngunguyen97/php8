<?php

namespace App\Principles;

class Lesson
{
    public const FIXED = 1;
    public const TIMED = 2;

    public function __construct(protected int $duration, private int $costtype = 1)
    {
    }

    public function cost(): int
    {
        switch ($this->costtype) {
            case self::TIMED:
                return 5 * $this->duration;

                break;

            case self::FIXED:
                return 30;

                break;

            default:
                $this->costtype = self::FIXED;

                return 40;
        }
    }

    public function chargeType(): string
    {
        switch ($this->costtype) {
            case self::TIMED:
                return 'hourly rate';

                break;

            case self::FIXED:
                return 'fixed rate';

                break;

            default:
                $this->costtype = self::FIXED;

                return 'fixed rate';
        }
    }
}
