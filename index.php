<?php

include_once('Node.php');
include_once('bt2-link.php');

$linkedList = new LinkList();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$linkData = $linkedList->readList();
$addData = $linkedList->add(0, 4);

// echo implode ('-' , $linkData);
echo '<br/>';
echo $addData;