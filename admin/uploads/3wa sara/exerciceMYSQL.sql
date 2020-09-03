................................................Mardi.................................................................
Exercices (requétes SQL)
1. affichage du nom de la ville, le code postale et la commune de chaque ville:

    SELECT ville_nom, ville_commune,ville_code_postal FROM `villes_france_free` WHERE 1 

2. le nombre réel, le code postal de chaque ville ayant un nombre de communes iférieur à 2020

    SELECT ville_nom_reel, ville_code_postal FROM `villes_france_free` WHERE ville_commune < 2020

3.affiche de toutes les villes ayant un nom different 
    
     SELECT DISTINCT ville_nom FROM `villes_france_free` WHERE 1

4. Affichage toutes les villes dont la population des année 2010 est :
suppérieur à 1000 et le nombre de communes est iférieur à 200 et sorter-les par ordre croissant par rapport aux noms des villes

    SELECT ville_population_2010, ville_population_2010, ville_commune,ville_nom FROM `villes_france_free` WHERE (ville_population_2010 > 1000 AND ville_commune<200) ORDER BY ville_nom

5. afficher le nom et le nombre de communes des villes ayant un slug NUll 

     SELECT ville_nom, ville_commune FROM `villes_france_free` WHERE ville_nom IS NULL

6.Afficher le nom et le nombre de communes desvilles ayant un slang NOT NULL

  SELECT ville_nom, ville_commune FROM `villes_france_free` WHERE ville_nom IS NOT NULL

7. modification de nom Slug de la ville avec ID=227: 
_ nom="paris"
_ slug="paris_ville"
UPDATE villes_france_free SET ville_nom="paris", ville_slug="paris_ville" WHERE ville_id=227

8. Supprimer la ville avec ID=17

DELETE FROM villes_france_free WHERE ville_id=17

9.Selectionnez les 5 premiers villes en utilisant(LIMIT)
SELECT ville_nom FROM villes_france_free LIMIT 5
 10. Selectionnez a partir du 9eme ligne

SELECT * FROM villes_france_free LIMIT 5 OFFSET 8
SELECT * FROM villes_france_free LIMIT 8,5

11. Affichage de nombre des villes ayants un nombre de communes superieur à 150
SELECT COUNT(ville_nom) FROM `villes_france_free` WHERE ville_commune>150
12. Affichage de nombre moyens des communes 
SELECT AVG(ville_commune) FROM villes_france_free
13. Affichage des villes avec le plus grand nombre de communes 
SELECT * FROM villes_france_free WHERE ville_commune IN (SELECT MAX(ville_commune) FROM villes_france_free)

14. Affichage ....... le plus petite .....
SELECT * FROM villes_france_free WHERE ville_commune IN (SELECT MIN(ville_commune) FROM villes_france_free) 

15. affichage de noms des villes qui commencent par "b" et que se terminent avec "S".
SELECT ville_nom FROM `villes_france_free`where ville_nom like "b%" AND ville_nom like "%s"

16. affichage  des noms qui contiennent "ds"
SELECT ville_nom FROM `villes_france_free`where ville_nom like "%ds%"

17. affichage des noms qui ont "c" comme 3eme charactére
SELECT ville_nom FROM `villes_france_free`where ville_nom like "__a"

...............................................Mercredi..................................................
les types des cardinalités (joiture)








