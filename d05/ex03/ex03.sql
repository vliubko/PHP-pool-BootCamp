INSERT INTO db_vliubko.ft_table (login, `group`, creation_date)
SELECT last_name AS login, 'other' AS `group`, birthdate AS creation_date
FROM db_vliubko.user_card
WHERE (`last_name` LIKE '%a%') AND (CHAR_LENGTH(`last_name`) < 9)
ORDER BY last_name ASC LIMIT 10;