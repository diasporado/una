<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    Directory Directory
 * @ingroup     UnaModules
 *
 * @{
 */

/**
 * View entry menu
 */
class BxDirMenuView extends BxBaseModTextMenuView
{
    public function __construct($aObject, $oTemplate = false)
    {
        $this->MODULE = 'bx_directory';

        parent::__construct($aObject, $oTemplate);
    }
}

/** @} */
