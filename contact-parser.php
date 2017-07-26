<?php

function parseContacts($filename)
{
    $contacts = array();

    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contacts = explode("\n", $contents);
    array_pop($contacts);
    foreach($contacts as $contact) {
      $contactArray = explode("|", $contact);
      $associativeArray = [];
      $associativeArray['name'] = $contactArray[0];

      $areacode = substr($contactArray[1], 0, 3);
      $prefix = substr($contactArray[1], 3, 3);
      $number = substr($contactArray[1], 6, 4);

      $associativeArray['phone'] = "$areacode-$prefix-$number";

      array_push($contacts, $associativeArray);
      array_shift($contacts);
    }

    fclose($handle);

    // todo - read file and parse contacts

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
