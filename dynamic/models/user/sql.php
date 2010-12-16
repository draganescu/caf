<?php
$querries["get_user"] = "select * from users where id = '%s'";
$querries["get_users"] = "select * from users limit %s offset %s";
$querries["get_discussions"] = "select * from discussions where user = '%s'";