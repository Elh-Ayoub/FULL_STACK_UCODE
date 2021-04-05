SELECT MAX(powers.points) as  'Powerful hero' FROM powers;

SELECT MIN(powers.points) as  'Weakest hero' FROM powers;


SELECT heroes.id, heroes.name, SUM(powers.points) AS SUM
FROM heroes
JOIN powers ON heroes.id = powers.hero_id
GROUP BY powers.id
ORDER BY SUM DESC;


SELECT teams.name, SUM(powers.points) AS SUM
FROM heroes
JOIN powers ON heroes.id=powers.hero_id
JOIN teams ON heroes.id=teams.hero_id
GROUP BY teams.name
ORDER BY SUM;