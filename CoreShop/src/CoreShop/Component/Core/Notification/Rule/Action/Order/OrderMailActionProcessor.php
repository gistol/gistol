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

namespace CoreShop\Component\Core\Notification\Rule\Action\Order;

use CoreShop\Component\Core\Model\OrderShipmentInterface;
use CoreShop\Component\Core\Order\OrderMailProcessorInterface;
use CoreShop\Component\Notification\Model\NotificationRuleInterface;
use CoreShop\Component\Notification\Rule\Action\NotificationRuleProcessorInterface;
use CoreShop\Component\Order\Model\OrderInterface;
use CoreShop\Component\Order\Model\OrderInvoiceInterface;
use Pimcore\Model\Document;

class OrderMailActionProcessor implements NotificationRuleProcessorInterface
{
    /**
     * @var OrderMailProcessorInterface
     */
    private $orderMailProcessor;

    /**
     * @param OrderMailProcessorInterface $orderMailProcessor
     */
    public function __construct(OrderMailProcessorInterface $orderMailProcessor)
    {
        $this->orderMailProcessor = $orderMailProcessor;
    }

    /**
     * {@inheritdoc}
     */
    public function apply($subject, NotificationRuleInterface $rule, array $configuration, $params = [])
    {
        $order = null;

        if ($subject instanceof OrderInvoiceInterface) {
            $order = $subject->getOrder();
        } elseif ($subject instanceof OrderShipmentInterface) {
            $order = $subject->getOrder();
        } elseif ($subject instanceof OrderInterface) {
            $order = $subject;
        }

        if ($order instanceof OrderInterface) {
            $language = $order->getOrderLanguage();

            if (is_null($language)) {
                throw new \Exception('Language is not set');
            }

            if (array_key_exists($language, $configuration['mails'])) {
                $mailDocumentId = $configuration['mails'][$language];
                $mailDocument = Document::getById($mailDocumentId);

                $params['mailRule'] = $rule;
                $params['document'] = $subject;

                if ($mailDocument instanceof Document\Email) {
                    $this->orderMailProcessor->sendOrderMail($mailDocument, $order, $configuration['sendInvoices'], $configuration['sendShipments'], $params);
                }
            }
        }
    }
}
