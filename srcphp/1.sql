SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `1` (
  `area` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'add "other"',
  `name` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `awardes` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `1` (`area`, `name`, `dates`, `foto`, `bio`, `awardes`, `id`) VALUES
('russia', 'Сергей Никифорович Василенко', '18.03.1872 - 11.03.1956', 'img/face-1.jpg', 'Происходил из дворянской семьи. Родился 18 (30) марта 1872 года в Москве в семье управляющего имениями. В 1882 году их семья перебралась в деревню Царёвка (ныне Долгоруковский район Липецкой области). В книге «Воспоминания» Василенко писал о своих впечатлениях от первой поездки в деревню с матерью: как удивило его кваканье лягушек, шум деревьев и вся сельская округа. «Я приезжал туда с мамашей в конце мая. Мне все там нравилось, начиная с дороги. От Ельца ехали на лошадях, день склонялся к вечеру. По бокам дороги тянулись поля ароматной ржи, цветущей, дышащей мёдом гречихи; проезжали через темные, покрытые кустарником балки (овраги); в них журчали ручьи, кричали коростели и стонали лягушки. Осторожно спускались к мельничной плотине, где таинственно поблескивала заснувшая река. От всего я был в восторге».В 1882 году был отдан в 1-й класс гимназии Креймана, где пробыл только один год.В 1891 году, после получения среднего образования, по желанию отца поступил на юридический факультет Московского университета, который окончил в 1895 году с дипломом 1-й степени. Первоначально занимался уголовным правом (судебной медициной) под руководством В. А. Легонина, но на последнем курсе принял решение «сменить юридическую карьеру на музыкальную» и поступить в консерваторию. По словам Василенко, «Легонин был необычайно поражён, более того, он, вероятно, решил, что я сошёл с ума…».Музыкой серьёзно обучался с 1888 года, брал частные уроки у Ричарда Ноха, затем — у А. Т. Гречанинова (теория музыки), Г. Э. Конюса (композиция) и Сергея Протопопова (гармония). Встреча с П. И. Чайковским оставила большое впечатление и он в 1895 году поступил в Московскую консерваторию. В мае 1901 года он её окончил с золотой медалью (по классам контрапункта и фуги у С. И. Танеева, композиции у М. М. Ипполитова-Иванова и дирижирования у В. И. Сафонова). Под руководством С. В. Смоленского изучал древнерусское крюковое пение, образцы которого использовал в опере-кантате «Сказание о граде великом Китеже и тихом озере Светояре» (на сюжет старообрядческой легенды, 1901; поставлена в 1903 году в Москве).Путешествовал по Турции, Италии, Австрии, Швейцарии, Франции, посетил Германию, Голландию, Норвегию, Египет.В 1903—190г годах был вторым дирижёром Московской частной русской оперы С. И. Мамонтова. В 1907 году организовал при ИРМО общедоступные Исторические концерты и в течение десяти лет дирижировал ими. В том же 1907 году получил место профессора инструментовки и композиции в Московской консерватории, работал на этой должности до самой смерти (с перерывом в 1941—1943 годах).С 1918 года — организатор и руководитель общедоступных концертов и концертов-лекций в Москве; в 1925 году принимал участие в организации радиотрансляций классической музыки. Совместно с М. А. Ашрафи в 1938 году в Ташкенте работал над созданием первой узбекской оперы «Буран». За годы работы в Московской консерватории воспитал ряд известных музыкантов, среди которых А. В. Александров, А. Н. Александров, Н. С. Голованов, В. В. Нечаев, М. Абдраев, П. И. Сеница, А. Ф. Козловский, Г. С. Милютин, Л. А. Половинкин, Д. Р. Рогаль-Левицкий, Н. А. Рославец, А. И. Хачатурян и др.Могила ВасиленкоУмер 1 марта 1956 года. Похоронен на Введенском кладбище (5 уч.).', '1 2 3 4 5 6', 1);

ALTER TABLE `1`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `1`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;