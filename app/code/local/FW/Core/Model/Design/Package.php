<?php
/**
 * @category    FW
 * @package     FW_Core
 * @copyright   Copyright (c) 2014 F+W Media, Inc. (http://www.fwmedia.com)
 * @author      J.P. Daniel <jp.daniel@fwmedia.com>
 */
class FW_Core_Model_Design_Package extends Mage_Core_Model_Design_Package
{
    /**
     * Add in the enterprise theme as a fallback theme
     * 
     * @param string $file
     * @param array &$params
     * @param array $fallbackScheme
     * @return string
     */
    protected function _fallback($file, array &$params, array $fallbackScheme = array(array()))
    {
        if ($this->getPackageName() == 'fw-mobile' || $this->getPackageName() == 'iw-mobile') {
            $fallbackScheme[] = array('_package' => 'enterprise', '_theme' => 'iphone');
        }
        $fallbackScheme[] = array('_package' => 'enterprise', '_theme' => 'default');
        return parent::_fallback($file, $params, $fallbackScheme);
    }
}
