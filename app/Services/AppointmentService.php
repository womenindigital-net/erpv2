<?php

namespace App\Services;

use App\Repositories\AppointmentRepository;
use App\Traits\CommonServiceElements;

class AppointmentService
{
    use CommonServiceElements;

    private AppointmentRepository $repo;

    public function __construct(AppointmentRepository $repo)
    {
        $this->repo = $repo;
    }
}
