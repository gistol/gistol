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

namespace CoreShop\Component\Index\Interpreter;

use CoreShop\Component\Index\Model\IndexColumnInterface;
use Pimcore\Model\DataObject\AbstractObject;

class ObjectPropertyInterpreter implements InterpreterInterface
{
    /**
     * {@inheritdoc}
     */
    public function interpret($value, IndexColumnInterface $config = null)
    {
        $config = isset($config) ? $config->getInterpreterConfig() : [];

        if ($value instanceof AbstractObject) {
            if (array_key_exists('property', $config)) {
                $name = $config['property'];
                $getter = 'get'.ucfirst($name);

                if (method_exists($value, $getter)) {
                    return $value->$getter();
                }
            }
        }

        return null;
    }
}
