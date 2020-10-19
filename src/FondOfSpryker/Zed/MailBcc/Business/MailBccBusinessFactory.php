<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\MailBcc\Business;

use FondOfSpryker\Zed\MailBcc\Business\Model\Expander\ExpanderInterface;
use FondOfSpryker\Zed\MailBcc\Business\Model\Expander\MailBccExpander;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * Class MailBccBusinessFactory
 *
 * @package FondOfSpryker\Zed\MailBcc\Business
 *
 * @method \FondOfSpryker\Zed\MailBcc\MailBccConfig getConfig()
 */
class MailBccBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\MailBcc\Business\Model\Expander\ExpanderInterface
     */
    public function createMailBccExpander(): ExpanderInterface
    {
        return new MailBccExpander($this->getConfig());
    }
}
