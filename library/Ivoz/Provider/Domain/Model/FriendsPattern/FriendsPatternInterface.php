<?php

namespace Ivoz\Provider\Domain\Model\FriendsPattern;

use Ivoz\Core\Domain\Model\LoggableEntityInterface;

interface FriendsPatternInterface extends LoggableEntityInterface
{
    public function getChangeSet();

    /**
     * Set name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set regExp
     *
     * @param string $regExp
     *
     * @return self
     */
    public function setRegExp($regExp);

    /**
     * Get regExp
     *
     * @return string
     */
    public function getRegExp();

    /**
     * Set friend
     *
     * @param \Ivoz\Provider\Domain\Model\Friend\FriendInterface $friend
     *
     * @return self
     */
    public function setFriend(\Ivoz\Provider\Domain\Model\Friend\FriendInterface $friend = null);

    /**
     * Get friend
     *
     * @return \Ivoz\Provider\Domain\Model\Friend\FriendInterface
     */
    public function getFriend();

}

