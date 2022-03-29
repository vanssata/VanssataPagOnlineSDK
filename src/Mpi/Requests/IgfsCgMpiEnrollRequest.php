<?php

namespace VanssataPagOnlineSDK\Mpi\Requests;

use VanssataPagOnlineSDK\BaseIgfsCgRequest;

/**
 * Class IgfsCgMpiEnrollRequest.
 */
final class IgfsCgMpiEnrollRequest extends BaseIgfsCgRequest
{
    const CONTENT = <<<XML
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="http://services.api.web.cg.igfs.apps.netsw.it/">
<soapenv:Body>
<ser:Enroll>
<request>
{apiVersion}
{tid}
{merID}
{payInstr}
{signature}
{shopID}
{amount}
{currencyCode}
{shopUserRef}
{pan}
{payInstrToken}
{billingID}
{expireMonth}
{expireYear}
{termURL}
{description}
{addInfo1}
{addInfo2}
{addInfo3}
{addInfo4}
{addInfo5}
</request>
</ser:Enroll>
</soapenv:Body>
</soapenv:Envelope>
XML;
}
