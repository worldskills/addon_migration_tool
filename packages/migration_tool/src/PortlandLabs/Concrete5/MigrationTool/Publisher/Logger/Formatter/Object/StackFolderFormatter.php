<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Logger\Formatter\Object;

use HtmlObject\Link;
use PortlandLabs\Concrete5\MigrationTool\Entity\Publisher\Log\Entry;
use PortlandLabs\Concrete5\MigrationTool\Entity\Publisher\Log\Object\LoggableObject;
use PortlandLabs\Concrete5\MigrationTool\Entity\Publisher\Log\Object\SocialLink;

defined('C5_EXECUTE') or die("Access Denied.");

class StackFolderFormatter extends AbstractStandardFormatter
{

    public function getSkippedDescription(LoggableObject $object)
    {
        return t('Stack Folder %s (%s) already exists.', $object->getName(), $object->getPath());
    }

    public function getPublishedDescription(LoggableObject $object)
    {
        $a = new Link(
            \URL::to('/dashboard/blocks/stacks', 'view_details', $object->getPublishedStackID()),
            t('Stack Folder %s (%s) published.', $object->getName(), $object->getPath())
        );
        return $a;
    }


}
