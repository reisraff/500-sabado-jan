<?php
// heredoc.php

$user_course = '500';
$user_email = 'aluno@4linux.com';

$sql = <<<QUERY
SELECT
	*
FROM
	users
WHERE
	user_course = $user_course
	AND user_email = "$user_email"
QUERY;

echo '<pre>';
echo $sql;

echo '<hr />';

$sql = <<<'QUERY'
SELECT
	*
FROM
	users
WHERE
	user_course = $user_course
	AND user_email = "$user_email"
QUERY;

echo '<pre>';
echo $sql;
