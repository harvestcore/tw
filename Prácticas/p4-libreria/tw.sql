-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-04-2019 a las 22:41:46
-- Versión del servidor: 5.5.62-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id` int(2) DEFAULT NULL,
  `title` varchar(103) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `isbn` bigint(13) DEFAULT NULL,
  `price` varchar(7) DEFAULT NULL,
  `format` varchar(15) DEFAULT NULL,
  `publisher` varchar(45) DEFAULT NULL,
  `pubdate` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `title`, `author`, `isbn`, `price`, `format`, `publisher`, `pubdate`) VALUES
(1, 'Opening Spaces: An Anthology of Contemporary African Women''s Writing', 'Yvonne Vera', 9780435910105, '$14.52', 'Paperback', 'Heinemann', 'September 1999'),
(2, 'The Caine Prize for African Writing 2010: 11th Annual Collection', 'The Caine Prize for African Writing', 9781906523374, '$13.46', 'Paperback', 'New Internationalist', 'August 2010'),
(3, 'African Folktales', 'Roger D. Abrahams', 9780394721170, '$18.95', 'Paperback', 'Knopf Doubleday Publishing Group', 'August 1983'),
(4, 'Unchained Voices: An Anthology of Black Authors in the English-Speaking World of the Eighteenth Century', 'Vincent Carretta', 9780813190761, '$30.00', 'Paperback', 'University Press of Kentucky', 'December 2003'),
(5, 'Women Writing Africa: West Africa and the Sahel', 'Esi Sutherland-Addy', 9781558615007, '$29.95', 'Paperback', 'Feminist Press at CUNY, The', 'August 2005'),
(6, '10 Years of the Caine Prize for African Writing: Plus Coetzee, Gordimer, Achebe, Okri', 'The Caine The Caine Prize for African Writing', 9781906523244, '$18.95', 'Hardcover', 'New Internationalist', 'September 2009'),
(7, 'Introduction to African Oral Literature and Performance', 'Bayo Ogunjimi', 9781592211517, '$23.95', 'Hardcover', 'Africa World Press', 'February 2006'),
(8, 'Violence in Francophone African and Caribbean Women''s Literature', 'Marie-Chantal Kalisa', 9780803211025, '$45.00', 'Hardcover', 'UNP - Nebraska', 'December 2009'),
(9, 'Oral Epics from Africa', 'John William Johnson', 9780253211101, '$24.95', 'Paperback', 'Indiana University Press', 'March 2008'),
(10, 'African Fundamentalism: A Literary and Cultural Anthology of Garvey''s Harlem Renaissance', 'Tony Martin', 9780912469096, '$14.95', 'Hardcover', 'Majority Press, Incorporated, The', 'October 1991'),
(11, 'Land Apart: A South African Reader', 'Various', 9780140100044, '$12.71', 'Paperback', 'Penguin Group (USA)', 'June 1987'),
(12, 'Women Writing Africa: The Eastern Region', 'Amandina Lihamba', 9781558615342, '$29.95', 'Paperback', 'Feminist Press at CUNY, The', 'February 2007'),
(13, 'Nobody Ever Said AIDS: Poems and Stories from Southern Africa', 'Nobantu Rasebotsa', 9780795701849, '$22.13', 'Paperback', 'NB Publishers', 'March 2010'),
(14, 'Step into a World: A Global Anthology of the New Black Literature', 'Kevin Powell', 9780471380603, '$26.31', 'Hardcover', 'Wiley, John & Sons, Incorporated', 'October 2000'),
(15, 'An Anthology of Interracial Literature: Black-White Contacts in the Old World and the New', 'Werner Sollors', 9780814781432, '$22.13', 'Hardcover', 'New York University Press', 'February 2004'),
(16, 'The Caine Prize 2009: The Caine Prize for African Writing 10th Annual Collection', 'New Internationalist', 9781906523145, '$16.24', 'Paperback', 'New Internationalist', 'July 2009'),
(17, 'Traditions in World Literature: Literature of Africa, Softcover Student Edition', 'McGraw-Hill', 9780844212029, '$7.55', 'Paperback', 'Glencoe/McGraw-Hill', 'January 1999'),
(18, 'Love Child', 'Gcina Mhlophe', 9781869140014, '$8.97', 'Paperback', 'University Of KwaZulu-Natal Press', 'March 2002'),
(19, 'Seventh Street Alchemy 2004: A Selection of Works from the Caine Prize for African Writing', 'Jacana Media', 9781770091450, '$25.13', 'Paperback', 'Jacana Media', 'June 2006'),
(20, 'Women Writing Africa: The Southern Region: Volume 1', 'Sheila Meintjes', 9781558614062, '$1.99', 'Library Binding', 'Feminist Press at CUNY, The', 'December 2002'),
(21, 'Of Suffocated Hearts and Tortured Souls: Seeking Subjecthood through Madness in Francophone Women''s', 'ValZrie Orlando', 9780739105627, '$82.00', 'Hardcover', 'The Rowman & Littlefield Publishing Group Inc', 'December 2002'),
(22, 'Less Than One and Double: A Feminist Reading of African Women''s Writing', 'Kenneth W. Harrow', 9780325070254, '$116.43', 'Hardcover', 'Heinemann', 'November 2001'),
(23, 'The Rienner Anthology of African Literature', 'Anthonia C. Kalu', 9781588264916, '$30.39', 'Library Binding', 'Lynne Rienner Publishers, Inc.', 'April 2007'),
(24, 'Oral and Written Expressions of African Cultures', 'Toyin Falola', 9781594606472, '$26.88', 'Paperback', 'Carolina Academic Press', 'March 2009'),
(25, 'Jambula Tree and other stories: The Caine Prize for African Writing 8th Annual Collection', 'Monica Arac de Nyeko', 9781904456735, '$16.18', 'Paperback', 'New Internationalist', 'July 2008'),
(26, 'Up the Down Escalator', 'Linda Rode', 9780795701061, '$10.95', 'Paperback', 'NB Publishers', 'March 2010'),
(27, 'Basali!: Stories by and about Women in Lesotho', 'K. Limakatso Kendall', 9780869809181, '$24.44', 'Paperback', 'University of Natal Press', 'February 1995'),
(28, 'How God Fix Jonah', 'Lorenz Graham', 9781563976988, '$16.15', 'Hardcover', 'Boyds Mills Press', 'October 2000'),
(29, 'Glass Jars among Trees', 'Arja Salafranca', 9781919931234, '$44.59', 'Paperback', 'Jacana Media', 'April 2005'),
(30, 'Running Towards Us: New Writing from South Africa', 'Isabel Balseiro', 9780325002118, '$33.63', 'Paperback', 'Heinemann', 'May 2000'),
(31, 'Of Suffocated Hearts And Tortured Souls', 'Valerie Key Orlando', 9780739105634, '$27.95', 'Paperback', 'Lexington Books', 'December 2002'),
(32, 'An Anthology of Interracial Literature: Black-White Contacts in the Old World and the New', 'Werner Sollors', 9780814781449, '$44.59', 'Paperback', 'New York University Press', 'February 2004'),
(33, 'Among the Blacks', 'Ron Padgett', 9780939691029, '$14.00', 'Paperback', 'Avenue B', 'October 1988'),
(34, 'The Daily Show with Jon Stewart Presents Earth (the Book): A Visitor''s Guide to the Human Race', 'Jon Stewart', 9780446579223, '$1.99', 'Hardcover', 'Grand Central Publishing', 'September 2010'),
(35, 'The Best American Nonrequired Reading 2010', 'Dave Eggers', 9780547241630, '$11.17', 'Paperback', 'Houghton Mifflin Harcourt', 'October 2010'),
(36, 'The Daily Show with Jon Stewart Presents Earth (the Book): A Visitor''s Guide to the Human Race', 'Jon Stewart', 9781607886150, '$24.98', 'Compact Disc', 'Hachette Audio', 'October 2010'),
(37, '100 Best-Loved Poems', 'Philip Smith', 9780486285535, '$1.80', 'Paperback', 'Dover Publications', 'May 1995'),
(38, 'The Norton Anthology of American Literature, Shorter Seventh Edition, One-Volume Paperback', 'Wayne Franklin', 9780393930573, '$63.03', 'Paperback', 'Norton, W. W. & Company, Inc.', 'July 2007'),
(39, 'The Best American Poetry 2009', 'David Wagoner', 9781615521647, '$11.17', 'Paperback', 'Simon & Schuster Adult Publishing Group', 'September 2009'),
(40, 'The Oxford Book of American Short Stories', 'Joyce Carol Oates', 9780195092622, '$19.95', 'Paperback', 'Oxford University Press, USA', 'September 1994'),
(41, 'The Best American Essays 2009', 'Mary Oliver', 9780618982721, '$13.56', 'Paperback', 'Houghton Mifflin Harcourt', 'October 2009'),
(42, 'The Norton Anthology of American Literature, Package 2: Volumes C, D, and E', 'Jerome Klinkowitz', 9780393929942, '$20.00', 'Paperback', 'Norton, W. W. & Company, Inc.', 'April 2007'),
(43, 'Early African American Classics (Barnes &amp; Noble Classics Series)', 'Barnes &amp; Noble', 9781400500284, '$24.95', 'Paperback', 'Barnes & Noble', 'October 2008'),
(44, 'African-American Poetry: An Anthology, 1773-1930', 'Joan R. Sherman', 9780486296043, '$1.80', 'Paperback', 'Dover Publications', 'July 1997');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
