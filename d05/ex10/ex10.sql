SELECT title as 'Title' , summary as 'Summary', prod_year
FROM db_vliubko.film 
INNER JOIN db_vliubko.genre using(id_genre)
WHERE (name = 'erotic')
ORDER BY prod_year DESC
;