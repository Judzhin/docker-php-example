<?//= phpinfo(); die;

error_reporting(error_reporting() & ~E_USER_DEPRECATED);
require __DIR__ . '/../vendor/autoload.php';

/** @var \Application\Example $example */
$example = new \Application\Example;
$example->say("Hello World!<br>");

$i = 1000;
$k = 2000;

printf("Refresh time: %s", date('Y.m.d:H:i:s'));