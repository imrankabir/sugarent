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

namespace Sugarcrm\Sugarcrm\Dbal\Oci8;

use Doctrine\DBAL\Driver\OCI8\OCI8Statement as BaseStatement;

/**
 * Oci8 statement
 */
class Statement extends BaseStatement
{
    /**
     * {@inheritdoc}
     *
     * Do not free the statement since it contradicts the purpose of the method
     */
    public function closeCursor()
    {
    }
}
