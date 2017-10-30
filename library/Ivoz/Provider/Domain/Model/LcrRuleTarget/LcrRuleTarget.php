<?php
namespace Ivoz\Provider\Domain\Model\LcrRuleTarget;

/**
 * LcrRuleTarget
 */
class LcrRuleTarget extends LcrRuleTargetAbstract implements LcrRuleTargetInterface
{
    use LcrRuleTargetTrait;

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

