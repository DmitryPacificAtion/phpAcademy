# Создать базу данных
CREATE DATABASE practice_db SET utf8 COLLATE utf8_general_ci;
USE practice_db;

# Создать таблицу
CREATE TABLE country (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL, short_name CHAR(2), square BIGINT NOT NULL, peoples BIGINT NOT NULL, continent VARCHAR(50), president VARCHAR(125) NOT NULL);

# Вставить в таблицу country 10 записей
INSERT INTO `country` (name, short_name, square, peoples, continent, president)
VALUES ('Ukraine', 'ua', 603549, 42388691, 'Eurasia', 'Petr Poroshenko'), 
('Belarus', 'by', 207595, 9505200, 'Eurasia', 'Aleksandr Lukashenko'),
('Russia', 'ru', 17125191, 146804372, 'Eurasia', 'Vladimir Putin'),
('Poland', 'pl', 312679, 38627070, 'Eurasia', 'Andrzej Duda' ),
('Australia', 'au', 7692024, 24067700, 'Australia', 'Elizabeth II'),
('Great Britain', 'gb', 243809, 63395574, 'Eurasia', 'Elizabeth II'),
('USA', 'us', 9519431, 325310275, 'North America', 'Donald Trump' ),
('Argentina', 'ag', 2780400, 43417000, 'South America', 'Mauricio Macri'),
('China', 'cn', 9598962, 1380083000, 'Eurasia', 'Xi Jinping' ),
('New Zeland', 'nz', 268680, 4596700, 'Australia', 'Elizabet II');

# Получить все записи всех полей из таблицы country. Получить список названий стран. Получить список названий стран и их президентов.
SELECT * FROM `country`;
SELECT name FROM `country`;
SELECT name, president FROM `country`;

# Получить страны, порядковые номера которых больше 3 и не меньше 7.
# Получить страны, в которых население больше 20 миллионов и порядковые номера которых меньше 7.
# Получить информацию о стране по конкретному названию.
# Получить страны Азии.

SELECT * FROM `country` WHERE id > 3 AND id <= 7;
SELECT * FROM `country` WHERE peoples > 20000000 AND id < 7;
SELECT * FROM `country` WHERE name = "USA";
SELECT * FROM `country` WHERE continent = "Eurasia";

# Получить страны, порядковые номера которых либо 5, либо 7, либо 2. 
# Получить страны, названия которых содержат символ n.
SELECT * FROM `country` WHERE id IN(5, 7, 2);
SELECT * FROM `country` WHERE name LIKE '%n%';
SELECT * FROM `country` WHERE peoples BETWEEN 10000000 AND 100000000;

# Получить выборку всех записей таблицы, назначив псевдонимы в виде сокращенных названий столбцов. 
# Получить список континентов без повторений
SELECT id AS №, name AS n, short_name AS sn, square AS sq, peoples AS p, continent AS c, president AS pr FROM `country`;
SELECT DISTINCT continent FROM `country`;

# Сгруппировать записи по названию континентов
SELECT * FROM `country` GROUP BY continent;
SELECT * FROM `country` WHERE id > 0 AND id < 9 GROUP BY continent;

# Получить максимальное и минимальное население по странам. 
# Получить среднее население по Европейским странам. 
# Получить общее население всех стран.

SELECT MIN(peoples) AS min, MAX(peoples) AS max FROM `country`; 
SELECT AVG(peoples) AS avg_eur FROM `country` WHERE continent = "Eurasia";
SELECT SUM(peoples) FROM `country`;

# Получить континенты, среднее население по странам которых превышает 40 000 000 человек
SELECT name, AVG(peoples) AS avg_ppl, continent, peoples FROM `country` GROUP BY continent HAVING avg_ppl > 40000000;

# Получить полную таблицу упорядоченную по названию страны. 
# Получить полную таблицу упорядоченную по названию континентов и по названию страны.
SELECT * FROM `country` ORDER BY name;
SELECT * FROM `country` ORDER BY continent, name;

