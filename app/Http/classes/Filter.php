<?php

namespace App\Http\classes;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Filter
{
    protected string $tableName;
    protected string $orderBy;
    protected array $filters;
    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
    }
    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }
    public function setOrderBy(string $orderBy)
    {
        $this->orderBy = $orderBy;
    }
    public function run()
    {
        $query = DB::table($this->tableName);
        foreach ($this->filters as $filter) {
            if ($filter[1] != null) {
                $query->where($filter[0], $filter[1]);
            }
        }
        return $query;
    }
}