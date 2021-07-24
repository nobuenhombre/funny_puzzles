ВОСЕМЬ монет
============

[см Интро](00-intro.md "00-intro.md")

[Две монеты](02-coins.md "02-coins.md")

[Три монеты](03-coins.md "03-coins.md")

[Четыре монеты](04-coins.md "04-coins.md")

[Пять монет](05-coins.md "05-coins.md")

[Шесть монет](06-coins.md "06-coins.md")

[Семь монет](07-coins.md "07-coins.md")


Если разделить пополам - остатка нет

Вариант
m1 + m2 + m3 + m4 !== m5 + m6 + m7 + m8
-- не дает решения - дробим мельче

Используем варианты
SCHEMA-1 :: m1? + m2? == m3? + m4? == m5? + m6? !== m7? + m8?
SCHEMA-2 :: m1? + m2? == m3? + m4? != m5? + m6?, m7G, m8G
SCHEMA-3 :: m1? + m2? != m3? + m4? == m5? + m6?, m7G, m8G

МОЯ КЛИНОПИСЬ
=============

SCH-1::WEI-1        [(m1? + m2?) == (m3? + m4?)] -> @ m1G, m2G, m3G, m4G, m5?, m6?, m7?, m8? @
SCH-1::WEI-2        [(m3? + m4?) == (m5? + m6?)] -> @ m1G, m2G, m3G, m4G, m5G, m6G, m7?, m8? @
SCH-1::WEI-3::VAR-1 [m7? == m1G]                 -> $ m1G, m2G, m3G, m4G, m5G, m6G, m7G, m8F $
SCH-1::WEI-3::VAR-2 [m7? != m1G]                 -> $ m1G, m2G, m3G, m4G, m5G, m6G, m7F, m8G $
total 3

SCH-2::WEI-1        [(m1? + m2?) == (m3? + m4?)] -> @ m1G, m2G, m3G, m4G, m5?, m6?, m7?, m8? @
SCH-2::WEI-2        [(m3? + m4?) != (m5? + m6?)] -> @ m1G, m2G, m3G, m4G, m5?, m6?, m7G, m8G @
SCH-2::WEI-3::VAR-1 [m5? == m1G]                 -> $ m1G, m2G, m3G, m4G, m5G, m6F, m7G, m8G $
SCH-2::WEI-3::VAR-2 [m5? != m1G]                 -> $ m1G, m2G, m3G, m4G, m5F, m6G, m7G, m8G $
total 3

SCH-3::WEI-1        [(m1? + m2?) != (m3? + m4?)] -> @ m1?, m2?, m3?, m4?, m5G, m6G, m7G, m8G @
SCH-3::WEI-2        [(m3? + m4?) == (m5? + m6?)] -> @ m1?, m2?, m3G, m4G, m5G, m6G, m7G, m8G @
SCH-3::WEI-3::VAR-1 [m1? == m3G]                 -> $ m1G, m2F, m3G, m4G, m5G, m6G, m7G, m8G $
SCH-3::WEI-3::VAR-2 [m1? != m3G]                 -> $ m1F, m2G, m3G, m4G, m5G, m6G, m7G, m8G $
total 3

min 3, max 3

ВЫВОДЫ
======
ГРУППА из 8-ти монет
МИНИМАЛЬНОЕ число взвешиваний = 3
МАКСИМАЛЬНОЕ число взвешиваний = 3

[Вперед - 9-10-11-12 монет](09-10-11-12-coins.md "09-10-11-12-coins.md")