# Получить последнюю добавленную запись из таблицы country
SELECT * FROM `country` ORDER BY id DESC LIMIT 1;

# Изменить количество населения в странах Европы и изменить действующего президента одной из стран
UPDATE `country` SET peoples =  41456601 WHERE name = "Ukraine";
UPDATE country SET president = "Alexey Navalniy" WHERE name = "Russia";

# Удалить одну из записей из таблицы country
DELETE FROM `country` WHERE id = 9;

# Создать новую колонку continent_id, которя имеет тип TINYINT и значения по умолчанию NULL
ALTER TABLE `country` CHANGE COLUMN continent_id TINYINT NULL;

# Добавить индекс по полю continent_id
ALTER TABLE country ADD INDEX (continent_id);
SHOW INDEX FROM country;

# Удаляем индекс continent_id 
DROP INDEX continent_id ON country;

# Удаляем колонку
ALTER TABLE country DROP COLUMN continent_id;

# Создать новую таблицу continent, в которой будут сохранены названия континентов. 
# Связать таблицу continent с таблицей country по полю continent_id при помощи внешнего ключа. 
# После этого удалить из таблицы поле, которое явно указывает название континента.
CREATE TABLE continent (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50));
INSERT INTO continent VALUES(1, 'Eurasia'), (2, 'Australia'), (3, 'North America'), (4, 'South America');
ALTER TABLE country ADD continent_id INT NOT NULL;
ALTER TABLE country ADD INDEX (continent_id);
ALTER TABLE continent ADD INDEX (id);

ALTER TABLE `country` ADD CONSTRAINT fk_continent_id FOREIGN KEY(continent_id) REFERENCES continent(id) ON DELETE CASCADE ON UPDATE CASCADE;
UPDATE country SET continent_id = 1 WHERE continent = 'Eurasia';
UPDATE country SET continent_id = 2 WHERE continent = 'Australia';
UPDATE country SET continent_id = 3 WHERE continent = 'North America';
UPDATE country SET continent_id = 4 WHERE continent = 'South America';

ALTER TABLE country DROP COLUMN continent;

# Создать таблицу с языками language (например English, Ukrainian, ...). 
# Связать таблицу country с таблицей language, моделируя используемые языки в разных странах. 
# Например, в Украине чаще остальных используют украинский и русский язык. 
# Таким образом необходимо получить связь многие ко многим.
CREATE TABLE language (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY (id));
INSERT INTO language (name) VALUES ('Ukrainian'), ('Belarusian'), ('Russian'), ('Polish'), ('English'), ('Spanish'), ('Standard Chinese'), ('Māori'), ('NZ Sign Language');
ALTER TABLE country ADD lang_id INT NOT NULL;
ALTER TABLE language ADD INDEX (id);
ALTER TABLE country ADD INDEX (lang_id);
ALTER TABLE `country` ADD CONSTRAINT fk_lenguage_id FOREIGN KEY(lang_id) REFERENCES language(id) ON DELETE CASCADE ON UPDATE CASCADE;

# .... не ясно что куда связывать ...., по этому идем дальше

# Соединить таблицы country, continent для получения названий стран и названий континентов
SELECT * FROM country, continent WHERE continent.id = country.continent_id ORDER BY country.id;
# Синоним: 
SELECT * FROM country JOIN continent ON continent.id = country.continent_id ORDER BY country.id; 

# Добавить в таблицу languages новые языки. Получить выборку тех языков, которые не используются в имеющихся в базе данных странах. 
# Использовать оператор сравнения IS NULL

# .... ???  таблица не связана

# Добавить в таблицу country поле для премьер-министра страны и заполнить записи значениями. 
# Вывести на экран таблицу, в которой будет представлены все президенты и все премьер-министры всех стран в одну колонку.
# UNION дорисовывает другую таблицу снизу: SELECT name FROM student UNION ALL SELECT name FROM teacher; - выведем имена всех учителей и учиников

