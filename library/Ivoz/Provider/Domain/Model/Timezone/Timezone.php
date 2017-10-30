<?php

namespace Ivoz\Provider\Domain\Model\Timezone;

/**
 * Timezone
 */
class Timezone extends TimezoneAbstract implements TimezoneInterface
{
    use TimezoneTrait;

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

