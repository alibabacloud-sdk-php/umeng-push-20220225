<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class SendByAppShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $androidPayloadShrink;

    /**
     * @var string
     */
    public $androidShortPayloadShrink;

    /**
     * @var string
     */
    public $channelPropertiesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iosPayloadShrink;

    /**
     * @var string
     */
    public $policyShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $productionMode;

    /**
     * @var int
     */
    public $receiptType;

    /**
     * @example https://msg.umeng.com/upush/receipt
     *
     * @var string
     */
    public $receiptUrl;

    /**
     * @var string
     */
    public $thirdPartyId;

    /**
     * @var string
     */
    public $callbackParams;
    protected $_name = [
        'androidPayloadShrink'      => 'AndroidPayload',
        'androidShortPayloadShrink' => 'AndroidShortPayload',
        'channelPropertiesShrink'   => 'ChannelProperties',
        'description'               => 'Description',
        'iosPayloadShrink'          => 'IosPayload',
        'policyShrink'              => 'Policy',
        'productionMode'            => 'ProductionMode',
        'receiptType'               => 'ReceiptType',
        'receiptUrl'                => 'ReceiptUrl',
        'thirdPartyId'              => 'ThirdPartyId',
        'callbackParams'            => 'callbackParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidPayloadShrink) {
            $res['AndroidPayload'] = $this->androidPayloadShrink;
        }
        if (null !== $this->androidShortPayloadShrink) {
            $res['AndroidShortPayload'] = $this->androidShortPayloadShrink;
        }
        if (null !== $this->channelPropertiesShrink) {
            $res['ChannelProperties'] = $this->channelPropertiesShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iosPayloadShrink) {
            $res['IosPayload'] = $this->iosPayloadShrink;
        }
        if (null !== $this->policyShrink) {
            $res['Policy'] = $this->policyShrink;
        }
        if (null !== $this->productionMode) {
            $res['ProductionMode'] = $this->productionMode;
        }
        if (null !== $this->receiptType) {
            $res['ReceiptType'] = $this->receiptType;
        }
        if (null !== $this->receiptUrl) {
            $res['ReceiptUrl'] = $this->receiptUrl;
        }
        if (null !== $this->thirdPartyId) {
            $res['ThirdPartyId'] = $this->thirdPartyId;
        }
        if (null !== $this->callbackParams) {
            $res['callbackParams'] = $this->callbackParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendByAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidPayload'])) {
            $model->androidPayloadShrink = $map['AndroidPayload'];
        }
        if (isset($map['AndroidShortPayload'])) {
            $model->androidShortPayloadShrink = $map['AndroidShortPayload'];
        }
        if (isset($map['ChannelProperties'])) {
            $model->channelPropertiesShrink = $map['ChannelProperties'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IosPayload'])) {
            $model->iosPayloadShrink = $map['IosPayload'];
        }
        if (isset($map['Policy'])) {
            $model->policyShrink = $map['Policy'];
        }
        if (isset($map['ProductionMode'])) {
            $model->productionMode = $map['ProductionMode'];
        }
        if (isset($map['ReceiptType'])) {
            $model->receiptType = $map['ReceiptType'];
        }
        if (isset($map['ReceiptUrl'])) {
            $model->receiptUrl = $map['ReceiptUrl'];
        }
        if (isset($map['ThirdPartyId'])) {
            $model->thirdPartyId = $map['ThirdPartyId'];
        }
        if (isset($map['callbackParams'])) {
            $model->callbackParams = $map['callbackParams'];
        }

        return $model;
    }
}
