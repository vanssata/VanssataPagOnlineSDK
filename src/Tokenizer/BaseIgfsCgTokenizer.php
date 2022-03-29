<?php

namespace VanssataPagOnlineSDK\Tokenizer;

use VanssataPagOnlineSDK\BaseIgfsCg;
use VanssataPagOnlineSDK\Exceptions\IgfsMissingParException;

/**
 * Class BaseIgfsCgTokenizer.
 */
abstract class BaseIgfsCgTokenizer extends BaseIgfsCg
{
    /**
     * @throws IgfsMissingParException
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
        return 'TokenizerGatewayPort';
    }
}
