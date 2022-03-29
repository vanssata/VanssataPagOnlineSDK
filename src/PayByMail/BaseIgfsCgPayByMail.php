<?php

namespace VanssataPagOnlineSDK\PayByMail;

use VanssataPagOnlineSDK\BaseIgfsCg;
use VanssataPagOnlineSDK\Exceptions\IgfsMissingParException;

/**
 * Class BaseIgfsCgPayByMail.
 */
abstract class BaseIgfsCgPayByMail extends BaseIgfsCg
{
    /**
     * @throws \VanssataPagOnlineSDK\Exceptions\IgfsMissingParException
     */
    protected function checkFields()
    {
        parent::checkFields();
        if ($this->shopID == null || $this->shopID == '') {
            throw new IgfsMissingParException('Missing shopID');
        }
    }

    /**
     * @return string
     */
    protected function getServicePort()
    {
        return 'PayByMailGatewayPort';
    }
}
