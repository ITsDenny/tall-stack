<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Repositories\ProjectRepository;

class ProjectServices
{
    protected $repository;

    public function __construct(
        ProjectRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function getAllProjects()
    {
        return $this->repository->getAllProjects();
    }
}
