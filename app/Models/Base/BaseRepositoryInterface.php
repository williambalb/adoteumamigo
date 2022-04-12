<?php

declare(strict_types=1);

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    public function findAll(): LengthAwarePaginator;
    public function find(int $id): Model;
    public function create(array $data): Model;
    public function delete(int $id): bool;
    public function update(int $id, array $data): bool;
    public function search(string $searchValue, array $searchFields): LengthAwarePaginator;
}
