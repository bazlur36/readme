This is a language-specific API client for [ReadMe Build](https://readme.build). It's based on the [api spec](https://github.com/readmeio/api-spec).

# Installation

###Using with Composer
```php
composer require bazlur36/api-php=dev-master
```

# Usage
```php
<?php
    require __DIR__ . '/vendor/autoload.php';
    
    use ReadmeAPI\Build;
    
    $build = new Build();
    $build->config('abdul_f9cfcade4264cba870585a','');
    $rp = $build->run('math','multiply',array('numbers' => array(1,2,3)));
    
    print_r($rp);

?>
```

###Using without Composer
Download the Build.php file from https://github.com/bazlur36/readme/blob/master/src/Build.php and use as following

```php
<?php
require 'YOUR_PATH/Build.php';
    use ReadmeAPI\Build;
    
    $build = new Build();
    $build->config('abdul_f9cfcade4264cba870585a','');
    $rp = $build->run('math','multiply',array('numbers' => array(1,2,3)));
    
    print_r($rp);
    
    ?>
    