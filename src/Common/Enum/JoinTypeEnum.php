<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Dbal\Common\Enum;

use Ulrack\Enum\Enum;

/**
 * @method static JoinTypeEnum JOIN_INNER()
 * @method static JoinTypeEnum JOIN_LEFT()
 * @method static JoinTypeEnum JOIN_RIGHT()
 * @method static JoinTypeEnum JOIN_FULL()
 */
class JoinTypeEnum extends Enum
{
    /**
     * Defines a inner join for the query.
     *
     * @var string
     */
    const JOIN_INNER = 'INNER JOIN';

    /**
     * Defines a left join for the query.
     *
     * @var string
     */
    const JOIN_LEFT  = 'LEFT JOIN';

    /**
     * Defines a right join for the query.
     *
     * @var string
     */
    const JOIN_RIGHT = 'RIGHT JOIN';

    /**
     * Defines a full join for the query.
     *
     * @var string
     */
    const JOIN_FULL  = 'FULL OUTER JOIN';
}