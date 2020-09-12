-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 02:27 PM
-- Server version: 5.6.17
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neuland`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'milossrt@gmail.com', '$2y$10$FeSY3YzQ6CyJkWvmRazrHejCHdAxjRsauhOqaDubVD/B1qmoOEn4S', 'r8oiKoETNzsYtbPfyYPqzAS6Bxqq4EskBznsijHWm6w7zwN9Tovhh3CwoHoa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_reply` tinyint(1) NOT NULL DEFAULT '0',
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `allowed` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `type`, `is_reply`, `video_id`, `created_at`, `updated_at`, `description`, `allowed`) VALUES
(13, 2, 'episode', 0, 3, '2017-06-12 18:21:32', '2017-06-12 18:21:32', NULL, 1),
(14, 1, 'episode', 0, 1, '2017-06-12 18:53:20', '2017-06-12 18:53:20', 'ababab', 1),
(16, 1, 'episode', 0, 1, '2017-06-12 21:06:41', '2017-06-12 21:06:41', 'Main', 1),
(17, 3, 'giantVideoTask', 0, 2, '2017-06-13 18:39:29', '2017-06-13 18:39:29', 'hjgh', 1),
(18, 3, 'giantVideoTask', 0, 2, '2017-06-13 18:39:40', '2017-06-13 18:39:40', 'hjhjgh', 1),
(19, 3, 'giantVideoTask', 0, 2, '2017-06-13 18:39:51', '2017-06-13 18:39:51', NULL, 1),
(20, 3, 'giantVideoTask', 0, 2, '2017-06-13 18:40:28', '2017-06-13 18:40:28', NULL, 1),
(21, 3, 'giantVideoTask', 0, 2, '2017-06-13 18:40:59', '2017-06-13 18:40:59', 'koment1', 1),
(22, 3, 'giantVideoTask', 0, 2, '2017-06-13 18:41:25', '2017-06-13 18:41:25', 'kom2', 1),
(23, 3, 'episode', 0, 6, '2017-06-13 18:45:00', '2017-06-13 18:45:00', 'komentar1', 1),
(24, 3, 'episode', 0, 6, '2017-06-13 18:45:27', '2017-06-13 18:45:27', 'koment2', 1),
(27, 1, 'episode', 0, 2, '2017-06-15 18:08:25', '2017-06-15 18:08:25', 'com', 1),
(29, 2, 'episode', 0, 1, '2017-06-15 18:12:52', '2017-06-15 18:12:52', 'its good', 1),
(30, 1, 'episode', 0, 3, '2018-01-29 14:56:33', '2018-01-29 14:56:33', 'SDsASas', 1),
(31, 1, 'episode', 0, 4, '2018-02-02 20:49:39', '2018-02-02 20:49:39', 'gfhgfhgfhgf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` text COLLATE utf8_unicode_ci,
  `replied` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `description`, `created_at`, `updated_at`, `subject`, `replied`) VALUES
(1, 1, 'asdsad', '2017-05-03 22:00:00', '2017-07-09 20:56:35', 'asdd', 'quaq');

-- --------------------------------------------------------

--
-- Table structure for table `en_episodes`
--

CREATE TABLE IF NOT EXISTS `en_episodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `program_id` int(11) NOT NULL,
  `episodeThumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `totalLikes` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `serie_id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `smallTxt` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `totalViews` int(11) NOT NULL,
  `unlock` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_src` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `en_episodes`
--

