<?php

namespace App\Models;

class Language
{
    private int $id;

    private string $name;

    public const TABLE = 'languages';

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
