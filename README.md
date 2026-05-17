# true-async-ide-helper

IDE stub files for the [TrueAsync](https://github.com/true-async) v0.6 PHP extension  
Full documentation is available at [https://true-async.github.io](https://true-async.github.io)

Provides PHPDoc-annotated stubs for all TrueAsync classes, interfaces, enums, exceptions, and global functions. Gives PhpStorm, PHPStan, and Psalm autocompletion, type inference, and inline documentation

<img src="https://sun9-27.userapi.com/s/v1/ig2/NAL4VoWoV7qrZz8FBaj7r_JCWOGay3LgO3PeJ1wsW2Tt_mk6z0lfNf8nZKxbUu8yn7sRcGuJ4NvsSe913sTfmNg5.jpg?quality=95&as=32x13,48x19,72x29,108x44,160x65,240x97,360x145,461x186&from=bu&u=e_oSfvOYiHnpvpW3gvCFtAIuSTOKjlkdgqwbgvR7EaQ&cs=461x0">

## Installation

```bash
composer require --dev runni/true-async-ide-helper
```

## PhpStorm

No configuration needed

## PHPStan

Add to `phpstan.neon`:

```neon
parameters:
    scanDirectories:
        - vendor/runni/true-async-ide-helper/src
```

Or use stub files directly:

```neon
parameters:
    stubFiles:
        - vendor/runni/true-async-ide-helper/src/Cancellation.php
        - vendor/runni/true-async-ide-helper/src/Async/functions.php
```

## Psalm

Add to `psalm.xml`:

```xml
<stubs>
    <directory name="vendor/runni/true-async-ide-helper/src"/>
</stubs>
```

