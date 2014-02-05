<?php
Yii::app()->Cookies->putCMsg(
    'plans',
    serialize(
        array(
            array('id' => 1, 'title' => 'Service 1', 'min_price' => '0.00', 'max_price' => '100.00'),
            array('id' => 2, 'title' => 'Service 2', 'min_price' => '0.00', 'max_price' => '300.00'),
            array('id' => 3, 'title' => 'Service 3', 'min_price' => '0.00', 'max_price' => '200.00'),
            array('id' => 4, 'title' => 'Service 4', 'min_price' => '0.00', 'max_price' => '500.00')
        )
    ),
    array('expire' => time() + 3600)
);
