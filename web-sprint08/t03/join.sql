SELECT heroes.id, heroes.name, heroes.race, heroes.class_role, teams.name 
FROM heroes 
LEFT JOIN teams ON heroes.id=teams.hero_id;


SELECT heroes.id, heroes.name, heroes.race, heroes.class_role, powers.name 
FROM heroes 
LEFT JOIN powers ON heroes.id = powers.hero_id;

SELECT heroes.id, heroes.name, powers.name, teams.name
FROM heroes 
INNER JOIN powers ON heroes.id = powers.hero_id 
INNER JOIN teams ON heroes.id=teams.hero_id;
