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

namespace CoreShop\Component\Order\Workflow;

use CoreShop\Component\Order\Model\ProposalInterface;

interface WorkflowManagerInterface
{
    const ORDER_STATE_INITIALIZED = 'initialized';
    const ORDER_STATE_NEW = 'new';
    const ORDER_STATE_PENDING_PAYMENT = 'pending_payment';
    const ORDER_STATE_PROCESSING = 'processing';
    const ORDER_STATE_COMPLETE = 'complete';
    const ORDER_STATE_CLOSED = 'closed';
    const ORDER_STATE_CANCELED = 'canceled';
    const ORDER_STATE_ON_HOLD = 'holded';
    const ORDER_STATE_PAYMENT_REVIEW = 'payment_review';

    const ORDER_STATUS_INITIALIZED = 'initialized';
    const ORDER_STATUS_PENDING = 'pending';
    const ORDER_STATUS_PENDING_PAYMENT = 'pending_payment';
    const ORDER_STATUS_PROCESSING = 'processing';
    const ORDER_STATUS_COMPLETE = 'complete';
    const ORDER_STATUS_CLOSED = 'closed';
    const ORDER_STATUS_CANCELED = 'canceled';
    const ORDER_STATUS_ON_HOLD = 'on_hold';
    const ORDER_STATUS_PAYMENT_REVIEW = 'payment_review';

    /**
     * @param ProposalValidatorInterface $proposalValidator
     * @param $type
     * @param $priority
     */
    public function addValidator(ProposalValidatorInterface $proposalValidator, $type, $priority);

    /**
     * @param ProposalInterface $proposal
     * @param $currentState
     * @param $newState
     *
     * @return mixed
     */
    public function validateNewState(ProposalInterface $proposal, $currentState, $newState);

    /**
     * @param ProposalInterface $proposal
     * @param $newState
     * @param $currentState
     *
     * @return mixed
     */
    public function beforeWorkflowDispatch(ProposalInterface $proposal, $newState, $currentState);

    /**
     * @param ProposalInterface $proposal
     * @param $newState
     * @param $oldState
     *
     * @return mixed
     */
    public function successWorkflowDispatch(ProposalInterface $proposal, $newState, $oldState);

    /**
     * @param ProposalInterface $proposal
     * @param $newState
     * @param $oldState
     *
     * @return mixed
     */
    public function failureWorkflowDispatch(ProposalInterface $proposal, $newState, $oldState);

    /**
     * @param ProposalInterface $proposal
     *
     * @return mixed
     */
    public function getStateHistory(ProposalInterface $proposal);

    /**
     * @param ProposalInterface $proposal
     *
     * @return mixed
     */
    public function getCurrentState(ProposalInterface $proposal);

    /**
     * @param ProposalInterface $proposal
     * @param string            $action
     * @param array             $params
     *
     * @return mixed
     */
    public function changeState(ProposalInterface $proposal, $action, $params = []);
}
