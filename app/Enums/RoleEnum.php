<?php
declare(strict_types=1);

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

Enum RoleEnum{
    const ADMIN = 1;
    const MANAGER = 2;
}