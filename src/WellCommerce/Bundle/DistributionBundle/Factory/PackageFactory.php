<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\DistributionBundle\Factory;

use WellCommerce\Bundle\DistributionBundle\Entity\Package;
use WellCommerce\Bundle\DistributionBundle\Entity\PackageInterface;
use WellCommerce\Bundle\CoreBundle\Factory\AbstractEntityFactory;

/**
 * Class ChannelFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class PackageFactory extends AbstractEntityFactory
{
    public function create() : PackageInterface
    {
        $package = new Package();

        return $package;
    }
}
