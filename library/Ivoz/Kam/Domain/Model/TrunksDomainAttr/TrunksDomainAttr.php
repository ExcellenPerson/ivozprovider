<?php

namespace Ivoz\Kam\Domain\Model\TrunksDomainAttr;

/**
 * TrunksDomainAttr
 */
class TrunksDomainAttr extends TrunksDomainAttrAbstract implements TrunksDomainAttrInterface
{
    use TrunksDomainAttrTrait;

    public function getChangeSet()
    {
        return parent::getChangeSet();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
