<?php

namespace VanssataPagOnlineSDK\Init;

use VanssataPagOnlineSDK\BaseIgfsCg;
use VanssataPagOnlineSDK\Exceptions\IgfsMissingParException;

/**
 * Class BaseIgfsCgInit.
 */
abstract class BaseIgfsCgInit extends BaseIgfsCg
{
    /**
     * @throws \VanssataPagOnlineSDK\Exceptions\IgfsMissingParException
     */
    protected function checkFields()
    {
        parent::checkFields();
        if (empty($this->shopID)) {
            throw new IgfsMissingParException('Missing shopID');
        }
    }

    /**
     * @return string
     */
    protected function getServicePort()
    {
        return 'PaymentInitGatewayPort';
    }
}
