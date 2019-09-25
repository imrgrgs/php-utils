# LM PHP (Language management PHP)

## Multi Language PHP

Multi-language management and support on the php (web).

## LMPHP Features 

- Easy
- Compact
- Useful

# LM-PHP Functions

## **word_add**
Add a word to active language.

**Return :**
Bool

**Parameters :**
- $name(name of the word)
- __Optional__, $value(value of the word)

## word_get
Get a word from active language.

**Return :**
The value of word.

**Parameters :**
- $name(name of the word)

## word_add_to
Add a word to custom language.

**Return :**
Bool

**Parameters :**
- $lang(language name)
- $name(name of the word)
- __Optional__, $value(value of the word)

## language_add
Add a new language.

**Return :**
Bool

**Parameters :**
- $key(language name)

## language_remove
Remove a language. 

**Return :**
Bool

**Parameters :**
- $key(language name)

## language_active
Activate a language.

**Return :**
Bool

**Parameters :**
- $key(language name)

## language_current
Get current active language.

**Return :**
Name of the active language.

**Parameters :**
None

## language_exists
Check a language is exists or not.

**Return :**
Bool

**Parameters :**
- $key (language name)

## language
Get list of the languages or list of the words of a language.

**Return :**
Array

**Parameters :**
- __Optional__, $filter(language name)




