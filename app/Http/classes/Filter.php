<?php

namespace App\Http\classes;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Filter
{
    protected string $className;
    protected int|string|null $orderById;
    protected array $filters;

    protected string|null $orderByClassName;

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
    public function setOrderBy($orderById, string $orderByClassName)
    {
        $this->orderById = $orderById;
        $this->orderByClassName = $orderByClassName;
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
        if($this->orderById == null){
            return $query;
        }
        $orderBy = $this->orderByClassName::find($this->orderById)->title;
        foreach ($this->typesOfOrderBy as $key => $value) {
            if ($orderBy == $key) {
                $isValidKey = true;
            }
        }
        if ($isValidKey) {
            $query->orderBy($this->typesOfOrderBy[$orderBy][0], $this->typesOfOrderBy[$orderBy][1]);
        }
        return $query;
    }
}