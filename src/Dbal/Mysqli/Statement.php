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

namespace Sugarcrm\Sugarcrm\Dbal\Mysqli;

use Doctrine\DBAL\Driver\Mysqli\MysqliException;
use Doctrine\DBAL\Driver\Mysqli\MysqliStatement as BaseStatement;

/**
 * MySQLi statement
 */
class Statement extends BaseStatement
{
    /**
     * {@inheritdoc}
     */
    public function execute($params = null)
    {
        $isFirstExecution = $this->_columnNames === null;
        $result = parent::execute($params);

        $hasColumns = $this->_columnNames !== false;

        // @link https://github.com/doctrine/dbal/pull/2536
        if (!$isFirstExecution && $hasColumns) {
            $this->_stmt->store_result();

            $this->_rowBindedValues = array_fill(0, count($this->_columnNames), null);

            $refs = array();
            foreach ($this->_rowBindedValues as $key => &$value) {
                $refs[$key] =& $value;
            }

            if (!call_user_func_array(array($this->_stmt, 'bind_result'), $refs)) {
                throw new MysqliException($this->_stmt->error, $this->_stmt->sqlstate, $this->_stmt->errno);
            }
        }

        return $result;
    }
}
