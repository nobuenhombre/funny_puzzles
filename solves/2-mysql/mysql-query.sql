CREATE TABLE `users`
(
    `id`     int(11),
    `name`   varchar(255),
    `gender` tinyint(4),
    `dep_id` int(11)
);

INSERT INTO users (id, name, gender, dep_id) VALUES (1, 'Иван', 1, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (2, 'Виктор', 1, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (3, 'Илья', 1, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (4, 'Елена', 2, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (5, 'Ульяна', 2, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (6, 'Светлана', 2, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (7, 'Ольга', 2, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (8, 'Рима', 2, 1);
INSERT INTO users (id, name, gender, dep_id) VALUES (9, 'Хасан', 1, 2);
INSERT INTO users (id, name, gender, dep_id) VALUES (10, 'Абдул', 1, 2);
INSERT INTO users (id, name, gender, dep_id) VALUES (11, 'Фатима', 2, 2);
INSERT INTO users (id, name, gender, dep_id) VALUES (12, 'Зарина', 2, 2);
INSERT INTO users (id, name, gender, dep_id) VALUES (13, 'Куркума', 2, 2);

-- var 1
SELECT
    u.dep_id as dep_id,
    SUM(IF(u.gender = 1, 1, 0)) man_count,
    SUM(IF(u.gender = 2, 1, 0)) woman_count
FROM
    `users` AS u
GROUP BY
    u.dep_id;

-- var 2
SELECT
    DISTINCT u.dep_id AS dep_id,
             (SELECT
                  COUNT(*)
              FROM
                  `users` AS um
              WHERE
                      um.dep_id = u.dep_id AND um.gender=1) AS man_count,
             (SELECT
                  COUNT(*)
              FROM
                  `users` AS uw
              WHERE
                      uw.dep_id = u.dep_id AND uw.gender=2) AS woman_count
FROM
    `users` AS u;