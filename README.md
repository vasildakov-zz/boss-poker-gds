PHP client library for BossMedia GDS
=======================

[![Build Status](https://travis-ci.org/vasildakov/boss-poker-gds.svg?branch=master)](https://travis-ci.org/vasildakov/boss-poker-gds)
[![Coverage Status](https://coveralls.io/repos/vasildakov/boss-poker-gds/badge.png)](https://coveralls.io/r/vasildakov/boss-poker-gds)
[![Latest Stable Version](https://poser.pugx.org/vasildakov/boss-poker-gds/v/stable.png)](https://packagist.org/packages/vasildakov/boss-poker-gds)
[![Latest Unstable Version](https://poser.pugx.org/vasildakov/boss-poker-gds/v/unstable.png)](https://packagist.org/packages/vasildakov/boss-poker-gds)


Introduction
------------
This document describes how to use the web services provided by the Poker GDS (Gaming
Data System). It also describes the design requirements for the application that should
access the GDS Interface.

The GDS provides an interface for partners to retrieve their raw gaming data on a daily
basis.


Installation
------------

To install boss-poker-gds with Composer, just add the following to your composer.json file:

```js
// composer.json
{
    "require-dev": {
        "vasildakov/boss-poker-gds": "dev-master"
    }
}
```

Then, you can install the new dependencies by running Composer’s update command from the directory where your `composer.json` file is located:

```sh
$ php composer.phar install --dev
```

Overview
------------
The GDS (Gaming Data System) services provide Boss Media partners and clients with a
tool to expand their business intelligence analysis of customer data in their gaming
database. With access to daily aggregated figures with low granularity on player, transfer,
bonus and jackpot level, partners and clients can easily compile customized reports for:


Security
------------

