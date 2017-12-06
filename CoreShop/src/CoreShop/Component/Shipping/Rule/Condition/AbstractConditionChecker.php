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

namespace CoreShop\Component\Shipping\Rule\Condition;

abstract class AbstractConditionChecker implements ShippingConditionCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isValid($subject, array $configuration)
    {
        if (!is_array($subject)) {
            throw new \InvalidArgumentException('Shipping Rule Condition $subject needs to be an array with values shippable, address and carrier');
        }

        if (!array_key_exists('carrier', $subject) || !array_key_exists('shippable', $subject) || !array_key_exists('address', $subject)) {
            throw new \InvalidArgumentException('Shipping Rule Condition $subject needs to be an array with values shippable, address and carrier');
        }

        return $this->isShippingRuleValid($subject['carrier'], $subject['shippable'], $subject['address'], $configuration);
    }
}
