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

namespace CoreShop\Bundle\RuleBundle\Condition;

use CoreShop\Component\Rule\Condition\RuleConditionsValidationProcessorInterface;
use CoreShop\Component\Rule\Condition\RuleValidationProcessorInterface;
use CoreShop\Component\Rule\Model\RuleInterface;

class RuleValidationProcessor implements RuleValidationProcessorInterface
{
    /**
     * @var RuleConditionsValidationProcessorInterface
     */
    private $ruleConditionsValidationProcessor;

    /**
     * @param RuleConditionsValidationProcessorInterface $ruleConditionsValidationProcessor
     */
    public function __construct(RuleConditionsValidationProcessorInterface $ruleConditionsValidationProcessor)
    {
        $this->ruleConditionsValidationProcessor = $ruleConditionsValidationProcessor;
    }

    /**
     * @param $subject
     * @param RuleInterface $rule
     *
     * @return bool
     */
    public function isValid($subject, RuleInterface $rule)
    {
        return $this->ruleConditionsValidationProcessor->isValid($subject, $rule->getConditions());
    }
}
