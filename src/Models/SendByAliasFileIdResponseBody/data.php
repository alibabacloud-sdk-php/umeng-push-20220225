<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAliasFileIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ucj0242167047014687101
     *
     * @var string
     */
    public $msgId;
    protected $_name = [
        'msgId' => 'MsgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        return $model;
    }
}
