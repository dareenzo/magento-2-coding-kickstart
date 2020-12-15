<?php

namespace Macademy\BestSelling\Model\Sales;

use Macademy\BestSelling\Model\ResourceModel\Sales\BestSellers as BestSellersResourceModel;
use Magento\Framework\Model\AbstractModel;

class BestSellers extends AbstractModel
{
    protected function _construct()
    {
        parent::_construct(); // TODO: Change the autogenerated stub
        $this->_init(BestSellersResourceModel::class);
    }
}