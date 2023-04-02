<?php

$id = $db->escape($_GET["id"]);

$post = $db->querySingle("select * from posts where id = {$id}");
