# WHMCS Server Provisioning Template #

[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/eugenevdm/whmcs-provisioning-template/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/eugenevdm/whmcs-provisioning-template/actions?query=workflow%3Arun-tests+branch%3Amain)

## Summary ##

This is a custom WHMCS server provisioning module template.

It is based on the [official one](https://github.com/WHMCS/sample-provisioning-module) from WHMCS with the following added:

- Made tests to pass with PHPUnit 10
- Added missing Update Usage module call 
- Added a PHPUnit Tests YML file and badge

For more information, please refer to the documentation at:
https://developers.whmcs.com/provisioning-modules/

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.