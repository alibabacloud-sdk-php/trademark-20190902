<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class receiptUrls extends Model
{
    /**
     * @var string[]
     */
    public $receiptUrl;
    protected $_name = [
        'receiptUrl' => 'ReceiptUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiptUrl) {
            $res['ReceiptUrl'] = $this->receiptUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receiptUrls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiptUrl'])) {
            if (!empty($map['ReceiptUrl'])) {
                $model->receiptUrl = $map['ReceiptUrl'];
            }
        }

        return $model;
    }
}
