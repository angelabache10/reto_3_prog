<?php

namespace App\Models\Shared;

trait QueryScopes
{
    public function scopeFilters($query, $filters)
    {
        return $query->when($filters, function ($query, $filters) {
            foreach($filters as $filter => $value) {
                $value = strToBool($value);
                $query->where($filter, '=', $value);
            }
            
            return $query;
        });
    }
    
    public function scopeSearch($query, $searchText)
    {
        return $query->when($searchText, function ($query, $search) {
            foreach($this->search as $column) {
                $query->orWhere($column, 'like', "%{$search}%");
            }
        });
    }
        
    public function scopeSort($query, $sortColumn)
    {
        return $query->when($sortColumn, function ($query, $sortColumn) {
            return $query->orderBy($sortColumn);
        });
    }
}