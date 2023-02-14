-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Час створення: Лют 13 2023 р., 08:03
-- Версія сервера: 10.10.2-MariaDB
-- Версія PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблиці `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL,
  `views` int(11) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Дамп даних таблиці `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `categorie_id`, `pubdate`, `views`, `img`) VALUES
(1, 'ChatGPT’s Most Charming Trick Is Also Its Biggest Flaw', 'LIKE MANY OTHER people over the past week, Bindu Reddy recently fell under the spell of ChatGPT, a free chatbot that can answer all manner of questions with stunning and unprecedented eloquence. \r\n\r\nReddy, CEO of Abacus.AI, which develops tools for coders who use artificial intelligence, was charmed by ChatGPT’s ability to answer requests for definitions of love or creative new cocktail recipes. Her company is already exploring how to use ChatGPT to help write technical documents. “We have tested it, and it works great,” she says.\r\n\r\nChatGPT, created by startup OpenAI, has become the darling of the internet since its release last week. Early users have enthusiastically posted screenshots of their experiments, marveling at its ability to generate short essays on just about any theme, craft literary parodies, answer complex coding questions, and much more. It has prompted predictions that the service will make conventional search engines and homework assignments obsolete.', 1, '2023-01-18 20:24:25', 0, 'sleep.jpg'),
(2, 'The fastest-growing tech jobs in 2023 and how to land them', 'Whether you have established a career in tech or you are considering changing professions and starting a new tech career, there has never been a better time to look for your dream job. Thanks to a perfect storm of contributing factors, tech has never been hotter and even the most digital-resistant organizations are realizing that in order to move forward, they must invest in tech.  \r\n\r\nWhile this is an advantage for seekers of tech jobs, the tech talent gap can have its limitations too, as tech professionals are spoilt for choice and may be blinded by too-good-to-be-true opportunities. It helps if you have a good understanding of the fastest-growing tech jobs that are likely to remain well into the future, and how you can go about securing one. ', 3, '2023-01-26 20:30:11', 0, 'working.jpe'),
(3, 'Stack Overflow: 74% of developers are open to new jobs', 'Research from Stack Overflow suggests that almost three-quarters (74%) of developers are open to new jobs.\r\n\r\nThe so-called “Great Resignation” is an ongoing post-covid economic trend where employees have voluntarily resigned over wage stagnation, poor treatment, inflexible remote working policies, lack of benefits, and general job dissatisfaction.\r\n\r\nDevelopers haven’t been spared from mistreatment by employers, and it seems that many are keeping their minds open to new opportunities as we barrel towards the new year.\r\n\r\nA better salary (54%) is the primary motivator for developers wanting to find a new job. That’s not particularly surprising, especially during a cost-of-living crisis.\r\n\r\nOther important reasons why developers want to find a new job include growth opportunities (~38%), wanting to work with new technologies (~35%), and a better work/life balance (23%).', 5, '2023-01-26 20:30:11', 0, 'programmig.jpg'),
(4, 'Unaddressed developer burnout ‘risks derailing digital transformation’', 'The pandemic has caused a boom in digital transformation and investment in technology-driven services, but they are struggling to find fresh talent to aid stretched developer teams, according to global tech firm Dynatrace.\r\n\r\nThis has been made clear by research showing that 72% of tech teams have a skills shortage. Businesses are trying to fill these roles, with 2 million vacancies for tech jobs advertised between May 2021 and 2022. Organisations are also willing to reward candidates generously for the value they bring to the business through these roles, with tech salaries nearly 80% higher than those for non-IT jobs in the UK. Calculations by Dynatrace, based on average salary data published by recruitment specialists, Michael Page, in its ‘A Guide to Salaries and Skills: Technology’ reports for 2021 and 2022 reveals:\r\n\r\nFront-end developer salaries increased by 22% on average and by 40% at the lower end of the scale\r\nDevOps engineer salaries increased by 22% on average and by 29% at the lower end of the scale\r\nHowever, despite this significant annual uplift in salaries, organisations are still struggling to recruit developers quickly enough as the digital skills shortage continues to bite. The difficulty in attracting fresh talent to their teams is piling on the pressure for existing developers, as their workload increases faster than the workforce can grow. If it goes unaddressed, this could increasingly lead to developer burnout, putting digital transformation at risk.\r\n\r\nGreg Adams, regional VP, UK & Ireland, Dynatrace, said: “To enable the digital transformation businesses are heavily investing in, they need to ensure they have the right skills in place.\r\n\r\n“Developers are under significant pressure to keep up with innovation cycles, and talent shortages create more work for existing teams. This leads to developer burnout as teams cannot cope with mounting workloads. Organisations need to do more than increase salaries if they are to reduce developer burnout, otherwise, they risk derailing their digital transformation journeys.”\r\n\r\nTo reduce the risk of burnout, organisations need to reduce unnecessary work and enable developers to spend their time on tasks that matter. To do so, they need to automate as many of their routine, easily repeatable processes as possible. This will allow developers to spend more time on innovation and less on manual efforts to keep the lights on. As a result, teams will be less likely to feel the pinch where there is a shortage of talent and keep digital transformation on track.\r\n\r\nAdams said: “In too many organisations, developer teams are maxed out yet facing increasing pressure to deliver more innovation.\r\n\r\n“Investing in more resources in isolation isn’t a sustainable solution. Automation, however, can create a real step change. Augmenting developers’ skills with automation reduces the need for them to manually conduct routine, highly repetitive tasks in the delivery pipeline. This enables developer teams to focus on developing new features and services and ultimately speed up the delivery of innovation.”\r\n\r\nLooking to revamp your digital transformation strategy? Learn more about Digital Transformation Week taking place in Amsterdam, California, and London.\r\n\r\nExplore other upcoming enterprise technology events and webinars powered by TechForge here.', 4, '2023-01-30 20:31:36', 0, 'flowers.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `articles_categories`
--

DROP TABLE IF EXISTS `articles_categories`;
CREATE TABLE IF NOT EXISTS `articles_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Дамп даних таблиці `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'Безпека'),
(2, 'Програмування'),
(3, 'Музика'),
(4, 'Саморозвиток'),
(5, 'Спорт');

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `author` varchar(110) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `pubdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `articles_id` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
