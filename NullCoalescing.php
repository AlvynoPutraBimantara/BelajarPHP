<?php

$Role = ["User" => "Users_Page",
"Admin" => "Admin_Page"];

$Action = $Role [NULL] ?? "Guest_Page";

echo $Action . PHP_EOL;

