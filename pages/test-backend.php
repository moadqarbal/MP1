<?php


$methods = get_class_methods('Carre');
echo '<pre>';
print_r($methods);
echo '</pre>';


$my_classes = get_declared_classes();

echo '<pre>';
print_r($my_classes);
echo '</pre>';

