SELECT last_name, first_name
FROM db_vliubko.user_card
WHERE (first_name LIKE '%-%') OR (last_name LIKE '%-%')
ORDER BY last_name ASC, first_name ASC
;