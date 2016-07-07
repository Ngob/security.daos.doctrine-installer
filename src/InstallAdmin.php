<?php
use Mouf\MoufManager;

// Let's declare the contoller
MoufManager::getMoufManager()->declareComponent('userentityinstaller', 'Security\\Daos\\Doctrine\\Installer\\UserEntityInstallerController', true);
// Let's bind the 'template' property of the controller to the 'installTemplate' instance
MoufManager::getMoufManager()->bindComponents('userentityinstaller', 'template', 'moufInstallTemplate');
MoufManager::getMoufManager()->bindComponents('userentityinstaller', 'contentBlock', 'block.content');
?>
