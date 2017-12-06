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

namespace CoreShop\Component\Order\Model;

use CoreShop\Component\Resource\Model\ToggleableInterface;
use CoreShop\Component\Rule\Model\RuleInterface;
use Doctrine\Common\Collections\Collection;

interface CartPriceRuleInterface extends RuleInterface, ToggleableInterface
{
    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     *
     * @return static
     */
    public function setDescription($description);

    /**
     * @return bool
     */
    public function getHighlight();

    /**
     * @param bool $highlight
     */
    public function setHighlight($highlight);

    /**
     * @return Collection|CartPriceRuleVoucherCodeInterface[]
     */
    public function getVoucherCodes();

    /**
     * @return bool
     */
    public function hasVoucherCodes();

    /**
     * @param CartPriceRuleVoucherCodeInterface $cartPriceRuleVoucherCode
     */
    public function addVoucherCode(CartPriceRuleVoucherCodeInterface $cartPriceRuleVoucherCode);

    /**
     * @param CartPriceRuleVoucherCodeInterface $cartPriceRuleVoucherCode
     */
    public function removeVoucherCode(CartPriceRuleVoucherCodeInterface $cartPriceRuleVoucherCode);

    /**
     * @param CartPriceRuleVoucherCodeInterface $cartPriceRuleVoucherCode
     *
     * @return bool
     */
    public function hasVoucherCode(CartPriceRuleVoucherCodeInterface $cartPriceRuleVoucherCode);
}
