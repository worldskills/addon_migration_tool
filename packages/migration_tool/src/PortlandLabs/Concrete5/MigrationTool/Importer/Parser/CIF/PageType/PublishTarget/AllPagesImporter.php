<?php

namespace PortlandLabs\Concrete5\MigrationTool\Importer\Parser\CIF\PageType\PublishTarget;

use PortlandLabs\Concrete5\MigrationTool\Entity\Import\AttributeKey\AttributeKey;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\AttributeKey\UnknownAttributeKey;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\PageType\AllPagesPublishTarget;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\PageType\PublishTarget;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\Permission\AccessEntity;

defined('C5_EXECUTE') or die("Access Denied.");

class AllPagesImporter implements ImporterInterface
{

    public function getEntity()
    {
        return new AllPagesPublishTarget();
    }

    /**
     * @param AllPagesPublishTarget $target
     * @param \SimpleXMLElement $element
     */
    public function loadFromXml(PublishTarget $target, \SimpleXMLElement $element)
    {
        $target->setFormFactor((string) $element['form-factor']);
    }

}