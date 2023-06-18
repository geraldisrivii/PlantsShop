<?php

namespace App\Http\classes;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Filter
{
    protected string $className;
    protected string|null $orderBy;
    protected array $filters;

    protected array $typesOfOrderBy = [
        'popularity' => ['amountBuys', 'desc'],
        'lowPrice' => ['price', 'asc'],
        'highPrice' => ['price', 'desc'],
    ];
    public function __construct(string $className)
    {
        $this->className = $className;
    }
    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }
    public function run()
    {
        $query = $this->className::query();
        foreach ($this->filters as $filter) {
            if ($filter[1] != null) {
                if ($filter[2] == 'like') {
                    $query->where($filter[0], 'like', '%' . $filter[1] . '%');
                } else {
                    $query->where($filter[0], $filter[1]);
                }
            }
        }
        $isValidKey = false;
        foreach ($this->typesOfOrderBy as $key => $value) {
            if ($this->orderBy == $key) {
                $isValidKey = true;
            }
        }
        if ($isValidKey) {
            $query->orderBy($this->typesOfOrderBy[$this->orderBy][0], $this->typesOfOrderBy[$this->orderBy][1]);
        }
        return $query;
    }
}