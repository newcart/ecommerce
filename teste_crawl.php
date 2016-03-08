<?php

require_once 'vendor/autoload.php';

use DiDom\Document;

$document = new Document('http://www.opencart.com/index.php?route=extension/extension&filter_license=0', true);

$extensions = $document->find('#content > div.extension-grid > div > div.name > a');

foreach($extensions as $extension) {
    echo $extension->text(), "<br>";
}