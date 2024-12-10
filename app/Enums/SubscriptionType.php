<?php

namespace App\Enums;

enum SubscriptionType: string
{
    case FREE = 'free';
    case PERSONAL = 'personal';
    case PRO = 'pro';
}
