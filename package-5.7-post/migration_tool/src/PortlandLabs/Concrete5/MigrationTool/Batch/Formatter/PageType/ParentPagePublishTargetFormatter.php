<?php

namespace PortlandLabs\Concrete5\MigrationTool\Batch\Formatter\PageType;

use HtmlObject\Element;
use PortlandLabs\Concrete5\MigrationTool\Batch\Formatter\TreeContentItemFormatterInterface;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\AttributeKey\AttributeKey;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\Permission\AccessEntity;

defined('C5_EXECUTE') or die("Access Denied.");

class ParentPagePublishTargetFormatter extends PublishTargetFormatter
{

    public function getBatchTreeNodeJsonObject()
    {
        $node = new \stdClass;
        $node->title = $this->entity->getPath();
        return $this->deliverTreeNodeDataJsonObject(array($node));
    }

    public function getTreeNodeTitle()
    {
        return t('Parent Page');
    }

}
