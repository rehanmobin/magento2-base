<?php
/**
 * @category  Mage4
 * @package   Mage4_Base
 * @author    Rehan Mobin <m.rehan.mobin@gmail.com>
 * @copyright Copyright (c) Mage4. All rights reserved. (https://www.mage4.com)
 */

namespace Mage4\Base\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use \Magento\Framework\Data\Form\Element\AbstractElement;

class Into extends Field
{
    protected $_template = 'system/config/field/intro.phtml';

    public function render(AbstractElement $element)
    {
        return $this->_decorateRowHtml($element, "<div class='intro-main'>" . $this->toHtml() . '</div>');
    }
}
