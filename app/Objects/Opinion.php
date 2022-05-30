<?php

namespace App\Objects;

class Opinion
{

    public function __construct(
        private string $img,
        private string $name,
        private string $career,
        private string $description
    )
    {
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCareer(): string
    {
        return $this->career;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


}
