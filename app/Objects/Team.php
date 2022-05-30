<?php

namespace App\Objects;

class Team
{

    public function __construct(
        public readonly string $img,
        public readonly string $name,
        public readonly string $rol,
        public readonly string $description
    )
    {
    }
}
