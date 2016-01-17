<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 17/01/16
 * Time: 2:06.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Api\JsonApi\Domain\Model\Contracts;

/**
 * Class MappingRepository.
 */
interface MappingRepository
{
    /**
     * @param string $className
     *
     * @return \NilPortugues\Api\Mapping\Mapping
     */
    public function findByClassName($className);

    /**
     * @param string $alias
     *
     * @return \NilPortugues\Api\Mapping\Mapping
     */
    public function findByAlias($alias);
}
