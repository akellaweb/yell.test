-- Дамп структуры базы данных yell
CREATE DATABASE IF NOT EXISTS `yell` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yell`;


-- Дамп структуры для таблица yell.authors
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы yell.authors: 0 rows
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;


-- Дамп структуры для таблица yell.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы yell.books: 0 rows
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;


-- Дамп структуры для таблица yell.editions
CREATE TABLE IF NOT EXISTS `editions` (
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы yell.editions: 0 rows
/*!40000 ALTER TABLE `editions` DISABLE KEYS */;
/*!40000 ALTER TABLE `editions` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
