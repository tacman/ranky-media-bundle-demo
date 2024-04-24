<?php

# config/packages/ranky_media.php
return static function (\Symfony\Config\RankyMediaConfig $rankyMediaConfig) {
    $rankyMediaConfig
        ->userEntity(\App\Entity\User::class)
        ->apiPrefix('/admin') // Optional: The same prefix you use when importing the routes must be the same here
    ;
};
