<?php

namespace Conceptive\Commerce\Plugin;

class RedirectCustomUrl
{
    public $blockObj;

    public function __construct(
        \Magento\Customer\Block\CustomerData $blockObj
    ) {
        $this->blockObj = $blockObj;
    }
    public function afterExecute(
        \Magento\Customer\Controller\Account\LoginPost $subject,
        $result)
    {

        $customUrl = $this->blockObj->getBaseUrl();
        $result->setPath($customUrl);
        return $result;
    }

}