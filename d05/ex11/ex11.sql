SELECT UPPER(last_name) as 'NAME', first_name, price
FROM db_vliubko.subscription 
INNER JOIN db_vliubko.member using(id_sub)
INNER JOIN db_vliubko.user_card ON id_user_card = id_user
WHERE (price > 42)
ORDER BY last_name ASC, first_name ASC
;