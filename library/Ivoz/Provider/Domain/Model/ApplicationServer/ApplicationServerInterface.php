<?php

namespace Ivoz\Provider\Domain\Model\ApplicationServer;

use Ivoz\Core\Domain\Model\LoggableEntityInterface;

interface ApplicationServerInterface extends LoggableEntityInterface
{
    public function getChangeSet();

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp($ip);

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp();

    /**
     * Set name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

}

