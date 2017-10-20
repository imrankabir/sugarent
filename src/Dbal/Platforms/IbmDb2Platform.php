<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

namespace Sugarcrm\Sugarcrm\Dbal\Platforms;

use Doctrine\DBAL\Platforms\DB2Platform;

/**
 * Temporary implementation of IBM DB2 platform for fixing Doctrine DBAL issues
 */
class IbmDb2Platform extends DB2Platform
{
    /**
     * {@inheritDoc}
     *
     * @link https://github.com/doctrine/dbal/pull/2463
     */
    protected function doModifyLimitQuery($query, $limit, $offset = null)
    {
        if ($limit === null && $offset === null) {
            return $query;
        }

        $where = array();

        if ($offset !== null) {
            $where[] = 'db22.DC_ROWNUM >= ' . ((int) $offset + 1);
        }

        if ($limit !== null) {
            $where[] = 'db22.DC_ROWNUM <= ' . (($offset ?: 0) + $limit);
        }

        // Todo OVER() needs ORDER BY data!
        $sql = 'SELECT db22.* FROM (SELECT db21.*, ROW_NUMBER() OVER() AS DC_ROWNUM'
            . ' FROM (' . $query . ') db21) db22 WHERE ' . implode(' AND ', $where);

        return $sql;
    }
}
