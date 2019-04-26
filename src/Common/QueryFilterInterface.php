<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Dbal\Common;

interface QueryFilterInterface
{
    /**
     * Retrieves the filter.
     *
     * @return string
     */
    public function getFilter(): string;
}
