<?php

spl_autoload_register(function ($class) {
// ?? isi class yg asli seperti ini           $class = /App/Produk/User
// ? jadi array                               $class = [App, Produk, User]
    $class = explode('\\', $class);
    $class = end($class);

    require_once __DIR__ . '/Calculate/' . $class . '.php';
});










