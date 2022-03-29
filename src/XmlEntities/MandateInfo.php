<?php

namespace VanssataPagOnlineSDK\XmlEntities;

/**
 * Class MandateInfo.
 */
class MandateInfo extends BaseXmlEntity
{
    public $mandateID;
    public $contractID;
    public $sequenceType;
    public $frequency;
    public $durationStartDate;
    public $durationEndDate;
    public $firstCollectionDate;
    public $finalCollectionDate;
    public $maxAmount;

    /** @var array */
    protected $dates = [
        'durationStartDate',
        'durationEndDate',
        'firstCollectionDate',
        'finalCollectionDate',
    ];

    /** @var array */
    protected $casts = [
        'durationStartDate' => 'date',
        'durationEndDate' => 'date',
        'firstCollectionDate' => 'date',
        'finalCollectionDate' => 'date',
    ];
}
