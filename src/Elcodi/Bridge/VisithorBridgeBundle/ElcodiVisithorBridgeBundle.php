<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Bridge\VisithorBridgeBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

use Elcodi\Bridge\VisithorBridgeBundle\DependencyInjection\ElcodiVisithorBridgeExtension;
use Elcodi\Bundle\CoreBundle\Abstracts\AbstractElcodiBundle;

/**
 * Class ElcodiVisithorBridgeBundle
 */
class ElcodiVisithorBridgeBundle extends AbstractElcodiBundle
{
    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface The container extension
     */
    public function getContainerExtension()
    {
        return new ElcodiVisithorBridgeExtension();
    }
}
