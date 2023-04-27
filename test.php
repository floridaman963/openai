<?php
require '/vendor/autoload.php';


$yourApiKey = trim(file_get_contents('./key.txt'));

var_dump($yourApiKey);
 
$client = OpenAI::client($yourApiKey);

$result = $client->completions()->create([
    'model' => 'text-davinci-003',
    'prompt' => 'PHP is',
]);

var_dump($result);

//echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.
