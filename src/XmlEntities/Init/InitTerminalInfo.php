<?php

namespace VanssataPagOnlineSDK\XmlEntities\Init;

use VanssataPagOnlineSDK\XmlEntities\BaseXmlEntity;

/**
 * Class InitTerminalInfo.
 */
class InitTerminalInfo extends BaseXmlEntity
{
    /**
     * @var string
     */
    public $tid;

    /**
     * @var string
     */
    public $payInstrToken;

    /**
     * @var string
     */
    public $billingID;
}
