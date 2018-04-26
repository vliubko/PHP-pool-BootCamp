SELECT COUNT(*) AS 'nb_short-films'
FROM db_vliubko.film
WHERE (duration <= 42)
;