<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 14.08.17
 * Time: 17:00
 */
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-color-picker')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->cssPackage('angularjs-color-picker.min.css')
    ->cssPackage('themes/angularjs-color-picker-bootstrap.min.css')
    ->jsPackage('tinycolor-min.js')
    ->jsPackage('angularjs-color-picker.min.js');