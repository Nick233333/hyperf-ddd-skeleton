<?php

declare(strict_types=1);
/**
 * 本文件属于KK馆版权所有，泄漏必究。
 * This file belong to KKGUAN, all rights reserved.
 */
use App\Middleware\CorsMiddleware;
use App\Middleware\OrganizationMiddleware;

return [
    'http' => [
        \Hyperf\Validation\Middleware\ValidationMiddleware::class,
        CorsMiddleware::class,
        OrganizationMiddleware::class,
    ],
];
