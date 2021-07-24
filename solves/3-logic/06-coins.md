ШЕСТЬ монет
===========

[см Интро](00-intro.md "00-intro.md")

[Две монеты](02-coins.md "02-coins.md")

[Три монеты](03-coins.md "03-coins.md")

[Четыре монеты](04-coins.md "04-coins.md")

[Пять монет](05-coins.md "05-coins.md")

Если разделить пополам - остатка нет

Вариант
m1 + m2 + m3 != m4 + m5 + m6
-- не дает решения - дробим мельче

Используем варианты
SCHEMA-1 :: m1? + m2? == m3? + m4? !== m5? + m6?
SCHEMA-2 :: m1? + m2? != m3? + m4? === m5? + m6?

МОЯ КЛИНОПИСЬ
=============

SCH-1::WEI-1        [(m1? + m2?) == (m3? + m4?)] -> @ m1G, m2G, m3G, m4G, m5?, m6? @
SCH-1::WEI-2::VAR-1 [m4G == m5?] -> $ m1G, m2G, m3G, m4G, m5G, m6F $
SCH-1::WEI-2::VAR-2 [m4G != m5?] -> $ m1G, m2G, m3G, m4G, m5F, m6G $
total 2

SCH-2::WEI-1 [(m1? + m2?) != (m3? + m4?)] -> @ m1?, m2?, m3?, m4?, m5G, m6G @
-- далее берем клинопись от 4-х монет

SCH-2::VAR-1::WEI-2        [m1? == m2?] -> @ m1G, m2G, m3?, m4?, m5G @
SCH-2::VAR-1::WEI-3::VAR-1 [m1G == m3?] -> $ m1G, m2G, m3G, m4F, m5G $
SCH-2::VAR-1::WEI-3::VAR-2 [m1G != m3?] -> $ m1G, m2G, m3F, m4G, m5G $
total 3

SCH-2::VAR-2::WEI-2        [m1? != m2?] -> @ m1?, m2?, m3G, m4G, m5G @
SCH-2::VAR-2::WEI-3::VAR-1 [m3G == m1?] -> $ m1G, m2F, m3G, m4G, m5G $
SCH-2::VAR-2::WEI-3::VAR-2 [m3G != m1?] -> $ m1F, m2G, m3G, m4G, m5G $
total 3

min 2, max 3

ВЫВОДЫ
======
ГРУППА из 6-ти монет
МИНИМАЛЬНОЕ число взвешиваний = 2
МАКСИМАЛЬНОЕ число взвешиваний = 3

Схема взвешиваний описана.

[Вперед - Семь монет](07-coins.md "07-coins.md")