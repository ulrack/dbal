<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Dbal\Common\Enum;

use Ulrack\Enum\Enum;

/**
 * @method static SortDirectionEnum DIRECTION_ASC()
 * @method static SortDirectionEnum DIRECTION_DESC()
 */
class SortDirectionEnum extends Enum
{
    /**
     * Defines the ascending direction for a sorter.
     *
     * @var string
     */
    const DIRECTION_ASC = 'ASC';

    /**
     * Defines the descending direction for a sorter.
     *
     * @var string
     */
    const DIRECTION_DESC = 'DESC';
}
