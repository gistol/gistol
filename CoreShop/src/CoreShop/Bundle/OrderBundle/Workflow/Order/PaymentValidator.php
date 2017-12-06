<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
*/

namespace CoreShop\Bundle\OrderBundle\Workflow\Order;

use CoreShop\Component\Order\Model\OrderInterface;
use CoreShop\Component\Order\Model\ProposalInterface;
use CoreShop\Component\Order\Workflow\ProposalValidatorInterface;
use CoreShop\Component\Order\Workflow\WorkflowManagerInterface;
use Webmozart\Assert\Assert;

class PaymentValidator implements ProposalValidatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function isValidForState(ProposalInterface $proposal, $currentState, $newState)
    {
        /**
         * @var $proposal OrderInterface
         */
        Assert::isInstanceOf($proposal, OrderInterface::class);

        return !($currentState === WorkflowManagerInterface::ORDER_STATUS_PAYMENT_REVIEW);
    }
}
