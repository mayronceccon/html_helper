<?php
require __DIR__ . '/vendor/autoload.php';

use \HtmlHelper\Html;

Html::fDiv(array('id' => 'id_div'));
Html::fReturnText('Texto');
Html::fDiv('/');
