<?php


namespace SilverStripe\Headless\Extensions;


use SilverStripe\CMS\Controllers\ModelAsController;
use SilverStripe\Core\Extension;

class Content404Extension extends Extension
{
    /**
     * Prevent the catch-all ModelAsController route from doing anything.
     * @param ModelAsController $controller
     */
    public function modelascontrollerInit(ModelAsController $controller)
    {
        $controller->getResponse()->setStatusCode(404);
    }
}
