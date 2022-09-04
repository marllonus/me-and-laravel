<?php

namespace App\Strings;

enum ToolStatus: string {
    case Active = 'active';
    case Inactive = 'inactive';
    case None = 'none';
}
