<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'validators' => 
  array (
    'This value should be false.' => 'Aquest valor hauria de ser fals.',
    'This value should be true.' => 'Aquest valor hauria de ser cert.',
    'This value should be of type {{ type }}.' => 'Aquest valor hauria de ser del tipus {{ type }}.',
    'This value should be blank.' => 'Aquest valor hauria d\'estar buit.',
    'The value you selected is not a valid choice.' => 'El valor seleccionat no és una opció vàlida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ha de seleccionar almenys {{ limit }} opció.|Ha de seleccionar almenys {{ limit }} opcions.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ha de seleccionar com a màxim {{ limit }} opció.|Ha de seleccionar com a màxim {{ limit }} opcions.',
    'One or more of the given values is invalid.' => 'Un o més dels valors facilitats són incorrectes.',
    'This field was not expected.' => 'Aquest camp no s\'esperava.',
    'This field is missing.' => 'Aquest camp està desaparegut.',
    'This value is not a valid date.' => 'Aquest valor no és una data vàlida.',
    'This value is not a valid datetime.' => 'Aquest valor no és una data i hora vàlida.',
    'This value is not a valid email address.' => 'Aquest valor no és una adreça d\'email vàlida.',
    'The file could not be found.' => 'No s\'ha pogut trobar l\'arxiu.',
    'The file is not readable.' => 'No es pot llegir l\'arxiu.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran ({{ size }} {{ suffix }}). La grandària màxima permesa és {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipus mime de l\'arxiu no és vàlid ({{ type }}). Els tipus mime vàlids són {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Aquest valor hauria de ser {{ limit }} o menys.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcter o menys.|Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcters o menys.',
    'This value should be {{ limit }} or more.' => 'Aquest valor hauria de ser {{ limit }} o més.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Aquest valor és massa curt. Hauria de tenir {{ limit }} caràcters o més.',
    'This value should not be blank.' => 'Aquest valor no hauria d\'estar buit.',
    'This value should not be null.' => 'Aquest valor no hauria de ser null.',
    'This value should be null.' => 'Aquest valor hauria de ser null.',
    'This value is not valid.' => 'Aquest valor no és vàlid.',
    'This value is not a valid time.' => 'Aquest valor no és una hora vàlida.',
    'This value is not a valid URL.' => 'Aquest valor no és una URL vàlida.',
    'The two values should be equal.' => 'Els dos valors haurien de ser iguals.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran. El tamany màxim permés és {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'L\'arxiu és massa gran.',
    'The file could not be uploaded.' => 'No es pot pujar l\'arxiu.',
    'This value should be a valid number.' => 'Aquest valor hauria de ser un nombre vàlid.',
    'This file is not a valid image.' => 'L\'arxiu no és una imatge vàlida.',
    'This is not a valid IP address.' => 'Això no és una adreça IP vàlida.',
    'This value is not a valid language.' => 'Aquest valor no és un idioma vàlid.',
    'This value is not a valid locale.' => 'Aquest valor no és una localització vàlida.',
    'This value is not a valid country.' => 'Aquest valor no és un país vàlid.',
    'This value is already used.' => 'Aquest valor ja s\'ha utilitzat.',
    'The size of the image could not be detected.' => 'No s\'ha pogut determinar la grandària de la imatge.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'L\'amplària de la imatge és massa gran ({{ width }}px). L\'amplària màxima permesa són {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'L\'amplària de la imatge és massa petita ({{ width }}px). L\'amplària mínima requerida són {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'L\'altura de la imatge és massa gran ({{ height }}px). L\'altura màxima permesa són {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'L\'altura de la imatge és massa petita ({{ height }}px). L\'altura mínima requerida són {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Aquest valor hauria de ser la contrasenya actual de l\'usuari.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Aquest valor hauria de tenir exactament {{ limit }} caràcter.|Aquest valor hauria de tenir exactament {{ limit }} caràcters.',
    'The file was only partially uploaded.' => 'L\'arxiu va ser només pujat parcialment.',
    'No file was uploaded.' => 'Cap arxiu va ser pujat.',
    'No temporary folder was configured in php.ini.' => 'Cap carpeta temporal va ser configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No es va poder escriure l\'arxiu temporal en el disc.',
    'A PHP extension caused the upload to fail.' => 'Una extensió de PHP va fer que la pujada fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o més.|Aquesta col·lecció ha de contenir {{ limit }} elements o més.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o menys.|Aquesta col·lecció ha de contenir {{ limit }} elements o menys.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Aquesta col·lecció ha de contenir exactament {{ limit }} element.|Aquesta col·lecció ha de contenir exactament {{ limit }} elements.',
    'Invalid card number.' => 'Número de targeta invàlid.',
    'Unsupported card type or invalid card number.' => 'Tipus de targeta no suportada o número de targeta invàlid.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Això no és un nombre de compte bancari internacional (IBAN) vàlid.',
    'This value is not a valid ISBN-10.' => 'Aquest valor no és un ISBN-10 vàlid.',
    'This value is not a valid ISBN-13.' => 'Aquest valor no és un ISBN-13 vàlid.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Aquest valor no és ni un ISBN-10 vàlid ni un ISBN-13 vàlid.',
    'This value is not a valid ISSN.' => 'Aquest valor no és un ISSN vàlid.',
    'This value is not a valid currency.' => 'Aquest valor no és una divisa vàlida.',
    'This value should be equal to {{ compared_value }}.' => 'Aquest valor hauria de ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Aquest valor hauria de ser més gran a {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Aquest valor hauria de ser major o igual a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Aquest valor hauria de ser idèntic a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Aquest valor hauria de ser menor a {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Aquest valor hauria de ser menor o igual a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Aquest valor no hauria de ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Aquest valor no hauria de idèntic a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporció de l\'imatge és massa gran ({{ ratio }}). La màxima proporció permesa és {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporció de l\'imatge és massa petita ({{ ratio }}). La mínima proporció permesa és {{ max_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'imatge és quadrada({{ width }}x{{ height }}px). Les imatges quadrades no estan permeses.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'imatge està orientada horitzontalment ({{ width }}x{{ height }}px). Les imatges orientades horitzontalment no estan permeses.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'imatge està orientada verticalment ({{ width }}x{{ height }}px). Les imatges orientades verticalment no estan permeses.',
    'An empty file is not allowed.' => 'No està permès un fixter buit.',
    'The host could not be resolved.' => 'No s\'ha pogut resoldre l\'amfitrió.',
    'This value does not match the expected {{ charset }} charset.' => 'Aquest valor no coincideix amb l\'esperat {{ charset }} joc de caràcters.',
    'This is not a valid Business Identifier Code (BIC).' => 'Aquest no és un codi d\'identificació bancari (BIC) vàlid.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Aquest valor no és un UUID vàlid.',
    'This value should be a multiple of {{ compared_value }}.' => 'Aquest valor ha de ser múltiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Aquest Codi d\'identificació bancari (BIC) no està associat amb l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Aquest valor hauria de ser un JSON vàlid.',
    'This collection should contain only unique elements.' => 'Aquesta col·lecció només hauria de contenir elements únics.',
    'This value should be positive.' => 'Aquest valor hauria de ser positiu.',
    'This value should be either positive or zero.' => 'Aquest valor ha de ser positiu o zero.',
    'This value should be negative.' => 'Aquest valor ha de ser negatiu.',
    'This value should be either negative or zero.' => 'Aquest valor ha de ser negatiu o zero.',
    'This value is not a valid timezone.' => 'Aquest valor no és una zona horària vàlida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Aquesta contrasenya s\'ha filtrat en cas de violació de dades, no s\'ha d\'utilitzar. Utilitzeu una altra contrasenya.',
    'This value should be between {{ min }} and {{ max }}.' => 'Aquest valor ha d\'estar entre {{ min }} i {{ max }}.',
    'This value is not a valid hostname.' => 'Aquest valor no és un nom d\'amfitrió vàlid.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'El nombre d\'elements d\'aquesta col·lecció ha de ser múltiple de {{compared_value}}.',
    'This value should satisfy at least one of the following constraints:' => 'Aquest valor ha de satisfer almenys una de les restriccions següents:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada element d\'aquesta col·lecció hauria de satisfer el seu propi conjunt de restriccions.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Aquest valor no és un número d\'identificació de valors internacionals (ISIN) vàlid.',
    'This value should be a valid expression.' => 'Aquest valor hauria de ser una expressió vàlida.',
    'This value is not a valid CSS color.' => 'Aquest valor no és un color CSS vàlid.',
    'This value is not a valid CIDR notation.' => 'Aquest valor no és una notació CIDR vàlida.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'El valor de la màscara de xarxa hauria d\'estar entre {{ min }} i {{ max }}.',
  ),
  'time' => 
  array (
    'diff.ago.year' => 'fa 1 any|fa %count% anys',
    'diff.ago.month' => 'fa 1 mes|fa %count% mesos',
    'diff.ago.day' => 'fa 1 dia|fa %count% dies',
    'diff.ago.hour' => 'fa 1 hora|fa %count% hores',
    'diff.ago.minute' => 'fa 1 minut|fa %count% minuts',
    'diff.ago.second' => 'fa 1 segon|fa %count% segons',
    'diff.empty' => 'ara',
    'diff.in.second' => 'd\'aquí 1 segon|d\'aquí %count% segons',
    'diff.in.hour' => 'd\'aquí 1 hora|d\'aquí %count% hores',
    'diff.in.minute' => 'd\'aquí 1 minut|d\'aquí %count% minuts',
    'diff.in.day' => 'd\'aquí 1 dia|d\'aquí %count% dies',
    'diff.in.month' => 'd\'aquí 1 mes|d\'aquí %count% mesos',
    'diff.in.year' => 'd\'aquí 1 any|d\'aquí %count% anys',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
  ),
  'time' => 
  array (
    'diff.ago.year' => '1 year ago|%count% years ago',
    'diff.ago.month' => '1 month ago|%count% months ago',
    'diff.ago.day' => '1 day ago|%count% days ago',
    'diff.ago.hour' => '1 hour ago|%count% hours ago',
    'diff.ago.minute' => '1 minute ago|%count% minutes ago',
    'diff.ago.second' => '1 second ago|%count% seconds ago',
    'diff.empty' => 'now',
    'diff.in.second' => 'in 1 second|in %count% seconds',
    'diff.in.hour' => 'in 1 hour|in %count% hours',
    'diff.in.minute' => 'in 1 minute|in %count% minutes',
    'diff.in.day' => 'in 1 day|in %count% days',
    'diff.in.month' => 'in 1 month|in %count% months',
    'diff.in.year' => 'in 1 year|in %count% years',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
