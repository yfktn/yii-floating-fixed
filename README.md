yii-floating-fixed
==================

yii-floating-fixed is the extension for YII framework, as the wrapper for [JQuery floating fixed plugin] (https://github.com/cheald/floatingFixed/blob/master/jquery.floatingFixed.js).

What is this using for?
---------------------

From floating fixed Jquery plugin header: 

This is a simple plugin to allow you to toggle an element between
position: absolute and position: fixed based on the window scroll
position. This lets you have an apparently inline element which floats
to stay on the screen once it would otherwise scroll off the screen.

Using Extensions
---------------------

* extract **yii-floating-fixed** to extensions folder
* in your view

```php
<?php
$this->widget('ext.floatingFixed.FloatingFixed', array(
    'target'=>'.buttons-sticky-container',
    'padding'=>1,
));
?>
```