INSERT INTO `en_episodes` (`id`, `description`, `title`, `program_id`, `episodeThumb`, `totalLikes`, `created_at`, `updated_at`, `serie_id`, `type`, `smallTxt`, `number`, `totalViews`, `unlock`, `data_src`) VALUES
(1, 'It’s time to meet GusGus, the Giants of Sound and a progressive force in electronic music.', 'Meet Gus Gus', 1, 'storage/episodes/1/', '71', '2017-06-14 22:00:00', '2017-07-04 16:45:09', 1, 'episode', 'The Mysterium Event was the first of many destinations within Neuland. An explosion of the senses at an evening that was co-created by people from all over the globe.', 1, 98, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=49c9f3a63ad9940f59c4e8570892fb7c&source=embed&photo%5fid=16737898'),
(2, 'Sila Sveta light up cities worldwide, transforming the ordinary into the unforgettable.', 'Meet Sila Sveta', 1, 'storage/episodes/2/', '999', '2017-06-14 22:00:00', '2018-01-29 14:55:59', 1, 'episode', 'Zasto sve to tako i kada ce doci kraj svemu tome?', 2, 30, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9228b676fcc44bacb58eb627faad48b6&source=embed&photo%5fid=16737902'),
(3, 'Modern-day culinary alchemists Bompas & Parr are, quite simply, like no other.', 'Meet Bompas & Parr', 1, 'storage/episodes/3/', '555', '2017-06-14 22:00:00', '2018-01-29 14:56:47', 1, 'episode', '', 3, 21, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f351cbe2b68584a40a084182bc7af8cc&source=embed&photo%5fid=16737894'),
(4, '', 'GusGus showcase', 1, 'storage/episodes/4/', '4', '2017-06-14 22:00:00', '2018-02-02 20:49:58', 1, 'episode', 'Kako napraviti nesto od nicega', 4, 30, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=fff4fef8609042c299ec675a68487ba9&source=embed&photo%5fid=16737908'),
(5, '', 'Sila Sveta showcase', 1, 'storage/episodes/5/', '557', '2017-06-14 22:00:00', '2018-02-02 20:50:04', 1, 'episode', 'Tona prodje, gram nikako', 5, 18, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=7ed4f94a45f745dc8952f31ff19ad4d1&source=embed&photo%5fid=16737911'),
(6, '', 'Bompas & Parr showcase', 1, 'storage/episodes/6/', '29', '2017-06-14 22:00:00', '2017-06-22 21:02:13', 1, 'episode', 'Prvo reci hop, pa skoci', 6, 9, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0dc7952a2efbafcbddccfa2f2d070c90&source=embed&photo%5fid=16737754'),
(7, '', 'Who are GusGus', 1, 'storage/episodes/7/', '35', '2017-06-14 22:00:00', '2017-06-15 19:56:53', 1, 'episode', '', 7, 6, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9c5710679df267a68cb25978d148d4ff&source=embed&photo%5fid=16737827'),
(8, '', 'Who are Sila Sveta', 1, 'storage/episodes/8/', '111', '2017-06-14 22:00:00', '2017-06-14 16:02:30', 1, 'episode', '', 8, 4, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c5c78443b2431ac9980b5df118c325b0&source=embed&photo%5fid=16737845'),
(9, '', 'Ministry of Food', 1, 'storage/episodes/9/', '1', '2017-06-14 22:00:00', '2017-06-22 21:02:14', 1, 'episode', '', 9, 8, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=e9069e71258417c826dddb77ae6ea988&source=embed&photo%5fid=16737794'),
(10, '', 'Ode to Iceland', 1, 'storage/episodes/10/', '23', '2017-06-14 22:00:00', '2017-06-14 16:01:44', 1, 'episode', '', 10, 2, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=eac9c0b2970eaffc8163edd1647885ea&source=embed&photo%5fid=17507274'),
(11, '', 'Arma', 1, 'storage/episodes/11/', '22', '2017-06-14 22:00:00', '2017-06-22 21:02:12', 1, 'episode', '', 11, 6, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f10bc024fe61b4cd4f096139433dfbae&source=embed&photo%5fid=16737843'),
(12, '', 'Maunsell Forts', 1, 'storage/episodes/12/', '24', '2017-06-14 22:00:00', '2017-06-13 23:20:59', 1, 'episode', '', 12, 6, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=da1a9e8b6e2e4d76c609576ff33407b8&source=embed&photo%5fid=16737793'),
(13, 'Free The Base is a story about Mastery of Sound, the craftsmanship behind every single bit and those who dedicated their life for it. A brilliant technician, a legend of sound and a common goal: making the ultimate sound system.', 'Trailer', 2, 'storage/episodes/13/', '222', '2017-06-23 20:17:49', '2017-07-04 09:26:43', 2, 'episode', '', 0, 14, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=61d4c0081206872b1ce48016b7d717e5&source=embed&photo%5fid=16662922'),
(14, '"When man starts to manage sound as he pleases, he turns it into melody and then music into dance, a desire to touch heaven from earth. Music means unity, love, happiness, joy, family. No matter where you''re from... music brings it together."', 'What is the Sound System', 2, 'storage/episodes/14/', '334', '2017-06-23 20:17:49', '2017-07-04 09:27:02', 2, 'episode', '', 1, 17, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5a3062eb352fbce34d9fe7fb637bf882&source=embed&photo%5fid=16662872'),
(15, '"There are people capable of bringing continents together, reducing the immense ocean that separates cultures. These people tend to be unaware of the huge bridges they build, bridges later and forever used by women and men in both directions..."', 'Mark Ernestus', 2, 'storage/episodes/15/', '22', '2017-07-02 07:39:32', '2017-06-30 20:04:53', 2, 'episode', '', 2, 7, 'Will be available from July, 7th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=2182c5faff7c3da809020600498556f1&source=embed&photo%5fid=16582910'),
(16, '"To create something is to make it happen, to turn an idea or a dream, into something sound and real, an experience, by transforming warning sounds into ceremonies of joy using the walls of sound that the people from Antilles started calling Sound Systems..."', 'Pursuing the sound system', 2, 'storage/episodes/16/', '43', '2017-06-23 20:17:49', '2017-07-04 17:45:10', 2, 'episode', '', 3, 4, 'Will be available from July, 14th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=784ff705b42449398f7347bbeedb35c8&source=embed&photo%5fid=16582931'),
(17, '"To build a sound system that will live up to Mark Ernestus'' dream is not an easy task. Mark needs a squire capable of fully understanding his aspirations..."', 'The first ally', 2, 'storage/episodes/17/', '1', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 4, 2, 'Will be available from July, 22th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=115f472667edcc115e4cf669dbc05c9d&source=embed&photo%5fid=16582955'),
(18, '"Sound system was born in Jamaica in crafting collective ways, giving voice to a whole nation through music. (...) Experiencing the quality of sound became the main aspect above all other factors. Music became a completely physical experience..."', 'Jamaica: the birth of the sound system', 2, 'storage/episodes/18/', '44', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 5, 5, 'Will be available from July, 28th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c393b2df9efca22559a6cf788928f333&source=embed&photo%5fid=16582967'),
(19, '"Once bridges are built, continents are linked, heritage travels across oceans, legacy both preserved and mixed. This is how a culture survives."', 'London connections', 2, 'storage/episodes/19/', '22', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 6, 2, 'Will be available from August, 4th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9bc88ed0667cca863cb842a5bb255a40&source=embed&photo%5fid=16582972'),
(20, '"There''s always that struggle, if you make your hobby your profession... Mark is lost. He has ventured into a new world far from the comforts of the safe environment he had built in Berlin..."', 'Hardwax', 2, 'storage/episodes/20/', '55', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 7, 5, 'Will be available from August, 11th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=19ad62b4066a116ce48c3a48c183b758&source=embed&photo%5fid=16582994'),
(21, '"It is time to return to Detroit to recover the energy from the beginnings and meet with old friends now turned into wise and experimented advisors."', 'Detroit, The Inspiration', 2, 'storage/episodes/21/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 8, 1, 'Will be available from August, 18th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f697dc4d2b9676d60c066d0e47dd33be&source=embed&photo%5fid=16584939'),
(22, '"They say that true warriors find no rest, not even in their dreams. Fortunately, in Detroit, Mark always finds the incentive to continue with his mission."', 'Berlin - Detroit Connection', 2, 'storage/episodes/22/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 9, 0, 'Will be available from August, 25th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0bfab61b741713bd52a9fee75f3cc675&source=embed&photo%5fid=16583006'),
(23, '"Problems escalate. Lack of time, a difficulty to make the pieces work. The same adversities that a decade back a visionary overcame building one of the most outstanding existing sound systems, and taking it to the other side of the world."', 'Towards Japan', 2, 'storage/episodes/23/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 10, 0, 'Will be available from September, 1st', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=94bc7f753024ec3a8c3d5776d7a83213&source=embed&photo%5fid=16583527'),
(24, '"Some time ago, before Mark, another man attempted to go further, taking the secrets of Jamaican sound to his remote land. He travelled and learned from master sound system manufacturers, eventually becoming even more knowledgeable than them. He finally returned home with a present for all reggae lovers..."', 'The legend of killasan', 2, 'storage/episodes/24/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 11, 1, 'Will be available from September, 8th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5f15738bd7848fae7bb3aa58798e3631&source=embed&photo%5fid=16616261'),
(25, '"After his enlightening encounter with Master Kihira, Mark returns to Berlin. His project has gained a new impulse. He must now focus on an indispensable element ...the space."', 'Looking for the venue', 2, 'storage/episodes/25/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 12, 1, 'Will be available from September, 15th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5f15738bd7848fae7bb3aa58798e3631&source=embed&photo%5fid=16616261'),
(26, '"A new ally joins the team. His mission: to get the most out of the sound system they are building. The objective will now be to work together so that Mark''s party becomes that ceremony where music is fully experienced..."', 'One space, one sound', 2, 'storage/episodes/26/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 13, 2, 'Will be available from September, 16th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f36a6e4426e759cdc4db026684afaf83&source=embed&photo%5fid=16583535'),
(27, '"The place where to host the event becomes essential. Mark wants to get the room acoustically treated for the music to be heard as if it were played outside. There is hardly any time left to present those astonishing bass sounds to the world indoors..."', 'Funkhouse, the place', 2, 'storage/episodes/27/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 14, 4, 'Will be available from September, 22th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c564e5c932d4724ab6f2a26f03bdb30c&source=embed&photo%5fid=16583550'),
(28, '"Mark knows that his sound system should sound like no other before. For that, he creates his own music, his voice, using dub plates, records manufactured with rhythmic basses created for this particular show to turn the experience into something unrepeatable..."', 'Winyls', 2, 'storage/episodes/28/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 15, 1, 'Will be available from September, 23th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=df86e87194419e56881fa0b56106aeb3&source=embed&photo%5fid=16583564'),
(29, '"Our space awaits for a creature that will literally make it tremble: the speakers. They are already on the way from Funktion-One''s workshop to Funkhaus, where the room is beginning to take shape..."', 'Human Factor', 2, 'storage/episodes/29/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 16, 2, 'Will be available from September, 29th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=dddc516d26c6c4acf353c8f845cf1355&source=embed&photo%5fid=16583570'),
(30, '"Only 24 hours left. It''s been a long night, but they have finally managed to take the sound system down to the concert chamber, although some walls have fallen in the process..."', 'The countdown', 2, 'storage/episodes/30/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 17, 2, 'Will be available from September, 30th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=7f02243a8e6fc72c24486f9d2bb3a47a&source=embed&photo%5fid=16583574'),
(31, '"Would it be possible for Tony and Mark, after so much dedication and having overcome so many obstacles, to have left some loose ends? Something they haven''t figured out yet is complicating things, threatening to ruin the event. The clock runs against Mark..."', 'Floor shakes', 2, 'storage/episodes/31/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 18, 3, 'Will be available from October, 6th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=fef03fb4a4fae0450d75e9f861f358b2&source=embed&photo%5fid=16583587'),
(32, '"Mark''s perfectionism has paid off. Now that the speakers are in the right place, the ultimate sound system is almost ready, just in time for the first guests. Let the party begin."', 'It''s time for the party to begin...', 2, 'storage/episodes/32/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 19, 2, 'Will be available from October, 7th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c2712bd26feff3e757f460be50f2a28a&source=embed&photo%5fid=16583611'),
(33, '"It''s not just a machine or technology. It''s more to it. It''s an ethos. It''s a lifestyle. (...) There''s a feel. There''s an effect. The goal for the sound system is to make all the people happy, including us."', 'A dream fulfilled', 2, 'storage/episodes/33/', '', '2017-06-23 20:17:49', '2017-06-22 16:46:19', 2, 'episode', '', 20, 6, 'Will be available from October, 8th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9bb46cc5add958809dc21e3768ec3ade&source=embed&photo%5fid=16583599'),
(34, '''...and this is how I learned that food can be felt and music can be tasted.''\r\n', 'Trailer', 3, 'storage/episodes/34/', '1', NULL, '2017-06-17 12:54:58', 3, 'episode', '', 0, 12, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9d2211357f259405c6312fcb054403b0&source=embed&photo%5fid=16737751'),
(35, '‘We initiate the journey in search of inspiration; new and old sensations, new and old flavours…A trip to elevate food to art and music to food’', 'An appetite for music', 3, 'storage/episodes/35/', '1', NULL, '2017-07-02 09:38:25', 3, 'episode', '', 1, 6, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=22da0e1c00913e8687c380bb9d901435&source=embed&photo%5fid=16737660'),
(36, '''Where does inspiration come from, what is it that drives you to keep offering songs and dishes? In our learning experience we won’t be alone, but always accompanied by a squire helping us interpret music’s flavour.''', 'Can you hear me?', 3, 'storage/episodes/36/', '', '2017-07-02 07:44:38', '2017-06-17 12:54:58', 3, 'episode', '', 2, 34, 'Will be available from July, 8th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=ffb8d6611ee9e2e173961ba41a1af949&source=embed&photo%5fid=16737707'),
(37, '‘The cold, the sea, ice, forests and markets. We will look for places where musicians and chefs get inspired to obtain the best ingredients to make their dishes resonate’', 'Raws', 3, 'storage/episodes/37/', '', NULL, '2017-06-17 12:54:58', 3, 'episode', '', 3, 44, 'Will be available from July, 15th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=edaa4f40c9892760e7a2b43c28b94899&source=embed&photo%5fid=16737720'),
(38, '‘A DJ and a chef share more than a creative impulse, sometimes they share skills; much common ground is to be found among those intending to offer something to delight an audience’', 'I know what you want', 3, 'storage/episodes/38/', '', NULL, '2017-06-17 12:54:58', 3, 'episode', '', 4, 3, 'Will be available from July, 21th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=a74823ee0f9f3176d493aa352fc04ada&source=embed&photo%5fid=16737985'),
(39, '‘We slowly get rid of our creative blocks thanks to the incredible familiarity between music and food. Ancestral flavours, raw materials, cooking, dishing up and tasting; stages that coincide with the creation of a song.''', 'Overloaded', 3, 'storage/episodes/39/', '', NULL, '2017-06-17 12:54:58', 3, 'episode', '', 5, 32, 'Will be available from July, 23th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c8913079d5d0a7350fc4281cc360009a&source=embed&photo%5fid=16737987'),
(40, '''It is common to force our creativity beyond the limits of our own talent in an effort to free ourselves from blocks. This causes indigestion making us cross spaces meaninglessly. But excess is cured with calm, searching for a place where to get our appetite back.''', 'Freezing', 3, 'storage/episodes/40/', '', NULL, '2017-07-04 17:45:20', 3, '', '', 6, 1, 'Will be available from July, 29th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=ef98150ca997f4286dcb2c5aaed3280d&source=embed&photo%5fid=16737989'),
(41, '‘To reconnect with our own strengths, to rest, delight ourselves, let us be seduced by flavours and sensations created by others. This is perhaps the way to recover faith in our own talent.''', 'Tasting time', 3, 'storage/episodes/41/', '', NULL, '2017-06-17 12:54:58', 3, '', '', 7, 0, 'Will be available from August, 5th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5179280c99a32ebc2c4cfcac5cf145cd&source=embed&photo%5fid=16738023'),
(42, '‘Why does a musician need to create, to compose? Is this the same impulse that drives a cook to search in markets and gardens and experiment with fluids, smokes and textures? This impulse has led some to transcend technique and dedicate themselves exclusively to essence.''', 'Natural way', 3, 'storage/episodes/42/', '', '2017-07-12 19:07:43', '2017-06-17 12:54:58', 3, '', '', 8, 0, 'Will be available from August, 12th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=a72640e9b6da1acc9bae9893d7d0bdf0&source=embed&photo%5fid=16738056'),
(43, '‘To meet those who manifest in natural ways that which we have the need to express through music. To meet first hand someone who gives meaning to our CREATIVE IMPULSE’', 'Show a man to fish… and he''ll see a siren', 3, 'storage/episodes/43/', '', NULL, '2017-06-17 12:54:58', 3, '', '', 9, 0, 'Will be available from August, 19th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=df06064d4391091b3eb88fffa716e13a&source=embed&photo%5fid=16738059'),
(44, '‘Now we have recovered our strength. We again have confidence in ourselves. We already have all the ingredients, the table is set and the fire lit, the oil is being heated.''', 'Masters', 3, 'storage/episodes/44/', '', NULL, '2017-06-17 12:54:58', 3, '', '', 10, 0, 'Will be available from August, 26th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0fc66f82516143304b4c52cc5c2e0aea&source=embed&photo%5fid=16738061'),
(45, '‘The time has come to show the world that our music is as delicious and nourishing as the dishes we have been savouring’', 'Look it, listen it, taste it!', 3, 'storage/episodes/45/', '', NULL, '2017-06-17 12:54:58', 3, '', '', 11, 0, 'Will be available from September, 2nd', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=669a01f4e1f3fe2980fc141013399e6b&source=embed&photo%5fid=16738064'),
(46, '''After the concert and the experience we return to the place we call home. We know we will find the inspirations and energy needed to face the challenge offering our talent to other’s palate’.', 'Harmony', 3, 'storage/episodes/46/', '', NULL, '2017-06-17 12:54:58', 3, '', '', 12, 0, 'Will be available from September, 9th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=98bfeb9fd73c68499ea005d8da5f9e6c&source=embed&photo%5fid=16738116');

-- --------------------------------------------------------

--
-- Table structure for table `en_events`
--

CREATE TABLE IF NOT EXISTS `en_events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `videoInviting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eventThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventGalleryTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `en_events`
--

INSERT INTO `en_events` (`id`, `title`, `description`, `videoInviting`, `created_at`, `updated_at`, `eventThumb`, `eventGalleryTitle`, `video`, `url`) VALUES
(1, 'Martin Garrix', 'Martijn Gerard Garritsen (born 14 May 1996), known professionally Martin Garrix (stylized as Mar+in Garrix), is a Dutch DJ, record producer and musician. He is ranked number 1 on DJ Mag''s Top 100 DJs list for 2016. In 2016, he founded the label STMPD RCRDS months after leaving Spinnin'' Records, before signing with Sony Music. In 2017, he was announced as a resident DJ at Hï Ibiza.', 'storage/events/video/1/', NULL, NULL, 'storage/event/thumbs/1/', 'Martin Garix Festival gallery', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c358e36d556eb1682e52fdc07c6d3521&source=embed&photo%5fid=17581994', 'Martin Garrix'),
(2, 'Green Beach', 'Sven Väth (born 26 October 1964) is a German DJ/producer and three time DJ Awards winner whose career in electronic music spans well over 30 years. His single, “Electrica Salsa” under the alias OFF launched his career in 1986. Lovingly referred to as “Papa Sven” by his fans, Sven Väth has made his mark in the music community by being one of Germany’s “pop stars” in the nineties, running two famous night clubs in Germany, and starting his own company Cocoon, which encompasses a booking agency, record label, and a branch for events. He is recognized for cultivating the underground electronic music scene not just in Germany but in Ibiza as well, with his own night at Amnesia for fourteen years and after-parties at creative locations around the island. Sven Väth is a major proponent of vinyl, using only two decks and a mixer for his extensive DJ sets, his longest set having been 30 hours.', 'storage/events/video/1/', NULL, NULL, 'storage/event/thumbs/2/', 'Green Beach Festival gallery', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0fc66f82516143304b4c52cc5c2e0aea&source=embed&photo%5fid=16738061', 'Green Beach Festival'),
(3, 'Afrojack', 'Nick van de Wall (born 9 September 1987), professionally known as Afrojack, is a Dutch DJ, record producer and remixer. In 2014, he released his debut album Forget the World. Afrojack regularly features in the top 10 of DJ Mag Top 100 DJs.', '', NULL, NULL, 'storage/event/thumbs/3/', 'Afrojack gallery', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9228b676fcc44bacb58eb627faad48b6&source=embed&photo%5fid=16737902', 'Afrojack'),
(4, 'Hardwell', 'Robbert van de Corput (born 7 January 1988), who performs under the stage name Hardwell, is a Dutch big room house and electro house DJ, record producer and remixer. He was voted the World''s No. 1 DJ on DJ Mag in 2013, and again in 2014. He is currently ranked at No. 3 on DJ Mag Top 100 DJs 2016 poll. Hardwell is best known for his sets at major music festivals such as Ultra Music Festival, Sunburn and Tomorrowland.\n\nHardwell first gained recognition in 2009 for his bootleg of "Show Me Love vs. Be". He founded the record label Revealed Recordings in 2010 and his own radio show and podcast Hardwell On Air in 2011. He has since released seven compilation albums through his label, as well as his own documentary film.', '', NULL, NULL, 'storage/event/thumbs/4/', 'Hardvell gallery', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=e9069e71258417c826dddb77ae6ea988&source=embed&photo%5fid=16737794', 'Hardwell');

-- --------------------------------------------------------

--
-- Table structure for table `en_giants`
--

CREATE TABLE IF NOT EXISTS `en_giants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` int(255) NOT NULL,
  `program_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `giantThumb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `en_giants`
--

INSERT INTO `en_giants` (`id`, `description`, `title`, `program_id`, `created_at`, `updated_at`, `giantThumb`, `name`, `lastname`) VALUES
(1, 'Since 1995, these Icelandic Sound Giants have been heating up the clubs with their eclectic mix of trip-hop, techno and house.Formed as a film and acting collective they have stayed true to their roots, using art and technology to create a unique mix of sound and vision.', 0, 1, NULL, NULL, 'storage/giants/1/thumb.jpg', 'GUS', 'GUS'),
(2, 'Two Russians recognized the Power of Light, and are now an award winning interactive media company. They compare themselves to magicians and use light as their magic.\n3D mapping and live performance have turned dull urban landscapes into unforgettable awesomeness. And their spectacular performances have delighted discerning audiences worldwide.', 0, 1, NULL, NULL, 'storage/giants/2/thumb.jpg', 'SILA ', 'SVETA'),
(3, 'Modern-day culinary alchemists Bompas & Parr are, quite simply, like no other.\nSince starting out as unconventional jelly experts, they have expanded to flavor based installations and experiences shown worldwide.\nMixing flavors, methods and mediums, they have successfully made fantasy a reality.', 0, 1, NULL, NULL, 'storage/giants/3/thumb.jpg', 'BOMPAS & ', 'PARR'),
(4, 'David Muallem has put his years of experience and love for music towards fostering a welcoming musical community in his hometown of Munich. If you ask David for the recipe of the club’s success, his simple answer is: "Passion“.', 0, 5, NULL, NULL, 'storage/giants/4/thumb.jpg', 'DAVID', 'MUALLEM'),
(5, 'Mark Ernestus is synonymous with techno. For nearly three decades, he has made a near unparalleled contribution to the music, through his work as a producer, a record shop owner, owner of a mastering studio, and clinical auteur. \nErnestus has built his unique career on a love of records. And that’s not stopping any time soon.', 0, 2, NULL, NULL, 'storage/giants/5/thumb.jpg', 'MARK', 'ERNESTUS'),
(6, 'The speaker technology created by Tony Andrews and his partner John Newsham is synonymous with crisp and powerful sound to a degree that no other audio brand is... Andrews remains as obsessive about listening to music, and developing new technologies based on the insights it gives him, as he ever was.', 0, 2, NULL, NULL, 'storage/giants/6/thumb.jpg', 'TONY', 'ANDREWS'),
(7, 'International pop star and CEO of ‘Drink QT’, born out of the London based record label PC Music. And like her vocals, QT is an entirely "digital proposition".', 0, 3, NULL, NULL, 'storage/giants/7/thumb.jpg', 'QT', ''),
(8, 'As a musician, his classical training has played a huge part in his ever-evolving development as an artist and has undoubtedly formed his ability to master a sublime\r\nintensity and intricacy that is prevalent in his electronic music today.', 0, 3, NULL, NULL, 'storage/giants/8/thumb.jpg', 'FALTY', 'DL'),
(9, 'His passion for music started early, he began DJing at thirteen and before long was spinning\r\nhis tracks on pirate radio and playing at club nights all across London.', 0, 3, NULL, NULL, 'storage/giants/9/thumb.jpg', 'DJ', 'ONEMAN'),
(10, 'An electronic music producer and head of Klammklang Records, a label that specializes in distinct types of music. In an area known more for natural resources and vast empty spaces than electronic music, Stas has dedicated himself to catalyzing creativity in Siberia', 0, 3, NULL, NULL, 'storage/giants/10/thumb.jpg', 'HMOT', ''),
(11, 'Multi-instrumentalist, composer, conductor, producer, director of music festivals, member of the Macedonian Philharmonic orchestra, author of music for film and theater, orchestrator. Yes, we are talking about the same person. In all aspects of his work, the first thing that comes to mind is his individual and creative expression. One of the leading contemporary musicians in Macedonia and the region gaining a worldwide reputation. He is a global success, and our local Giant of sound. ', 0, 2, NULL, NULL, 'storage/giants/11/thumb.jpg', 'Dzijan ', 'Emin'),
(12, 'The fifteen years he has spent creating and mixing cocktails are behind his expertise. From creating the first Macedonian author’s cocktail – Belegzija, to opening the first Mixology Bar in the country, he is a real pioneer in the world of creative taste. When he creates his drinks he not only escapes rules, he pays attention to all aspects – the look of the cocktails, the smell, the texture of the glasses he serves them in.  These are the things that make him a real Giant of taste. ', 0, 3, NULL, NULL, 'storage/giants/12/thumb.jpg', 'Filip ', 'Arnaudov');

-- --------------------------------------------------------

--
-- Table structure for table `en_giant_blogs`
--

CREATE TABLE IF NOT EXISTS `en_giant_blogs` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `giant_id` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `episodeThumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `totalLikes` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog1deo` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog2deo` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog3deo` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unlock` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `en_giant_blogs`
--

INSERT INTO `en_giant_blogs` (`id`, `giant_id`, `description`, `title`, `episodeThumb`, `name`, `totalLikes`, `created_at`, `updated_at`, `type`, `blog1deo`, `blog2deo`, `blog3deo`, `unlock`) VALUES
(1, 11, 'Expressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg', 'Lorem', 'storage/giant_blogs/1/', '43', '555', '2017-05-23 22:00:00', '2017-06-05 16:47:28', 'giantBlog', ' vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportea vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intellega vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg', 'ressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot m', 'ressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot m', 'Will be available soon'),
(2, 50, 'Expressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg', 'Lorem ipsum', 'storage/giant_blogs/2/', 'ddd', '552', '2017-03-31 22:00:00', '2017-06-05 16:47:22', 'giantBlog', 'ssa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cura vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intellega vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg tantas regiones barbaror', 'ssa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbaror', 'ssa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbaror', '');

-- --------------------------------------------------------

--
-- Table structure for table `en_giant_video_tasks`
--

CREATE TABLE IF NOT EXISTS `en_giant_video_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `giant_id` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `episodeThumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `totalLikes` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unlock` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `en_giant_video_tasks`
--

INSERT INTO `en_giant_video_tasks` (`id`, `giant_id`, `description`, `title`, `episodeThumb`, `name`, `totalLikes`, `created_at`, `updated_at`, `type`, `unlock`, `video`) VALUES
(1, 11, 'Will be available soon', 'Task form Dzijan Emin', 'storage/giant_video_tasks/1/', 'sdds', '443', '2017-04-30 22:00:00', NULL, 'giantVideoTask', 'Will be available from August, 6th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=e9069e71258417c826dddb77ae6ea988&source=embed&photo%5fid=16737794'),
(2, 12, 'Will be available soon', 'Task form Filip Arnaudov', 'storage/giant_video_tasks/2/', 'dfsd', '654', '2017-05-03 22:00:00', '2017-06-05 19:32:04', 'giantVideoTask', '', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=eac9c0b2970eaffc8163edd1647885ea&source=embed&photo%5fid=17507274 ');

-- --------------------------------------------------------

--
-- Table structure for table `en_programs`
--

CREATE TABLE IF NOT EXISTS `en_programs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `programThumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbDescription` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumbTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `smallTxt` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unlock` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trailer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `en_programs`
--

INSERT INTO `en_programs` (`id`, `description`, `title`, `programThumb`, `created_at`, `updated_at`, `thumbDescription`, `thumbTitle`, `logo`, `smallTxt`, `unlock`, `trailer`) VALUES
(1, 'The Misterium Event is the first of manu destination within Neuland. An explosion of the sences at an evning that is co-created by you.', 'Mysterium', 'storage/programs/1/', '2017-05-01 22:00:00', NULL, 'Are you up for the <span class="red">unknown</span>', 'Are you up for the <span class="red">unknown</span>', 'storage/logo_programs/1/', '<p><span class="first_character">F</span>ollow the Giants on their mission: to combine their creative forces to reimagine sound, taste and vision and create truly multi-sensory and totally immersive experience.</p>\n<p>\nThe Mysterium Event is the first of many destinations within Neuland. An explosion of the senses at an evening that is co-created by you.\n</p>', '1', '//neulandtv-serbia.videomarketingplatform.co/16214539.ihtml/player.html?token=aecd1c71b38461ba9098b965cd859f66&source=embed&photo%5fid=16737914&autoPlay=1'),
(2, 'Mystery of sound, the craffmanship behind every single bit and the story about those who decided their life for it.', 'Free the bass', 'storage/programs/2/', '2017-05-30 22:00:00', '2017-06-22 16:46:19', 'will you free the music', 'WILL YOU <span class="red">FREE </span>THE MUSIC?', 'storage/logo_programs/2/', '<p>\n<span class="first_character">F</span>ree The Bass is a story about Mastery of Sound, the craftsmanship behind every single bit and those who dedicated their life for it. A brilliant technician, a legend of sound and a common goal: making the ultimate sound system.\n</p>\n<p>\n"When man starts to manage sound as he pleases, he turns it into melody and then music into dance, a desire to touch heaven from earth. Music means unity, love, happiness, joy, family. No matter where you''re from... music brings it together."\n</p>\n<p>\nThis is the story of a man seeking to take one step further in what is known on the creation, control and projection of bass sounds. This is Mark Ernestus''s journey in the fulfilment of his dream.\n</p>', '1', '//neulandtv-serbia.videomarketingplatform.co/16214539.ihtml/player.html?token=61d4c0081206872b1ce48016b7d717e5&source=embed&photo%5fid=16662922&autoPlay=1'),
(3, 'For musicians in constant search of emotions that savour each sponful of creative process.', 'mixitup', 'storage/programs/3/', NULL, '2017-06-17 12:54:58', 'what does music taste like?', 'what does <span class="red">music</span> taste like?', 'storage/logo_programs/3/', '\n<span class="first_character">M</span>\nMix It Up is a story about four musicians in constant search of inspiration for the creative process. They will share their journey with the guides from the world of flavors, great masters that turn food into an art, and music into a lifestyle.<br><br>\n\n<p>Their experiences will coincide even thousands kilometers away. “The cold, the sea, ice, forests and markets. We will look for places where musicians and chefs get inspired to obtain the best ingredients to make their dishes resonate.”</p>\n', '1', '//neulandtv-serbia.videomarketingplatform.co/16214539.ihtml/player.html?token=9d2211357f259405c6312fcb054403b0&source=embed&photo%5fid=16737751&autoPlay=1'),
(4, 'COOMING SOON Join the Giants on new jurney of creation, as they build something beyound possibilites of any one person.', 'infinium', 'storage/programs/4/', NULL, NULL, 'are you up for the unknown?', '', 'storage/logo_programs/4/', '', 'Will be available soon.', '');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE IF NOT EXISTS `episodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program_id` int(11) NOT NULL,
  `episodeThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalLikes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `serie_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smallTxt` longtext COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `totalViews` int(11) NOT NULL,
  `unlock` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_src` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `description`, `title`, `program_id`, `episodeThumb`, `totalLikes`, `created_at`, `updated_at`, `serie_id`, `type`, `smallTxt`, `number`, `totalViews`, `unlock`, `data_src`) VALUES
(1, 'Време е да ги запознаете Gus Gus, џинови на звукот\nи воедно прогресивна сила во светот на електронската музика.\n', 'ЗАПОЗНАЈТЕ ГИ GUS GUS ', 1, 'storage/episodes/1/', '71', '2017-06-14 22:00:00', '2017-07-04 08:55:14', 1, 'episode', 'The Mysterium Event was the first of many destinations within Neuland. An explosion of the senses at an evening that was co-created by people from all over the globe.', 1, 101, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=49c9f3a63ad9940f59c4e8570892fb7c&source=embed&photo%5fid=16737898'),
(2, 'Sila Sveta ги осветлија градовите ширум светот и со тоа го трансформираа\nсекојдневното во нешто незаборавно. \n', 'ЗАПОЗНАЈТЕ ГИ SILA SVETA ', 1, 'storage/episodes/2/', '1002', '2017-06-14 22:00:00', '2017-07-04 08:55:35', 1, 'episode', 'Zasto sve to tako i kada ce doci kraj svemu tome?', 2, 29, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9228b676fcc44bacb58eb627faad48b6&source=embed&photo%5fid=16737902'),
(3, 'Кулинарни алхемичари на модерното време, едноставно како никој друг', 'ЗАПОЗНАЈТЕ ГИ BOMPAS&PARR ', 1, 'storage/episodes/3/', '558', '2017-06-14 22:00:00', '2017-07-04 08:55:53', 1, 'episode', '', 3, 18, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f351cbe2b68584a40a084182bc7af8cc&source=embed&photo%5fid=16737894'),
(4, '', 'Претставување на GUS GUS \n', 1, 'storage/episodes/4/', '5', '2017-06-14 22:00:00', '2017-06-29 15:53:09', 1, 'episode', 'Kako napraviti nesto od nicega', 4, 27, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=fff4fef8609042c299ec675a68487ba9&source=embed&photo%5fid=16737908'),
(5, '', 'Претставување на SVILA SVETA ', 1, 'storage/episodes/5/', '558', '2017-06-14 22:00:00', '2017-06-29 15:41:39', 1, 'episode', 'Tona prodje, gram nikako', 5, 17, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=7ed4f94a45f745dc8952f31ff19ad4d1&source=embed&photo%5fid=16737911'),
(6, '', 'Претставување на  BOMPAS&PARR ', 1, 'storage/episodes/6/', '30', '2017-06-14 22:00:00', '2017-06-14 16:09:04', 1, 'episode', 'Prvo reci hop, pa skoci', 6, 9, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0dc7952a2efbafcbddccfa2f2d070c90&source=embed&photo%5fid=16737754'),
(7, '', 'КОЈ СЕ  GUS GUS ', 1, 'storage/episodes/7/', '35', '2017-06-14 22:00:00', '2017-06-15 19:56:53', 1, 'episode', '', 7, 6, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9c5710679df267a68cb25978d148d4ff&source=embed&photo%5fid=16737827'),
(8, '', 'КОЈ СЕ SILA SVETA ', 1, 'storage/episodes/8/', '111', '2017-06-14 22:00:00', '2017-06-14 16:02:30', 1, 'episode', '', 8, 4, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c5c78443b2431ac9980b5df118c325b0&source=embed&photo%5fid=16737845'),
(9, '', 'ИНСТИТУЦИЈА ЗА ДОБРА ХРАНА ', 1, 'storage/episodes/9/', '2', '2017-06-14 22:00:00', '2017-06-29 15:41:55', 1, 'episode', '', 9, 8, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=e9069e71258417c826dddb77ae6ea988&source=embed&photo%5fid=16737794'),
(10, '', 'ОДА ЗА ИСЛАНД', 1, 'storage/episodes/10/', '23', '2017-06-14 22:00:00', '2017-06-14 16:01:44', 1, 'episode', '', 10, 2, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=eac9c0b2970eaffc8163edd1647885ea&source=embed&photo%5fid=17507274'),
(11, '', 'АРМА ', 1, 'storage/episodes/11/', '22', '2017-06-14 22:00:00', '2017-06-14 16:01:17', 1, 'episode', '', 11, 6, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f10bc024fe61b4cd4f096139433dfbae&source=embed&photo%5fid=16737843'),
(12, '', 'МАУНСЕЛ ТВРДИНИТЕ ', 1, 'storage/episodes/12/', '24', '2017-06-14 22:00:00', '2017-06-13 23:20:59', 1, 'episode', '', 12, 6, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=da1a9e8b6e2e4d76c609576ff33407b8&source=embed&photo%5fid=16737793'),
(13, 'Ослободете го Басот“ е приказна за „Мајсторството на звукот“, за занаетот позади секој ритам и за оние кои му го посветиле  животот на овој занает. Ова е брилијантен техничар, легенда на звукот чија  основна цел е создавање на врвен звучен систем', 'Трејлер\n', 2, 'storage/episodes/13/', '222', '2017-06-23 20:17:49', '2017-07-07 19:41:07', 2, 'episode', '', 0, 9, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=61d4c0081206872b1ce48016b7d717e5&source=embed&photo%5fid=16662922'),
(14, '„Кога  човек ќе почне да управува со звукот онака како што посакува, тој звукот во мелодија го престорува, потоа музиката во танц ја преточува, со желба рајот од земјата да го  допира. Музиката подразбира единство, љубов, среќа, радост и семејство. Без разлика од каде доаѓаш....музиката нè спојува сите”.\n', 'Што е звучниот систем?\n', 2, 'storage/episodes/14/', '334', '2017-06-23 20:17:49', '2017-07-07 19:41:13', 2, 'episode', '', 1, 11, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5a3062eb352fbce34d9fe7fb637bf882&source=embed&photo%5fid=16662872'),
(15, 'Постојат луѓе кои се способни да спојуваат континенти, смалувајќи го огромниот океан што ги разделува културите. Овие луѓе се склони кон несвесност за важноста на мостовите што ги градат, мостови кои подоцна, но и засекогаш ќе ги користат и мажите и од жените, во двете насоки', 'Марк Ернест\n', 2, 'storage/episodes/15/', '22', '2017-07-02 07:39:32', '2017-06-20 16:25:56', 2, 'episode', '', 2, 6, 'Ќе биде достапно на 7 - ми јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=2182c5faff7c3da809020600498556f1&source=embed&photo%5fid=16582910'),
(16, '„Да се креира нешто значи да се овозмоожи истото да се случи, да се престори во сон или идеја, во  нешто реално, во искуство, со преобразување на  предупредувачките звуци во церемонии на радост, користејќи ги звучните ѕидови што луѓето од Антилите  започнале да ги викаат Звучни системи...“\n', 'Во потрага по звучниот систем\n', 2, 'storage/episodes/16/', '43', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 3, 2, 'Ќе биде достапно на 14 -ти јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=784ff705b42449398f7347bbeedb35c8&source=embed&photo%5fid=16582931'),
(17, '„Не е лесна задача да се изгради звучен систем којшто ќе биде продолжение на сонот на Марк Ернестус. Нему му треба помошник способен целосно да ги разбере неговите аспирации... “\n', 'Првиот  сојузник\n', 2, 'storage/episodes/17/', '1', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 4, 2, 'Ќе биде достапно на 22 -ри јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=115f472667edcc115e4cf669dbc05c9d&source=embed&photo%5fid=16582955'),
(18, '„Звучниот систем е создаден во Јамајка  на колективен начин при што на целата нација и се дава глас преку музиката. (...) Искусувањето на квалитетот на звукот стана главен аспект над сите фактори. Музиката целосно се претвори во физичко искуство.... “\n', 'Јамајка:Раѓањето на звучниот систем\n', 2, 'storage/episodes/18/', '44', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 5, 5, 'Ќе биде достапно на 28 - ми јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c393b2df9efca22559a6cf788928f333&source=embed&photo%5fid=16582967'),
(19, 'Откако ќе се изградат врските, континентите се поврзани, а наследството патува преку океани, и записот истовремено е зачуван и измешан. Вака преживува културата.\n', 'Конекции со Лондон\n', 2, 'storage/episodes/19/', '22', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 6, 2, 'Ќе биде достапно на 4 - ти август\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9bc88ed0667cca863cb842a5bb255a40&source=embed&photo%5fid=16582972'),
(20, 'Секогаш постои борба, ако своето хоби го претвориш во  професија...  Марк е изгубен. Тој се впушта во свет кој нема допирна точка со комфорот на безбедната околина што ја создал во Берлин...\n', 'HARDWAX\n', 2, 'storage/episodes/20/', '55', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 7, 5, 'Ќе биде достапно на 11ти Август ', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=19ad62b4066a116ce48c3a48c183b758&source=embed&photo%5fid=16582994'),
(21, 'Време е да се врати во Детроит за да ја поврати енергијата што ја имаше на почетокот и да се сретне со старите пријатели, кои сега се мудри и искусни советници.\n', 'Детроит, инспирацијата\n', 2, 'storage/episodes/21/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 8, 1, 'Ќе биде достапно на 18 -ти август\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f697dc4d2b9676d60c066d0e47dd33be&source=embed&photo%5fid=16584939'),
(22, 'Се вели дека за вистинските воини нема одмор, дури ниту во нивните соништа. За среќа, во Детроит, Марк секогаш наоѓа поттик за ја продолжи сопствена мисија.\n', 'Конекцијата Берлин-Детроит ', 2, 'storage/episodes/22/', '', '2017-06-23 20:17:49', '2017-07-04 17:26:03', 2, 'episode', '', 9, 1, 'Ќе биде достапно на 25 -ти август\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0bfab61b741713bd52a9fee75f3cc675&source=embed&photo%5fid=16583006'),
(23, 'Проблемите ескалираат. Недостатокот на време претставува потешкотија за да се усогласат делчињата.  Ова се истите неволји, коишто една декада претходно ги надмина еден визионер, правејќи еден од најизвонредните постоечки звучни системи и пренесувајќи го  на другиот крај на светот.', 'Кон Јапонија\n', 2, 'storage/episodes/23/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 10, 0, 'Ќе биде достапно на 1 -ви септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=94bc7f753024ec3a8c3d5776d7a83213&source=embed&photo%5fid=16583527'),
(24, '„Пред некое време, пред Марк, друг човек проба да направи чекор понатаму, земајќи ги тајните на јамајканскиот звук од неговата далечна земја. Тој патувал и учел од врвните создавачи на звучни системи, на крајот научувајќи повеќе и од нив. Конечно се вратил дома со подарок за сите љубители на регето........“\n', 'Легедата за Киласан\n', 2, 'storage/episodes/24/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 11, 1, 'Ќе биде достапно на 8 -ми септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5f15738bd7848fae7bb3aa58798e3631&source=embed&photo%5fid=16616261'),
(25, '„По просветлувачката средба со маестро Кихира, Марк се враќа во Берлин. Неговиот проект добива нов импулс. Тој мора да се фокусира на неопходниот елемент... просторот“\n', 'Барање на локација ', 2, 'storage/episodes/25/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 12, 1, 'Ќе биде достапно на 15 -ти септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5f15738bd7848fae7bb3aa58798e3631&source=embed&photo%5fid=16616261'),
(26, 'На тимот му се придружува нов сојузник. Неговата мисија е следна:  да се извлече најмногу од звучниот систем којшто го создаваат.  Целта сега ќе биде да се работи заедно  - забавата на Марк да стане церемонија каде  што музиката ќе биде целосно искусена...\n', 'Еден простор, еден звук\n', 2, 'storage/episodes/26/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 13, 2, 'Ќе биде достапно на 16 -ти септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=f36a6e4426e759cdc4db026684afaf83&source=embed&photo%5fid=16583535'),
(27, '„Местото за одржување на настанот станува значајно. Марк сака да ја среди собата акустички , за да музиката се слуша како да е свирена надвор.  Скоро и да нема време за презентирање на неверојатните бас звуци до внатрешниот свет....“\n', 'Фанк-куќа, местото\n', 2, 'storage/episodes/27/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 14, 4, 'Ќе биде достапно на 22 -ри септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c564e5c932d4724ab6f2a26f03bdb30c&source=embed&photo%5fid=16583550'),
(28, '„Марк знае дека неговиот звучен систем треба да звучи како ниеден претходно. Затоа, тој создава сопствена музика, го користи сопствениот глас, „dub“ плочи и снимки  направени со ритмички басови создадени  токму за ова особено шоу  да се претвори во нешто неповторливо...“\n', 'WINYLS\n', 2, 'storage/episodes/28/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 15, 1, 'Ќе биде достапно на 23 -ти септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=df86e87194419e56881fa0b56106aeb3&source=embed&photo%5fid=16583564'),
(29, 'Нашиот простор чека суштество кое буквално ќе направи да треперат звучниците. Тие веќе  се на патот  од работилницата Funktion-One кон Funkhaus (* Фанк-куќата), каде  што собата веќе започнува да добива форма...', 'Човечки фактор\n', 2, 'storage/episodes/29/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 16, 2, 'Ќе биде достапно на 29 -ти септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=dddc516d26c6c4acf353c8f845cf1355&source=embed&photo%5fid=16583570'),
(30, '„Преостануваат само уште 24 часа.  Ноќта е долга,  но ,тие конечно успеваат да го однесат звучниот систем до концертната сала, иако некои  од ѕидовите беа паднати во текот на процесот...“\n', 'Одбројувањето ', 2, 'storage/episodes/30/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 17, 2, 'Ќе биде достапно на 30 -ти септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=7f02243a8e6fc72c24486f9d2bb3a47a&source=embed&photo%5fid=16583574'),
(31, 'Дали ќе биде можно за Тони и Марк, после толкава посветеност и надминување на толку многу пречки да остават неврзани краеви?  Нешто што не успеале да го откријат ги комплицира работите се заканува да го уништи настанот. Часовникот не отчукува во интерес на Марк...\n', 'Подот се тресе\n', 2, 'storage/episodes/31/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 18, 3, 'Ќе биде достапно на 6 -ти октомври\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=fef03fb4a4fae0450d75e9f861f358b2&source=embed&photo%5fid=16583587'),
(32, '„Перфекционизмот на Марк се исплатеше.  Сега, кога звучниците се на место, крајниот звучен систем е скоро готов, токму на време за првите гости. Нека почне забавата“\n', 'Време е да се започне забавата....\n', 2, 'storage/episodes/32/', '', '2017-06-23 20:17:49', '2017-06-20 16:25:56', 2, 'episode', '', 19, 2, 'Ќе биде достапно на 7 - ми октомври\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c2712bd26feff3e757f460be50f2a28a&source=embed&photo%5fid=16583611'),
(33, 'Не станува збор само за машина или технологија. Има нешто повеќе во тоа. Тоа е животен стил. (...) Тоа е чувство. Има ефект. Целта на звучниот систем е да ги направи луѓето среќни, вклучувајќи нè  и нас.', 'Исполнување на сонот\n', 2, 'storage/episodes/33/', '', '2017-06-23 20:17:49', '2017-07-04 17:26:11', 2, 'episode', '', 20, 7, 'Ќе биде достапно на 8 -ми октомври\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9bb46cc5add958809dc21e3768ec3ade&source=embed&photo%5fid=16583599'),
(34, '... И ова е како научив дека храната може да се почувствува, а музиката да се вкуси\n', 'Трејлер\n', 3, 'storage/episodes/34/', '1', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 0, 12, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9d2211357f259405c6312fcb054403b0&source=embed&photo%5fid=16737751'),
(35, 'Ние го започнуваме патувањето во потрагапо инспирација; нови и стари сензации, нови и стари вкусови... Патување да се издигне храната до степен на уметност , а музиката до степен на храна\n', 'Апетит за музика\n', 3, 'storage/episodes/35/', '1', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 1, 5, '1', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=22da0e1c00913e8687c380bb9d901435&source=embed&photo%5fid=16737660'),
(36, 'Од каде доаѓа инспирацијата \n', 'Можеш ли да ме слушнеш?', 3, 'storage/episodes/36/', '', '2017-07-02 07:44:38', '2017-06-22 16:50:16', 3, 'episode', '', 2, 34, 'Ќе биде достапно на 8 - ми јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=ffb8d6611ee9e2e173961ba41a1af949&source=embed&photo%5fid=16737707'),
(37, 'Студот, морето, мразот , шумите и пазарите. Ќе ги бараме местата каде  што музичарите  и  готвачите  се инспирираат за изнаоѓање на најдобрите состојки за да ги создадат своите дела со длабок и  целосен „ призвук“\n', 'Суровини\n', 3, 'storage/episodes/37/', '', NULL, '2017-07-04 17:26:22', 3, 'episode', '', 3, 45, 'Ќе биде достапно на 15 -ти јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=edaa4f40c9892760e7a2b43c28b94899&source=embed&photo%5fid=16737720'),
(38, 'Dj-от и готвачот имаат и повеќе заеднички работи, не само креативниот импулс,понекогаш ги делат и вештините; можат да се најдат и многу повеќе заеднички работи помеѓу  нив со намера да понудат нешто што ќе ја восхити публиката', 'Знам што сакаш\n', 3, 'storage/episodes/38/', '', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 4, 3, 'Ќе биде достапно на 21 -ви јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=a74823ee0f9f3176d493aa352fc04ada&source=embed&photo%5fid=16737985'),
(39, 'Пополека се ослободуваме од креативните блокади, благодарение на неверојатната блискост помеѓу музиката и храната.  Наследни вкусови, сурови материјали, готвење, сервирање и вкусување ;  фази кои се поклопуваат со креирањето на храната', 'Преоптоварен\n', 3, 'storage/episodes/39/', '', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 5, 32, 'Ќе биде достапно на 23 -ти јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c8913079d5d0a7350fc4281cc360009a&source=embed&photo%5fid=16737987'),
(40, 'Нормално е да ја форсираме нашата креативност надвор од границите на нашиот талент, вложувајќи напор да се ослободиме од блокадите. Ова предизвикува  бесмислено поминување на крстосниците . Но, екцесите се лекуваат со смиреност, барајќи место каде  што ќе можеме да го повратиме апетитот.\n', 'Замрзнување\n', 3, 'storage/episodes/40/', '', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 6, 0, 'Ќе биде достапно на 29 -ти јули\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=ef98150ca997f4286dcb2c5aaed3280d&source=embed&photo%5fid=16737989'),
(41, 'За да повторно се поврземе со нашата сила и за да се одмориме и задоволиме, треба да дозволиме да бидеме заведени од вкусовите и сензациите создадени од другите. Ова  е, можеби, начинот за да ја вратиме вербата во нашиот талент.\n', 'Време за дегустација\n', 3, 'storage/episodes/41/', '', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 7, 0, 'Ќе биде достапно на 5 - ти август\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=5179280c99a32ebc2c4cfcac5cf145cd&source=embed&photo%5fid=16738023'),
(42, 'Зошто музичарот треба да креира и да компонира? Дали е ова оној ист импулс кој што го тера готвачот  да бара  по пазарите  и градините, да експериментира со течности, чад и текстури? Ваквиот импулс ги водел и оној кој сакал да ја надмине техниката и да се посвети само на суштината.', 'Природен начин\n', 3, 'storage/episodes/42/', '', '2017-07-12 19:07:42', '2017-06-22 16:50:16', 3, 'episode', '', 8, 0, 'Ќе биде достапно на 12 - ти август', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=a72640e9b6da1acc9bae9893d7d0bdf0&source=embed&photo%5fid=16738056'),
(43, 'Да ги сретнеш  оние кои на природен начин  ја манифестираат потребата  да се изразуваме преку музиката. Да ги сретнеш во живо тие што даваат значење на нашиот  КРЕАТИВЕН ИМПУЛС.', 'Покажи му на човек риба... и тој ќе види сирена\n', 3, 'storage/episodes/43/', '', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 9, 0, 'Ќе биде достапно на 19 - ти август\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=df06064d4391091b3eb88fffa716e13a&source=embed&photo%5fid=16738059'),
(44, 'Сега ја повративме нашата сила. Повторно имаме самодоверба. Веќе ги имаме сите состојки, масата е поставена, огнот запален, маслото загреано.\n', 'Majcтори', 3, 'storage/episodes/44/', '', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 10, 0, 'Ќе биде достапно на 26 - ти август\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0fc66f82516143304b4c52cc5c2e0aea&source=embed&photo%5fid=16738061'),
(45, 'Дојде времето да му покажеме на светот дека нашата музика е вкусна и негувана, како и јадењата што ги вкусуваме.\n', 'Гледај, слушај, пробај !\n', 3, 'storage/episodes/45/', '', NULL, '2017-07-02 07:25:19', 3, 'episode', '', 11, 1, 'Ќе биде достапно на 2 -ри септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=669a01f4e1f3fe2980fc141013399e6b&source=embed&photo%5fid=16738064'),
(46, 'По концертот и искуството се враќаме на местото кое го нарекуваме дом. Знаеме дека ќе најдеме инспирации и енергија потребни за соочување со предизвикот, понудувајќи го нашиот талент на туѓиот вкус.\n', 'Хармонија\n', 3, 'storage/episodes/46/', '', NULL, '2017-06-22 16:50:16', 3, 'episode', '', 12, 0, 'Ќе биде достапно на 9 -ти септември\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=98bfeb9fd73c68499ea005d8da5f9e6c&source=embed&photo%5fid=16738116');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `videoInviting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eventThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventGalleryTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `videoInviting`, `created_at`, `updated_at`, `eventThumb`, `eventGalleryTitle`, `video`, `url`) VALUES
(1, 'МАРТИН ГАРИКС\n', 'Мартин Жерар Гаритсен (роден на 14 мај 1996 година), познат по своето уметничко име Мартин Гарикс (стилизирано како Mar+in Garrix), е холандски диџеј, продуцент и музичар. Тој е рангиран на првото место на DJ Mag листата на Топ 100 диџеи за 2016 година. Во 2016 година, тој ја основа издавачката куќа STMPD RCRDS, неколку месеци откако ја напушти Spinnin’ Records, пред да потпише договор со Sony Music. Во 2017 година беше најавен како редовен диџеј во клубот Hï на Ибица. ', 'storage/events/video/1/', NULL, NULL, 'storage/event/thumbs/1/', 'ГАЛЕРИЈА НА ФЕСТИВАЛИ НА КОИ НАСТАПУВАЛ МАРТИН ГАРИКС\n', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=c358e36d556eb1682e52fdc07c6d3521&source=embed&photo%5fid=17581994', 'Martin Garrix'),
(2, 'ГРИН БИЧ', 'Свен Ват (роден на 26 октомври 1964 година) е германски диџеј/продуцент и добитник на три награди за диџеј, чијашто кариера во областа на електронската музика трае повеќе од 30 години. Со синглот „Electrica Salsa”, кој го објави под алијасот OFF, ја започна својата кариера во 1986 година . Неговите фанови го нарекуваат “Папа Свен”, а Свен Ват го остави својот белег во музичката заедница како германска “поп – ѕвезда“ во деведесеттите години, водејќи два познати ноќни клубови во Германија и основајќи ја својата компанија Cocoon, којашто претставува агенција за резервации, издавачка куќа и место за организирање настани. Тој е препознатлив по тоа што ја негува андерграунд електронската музичка сцена, не само во Германија, туку и на Ибица, при што има своја ноќ на која настапува во Amnesia веќе четиринаесет години, а настапува и на афтер – парти забави на креативни локации низ островот. Свен Ват е главен поборник за винилот, при што користи само две плочи и еден миксер за неговите долги диџеј сетови, а неговиот најдолг сет е 30 часа.', 'storage/events/video/1/', NULL, NULL, 'storage/event/thumbs/2/', 'Green Beach Festival gallery', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=0fc66f82516143304b4c52cc5c2e0aea&source=embed&photo%5fid=16738061', 'Green Beach Festival'),
(3, 'АФРОЏЕК\n', 'Ник ван де Вол (роден на 9 септември 1987 година), познат под уметничкото име Афроџек, е холандски диџеј, продуцент и автор на ремикси. Во 2014 година го издаде својот деби албум Forget the World. Афроџек често се наоѓа во првите десет на DJ Mag листата на Топ 100 диџеи.', '', NULL, NULL, 'storage/event/thumbs/3/', 'Afrojack gallery', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=9228b676fcc44bacb58eb627faad48b6&source=embed&photo%5fid=16737902', 'Afrojack'),
(4, 'ХАРДВЕЛ\n', 'Роберт ван де Корпут (роден на 7 јануари 1988 година), којшто настапува под уметничкото име Хардвел, е холандски диџеј за биг рум хаус и електро хаус музика, продуцент и автор на ремикси. Тој беше изгласан за диџеј број 1 во светот на DJ Mag листата во 2013 година, и повторно во 2014 година. Во моментот тој е рангиран на 3 место на DJ Mag листата на Топ 100 диџеи за 2016 година. Хардвел е најмногу познат по своите сетови на големи музички фестивали, како што се Ultra Music Festival, Sunburn и Tomorrowland.\n\nХардвел за првпат стана препознатлив во 2009 година со неговиот неофицијален ремикс на песната „Show Me Love vs. Be“. Тој ја основа издавачката куќа Revealer Recordings во 2010 година, како и сопствена радио емисија и подкаст Hardwell On Air во 2011 година. Оттогаш има издадено седум албуми преку својата издавачка куќа, како и свој документарен филм.', '', NULL, NULL, 'storage/event/thumbs/4/', 'Hardvell gallery', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=e9069e71258417c826dddb77ae6ea988&source=embed&photo%5fid=16737794', 'Hardwell');

-- --------------------------------------------------------

--
-- Table structure for table `event_photos`
--

CREATE TABLE IF NOT EXISTS `event_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `event_photos`
--

INSERT INTO `event_photos` (`id`, `photo`, `event_id`, `created_at`, `updated_at`) VALUES
(1, 'storage/event/gallery/1/', 1, NULL, NULL),
(2, 'storage/event/gallery/2/', 1, NULL, NULL),
(3, 'storage/event/gallery/3/', 1, NULL, NULL),
(4, 'storage/event/gallery/4/', 2, NULL, NULL),
(5, 'storage/event/gallery/5/', 3, NULL, NULL),
(6, 'storage/event/gallery/6/', 1, NULL, NULL),
(7, 'storage/event/gallery/7/', 3, NULL, NULL),
(8, 'storage/event/gallery/8/', 4, NULL, NULL),
(9, 'storage/event/gallery/9/', 5, NULL, NULL),
(10, 'storage/event/gallery/10/', 3, NULL, NULL),
(11, 'storage/event/gallery/11/', 5, NULL, NULL),
(12, 'storage/event/gallery/12/', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_videos`
--

CREATE TABLE IF NOT EXISTS `event_videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `video` int(11) NOT NULL,
  `event_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `game_id` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `user_id`, `score`, `level`, `game_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, 1, 'acoustica', '2017-06-27 23:01:07', '2017-06-27 23:01:07'),
(2, 11, 2000, 1, 'acoustica', '2017-06-27 23:01:07', '2017-06-27 23:01:07'),
(3, 1, 1500, 1, 'acoustica', '2017-06-27 23:01:07', '2017-06-27 23:01:07'),
(4, 19, 2000, 1, 'selector', '2017-06-27 23:01:07', '2017-06-27 23:01:07'),
(5, 1, 3612, 0, 'freequencies', '2017-06-27 23:36:26', '2017-06-27 23:36:26'),
(6, 19, 4578, 0, 'freequencies', '2017-06-28 05:57:58', '2017-06-28 05:57:58'),
(7, 19, 4323, 0, 'freequencies', '2017-06-28 05:59:13', '2017-06-28 05:59:13'),
(8, 11, 4914, 0, 'acoustica', '2017-06-28 13:45:22', '2017-06-28 13:45:22'),
(9, 11, 5123, 0, 'acoustica', '2017-06-29 08:54:49', '2017-06-29 08:54:49'),
(10, 11, 4974, 1, 'acoustica', '2017-06-29 09:00:52', '2017-06-29 09:00:52'),
(11, 11, 4826, 0, 'acoustica', '2017-06-29 09:28:19', '2017-06-29 09:28:19'),
(12, 11, 5077, 1, 'acoustica', '2017-06-29 09:30:56', '2017-06-29 09:30:56'),
(13, 11, 5096, 0, 'freequencies', '2017-06-29 09:42:59', '2017-06-29 09:42:59'),
(14, 11, 5187, 0, 'freequencies', '2017-06-29 09:44:18', '2017-06-29 09:44:18'),
(15, 11, 3768, 0, 'freequencies', '2017-06-29 09:45:29', '2017-06-29 09:45:29'),
(16, 11, 17192, 0, 'selector', '2017-06-29 09:55:28', '2017-06-29 09:55:28'),
(17, 11, 9601, 1, 'selector', '2017-06-29 09:58:25', '2017-06-29 09:58:25'),
(18, 11, 31771, 2, 'selector', '2017-06-29 10:01:00', '2017-06-29 10:01:00'),
(19, 11, 3376, 0, 'freequencies', '2017-07-03 07:54:24', '2017-07-03 07:54:24'),
(20, 11, 3279, 0, 'freequencies', '2017-07-03 07:55:40', '2017-07-03 07:55:40'),
(21, 11, 3660, 0, 'freequencies', '2017-07-03 07:56:49', '2017-07-03 07:56:49'),
(22, 11, 2569, 0, 'selector', '2017-07-03 13:45:56', '2017-07-03 13:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `giants`
--

CREATE TABLE IF NOT EXISTS `giants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `giantThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `giants`
--

INSERT INTO `giants` (`id`, `description`, `title`, `program_id`, `created_at`, `updated_at`, `giantThumb`, `name`, `lastname`) VALUES
(1, 'Од 1995 овие Исландски џинови на звукот\nги загреваат клубовите ширум светот со нивниот \nтрип хоп електронски микс, техно и хаус музика. \nФормирани како филмски колектив, тие до денешен ден се доследни на нивните корени користејќи уметност и технологија за да креираат уникатен микс од звук и слика', 'John Smith', 1, NULL, NULL, 'storage/giants/1/thumb.jpg', 'GUS', 'GUS'),
(2, 'Овие двајца руси одамна ја препознаа моќта на светлината, и денес претставуваат светски наградуван интерактивен медиски колектив. Тие себе си се нарекуваат магионичари кои ја користат светлината како своја магична алатка. 3Д мапингот и перформансот во живо ги трансформираа досадните градски пејзажи во незаборавни и неверојатни искуства. Нивните спектакуларни перформанси до денес воодушевија неверојатен број на луѓе ширум светот.   \n', 'Smith John', 1, NULL, NULL, 'storage/giants/2/thumb.jpg', 'SILA ', 'SVETA'),
(3, 'Кулинарските алхемичари на модерното време Bompass&Parr можат едноставно да бидат опишани како “единствени”. Од самите почетоци како неконвенционални експерти за производи од желе, тие го проширија своето портфолио на инсталации базирани на вкус, и денес своите неверојатни искуства ги споделуваат со целиот свет. Мешањето вкусови, методологии и медиуми им помогна успешно да ја трансформираат визијата во реалност.  \n', '', 1, NULL, NULL, 'storage/giants/3/thumb.jpg', 'BOMPAS & ', 'PARR'),
(4, 'Давид Муалем ги стави своите години искуство и љубовта кон музиката во функција на развивање на музичката заедница во неговиот роден град Минхен. Ако го прашате Давид кој е рецептот за успехот на неговиот клуб, тој ќе ви даде едноставен одговор: мојата страственост.  \n', '', 5, NULL, NULL, 'storage/giants/4/thumb.jpg', 'DAVID', 'MUALLEM'),
(5, 'Mарк Ернестус  е синоним за техно музиката. За речиси три децении направи речиси неспоредлив придонес за музиката, преку неговата работа како продуцент, сопственик на продавница за плочи, сопственик на студио  и клинички автор. Ернестус изгради уникатна кариера на љубов кон музичките записи. И тоа нема да запре во догледно време.\n', '', 2, NULL, NULL, 'storage/giants/5/thumb.jpg', 'MARK', 'ERNESTUS'),
(6, 'Технологијата за звучници создадена од Тony Andrews и неговиот партнер John Newsham се синоними за свеж и силен звук до степен кој не е достигнат од ниту еден друг аудио бренд.... Andrews останува опсесивен како и секогаш околу слушањето на музиката и развивањето на нови технологии врз основа на увидите кои му  биле дадени како и дотогаш.\n', '', 2, NULL, NULL, 'storage/giants/6/thumb.jpg', 'TONY', 'ANDREWS'),
(7, 'Интернационална поп икона и извршен директор на „Drink QT”, откриена од дискографската  куќа „PC Music“, базирана во Лондон, Исто како и нејзиниот вокал, QT е целосен  „дигитален предлог”.\n', '', 3, NULL, NULL, 'storage/giants/7/thumb.jpg', 'QT', ''),
(8, 'Како музичар, неговата класична обука одиграла голема улога во неговиот  постојан развој како артист и без сомнение ја оформила неговата способност да  го усоврши возвишениот интензитет и комплексноста, која преовладува во неговата денешна електронска музика.\n', '', 3, NULL, NULL, 'storage/giants/8/thumb.jpg', 'FALTY', 'DL'),
(9, 'Неговата страст кон музиката започнала на рана возраст. Започнал како Dj на тринаесет години и набрзо  започнал да ги врти неговите траки на пиратско радио и да ги пушта по ноќните клубови низ Лондон.\n', '', 3, NULL, NULL, 'storage/giants/9/thumb.jpg', 'DJ', 'ONEMAN'),
(10, 'Продуцент на електронска музика и шеф на Klammklang Records  чиј заштитен знак е да биде специјализирана за различни видови музика.  Реонот од кај што доаѓа е  повеќе познат по природните ресурси и огромните пространства отколку по електронската музика. Стас својата креативност  ја катализира во Сибир.', '', 3, NULL, NULL, 'storage/giants/10/thumb.jpg', 'HMOT', ''),
(11, 'Мулти–инструменталист, композитор, диригент, продуцент, директор на музички фестивали, член на Македонскиот филхармониски оркестар, автор на музика за филм и театар, оркестратор. Да, говориме за истото лице. Од сите аспекти на неговата работа, во прв план доаѓа неговото индивидуално и креативно искажување. Еден од водечките современи музичари во Македонија и регионот кој стекнува и светска репутација. Тој е глобално успешен и нашиот локален Џин на звукот. ', '', 2, NULL, NULL, 'storage/giants/11/thumb.jpg', 'Dzijan ', 'Emin'),
(12, 'Зад неговата стручност стојат петнаесетте години создавање и мешање коктели. Од креирањето на првиот македонски авторски коктел – Белегзија, до отворањето на првиот Бар за миксологија во земјата, тој е вистински револуционер во светот на креативните вкусови. Кога ја создава својата пијачка тој не само што ги одбегнува сите правила, тој посветува внимание на сите аспекти – изгледот на коктелите, аромата, текстурата на чашите во кои ги послужува коктелите. Овие работи го прават вистински Џин на вкусот. ', '', 3, NULL, NULL, 'storage/giants/12/thumb.jpg', 'Филип ', 'Арнаудов');

-- --------------------------------------------------------

--
-- Table structure for table `giant_blogs`
--

CREATE TABLE IF NOT EXISTS `giant_blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `giant_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `episodeThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalLikes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog1deo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blog2deo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blog3deo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `unlock` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `giant_blogs`
--

INSERT INTO `giant_blogs` (`id`, `giant_id`, `description`, `title`, `episodeThumb`, `name`, `totalLikes`, `created_at`, `updated_at`, `type`, `blog1deo`, `blog2deo`, `blog3deo`, `unlock`) VALUES
(1, 11, 'Expressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg', 'Lorem', 'storage/giant_blogs/1/', '43', '555', '2017-05-05 22:00:00', '2017-06-05 16:47:28', 'giantBlog', ' vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportea vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intellega vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg', 'ressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot m', 'ressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot m', 'Will be available soon'),
(2, 50, 'Expressa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg', 'Lorem ipsum', 'storage/giant_blogs/2/', 'ddd', '553', '2017-03-31 22:00:00', '2017-06-24 21:14:10', 'giantBlog', 'ssa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cura vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intellega vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit; Ergo illi intelleg tantas regiones barbaror', 'ssa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbaror', 'ssa vero in iis aetatibus, quae iam confirmatae sunt. Et quod est munus, quod opus sapientiae? Quid, si etiam iucunda memoria est praeteritorum malorum? Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Cur tantas regiones barbaror', '');

-- --------------------------------------------------------

--
-- Table structure for table `giant_blog_photos`
--

CREATE TABLE IF NOT EXISTS `giant_blog_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `giant_blog_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `giant_blog_photos`
--

INSERT INTO `giant_blog_photos` (`id`, `giant_blog_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'storage/blog_photos/1/', NULL, NULL),
(2, 1, 'storage/blog_photos/2/', NULL, NULL),
(3, 1, 'storage/blog_photos/3/', NULL, NULL),
(4, 2, 'storage/blog_photos/4/', NULL, NULL),
(5, 2, 'storage/blog_photos/5/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giant_video_tasks`
--

CREATE TABLE IF NOT EXISTS `giant_video_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `giant_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `episodeThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalLikes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unlock` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `giant_video_tasks`
--

INSERT INTO `giant_video_tasks` (`id`, `giant_id`, `description`, `title`, `episodeThumb`, `name`, `totalLikes`, `created_at`, `updated_at`, `type`, `unlock`, `video`) VALUES
(1, 11, 'Ќе биде достапна наскоро\n', 'Задача од Џијан Емин\n', 'storage/giant_video_tasks/1/', 'sdds', '443', '2017-04-30 22:00:00', NULL, 'giantVideoTask', 'Will be available from August, 6th', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=e9069e71258417c826dddb77ae6ea988&source=embed&photo%5fid=16737794'),
(2, 12, 'Ќе биде достапна наскоро\n', 'Задача од Филип Арнаудов\n', 'storage/giant_video_tasks/2/', 'dfsd', '654', '2017-05-03 22:00:00', '2017-06-05 19:32:04', 'giantVideoTask', '', '//neulandtv-serbia.videomarketingplatform.co/v.ihtml/player.html?token=eac9c0b2970eaffc8163edd1647885ea&source=embed&photo%5fid=17507274 ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_30_111338_create_programs_table', 1),
(4, '2017_05_30_113739_create_giants_table', 2),
(5, '2017_05_30_114203_create_series_table', 3),
(6, '2017_05_30_114411_create_episodes_table', 4),
(7, '2017_05_30_123418_create_giant_video_tasks_table', 5),
(8, '2017_05_30_123857_create_giant_blogs_table', 6),
(9, '2017_05_30_154511_change_episode', 7),
(10, '2017_05_31_150256_change_program_migration', 8),
(11, '2017_05_31_212331_change_giant_table', 9),
(12, '2017_05_31_223553_change_episodes_table', 10),
(13, '2017_05_31_223637_change_giantBlog_table', 10),
(14, '2017_05_31_223806_change_giantVideoTasks_table', 10),
(15, '2017_06_01_122244_change_giantBlog', 11),
(16, '2017_06_01_130527_create_giant_blog_photos_table', 12),
(17, '2017_06_01_162653_change_program', 13),
(18, '2017_06_01_163540_change1_program', 14),
(19, '2017_06_01_193232_change3_program', 15),
(20, '2017_06_01_193710_change_episode1', 16),
(21, '2017_06_02_122305_create_user_follow_programs_table', 17),
(22, '2017_06_03_094538_create_user_watch_laters_table', 18),
(23, '2017_06_03_200847_change3Episode', 19),
(24, '2017_06_04_100912_create_user_likes_table', 20),
(25, '2017_06_04_211723_episode_total_views', 21),
(26, '2017_06_06_005359_userRemember', 22),
(27, '2017_06_06_083051_create_preferences_table', 23),
(28, '2017_06_06_202519_editUser', 23),
(29, '2017_06_08_000519_program_locked', 24),
(30, '2017_06_10_195111_user_points', 25),
(31, '2017_06_10_205007_user_login_points', 26),
(32, '2017_06_10_210143_modify_login_columns', 27),
(33, '2017_06_10_210655_login_points', 28),
(34, '2017_06_11_192955_create_comments_table', 29),
(35, '2017_06_11_193421_create_replies_table', 30),
(36, '2017_06_11_193717_comment_addDescription', 31),
(37, '2017_06_11_234029_user_picture', 32),
(38, '2017_06_11_235610_create_contacts_table', 33),
(39, '2017_06_12_001924_user_avatar', 34),
(40, '2017_06_12_200938_subject_contact', 35),
(41, '2017_06_13_154913_preference_change', 36),
(42, '2017_06_13_203344_episodes_unlocked', 36),
(43, '2017_06_13_224656_data_episode', 37),
(44, '2017_06_15_191802_blog_unlock', 38),
(45, '2017_06_15_192704_video_task_unlock', 39),
(46, '2017_06_25_002014_create_events_table', 40),
(47, '2017_06_25_003616_create_event_photos_table', 41),
(48, '2017_06_25_003812_create_event_videos_table', 41),
(49, '2017_06_25_122955_create_user_experiences_table', 42),
(50, '2017_06_25_125409_create_user_responds_table', 43),
(51, '2017_06_25_140959_event_thumb', 44),
(52, '2017_06_25_204806_event_gall_title', 45),
(53, '2017_06_25_205625_en_event_gall_title', 46),
(54, '2017_06_25_210233_event_video_inv', 47),
(55, '2017_06_25_210337_en_event_video_inv', 47),
(56, '2017_06_25_220251_giant_videotsk_videol', 48),
(57, '2017_06_25_220349_en_giant_videotsk_videol', 48),
(58, '2017_06_27_222306_create_games_table', 49),
(59, '2017_06_30_200904_program_trailer_src', 49),
(60, '2017_06_30_201153_en_program_trailer_src', 49);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE IF NOT EXISTS `preferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `preference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`id`, `created_at`, `updated_at`, `user_id`, `preference`) VALUES
(6, '2017-06-13 19:08:01', '2017-06-13 19:08:01', 1, 'vision'),
(7, '2017-06-13 19:08:02', '2017-06-13 19:08:02', 1, 'taste'),
(19, '2017-06-24 23:02:22', '2017-06-24 23:02:22', 3, 'vision'),
(27, '2017-06-29 19:17:03', '2017-06-29 19:17:03', 2, 'sound'),
(28, '2017-06-29 19:17:18', '2017-06-29 19:17:18', 2, 'vision');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `programThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smallTxt` longtext COLLATE utf8_unicode_ci NOT NULL,
  `unlock` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `description`, `title`, `programThumb`, `created_at`, `updated_at`, `thumbDescription`, `thumbTitle`, `logo`, `smallTxt`, `unlock`, `trailer`) VALUES
(1, 'Mysterium настанот е една од многуте дестинации во Neuland. Експлозија на сетилата во една вечер која е ко-креирана со помош на луѓе од целиот свет.\n', 'Mysterium', 'storage/programs/1/', '2017-05-01 22:00:00', NULL, 'ДАЛИ СТЕ ПОДГОТВЕНИ ЗА <span class="red">НЕПОЗНАТОТО</span>', 'ДАЛИ СТЕ СПРЕМНИ ДА ЗАЧЕКОРИТЕ ВО <span class="red">НЕПОЗНАТОТО</span>', 'storage/logo_programs/1/', '<p><span class="first_character">C</span>Следете ги нашите џинови на нивната мисија во која што ги комбинираат нивните креативни сили за да го редефинираат звукот, вкусот и визијата и креираат мулти сетилно, извонредно искуство. \n<p>\nMysterium настанот е една од многуте дестинации во Neuland. Експлозија на сетилата во една вечер која е ко-креирана со помош на луѓе од целиот свет.</p>\n', '1', '//neulandtv-serbia.videomarketingplatform.co/16214539.ihtml/player.html?token=aecd1c71b38461ba9098b965cd859f66&source=embed&photo%5fid=16737914&autoPlay=1'),
(2, 'Мајсторство на звукот, уметност зад секое едно дело и приказна за оние кои го посветија својот живот на тоа.\n', 'Free the bass', 'storage/programs/2/', '2017-05-30 22:00:00', '2017-06-20 16:25:56', 'ЌЕ ЈА ОСЛОБОДИТЕ ЛИ МУЗИКАТА?\n', 'ЌЕ ЈА ОСЛОБОДИТЕ ЛИ МУЗИКАТА?\n', 'storage/logo_programs/2/', '<p>\n<span class="first_character">O</span>слободете го Басот“ е приказна за „Мајсторството на звукот“, за занаетот позади секој ритам и за оние кои му го посветиле  животот на овој занает. Ова е брилијантен техничар, легенда на звукот чија  основна цел е создавање на врвен звучен систем. \n</p>\n<p>\n„Кога  човек ќе почне да управува со звукот онака како што посакува, тој звукот во мелодија го престорува, потоа музиката во танц ја преточува, со желба рајот од земјата да го  допира. Музиката подразбира единство, љубов, среќа, радост и семејство. Без разлика од каде доаѓаш....музиката нè спојува сите”.\n</p>\n<p>\nОва е приказна за човекот во потрага да го однесе еден чекор понапред кон она што досега се знае за создавањето, контролата и проекцијата на бас звуците. Ова е патувањето на  Марк Ернестус за исполнување на неговиот сон.\n</p>', '1', '//neulandtv-serbia.videomarketingplatform.co/16214539.ihtml/player.html?token=61d4c0081206872b1ce48016b7d717e5&source=embed&photo%5fid=16662922&autoPlay=1'),
(3, 'Четири музичари во постојана потрага по емоции кои ја вкусуваат секоја полна лажица од креативниот процес', 'mixitup', 'storage/programs/3/', NULL, '2017-06-22 16:50:16', 'Каков вкус има музиката?\n', 'Каков вкус има музиката?\n', 'storage/logo_programs/3/', '\n<span class="first_character">M</span>\nMix It Up е приказна за четири музичари кои се во постојана потрага по инспирација за создавање на креативниот процес. Тие ќе го споделат нивното патување со водичите од светот на вкусот кои се големи мајстори  и кои храната ја претвораат во уметност, а музиката во животен стил.<br><br>\n\n<p>Нивните искуства ќе се совпаднат, иако  тие се илјадници километри оддалечени. „Студот, морето, мразот,шумите и пазарите. Ќе ги бараме местата каде што музичарите  и  готвачите се инспирираат за да ги пронајдат  најдобрите состојки и да ги создадат своите дела со длабок  и целосен „призвук”.</p>\n', '1', '//neulandtv-serbia.videomarketingplatform.co/16214539.ihtml/player.html?token=9d2211357f259405c6312fcb054403b0&source=embed&photo%5fid=16737751&autoPlay=1'),
(4, 'НАСКОРО | Придружете им се на Џиновите на едно ново патување на создавањето, додека градат нешто што е надвор од можностите на една личност.\n', 'infinium', 'storage/programs/4/', NULL, NULL, 'ДАЛИ СТЕ ПОДГОТВЕНИ ЗА НЕПОЗНАТОТО?\n', 'ДАЛИ СТЕ ПОДГОТВЕНИ ЗА НЕПОЗНАТОТО?\n', 'storage/logo_programs/4/', '', 'Ќе биде достапно наскоро\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `comments_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `allowed` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `is_reply` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `description`, `comments_id`, `created_at`, `updated_at`, `allowed`, `type`, `is_reply`) VALUES
(1, 1, 'sdsdsdssdd', 1, '2017-06-11 19:21:06', '2017-06-11 19:21:06', 1, '', 1),
(2, 1, 'dsdd', 1, '2017-06-11 19:44:33', '2017-06-11 19:44:33', 1, '', 1),
(3, 1, 'wwwwwww', 1, '2017-06-11 19:48:04', '2017-06-11 19:48:04', 1, '', 1),
(4, 1, 'cdscsc', 1, '2017-06-11 19:58:59', '2017-06-11 19:58:59', 1, '', 1),
(5, 1, 'zaz', 4, '2017-06-11 19:59:19', '2017-06-11 19:59:19', 1, '', 1),
(6, 1, 'xxxx', 2, '2017-06-11 20:01:21', '2017-06-11 20:01:21', 1, '', 1),
(7, 1, 'yeste', 5, '2017-06-11 20:17:47', '2017-06-11 20:17:47', 1, '', 1),
(8, 1, 'yeste yeste', 6, '2017-06-11 20:18:18', '2017-06-11 20:18:18', 1, '', 1),
(9, 1, 'zazazazazazaza', 5, '2017-06-11 21:11:10', '2017-06-11 21:11:10', 1, '', 1),
(10, 1, 'x', 7, '2017-06-11 21:11:25', '2017-06-11 21:11:25', 1, '', 1),
(11, 1, 'qsqsqs', 7, '2017-06-11 21:11:57', '2017-06-11 21:11:57', 1, '', 1),
(12, 1, 'vodo', 8, '2017-06-11 21:21:17', '2017-06-11 21:21:17', 1, '', 1),
(13, 1, NULL, 12, '2017-06-12 17:07:01', '2017-06-12 17:07:01', 1, '', 1),
(14, 1, NULL, 12, '2017-06-12 17:07:17', '2017-06-12 17:07:17', 1, '', 1),
(15, 1, NULL, 12, '2017-06-12 17:07:31', '2017-06-12 17:07:31', 1, '', 1),
(16, 2, NULL, 1, '2017-06-12 18:19:45', '2017-06-12 18:19:45', 1, '', 1),
(17, 2, NULL, 2, '2017-06-12 18:19:55', '2017-06-12 18:19:55', 1, '', 1),
(18, 2, NULL, 13, '2017-06-12 18:21:40', '2017-06-12 18:21:40', 1, '', 1),
(21, 1, 'test', 14, '2017-06-12 21:01:51', '2017-06-12 21:01:51', 1, '', 1),
(22, 1, 'sub', 16, '2017-06-12 21:06:50', '2017-06-12 21:06:50', 1, '', 1),
(23, 3, 'rep1', 21, '2017-06-13 18:41:11', '2017-06-13 18:41:11', 1, '', 1),
(24, 3, 'rep2', 22, '2017-06-13 18:41:42', '2017-06-13 18:41:42', 1, '', 1),
(25, 3, 'rep2', 21, '2017-06-13 18:42:40', '2017-06-13 18:42:40', 1, '', 1),
(26, 3, 'reply1', 23, '2017-06-13 18:45:16', '2017-06-13 18:45:16', 1, '', 1),
(27, 3, 'reply2', 24, '2017-06-13 18:45:43', '2017-06-13 18:45:43', 1, '', 1),
(30, 1, 'rep1', 27, '2017-06-15 18:08:54', '2017-06-15 18:08:54', 1, '', 1),
(32, 2, 'yes yesy', 29, '2017-06-15 18:13:23', '2017-06-15 18:13:23', 1, '', 1),
(33, 1, 'yes', 29, '2017-06-15 18:31:41', '2017-06-15 18:31:41', 1, '', 1),
(34, 1, 'awawaw', 30, '2018-01-29 14:56:46', '2018-01-29 14:56:46', 1, '', 1),
(35, 1, 'sdwdwqdq', 31, '2018-02-02 20:49:58', '2018-02-02 20:49:58', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program_id` int(11) NOT NULL,
  `serieThumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `description`, `title`, `program_id`, `serieThumb`, `created_at`, `updated_at`) VALUES
(1, 'otius Ennius: Nimium boni est, cui nihil est mali. At ille non pertimuit saneque fidenter: Istis quidem ipsis verbis, inquit; Quicquid porro animo cernimus, id omne oritur a sensibus; Ego quoque, inquit, didicerim libentius si quid attuleris, quam te reprehenderim. Estne, quaeso, inquam, sitienti in bibendo', 'King', 1, 'sdfdfsd', NULL, NULL),
(2, 'bus efficiuntur voluptates, eae non sunt in potestate sapientis. Erat enim Polemonis. Ergo opifex plus sibi proponet ad formarum quam civis excellens ad factorum pulchritudinem? Sin autem eos non probabat, quid attinuit cum iis, quibuscum re concinebat, verbis discrepare?\r\n\r\nDicet pro me ipsa virtus nec dubitabit isti vestro beato M. Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum e', 'Drnina bez filtera', 2, 'rwtwwr', NULL, NULL),
(3, 'drina', '', 3, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('m','f') COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstTime` int(11) NOT NULL,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `firstLogin` datetime DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `picture` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `gender`, `birthday`, `created_at`, `updated_at`, `remember_token`, `firstTime`, `nickname`, `points`, `firstLogin`, `lastLogin`, `picture`, `avatar`) VALUES
(1, '123456', 'm', '2017-05-01', NULL, '2018-02-19 12:52:36', 'zxTOV22g8bDZ0RqPlqIAHG2cj2UAeTWP8oYn6iMDTLl5XAtQ0hB25M7oH6Kq', 1, 'JohnColtrane', 2460, '2017-07-09 21:59:35', '2017-07-09 21:59:35', 0, '25.png'),
(2, '123123', 'm', '0000-00-00', NULL, '2018-12-02 16:36:05', 'rZKXOcOi5QSiOxUvk8J3vP2JAkEeVyU6jL1Et2hU9iRcVYQTfBKeILPtIeqn', 1, 'jane', 540, '2018-12-02 17:34:32', '2018-12-02 17:34:32', 0, '06.png'),
(3, '321321', 'f', '0000-00-00', NULL, '2017-07-02 07:39:32', 'pZGx8TJNX3efcUAYuVCSGfcOFbyeHOtCxeo0GTUYvjGF47SSqhpgvcqTxrTa', 1, 'Laura', 270, '2017-06-19 22:13:26', '2017-06-19 22:13:26', 1, '01.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_follow_programs`
--

CREATE TABLE IF NOT EXISTS `user_follow_programs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `program_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_follow_programs`
--

INSERT INTO `user_follow_programs` (`id`, `program_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 2, 3, '2017-06-23 20:17:14', '2017-06-23 20:17:14'),
(6, 2, 2, '2017-07-02 07:38:36', '2017-07-02 07:38:36'),
(7, 3, 2, '2017-07-02 07:43:40', '2017-07-02 07:43:40'),
(8, 2, 1, '2017-07-09 20:36:20', '2017-07-09 20:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_likes`
--

CREATE TABLE IF NOT EXISTS `user_likes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `user_likes`
--

INSERT INTO `user_likes` (`id`, `user_id`, `type`, `video_id`, `created_at`, `updated_at`) VALUES
(15, 1, 'giantBlog', 2, '2017-06-05 16:47:23', '2017-06-05 16:47:23'),
(16, 1, 'giantBlog', 1, '2017-06-05 16:47:28', '2017-06-05 16:47:28'),
(23, 1, 'episode', 5, '2017-06-13 19:30:34', '2017-06-13 19:30:34'),
(24, 1, 'episode', 12, '2017-06-13 23:20:59', '2017-06-13 23:20:59'),
(25, 1, 'episode', 9, '2017-06-13 23:22:13', '2017-06-13 23:22:13'),
(28, 1, 'episode', 6, '2017-06-14 16:09:04', '2017-06-14 16:09:04'),
(29, 1, 'episode', 7, '2017-06-15 19:56:53', '2017-06-15 19:56:53'),
(30, 1, 'episode', 2, '2017-06-15 20:05:46', '2017-06-15 20:05:46'),
(32, 1, 'episode', 34, '2017-06-17 11:16:55', '2017-06-17 11:16:55'),
(33, 3, 'giantBlog', 2, '2017-06-24 21:14:10', '2017-06-24 21:14:10'),
(34, 3, 'episode', 5, '2017-06-29 15:41:39', '2017-06-29 15:41:39'),
(35, 3, 'episode', 4, '2017-06-29 15:41:43', '2017-06-29 15:41:43'),
(36, 3, 'episode', 9, '2017-06-29 15:41:56', '2017-06-29 15:41:56'),
(37, 1, 'episode', 4, '2017-06-29 15:53:09', '2017-06-29 15:53:09'),
(38, 1, 'episode', 1, '2017-06-29 15:53:24', '2017-06-29 15:53:24'),
(40, 2, 'episode', 2, '2017-06-29 16:21:51', '2017-06-29 16:21:51'),
(41, 2, 'episode', 3, '2017-06-29 17:26:42', '2017-06-29 17:26:42'),
(43, 2, 'episode', 1, '2017-07-04 16:55:39', '2017-07-04 16:55:39'),
(44, 2, 'episode', 14, '2017-07-07 21:00:41', '2017-07-07 21:00:41'),
(45, 1, 'episode', 35, '2018-02-02 20:49:06', '2018-02-02 20:49:06'),
(46, 1, 'episode', 11, '2018-02-02 20:49:13', '2018-02-02 20:49:13'),
(47, 1, 'episode', 3, '2018-02-19 12:52:06', '2018-02-19 12:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_responds`
--

CREATE TABLE IF NOT EXISTS `user_responds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `giant_video_task_id` int(11) NOT NULL,
  `userRespondPhoto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `userRespondVideo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user_responds`
--

INSERT INTO `user_responds` (`id`, `user_id`, `giant_video_task_id`, `userRespondPhoto`, `description`, `userRespondVideo`, `allowed`, `created_at`, `updated_at`) VALUES
(21, 3, 1, '', 'jjjjj', '', 1, '2017-06-25 22:42:30', '2017-06-25 22:42:30'),
(23, 3, 1, '', 'jjjjj', '', 1, '2017-06-25 22:54:51', '2017-06-25 22:54:51'),
(24, 3, 2, '', 'sada', '', 1, '2017-06-25 22:57:44', '2017-06-25 22:57:44'),
(25, 3, 1, '', 'aaaaa', '', 1, '2017-06-25 23:02:51', '2017-06-25 23:02:51'),
(26, 3, 1, '', 'bbbb', '', 1, '2017-06-25 23:04:04', '2017-06-25 23:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_watch_laters`
--

CREATE TABLE IF NOT EXISTS `user_watch_laters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_watch_laters`
--

INSERT INTO `user_watch_laters` (`id`, `user_id`, `type`, `video_id`, `created_at`, `updated_at`) VALUES
(4, 1, 'episode', 3, '2017-06-05 17:31:43', '2017-06-05 17:31:43'),
(5, 1, 'episode', 2, '2017-06-05 17:31:44', '2017-06-05 17:31:44'),
(6, 1, 'giantBlog', 2, '2017-06-05 17:31:45', '2017-06-05 17:31:45'),
(7, 1, 'episode', 1, '2017-06-06 13:15:05', '2017-06-06 13:15:05'),
(8, 2, 'giantBlog', 2, '2017-06-12 17:19:49', '2017-06-12 17:19:49'),
(9, 2, 'episode', 1, '2017-06-12 18:27:23', '2017-06-12 18:27:23'),
(10, 1, 'episode', 12, '2017-06-13 23:20:58', '2017-06-13 23:20:58'),
(11, 1, 'episode', 14, '2018-01-29 14:55:09', '2018-01-29 14:55:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
