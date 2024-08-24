<?php

namespace App\Enums;

use App\Traits\ExtractConstant;

enum ProjectStatusEnum
{
    use ExtractConstant;

    const OPEN = 'open';
    const INPROGRESS = 'in_progress';
    const COMPLETED = 'completed';
    const CANCELLED = 'cancelled';
}
