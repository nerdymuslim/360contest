<?php
/**
 * 360Contest
 *
 * PHP version 5
 *
 * @category   PHP
 * @package    360contest
 * @subpackage Core
 * @author     Agriya <info@agriya.com>
 * @copyright  2018 Agriya Infoway Private Ltd
 * @license    http://www.agriya.com/ Agriya Infoway Licence
 * @link       http://www.agriya.com
 */
$config = array(
    'EventHandlers' => array(
        'Sudopay.SudopayEventHandler' => array(
            'options' => array(
                'priority' => 1,
            ) ,
        ) ,
    ) ,
);
?>