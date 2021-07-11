<?php

$text =  $_POST['text'];

$result = mail('hollaawp@mail.ru', 'Новая заявка с сайта', $text);

echo json_encode(['result' => $result]);
