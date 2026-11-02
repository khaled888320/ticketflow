<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Manger = 'manager';
    case Agent = 'agent';
    case Employee = 'employee';
}
