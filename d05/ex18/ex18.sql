SELECT name
FROM db_vliubko.distrib
WHERE 	((id_distrib = 42) OR 
		(id_distrib = 63) OR (id_distrib = 64) OR (id_distrib = 65) OR (id_distrib = 66) 
	OR (id_distrib = 67) OR (id_distrib = 68) OR (id_distrib = 69) OR (id_distrib = 71)
	OR (id_distrib = 88) OR (id_distrib = 89) OR (id_distrib = 90)) OR (LOWER(name) LIKE "%y%y%")
LIMIT 2, 5
;
