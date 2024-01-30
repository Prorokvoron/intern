<?php

namespace App\Repositories;

use App\Interfaces\AbstractRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

abstract class AbstractRepository implements AbstractRepositoryInterface
{
    private string $model;
    private string $table;

    public function index():Collection
    {
       return DB::table($this->table)->get();
    }

    public function setTable(string $tableName)
    {
        $this->table = $tableName;
        return $this;
    }
}
