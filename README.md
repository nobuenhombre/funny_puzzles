# funny_puzzles

Веселые задачки


# 1) функция PHP

которая вернет номер элемента массива
наиболее близкий к переданному значению $needle
для заданного массива $haystack

для равноудаленных элементов выбор не принципиален

a) массив имеет произвольные значения
б) значения массива расположены по возрастающей

[Решение - similar.php](solves/1-php/similar.php "similar.php")


# 2) Запрос MySQL

есть таблица users

CREATE TABLE `users` (
`id` int(11),
`name` varchar(255),
`gender` tiniint(4),
`dep_id` int(11),
)

gender (
1 мужчины
2 женщины
)

нужно
dep_id | count man | count woman

a) любое написание запроса
б) без подзапросов и join

[Решение - mysql-query.sql](solves/2-mysql/mysql-query.sql "mysql-query.sql")

# 3) Есть несколько монет
одна фальшивая
фальшивая отличается по весу.
с помощью весов надо определить монету за три взвешивания.

a) 8 монет

[Решение - 8 монет - coins/08-coins.txt](solves/3-logic/08-coins.txt "coins/08-coins.txt")

б) 13 монет

[Решение - 13 монет - coins/13-coins.txt](solves/3-logic/13-coins.txt "coins/13-coins.txt")
