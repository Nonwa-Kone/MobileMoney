SELECT * FROM transactions t 
	RIGHT JOIN clients clt 
	ON clt.num_client = t.client_num 
	LEFT JOIN gerants g
	ON g.num_gerant = t.gerant_num
	LEFT JOIN agences a
	ON a.code_agence = g.agence_code
WHERE g.num_gerant = 1;

 SELECT * FROM transactions t
        LEFT JOIN clients c ON c.num_client = t.id_transaction
        WHERE  c.tel_client = ? AND t.numero_destinateur = ? AND t.date_transaction = ?