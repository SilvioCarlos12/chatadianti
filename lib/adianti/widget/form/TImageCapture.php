<?php
namespace Adianti\Widget\Form;

/**
 * Image capture
 *
 * @version    7.3
 * @package    widget
 * @subpackage form
 * @author     Lucas Tomasi
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class TImageCapture extends TImageCropper
{
    public function __construct($name)
    {
        parent::__construct($name);
        // $this->enableFileHandling(TRUE);
        $this->enableWebCam(TRUE);
    }
}
