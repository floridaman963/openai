<?php

$yourApiKey = getenv('YOUR_API_KEY');
$client = OpenAI::client($yourApiKey);

$result = $client->completions()->create([
    'model' => 'text-davinci-003',
    'prompt' => 'PHP is',
]);

echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.
