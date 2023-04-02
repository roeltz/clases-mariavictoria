<?php

$ultimosPosts = $db->query(<<<SQL
	select p.*, u.name userName, t.name topicName
	from posts p
	inner join users u on p.user = u.id
	inner join topics t on p.topic = t.id
	order by id desc
	limit 10
SQL);
