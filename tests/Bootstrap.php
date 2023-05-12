<?php
// This is the bootstrap for PHPUnit testing.

/**
 * The original file was called _bootstrap as referenced in phpunit.xml.dist
 * but this gave all kinds of weirdness. So instead we create a file
 * with Uppercase and add this bogus class and function here.
 */
class Bootstrap extends \PHPUnit\Framework\TestCase {
    public function testDummy()
    {
        $this->assertTrue(true);
    }
}

if (!defined('WHMCS')) {
    define('WHMCS', true);
}

// Include the WHMCS module.
require_once __DIR__ . '/../modules/servers/provisioningmodule/provisioningmodule.php';

/**
 * Mock logModuleCall function for testing purposes.
 *
 * Inside of WHMCS, this function provides logging of module calls for debugging
 * purposes. The module log is accessed via Utilities > Logs.
 *
 * @param string $module
 * @param string $action
 * @param string|array $request
 * @param string|array $response
 * @param string|array $data
 * @param array $variablesToMask
 *
 * @return void|false
 */
function logModuleCall(
    $module,
    $action,
    $request,
    $response,
    $data = '',
    $variablesToMask = array()
) {
    // do nothing during tests
}
