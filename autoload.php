<?php
# Автоматическая загрузка классов, их файлов подключение
spl_autoload_register(function ($classname) {
   require_once 'core/' . $classname . '.php';
});
# Логическая функцианальность
# $ obj = new User();
# Автозагрузчик работает таким образом
# В аргумент $classname Будет передано слово User.php
# Так как require_once создает ссылку подключение: core/User.php
