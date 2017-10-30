<?php

namespace Ivoz\Core\Application;

interface DataTransferObjectInterface
{
    /**
     * @return array
     */
    public function __toArray();

    /**
     * @param ForeignKeyTransformerInterface $transformer
     * @return null
     */
    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer);

    /**
     * @param CollectionTransformerInterface $transformer
     * @return null
     */
    public function transformCollections(CollectionTransformerInterface $transformer);
}
