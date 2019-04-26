<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Dbal\Common;

interface QueryFilterGroupInterface
{
    /**
     * Adds a filter to the query.
     *
     * @param QueryFilterInterface $filter
     *
     * @return void
     */
    public function addFilter(QueryFilterInterface $filter): void;

    /**
     * Retrieves the filter group.
     *
     * @return string
     */
    public function getFilterGroup(): string;
}
