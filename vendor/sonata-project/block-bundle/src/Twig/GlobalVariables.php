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

namespace Sonata\BlockBundle\Twig;

/**
 * GlobalVariables.
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
final class GlobalVariables
{
    /**
     * @var string[]
     */
    private $templates;

    /**
     * @param string[] $templates
     */
    public function __construct(array $templates)
    {
        $this->templates = $templates;
    }

    /**
     * @return string[]
     */
    public function getTemplates(): array
    {
        return $this->templates;
    }
}
