-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2023 at 03:20 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  `categorie_id` int DEFAULT NULL,
  `pubdate` datetime NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `categorie_id`, `pubdate`, `views`, `img`) VALUES
(1, 'Spotify ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum felis vel ultrices consectetur. Ut a tortor id elit fermentum posuere. Integer volutpat ante vel eros laoreet molestie. Donec suscipit est vel ex hendrerit tempus. Quisque quis arcu a metus scelerisque posuere. Suspendisse sagittis lobortis sapien. Donec malesuada magna quis elit auctor, nec placerat velit auctor. Curabitur vel nibh nec ligula tincidunt congue et non lacus. Suspendisse id posuere elit. Nam tempus, augue vel cursus lobortis, tellus risus sodales ligula, vitae venenatis ligula justo vitae mi.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum felis vel ultrices consectetur. Ut a tortor id elit fermentum posuere. Integer volutpat ante vel eros laoreet molestie. Donec suscipit est vel ex hendrerit tempus. Quisque quis arcu a metus scelerisque posuere. Suspendisse sagittis lobortis sapien. Donec malesuada magna quis elit auctor, nec placerat velit auctor. Curabitur vel nibh nec ligula tincidunt congue et non lacus. Suspendisse id posuere elit. Nam tempus, augue vel cursus lobortis, tellus risus sodales ligula, vitae venenatis ligula justo vitae mi.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum felis vel ultrices consectetur. Ut a tortor id elit fermentum posuere. Integer volutpat ante vel eros laoreet molestie. Donec suscipit est vel ex hendrerit tempus. Quisque quis arcu a metus scelerisque posuere. Suspendisse sagittis lobortis sapien. Donec malesuada magna quis elit auctor, nec placerat velit auctor. Curabitur vel nibh nec ligula tincidunt congue et non lacus. Suspendisse id posuere elit. Nam tempus, augue vel cursus lobortis, tellus risus sodales ligula, vitae venenatis ligula justo vitae mi.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum felis vel ultrices consectetur. Ut a tortor id elit fermentum posuere. Integer volutpat ante vel eros laoreet molestie. Donec suscipit est vel ex hendrerit tempus. Quisque quis arcu a metus scelerisque posuere. Suspendisse sagittis lobortis sapien. Donec malesuada magna quis elit auctor, nec placerat velit auctor. Curabitur vel nibh nec ligula tincidunt congue et non lacus. Suspendisse id posuere elit. Nam tempus, augue vel cursus lobortis, tellus risus sodales ligula, vitae venenatis ligula justo vitae mi.\r\n\r\n\r\n\r\n', 1, '2023-01-17 20:33:04', 66, 'images (1).jpeg'),
(2, 'Додатки', 'Sed tincidunt posuere diam, quis pellentesque tortor convallis at. Mauris auctor dolor elit, at lacinia sem auctor eget. Donec semper hendrerit mi, eget lobortis est molestie eu. Fusce tincidunt, justo ut tristique consectetur, ante urna congue tortor, non rhoncus sem dui eu massa. Donec vestibulum ex sit amet libero aliquet, sed accumsan arcu ornare. Aenean auctor bibendum dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean consequat cursus mi vitae auctor. Nunc dictum diam lorem, in ornare lacus aliquam ut. Etiam at tincidunt dui. Nam hendrerit tortor augue, et rutrum eros mattis at. Donec odio odio, commodo sit amet accumsan in, sodales id augue. Maecenas suscipit est nulla. Vivamus volutpat porta lorem quis fringilla. In ut euismod lacus. Vivamus quis mauris a arcu fringilla feugiat a id mauris.', 1, '2023-01-17 20:33:04', 22, 'images.jpeg'),
(3, 'How it work?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 4, '2023-01-19 19:02:58', 12, 'завантаження.jpeg'),
(4, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 2, '2023-01-19 19:05:12', 0, 'images2.jpeg'),
(5, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 3, '2023-01-01 19:05:57', 72, 'images3.jpeg'),
(6, 'Lorem Ipsum', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 2, '2023-01-28 15:34:51', 0, 'images6.jpeg'),
(7, 'Where does it come from to us??', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 1, '2023-01-17 20:33:04', 17, 'images5.jpeg'),
(8, 'Lorem Ipsum', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 1, '2023-01-31 17:15:10', 24, 'imag.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `title`) VALUES
(1, 'Безпека'),
(2, 'Програмування'),
(3, 'Lifrstyle'),
(4, 'Музика'),
(5, 'Саморозвиток'),
(6, 'Спорт\r\n'),
(7, 'Ігри'),
(8, 'fruits');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'ava.png',
  `name` varchar(255) NOT NULL,
  `author` varchar(110) DEFAULT NULL,
  `text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `pubdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `articles_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `img`, `name`, `author`, `text`, `pubdate`, `articles_id`) VALUES
(1, 'ava.png', 'Vla_dyd', 'Vladyslav', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', '2023-01-24 17:18:56', 1),
(2, 'ava2.jpeg', 'Eva5234131', 'Eva', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', '2023-01-24 17:21:13', 1),
(3, 'ava3.jpg', '@Bodya61.flo', 'Bogdan', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', '2023-01-24 17:22:54', 2),
(4, 'ava4.jpg', 'Giorno_Jovoana', 'Dio', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.', '2023-01-24 17:25:08', 2),
(5, 'black.png', 'Roberto642', 'Roberto', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n5\r\n	paragraphs\r\n	words\r\n	bytes\r\n	lists\r\n	Start with \'Lorem\r\nipsum dolor sit amet...\'\r\n', '2023-01-24 17:26:23', 3),
(6, 'ava.png', 'TRUBAVITALIA', 'Vitalik', 'Zdf LoL', '2023-01-27 17:38:33', 132),
(8, 'ava.png', 'Vlad', 'Bodya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-02-07 17:14:52', 3),
(9, 'ava.png', 'fds', 'fds', 'fds', '2023-02-07 17:32:17', 7),
(10, 'ava.png', 'test', 'test', 'test', '2023-02-07 17:32:44', 7),
(11, 'ava.png', 'koka', 'cola', 'kokacola', '2023-02-07 17:33:38', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
