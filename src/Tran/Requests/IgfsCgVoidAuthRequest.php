<?php

namespace VanssataPagOnlineSDK\Tran\Requests;

use VanssataPagOnlineSDK\BaseIgfsCgRequest;

final class IgfsCgVoidAuthRequest extends BaseIgfsCgRequest
{
    const CONTENT = <<<XML
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="http://services.api.web.cg.igfs.apps.netsw.it/">
<soapenv:Body>
<ser:VoidAuth>
<request>
{apiVersion}
{tid}
{merID}
{payInstr}
{signature}
{shopID}
{amount}
{refTranID}
{addInfo1}
{addInfo2}
{addInfo3}
{addInfo4}
{addInfo5}
</request>
</ser:VoidAuth>
</soapenv:Body>
</soapenv:Envelope>
XML;
}
