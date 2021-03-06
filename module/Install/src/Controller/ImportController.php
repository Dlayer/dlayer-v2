<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright G3D Development Limited
 * @license https://github.com/Dlayer/dlayer-v2/blob/master/LICENSE MIT
 */

namespace Install\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ImportController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
