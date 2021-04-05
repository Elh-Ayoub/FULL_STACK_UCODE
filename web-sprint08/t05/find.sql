SELECT heroes.id, heroes.name from heroes JOIN teams ON heroes.id=teams.hero_id
WHERE (teams.name = 'Avengers' or teams.name = 'Hydra') and heroes.race != 'human' and
(heroes.name like '%a%') and (heroes.class_role = 'tankman' OR heroes.class_role = 'healer')
GROUP BY  heroes.id
ORDER BY heroes.id DESC;
