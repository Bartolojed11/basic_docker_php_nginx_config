<?php

namespace App\Repository;

use App\Models\Language;

class LanguageRepository extends Repository
{
    private string $table = Language::TABLE;

    public function findAll(): array
    {
        return $this->connection->query("SELECT * FROM {$this->table}")->fetchAll(\PDO::FETCH_CLASS, Language::class);
    }

    public function getTotalLanguages(): mixed
    {
        return $this->connection->query("SELECT count(1) as total_languages FROM {$this->table}")->fetchAll(\PDO::FETCH_CLASS, Language::class);
    }
}
