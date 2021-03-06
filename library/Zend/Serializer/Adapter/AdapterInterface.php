<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Serializer
 */

namespace Zend\Serializer\Adapter;

/**
 * @category   Zend
 * @package    Zend_Serializer
 * @subpackage Adapter
 */
interface AdapterInterface
{
    /**
     * Generates a storable representation of a value.
     *
     * @param  mixed $value Data to serialize
     * @return string
     * @throws \Zend\Serializer\Exception\ExceptionInterface
     */
    public function serialize($value);

    /**
     * Creates a PHP value from a stored representation.
     *
     * @param  string $serialized Serialized string
     * @return mixed
     * @throws \Zend\Serializer\Exception\ExceptionInterface
     */
    public function unserialize($serialized);
}