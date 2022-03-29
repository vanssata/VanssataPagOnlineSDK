<?php

namespace VanssataPagOnlineSDK\Tokenizer\Requests;

use VanssataPagOnlineSDK\BaseIgfsCgRequest;

/**
 * Class IgfsCgTokenizerDeleteRequest.
 */
final class IgfsCgTokenizerDeleteRequest extends BaseIgfsCgRequest
{
    const CONTENT = <<<XML
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="http://services.api.web.cg.igfs.apps.netsw.it/">
<soapenv:Body>
<ser:Delete>
<request>
{apiVersion}
{tid}
{merID}
{payInstr}
{signature}
{shopID}
{payInstrToken}
{billingID}
</request>
</ser:Delete>
</soapenv:Body>
</soapenv:Envelope>
XML;
}
