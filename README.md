# Custom Email Theme for Magento 2

Allows you to specify a custom theme for Magento 2 emails.

## Description

When developing a custom Magento 2 theme, developers often set ``Magento/blank`` as parent theme. This has a side-effect of having outgoing e-mail be completely unstyled.
This module forces the theme for e-mails to ``Magento/luma`` while leaving the frontend unchanged, so we can have best of both worlds.

Optionally, one can specify their own theme through backend configuration. (System > Configuration > Sales Emails)

## Installation

```bash
$ composer require rubic/magento2-module-custom-email-theme
```

## License

Copyright 2018 Rubic

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
