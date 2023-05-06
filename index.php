<?php

$FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "html": "index.html"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'index.html' => new CURLFILE('index.html')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_MuUrTZ00VLpD5DdR1fTn7WCf0vGAJeI5KyARJ9lsKQ1'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);

?>