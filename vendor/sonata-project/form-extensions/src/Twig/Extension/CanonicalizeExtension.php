<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Form\Twig\Extension;

use Sonata\Form\Twig\CanonicalizeRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class CanonicalizeExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('sonata_form_canonicalize_locale_for_moment', [CanonicalizeRuntime::class, 'getCanonicalizedLocaleForMoment']),
        ];
    }
}
