# Mail BCC
[![Build Status](https://travis-ci.org/fond-of/spryker-mail-bcc.svg?branch=master)](https://travis-ci.org/fond-of/spryker-mail-bcc)
[![PHP from Travis config](https://img.shields.io/travis/php-v/fond-of/spryker-mail-bcc.svg)](https://php.net/)
[![license](https://img.shields.io/github/license/fond-of/spryker-mail-bcc.svg)](https://packagist.org/packages/fond-of-spryker/mail-bcc)

## Description

What it does:
- Provides oms mail expander plugin (BccOrderMailExpanderPlugin) for sending bcc emails with command 'Oms/SendOrderConfirmation' to the email addresses registered in config.

## Installation

```
composer require fond-of-spryker/mail-bcc
```

## Configuration

Register in src/Pyz/Zed/Oms/OmsDependencyProvider.php

```
/**
* @param \Spryker\Zed\Kernel\Container $container
*
* @return \Spryker\Zed\OmsExtension\Dependency\Plugin\OmsOrderMailExpanderPluginInterface[]
*/
protected function getOmsOrderMailExpanderPlugins(Container $container)
{
    return [
        ...
        new BccOrderMailExpanderPlugin(),
    ];
}
```
Add BCC mail addresses in you config
```
// ---------- OrderConfirmation in BCC to
$config[MailBccConstants::MAIL_BCC_ORDER] = [
    'bccaddress@mail.com' => 'Name',
];
```

