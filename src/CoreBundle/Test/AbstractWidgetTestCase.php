<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Test;

@trigger_error(
    'The '.__NAMESPACE__.'\AbstractWidgetTestCase class is deprecated since version 3.x and will be removed in 4.0.'
    .' Use Sonata\Form\Test\AbstractWidgetTestCase instead.',
    E_USER_DEPRECATED
);

/**
 * @deprecated Since version 3.x, to be removed in 4.0.
 */
abstract class AbstractWidgetTestCase extends \Sonata\Form\Test\AbstractWidgetTestCase
{
}
