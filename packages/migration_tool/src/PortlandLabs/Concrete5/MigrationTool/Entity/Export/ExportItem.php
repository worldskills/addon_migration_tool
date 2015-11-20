<?php

namespace PortlandLabs\Concrete5\MigrationTool\Entity\Export;

use Doctrine\Common\Collections\ArrayCollection;
use PortlandLabs\Concrete5\MigrationTool\Publisher\PublishableInterface;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Validator\BlockTypeValidator;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Validator\PageTemplateValidator;


/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string")
 * @Entity
 * @Table(name="MigrationExportItems")
 */
abstract class ExportItem
{

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="\PortlandLabs\Concrete5\MigrationTool\Entity\Export\ObjectCollection")
     **/
    protected $collection;

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param mixed $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    abstract public function getItemIdentifier();


}
