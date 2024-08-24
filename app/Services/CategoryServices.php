<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryServices
{
    protected $repository;

    public function __construct(
        CategoryRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function getAllCategories()
    {
        return $this->repository->getAllCategories();
    }
}
