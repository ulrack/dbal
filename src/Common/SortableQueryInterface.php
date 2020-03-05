<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Dbal\Common;

use Ulrack\Dbal\Common\Enum\SortDirectionEnum;

interface SortableQueryInterface extends QueryInterface
{
    /**
     * Adds a sorter to the query.
     *
     * @param string            $column
     * @param SortDirectionEnum $direction
     *
     * @return void
     */
    public function addSorter(
        string $column,
        SortDirectionEnum $direction
    ): void;
}
