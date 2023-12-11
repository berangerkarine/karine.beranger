SELECT nom, id_etage, capacite FROM salles 
 ORDER BY capacite DESC LIMIT 1;

 UPDATE salles SET nom = REPLACE(nom, "", 'Biggest room');