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

namespace CoreShop\Test\Models;

use CoreShop\Component\Customer\Model\CustomerGroupInterface;
use CoreShop\Test\Base;
use Pimcore\Model\Object\Service;

class CustomerGroup extends Base
{
    public function testCustomerGroupCreation()
    {
        $this->printTestName();

        /**
         * @var CustomerGroupInterface
         */
        $customerGroup = $this->getFactory('customer_group')->createNew();

        $customerGroup->setName('TestGroup');
        $customerGroup->setKey('test-group');
        $customerGroup->setParent(Service::createFolderByPath('/'));
        $customerGroup->save();

        $this->assertNotNull($customerGroup->getId());
    }
}
