<?php

namespace Ivoz\Provider\Domain\Model\Timezone;

use Ivoz\Core\Domain\Model\EntityInterface;

interface TimezoneInterface extends EntityInterface
{
    /**
     * Set tz
     *
     * @param string $tz
     *
     * @return self
     */
    public function setTz($tz);

    /**
     * Get tz
     *
     * @return string
     */
    public function getTz();

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment($comment = null);

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment();

    /**
     * Set country
     *
     * @param \Ivoz\Provider\Domain\Model\Country\CountryInterface $country
     *
     * @return self
     */
    public function setCountry(\Ivoz\Provider\Domain\Model\Country\CountryInterface $country = null);

    /**
     * Get country
     *
     * @return \Ivoz\Provider\Domain\Model\Country\CountryInterface
     */
    public function getCountry();

    /**
     * Set label
     *
     * @param \Ivoz\Provider\Domain\Model\Timezone\Label $label
     *
     * @return self
     */
    public function setLabel(\Ivoz\Provider\Domain\Model\Timezone\Label $label);

    /**
     * Get label
     *
     * @return \Ivoz\Provider\Domain\Model\Timezone\Label
     */
    public function getLabel();

}
