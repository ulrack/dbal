<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Dbal\Common;

interface PageableQueryInterface
{
    /**
     * Defines the limit for the result.
     *
     * @param int $size
     * @param int $page
     *
     * @return void
     */
    public function setPage(int $size, int $page = 1): void;
}
