<?php

declare(strict_types = 1);

// Your Code
function getTransactionFiles(string $dirPath): array
{
    $files = [];
    foreach(scandir($dirPath) as $file){
        if(is_dir($file)){
            continue;
        }
        $files[]=$file;
    }
    return $files;
}


function getTransaction(string $fileName): array{
    if(! file_exists($fileName)){
        trigger_error('File"'. $fileName . '"does not exist.', E_USER_ERROR);
    }
    $file = fopen($fileName, 'r');
    $transactions = [];
    while(($transaction = fgetcsv($file)) !== false ){
      $transactions[] = $transaction ;
    }
    return $transactions;
}