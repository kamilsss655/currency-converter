# Currency converter demo app

[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)
[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/cakephp/app)

![alt tag](https://github.com/kamilsss655/currency-converter/blob/master/webroot/img/logo.png)

A currency converter RUB->PLN demo app with [CakePHP](http://cakephp.org) 3.0.

## Usage

1. Go to `/currency-converter`

##Technologies used
1. CakePHP
2. jQuery

##How it works
Application sends Ajax GET request to `currency-converter/convert/:value` where `value` is current RUB value entered in the form. Ajax call is made every time input value is changed. Then it is passed via Google Finance Converter (http://www.google.com/finance/converter) and PLN value is returned.

##Screenshots
![alt tag](https://github.com/kamilsss655/currency-converter/blob/master/webroot/img/screenshot.png)
Example screenshot of the working app.

##Author
Kamil Cyrkler
