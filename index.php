<?php 

require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

// es-php文档 https://learnku.com/docs/elasticsearch-php/6.0/quickstart/2001