-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2023 г., 12:05
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `monetify`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` bigint UNSIGNED NOT NULL,
  `id_game` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Red Dead Redemption 2', 'Америка, 1899 год. Эпоха Дикого Запада подходит к концу. Служители закона методично охотятся на остатки банд. Тех, кто не желает сдаваться, убивают.\r\n\r\nПосле сорвавшегося ограбления банка в западном городе Блэкуотер Артур Морган и другие подручные Датча ван дер Линде вынуждены пуститься в бега. Их банде предстоит участвовать в кражах, грабежах и перестрелках в самом сердце Америки, на неприветливой земле, где каждый день – это борьба за выживание.\r\n\r\nПо их следу идут федеральные агенты и лучшие в стране охотники за головами, а саму банду разрывают внутренние противоречия. Артуру предстоит выбрать, что для него важнее: его собственные идеалы или же верность людям, которые его взрастили.\r\n\r\nИгра Red Dead Redemption 2 от создателей Grand Theft Auto V и Red Dead Redemption – это грандиозное повествование о жизни в Америке на заре современной эпохи.\r\n\r\nRed Dead Redemption 2 для PC задействует всю мощь современных компьютеров, чтобы максимально правдоподобно представить каждый уголок этого огромного, насыщенного деталями мира, будь то заснеженные склоны гор Гризли, пыльные дороги Лемойна, заляпанные грязью витрины Валентайна или булыжные мостовые Сен-Дени. Среди графических и технических усовершенствований, представленных в PC-версии, – увеличенная дальность прорисовки, облегчающая навигацию; поддержка HDR, а также улучшения в системе глобального освещения и рассеянного затенения, обеспечивающие более реалистичную смену времени суток; высококачественные следы на снегу, улучшенные отражения и более глубокие тени на всех расстояниях; тесселяция текстур древесной коры и более качественные текстуры травы и меха, за счет чего животные и растения смотрятся еще натуралистичнее.\r\n\r\nRed Dead Redemption 2 для PC поддерживает HDR, разрешение 4K и выше, конфигурации с несколькими мониторами, широкоэкранные мониторы, более высокую частоту кадров и не только.\r\n\r\nТакже Red Dead Redemption 2 для PC открывает игрокам бесплатный доступ к совместной игре в живом и развивающемся мире Red Dead Online о всеми последними дополнениями и материалами, делающими игру еще увлекательней. В том числе игрокам будут доступны промыслы на фронтире с их ролями охотника за головами, торговца и коллекционера, в каждой из которых можно добиться успеха, получая уникальные награды.', 'j6CGyVFUVJb9JZMaThyxL0rfbPCGIwUHYsHX1oc6.png', 1999, '2023-11-14 22:21:23', '2023-11-14 22:21:23'),
(2, 'Forza Horizon 5', 'Вас ждёт бесконечный калейдоскоп приключений Horizon! Совершайте увлекательные поездки по невероятно красивому и самобытному миру Мексики за рулём величайших автомобилей в истории.\r\n\r\nБесконечный калейдоскоп приключений Horizon\r\nВас ждут увлекательные поездки по невероятно красивому и самобытному миру Мексики за рулём величайших автомобилей в истории.\r\n\r\nМир, полный красок\r\nПеред вами откроется мир красоты и контрастов. Вы посетите пустыни, густые джунгли, исторические города, затерянные руины, чистейшие пляжи, глубокие ущелья и высокий, покрытый снегом вулкан.\r\n\r\nМир, полный приключений\r\nВас ожидает масштабная кампания с сотнями испытаний на любой вкус. Познакомьтесь с новыми персонажами и пройдите их сюжетные линии до конца.\r\n\r\nМир, полный перемен\r\nВы столкнётесь с удивительными природными явлениями Мексики: пыльными бурями и тропическими ливнями. Вместе со сменой времён года каждую неделю преображается и мир игры. Всякий раз вас будут ждать новые состязания, испытания, коллекционные предметы, награды и ещё не исследованные регионы. В мире Forza Horizon каждое время года хорошо по-своему!\r\n\r\nМир, полный друзей\r\nУчаствуйте в состязаниях Horizon Arcade вместе с другими игроками. Проходите невероятные, захватывающие дух испытания и получайте удовольствие от общения без меню, лобби и экранов загрузки. Ищите новых друзей в турне Horizon и заездах Horizon Open, дарите подарки участникам сообщества.\r\n\r\nМир, полный вдохновения\r\nТворите и самовыражайтесь с помощью нового мощного редактора EventLab. Создавайте собственные гонки, испытания, трюки и даже полноценные игровые режимы. Вы сможете по-новому настроить внешний вид своей машины: поднять или опустить крышу кабриолета, покрасить тормозные колодки и придумать многое другое. А затем ничто не помешает вам поделиться своим творением с сообществом благодаря новой функции отправки подарков.\r\n\r\nНачните свой путь в Horizon!', 'UbaSHyTNWQ5uSph2WBNvxQhLExKzjubRXkMsA1Q1.jpg', 1950, '2023-11-14 22:26:37', '2023-11-14 22:26:37'),
(3, 'Baldur\'s Gate 3', 'Соберите отряд и вернитесь в Забытые Королевства. Вас ждет история о дружбе и предательстве, выживании и самопожертвовании, о сладком зове абсолютной власти.\r\n\r\nВаш мозг стал вместилищем для личинки иллитида, и она пробуждает в вас таинственные, пугающие способности. Сопротивляйтесь паразиту и обратите тьму против себя самой – или же безоглядно отдайтесь злу и станьте его воплощением.\r\n\r\nРолевая игра нового поколения в мире Dungeons & Dragons от создателей Divinity: Original Sin 2.\r\n\r\nВыбирайте из 12 классов и 11 рас, представленных в Руководстве игрока D&D. Создайте собственную личность, возьмите любого из героев с историей – или же взгляните в глаза собственным темным желаниям, выбрав «Темный соблазн» – уникального героя с историей, отличающегося собственными уникальными механиками игры, но во всем остальном полностью настраиваемого. Кем бы вы ни стали, приключения, добыча, битвы и любовь ждут вас в Забытых Королевствах и за их пределами. Собирайте свой отряд и отправляйтесь искать приключений по Интернету группой до четырех игроков.\r\n\r\nПостроенная на новом движке Divinity 4.0, Baldur’s Gate 3 дает вам непревзойденную свободу действий: исследуйте, экспериментируйте, взаимодействуйте с богатым миром, полным разнообразных существ, опасностей и обмана. Грандиозный, яркий сюжет крупнейшего на сей момент произведения Larian поможет вам сжиться со своими героями как никогда раньше. От проклятых лесов до магических пещер Подземья и великого города Врата Балдура, ваше приключение складывается из действий, а ваше наследие – из выборов. Мир вас не забудет.', 'KGeeCRpuvVDr5LD0IucYn7wzRtqmchXYd6ydcxFl.jpg', 1999, '2023-11-14 22:28:55', '2023-11-14 22:28:55'),
(4, 'TEKKEN 7', 'Любовь, месть, гордость. У каждого свой повод сражаться. Наши ценности определяют наше поведение и делают людьми вне зависимости от наших сильных и слабых сторон. Нет дурных мотивов – лишь пути, которые мы выбираем сами.\r\n\r\nУзнайте, чем завершилась история клана Мисима и выясните, что было причиной каждого боя в этой войне. В созданной на основе движка Unreal Engine 4 игре TEKKEN 7 вас ждут красивейшие сюжетные битвы и поединки, в которых можно сражаться как с друзьями, так и соперниками.', 'bIDYo2KRYHkZGgSgGrzlij3BwWQA8oUerZZljyrx.jpg', 299, '2023-11-14 22:30:47', '2023-11-14 22:30:47'),
(5, 'Terraria', 'Копайте, сражайтесь, исследуйте, стройте! Нет ничего невозможного в этой насыщенной событиями приключенческой игре. Весь мир — ваше полотно, а вся земля — ваши краски!\r\nХватайте инструменты и вперед! Создавайте оружие, чтобы сражаться с различными врагами в разных биомах. Копайте глубже, чтобы найти драгоценности, деньги и кучу других полезных вещей. Собирайте ресурсы, чтобы создать всё, что вам нужно, и сделать мир таким, каким вы хотите его видеть. Постройте свой дом, крепость или даже замок! Люди переедут к вам жить и может быть даже продадут вам вещи, которые помогут вам в ваших путешествиях.\r\n\r\nКроме этого вас ожидает еще множество разных задач и испытаний. Готовы начать?\r\nОсновные особенности:\r\nСвободный игровой процесс\r\nСлучайно создаваемый мир\r\nБесплатные обновления', 'HQxBnwChCryYEW7KBJWUdhlIGkJefKzK2fQ9YvQs.jpg', 385, '2023-11-14 22:34:06', '2023-11-14 22:34:06'),
(8, 'Elden Ring', 'НОВЫЙ ФЭНТЕЗИЙНЫЙ РОЛЕВОЙ БОЕВИК.\r\nВосстань, погасшая душа! Междуземье ждёт своего повелителя. Пусть благодать приведёт тебя к Кольцу Элден.\r\n\r\n• Огромный захватывающий мир\r\nОгромный мир с открытыми полями, множеством ситуаций и гигантскими подземельями, где сложные трёхмерные конструкции сочетаются воедино. Путешествуйте, преодолевайте смертельные опасности и радуйтесь успехам.\r\n\r\n• Создайте своего персонажа\r\nВы можете не только изменить внешность персонажа, но также комбинировать оружие, броню и предметы. Развивайте персонажа по своему вкусу. Наращивайте мышцы или постигайте таинства магии.\r\n\r\n• Эпическая драма, выросшая из мифа\r\nМногослойная история, разбитая на фрагменты. Эпическая драма, в которой мысли персонажей пересекаются в Междуземье.\r\n\r\n• Уникальный сетевой режим, приближающий вас к другим игрокам\r\nПомимо многопользовательского режима, в котором вы напрямую подключаетесь к другим игрокам и путешествуете вместе, есть асинхронный сетевой режим, позволяющий ощутить присутствие других игроков.', 'yRMKa4MgCkDmkCdHVEVT62VfcX2KgDmZc4OnP4PQ.jpg', 3999, '2023-11-14 22:37:45', '2023-11-14 22:37:45');

-- --------------------------------------------------------

--
-- Структура таблицы `game_and_genres`
--

CREATE TABLE `game_and_genres` (
  `id` bigint UNSIGNED NOT NULL,
  `id_game` bigint UNSIGNED NOT NULL,
  `id_genre` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `game_and_genres`
--

INSERT INTO `game_and_genres` (`id`, `id_game`, `id_genre`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-11-14 22:21:23', '2023-11-14 22:21:23'),
(2, 1, 8, '2023-11-14 22:21:23', '2023-11-14 22:21:23'),
(3, 2, 8, '2023-11-14 22:26:37', '2023-11-14 22:26:37'),
(4, 2, 11, '2023-11-14 22:26:37', '2023-11-14 22:26:37'),
(5, 3, 2, '2023-11-14 22:28:55', '2023-11-14 22:28:55'),
(6, 3, 3, '2023-11-14 22:28:55', '2023-11-14 22:28:55'),
(7, 3, 9, '2023-11-14 22:28:55', '2023-11-14 22:28:55'),
(8, 4, 1, '2023-11-14 22:30:47', '2023-11-14 22:30:47'),
(9, 4, 6, '2023-11-14 22:30:47', '2023-11-14 22:30:47'),
(10, 5, 9, '2023-11-14 22:34:06', '2023-11-14 22:34:06'),
(11, 5, 10, '2023-11-14 22:34:06', '2023-11-14 22:34:06'),
(12, 5, 12, '2023-11-14 22:34:06', '2023-11-14 22:34:06'),
(13, 8, 1, '2023-11-14 22:37:45', '2023-11-14 22:37:45'),
(14, 8, 2, '2023-11-14 22:37:45', '2023-11-14 22:37:45');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` bigint UNSIGNED NOT NULL,
  `title_genre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `title_genre`, `created_at`, `updated_at`) VALUES
(1, 'Экшены', '2023-11-14 22:18:05', '2023-11-14 22:18:05'),
(2, 'RPG', '2023-11-14 22:18:12', '2023-11-14 22:18:12'),
(3, 'Стратегии', '2023-11-14 22:18:22', '2023-11-14 22:18:22'),
(4, 'Хорроры', '2023-11-14 22:18:35', '2023-11-14 22:18:35'),
(5, 'Шутеры', '2023-11-14 22:18:47', '2023-11-14 22:18:47'),
(6, 'Файтинги', '2023-11-14 22:19:01', '2023-11-14 22:19:01'),
(7, 'Головоломки', '2023-11-14 22:19:16', '2023-11-14 22:19:16'),
(8, 'Открытый мир', '2023-11-14 22:20:15', '2023-11-14 22:20:15'),
(9, 'Приключения', '2023-11-14 22:20:55', '2023-11-14 22:20:55'),
(10, 'Инди-игры', '2023-11-14 22:21:42', '2023-11-14 22:21:42'),
(11, 'Гонки', '2023-11-14 22:22:34', '2023-11-14 22:22:34'),
(12, 'Песочница', '2023-11-14 22:32:25', '2023-11-14 22:32:25');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_07_031232_create_genre', 1),
(7, '2023_11_07_031252_create_game', 1),
(8, '2023_11_07_031903_create_game_and_genre', 1),
(9, '2023_11_07_034602_create_user_game', 1),
(10, '2023_11_16_085514_create_cart_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `balance` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_game`
--

CREATE TABLE `user_game` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_game` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id_game_foreign` (`id_game`),
  ADD KEY `cart_id_user_foreign` (`id_user`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `game_and_genres`
--
ALTER TABLE `game_and_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_and_genres_id_game_foreign` (`id_game`),
  ADD KEY `game_and_genres_id_genre_foreign` (`id_genre`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `user_game`
--
ALTER TABLE `user_game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_game_id_user_foreign` (`id_user`),
  ADD KEY `user_game_id_game_foreign` (`id_game`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `game_and_genres`
--
ALTER TABLE `game_and_genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_game`
--
ALTER TABLE `user_game`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_id_game_foreign` FOREIGN KEY (`id_game`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `game_and_genres`
--
ALTER TABLE `game_and_genres`
  ADD CONSTRAINT `game_and_genres_id_game_foreign` FOREIGN KEY (`id_game`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_and_genres_id_genre_foreign` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_game`
--
ALTER TABLE `user_game`
  ADD CONSTRAINT `user_game_id_game_foreign` FOREIGN KEY (`id_game`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_game_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
