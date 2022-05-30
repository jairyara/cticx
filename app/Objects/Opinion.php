<?php

namespace App\Objects;

class Opinion
{
    public function __construct(
        public readonly string $img,
        public readonly string $name,
        public readonly string $career,
        public readonly string $description
    )
    {
    }
}
