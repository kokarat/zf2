<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Filter
 */

namespace Zend\Filter;

/**
 * @category   Zend
 * @package    Zend_Filter
 */
class BaseName extends AbstractFilter
{
    /**
     * Defined by Zend\Filter\FilterInterface
     *
     * Returns basename($value)
     *
     * @param  string $value
     * @return string
     */
    public function filter($value)
    {
        return basename((string) $value);
    }
}
