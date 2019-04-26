<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Dbal\Common;

interface FilterableQueryInterface
{
    /**
     * Adds a filter group to the query.
     *
     * @param QueryFilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(
        QueryFilterGroupInterface $filterGroup
    ): void;
}
