SELECT title, summary
FROM db_vliubko.film
WHERE (LOWER(summary) LIKE '%vincent%')
ORDER BY id_film ASC
;