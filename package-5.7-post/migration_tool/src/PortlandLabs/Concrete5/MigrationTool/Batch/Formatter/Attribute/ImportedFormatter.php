<?php

namespace PortlandLabs\Concrete5\MigrationTool\Batch\Formatter\Attribute;

use HtmlObject\Element;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\AttributeValue;
use PortlandLabs\Concrete5\MigrationTool\Batch\Formatter\TreeContentItemFormatterInterface;

defined('C5_EXECUTE') or die("Access Denied.");

class ImportedFormatter implements TreeContentItemFormatterInterface
{

    protected $value;

    public function getBatchTreeNodeJsonObject()
    {
        $node = new \stdClass;
        $node->title = $this->value->getAttribute()->getHandle();
        $node->itemvalue = (string) $this->getColumnValue();
        $node->iconclass = 'fa fa-cog';
        return $node;
    }

    protected function getColumnValue()
    {
        return new Element('a', t('XML Element'), array('href' => '#'));
    }

    public function __construct(AttributeValue $value)
    {
        $this->value = $value;
    }


}