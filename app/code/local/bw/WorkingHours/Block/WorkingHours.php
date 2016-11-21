<?php
class bw_WorkingHours_Block_WorkingHours extends Mage_Core_Block_Template {
    public function getWorkHoursText() {
        $timestamp = time();
        $currentWeakDay = date('D', $timestamp);
        $currentHour = date('H', $timestamp);

        if ($currentWeakDay == 'Sat' || $currentWeakDay == 'Sun') {
            return Mage::helper('catalog')->__('Will be working Monday from 8 AM');
        } else if ($currentHour >= 8 && $currentHour < 17) {
            return Mage::helper('catalog')->__('Working today till 5 PM');
        } else if ($currentWeakDay == 'Fri') {
            return Mage::helper('catalog')->__('Will be working Monday from 8 AM');
        } else {
            return Mage::helper('catalog')->__('Will be working tomorrow from 8 AM');
        }
    }
}