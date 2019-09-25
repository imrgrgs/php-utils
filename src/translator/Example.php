<?php
use phputils\translator\LanguageManager;

include "LMPHP.php";
$langs = new LanguageManager();

$langs->language_add("en");
$langs->language_add("fa", "Farsi");
/**
 * // $langs->language_remove("en");
 */

$langs->language_active("fa");
echo $langs->language;

print_r($langs->languages);

$langs->language_active("en");
$langs->word_add("Bye", "Good Bye!");

$langs->language_active("fa");
$langs->word_add("Hi", "Hello!");
$langs->word_add("HowAre");
$langs->word_add("HowAre", "How are you?"); // update a word!

print_r($langs->words);

echo $langs->word_get("Bye");//It should get word from active language(fa) , but this is not exists. so will get value from en.


