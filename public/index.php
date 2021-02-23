<?//= phpinfo(); die;

error_reporting(error_reporting() & ~E_USER_DEPRECATED);
require __DIR__ . '/../vendor/autoload.php';

/** @var \Application\Example $example */
$example = new \Application\Example;

/** @var int $result */
$result = $example->run(10, 20);

printf("Result is: %s, at time %s", $result, date('Y.m.d:H:i:s'));