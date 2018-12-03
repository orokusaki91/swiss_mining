/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100132
Source Host           : localhost:3306
Source Database       : swiss

Target Server Type    : MYSQL
Target Server Version : 100132
File Encoding         : 65001

Date: 2018-12-03 15:26:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_11_29_122701_create_about_us_table', '1');
INSERT INTO `migrations` VALUES ('4', '2018_11_30_161618_create_mission_vision_table', '2');

-- ----------------------------
-- Table structure for mission_vision
-- ----------------------------
DROP TABLE IF EXISTS `mission_vision`;
CREATE TABLE `mission_vision` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_de` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_it` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_es` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of mission_vision
-- ----------------------------
INSERT INTO `mission_vision` VALUES ('1', '01', 'We want to make the blockchain technology suitable for mass use. For example, crypto currencies like Bitcoin are still too complicated to handle today and not yet suitable for everyone. We are involved in the development of software solutions to automate this and to simplify the use of crypto currencies.', 'Wir möchten die Blockchain Technologie massentauglich machen. Zum Beispiel\r\n Kryptowährungen wie Bitcoin, sind heute in der Handhabung noch viel zu kompliziert und \r\n noch nicht für Jeden geeignet. Wir sind an der Entwicklung von Software Lösungen beteiligt, um diesen Umstand zu automatisieren und den Gebrauch von Kryptowährungen zu   \r\n vereinfachen.', 'Nous voulons adapter la technologie de la blockchain au grand public. Par exemple, les crypto-monnaies telles que Bitcoin sont encore trop compliquées à gérer et ne conviennent pas encore à tout le monde. Nous participons au développement de solutions logicielles pour automatiser cela et simplifier l\'utilisation des crypto-monnaies.', 'Vogliamo rendere la tecnologia blockchain e adattarla a un uso di massa. Le cripto valute come il Bitcoin sono oggi ancora troppo complesse da gestire e non sono ancora adatte ad un utilizzo su larga scala. Siamo impegnati nello sviluppo di soluzioni software per automatizzare e semplificare l\'uso di cripto valute.', 'Nos gustaría hacer que la tecnología Blockchain sea adecuada para la masa. Por ejemplo, las criptomonedas como Bitcoin son todavía demasiado complicadas de manejar hoy en día y aún no son adecuadas para todos. Estamos involucrados en el desarrollo de soluciones de software para automatizar esto y para simplificar el uso de las criptomonedas.', '0000-00-00 00:00:00', '2018-12-03 14:11:29');
INSERT INTO `mission_vision` VALUES ('2', '02', 'Artificial intelligence also called AI is a topic that accompanies us all, everyday, and will encounter much more in the future. That\'s why Swissmining also deals with the provision of storage capacity and computing power for artificial intelligence so-called data mining. Swissmining already operates today, the largest mining farm in Riga, Latvia.', 'Künstliche Intelligenz auch KI genannt, (engl. AI = Artificial Intelligence) ist ein Thema welches uns alle, jeden Tag, bereits begleitet und in Zukunft noch viel mehr begegnen wird. Darum beschäftigt sich die Swissmining auch mit der Bereitstellung von Speicherkapazität und Rechenleistung für künstliche Intelligenz so genanntes Datamining. Swissmining betreibt bereits heute, die grösste Miningfarm in Riga, Lettland.', 'L\'intelligence artificielle, également appelée IA (anglais: AI = artificial intelligence), est un sujet qui nous accompagne tous, chaque jour, et nous en rencontrerons beaucoup plus dans le futur. C\'est pourquoi Swissmining s\'occupe également de la mise à disposition de capacité de stockage et de puissance de calcul pour ce que l\'on appelle l\'exploration de données par intelligence artificielle. Swissmining exploite déjà aujourd\'hui la plus grande ferme minière de Riga, en Lettonie.', 'L\'intelligenza artificiale chiamata anche AI è attualmente un argomento molto attuale che ci accompagna ogni giorno tutti e che in futuro affrontaremo molto piu maggiormente. Ecco perché Swissmining si occupa anche della fornitura di capacità di archiviazione e potenza di calcolo per l\'intelligenza artificiale, il cosiddetto data mining. Swissmining opera già oggi nel settore e attualmente è la più grande azienda di mining di Riga, in Lettonia.', 'La inteligencia artificial también llamada IA (inglés: AI = artificial intelligence) es un tema que nos acompaña a todos, todos los días, y nos encontraremos con muchos más en el futuro. Es por eso que Swissmining también se ocupa de la provisión de capacidad de almacenamiento y potencia de cómputo para la inteligencia artificial denominada minería de datos. Swissmining ya opera la granja minera más grande de Riga, Letonia.', null, '2018-12-03 14:13:34');
INSERT INTO `mission_vision` VALUES ('3', '03', 'Swissmining offers secured investments through AAA stateguarantees. Each investment in Swissmining isthus 100% hedgedagainstloss.', 'Swissmining bietet abgesicherte Investments durch AAA Staatsgarantien. \r\n Jedes Investment bei der Swissmining ist somit zu 100% gegen Verlust abgesichert.', 'Swissmining propose des investissements sécurisés par le biais de garanties d\'État AAA. Chaque investissement dans Swissmining est ainsi couvert à 100% contre la perte.', 'Swissmining offre investimenti garantiti tramite garanzie statali AAA. Pertanto, ogni investimento in Swissmining è coperto al 100% da eventuali perdite.', 'Swissmining ofrece inversiones garantizadas a través de garantías estatales AAA.\r\nCada inversión en Swissmining está por lo tanto, cubierta al 100% contra pérdidas.', null, '2018-12-03 14:14:27');
INSERT INTO `mission_vision` VALUES ('4', '04', 'We offer secured investments with good return opportunities through mining and arbitrage trading, based on our own developed algorithm. Arbitrage means when the software buys a particular crypto currency on one crypto stock market and at the same time sell sit on another stock exchange at a higher price. This process has been completely automated by our software developers.', 'Wir bieten gesicherte Anlagen mit guter Renditemöglichkeit durch Mining und Arbitrage-Trading, basierend auf unserem eigenen Algorithmus. Arbitrage bedeutet, wenn die Software eine bestimmte Kryptowährung an einer Krypto-Börse kauft und sie gleichzeitig an einer anderen Börse zu einem höheren Preis verkauft. Dieser Prozess wurde von unseren Software-Entwicklern vollständig automatisiert', 'Nous proposons des investissements sécurisés offrant de bonnes opportunités de rendement via le négoce minier et l\'arbitrage, basés sur notre propre algorithme développé. Arbitrage signifie que le logiciel achète une crypto-monnaie particulière sur un marché boursier crypté tout en la vendant sur une autre bourse à un prix plus élevé. Ce processus a été complètement automatisé par nos développeurs de logiciels.', 'Offriamo investimenti garantiti con buone opportunità di rendimento attraverso il mining e trading arbitrato, e il tutto si basa su un apposito algoritmo da noi sviluppato. Arbitrato significa che il software acquista una particolare cripto valuta su una cripto-borsa e allo stesso tempo la vende su un\'altra borsa a un prezzo più alto. Questo processo è stato completamente automatizzato dai nostri sviluppatori.', 'Ofrecemos inversiones seguras con buenas oportunidades de retorno a través de operaciones de extracción y arbitraje, basadas en nuestro propio algoritmo desarrollado. Arbitraje significa cuando el software compra una criptomoneda en particular en un mercado de valores criptográfico y al mismo tiempo lo vende en otra bolsa de valores a un precio más alto. Este proceso ha sido completamente automatizado por nuestros desarrolladores de software.', null, '2018-12-03 14:15:25');

-- ----------------------------
-- Table structure for newsletters
-- ----------------------------
DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE `newsletters` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of newsletters
-- ----------------------------
INSERT INTO `newsletters` VALUES ('2', 'a@a.com', '2018-12-03 12:45:22', '2018-12-03 12:45:22');

-- ----------------------------
-- Table structure for one_row_page
-- ----------------------------
DROP TABLE IF EXISTS `one_row_page`;
CREATE TABLE `one_row_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_de` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_it` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_es` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_de` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_it` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_es` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of one_row_page
-- ----------------------------
INSERT INTO `one_row_page` VALUES ('1', 'aboutUs', 'Header eng', 'Header de', 'Header fra', 'Header italy', 'Header es', '<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">We are a team with a great vision in blockchain technology, artificial intelligence and data mining.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">Swiss Mining Ltd was founded in 2018 by Andr&eacute; Kunz and R&amp;R Investment Ltd (Financial Consulting), represented by Nicole Gr&uuml;tter-Thurneysen, with the aim of making the blockchain technology associated with artificial intelligence and its possibilities accessible to the public.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"IT\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: IT;\">Swiss Mining Ltd is a London-registered company with a share capital of &euro; 20 million.</span></p>', '<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">Wir sind ein Team mit einer grossen Vision im Bereich Blockchain Technologie, k&uuml;nstlicher Intelligenz und Datamining.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">Die Swiss Mining Ltd wurde 2018 von Andr&eacute; Kunz und der R&amp;R Investment Ltd (Finance Consulting), vertreten durch Nicole Gr&uuml;tter-Thurneysen, gegr&uuml;ndet mit dem Ziel, die Blockchain Technologie verbunden mit k&uuml;nstlicher Intelligenz und deren M&ouml;glichkeiten, der Bev&ouml;lkerung zug&auml;nglich zu machen.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">Swiss Mining Ltd ist eine in London registrierte Firma, mit einem Aktienkapital von 20 Mio. Euro.</span></p>', '<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">Nous sommes une &eacute;quipe avec une grande vision de la technologie blockchain, de l\'intelligence artificielle et l\'exploration de donn&eacute;es (datamining).</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">Swiss Mining Ltd a &eacute;t&eacute; fond&eacute;e en 2018 par Andr&eacute; Kunz et le cabinet des conseil financier R&amp;R Investment Ltd, repr&eacute;sent&eacute;s par Nicole Gr&uuml;tter-Thurneysen, dans le but de rendre la Technologie de la blockchain associ&eacute;e &agrave; l\'intelligence artificielle et ses possibilit&eacute;s accessible au public.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"DE-CH\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: DE-CH;\">Swiss Mining Ltd est une soci&eacute;t&eacute; enregistr&eacute;e dans Londres avec un capital social de 20 millions d\'euros.</span></p>', '<p><span lang=\"IT\" style=\"font-size: 11.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: IT; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Siamo un team con una grande visione in tema di tecnologia blockchain, intelligenza artificiale e data mining.<br /><br />Swiss Mining Ltd &egrave; stata fondata nel 2018 da Andr&eacute; Kunz e R &amp; R Investment Ltd (Financial Consulting), rappresentata da Nicole Gr&uuml;tter-Thurneysen, con l\'obiettivo di rendere accessibile al pubblico la tecnologia blockchain associata all\'intelligenza artificiale con tutte le sue diverse possibilit&agrave; di applicazione.<br /><br />Swiss Mining Ltd &egrave; una societ&agrave; registrata con sede a Londra con un capitale sociale di 20 milioni di euro.</span></p>', '<p class=\"MsoNormal\"><span lang=\"IT\" style=\"font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: IT;\">Somos un equipo con una gran visi&oacute;n en tecnolog&iacute;a blockchain, inteligencia artificial y extracci&oacute;n de&nbsp;datos (datamining).</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"IT\" style=\"font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: IT;\">Swiss Mining Ltd fue fundada en 2018 por Andr&eacute; Kunz y R&amp;R Investment Ltd (consultor&iacute;a financiera), representada por Nicole Gr&uuml;tter-Thurneysen, con el objetivo de hacer que la tecnolog&iacute;a de blockchain asociada con la inteligencia artificial y sus posibilidades sean accesibles al p&uacute;blico.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"IT\" style=\"font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: IT;\">Swiss Mining Ltd es una empresa registrada en Londres con un capital social de 20 millones de euros.</span></p>', '', null, '2018-12-03 14:08:57');
INSERT INTO `one_row_page` VALUES ('2', 'service', null, null, null, null, null, '<p>proba</p>', '<p>aaaa</p>', '<p>aaa</p>', '<p>aaa</p>', '<p>aaa</p>', '', null, '2018-11-30 19:07:51');
INSERT INTO `one_row_page` VALUES ('3', 'solutions', 'Head eng', 'header de', 'header fra', 'header it', 'header es', '<p class=\"Standard\"><span class=\"Absatz-Standardschriftart\">Swissmining offers an investment with high profit opportunities at minimal risk through the <strong style=\"mso-bidi-font-weight: normal;\">insurance of the invested capital</strong>. We give everyone the opportunity to participate in the highly profitable market of crypto currencies by buying the investment plans we offer, starting at &euro; 250. </span><span class=\"Absatz-Standardschriftart\"><span style=\"mso-bidi-font-family: Calibri; mso-bidi-font-weight: bold;\">The profit and the capital contribution are paid monthly or at the end of the contractual term (depending on the chosen investment plan).</span></span><span class=\"Absatz-Standardschriftart\"> <span style=\"mso-bidi-font-weight: bold;\">Through various collaborations Swissmining is able to offer its customers an easy and secure way to earn extra money from two different sources, <strong>crypto-mining</strong> and <strong>crypto-trading</strong>.</span></span></p>', '<p class=\"Standard\"><span class=\"Absatz-Standardschriftart\">Swissmining bietet durch die <strong style=\"mso-bidi-font-weight: normal;\">Absicherung des investierten Kapitals</strong> eine Anlage mit hohen Gewinnchancen bei minimalem Risiko. Wir geben jedem die M&ouml;glichkeit, am hochprofitablen Markt f&uuml;r Kryptow&auml;hrungen teilzunehmen, mit dem Kauf der von uns angebotenen Investitionspl&auml;ne ab 250 &euro;. Der Gewinn und die Kapitaleinlage werden monatlich oder am Ende der vertraglichen Laufzeit (je nach Wahl des Investitionsplans) gezahlt. Durch verschiedene Kollaborationen kann Swissmining ihren Kunden eine einfache und sichere M&ouml;glichkeit bieten, zus&auml;tzliches Geld aus zwei verschiedenen Quellen zu verdienen: <strong style=\"mso-bidi-font-weight: normal;\">Krypto-Mining </strong>und<strong style=\"mso-bidi-font-weight: normal;\"> Krypto-Trading</strong>.</span></p>', '<p class=\"Standard\">Swissmining propose un investissement avec des possibilit&eacute;s de profit &eacute;lev&eacute;es et un risque minimal, gr&acirc;ce &agrave; <span class=\"Absatz-Standardschriftart\"><strong style=\"mso-bidi-font-weight: normal;\">l\'assurance du capital investi</strong></span>. Nous donnons &agrave; chacun la possibilit&eacute; de participer au march&eacute; tr&egrave;s rentable des monnaies cryptographiques en achetant les plans d\'investissement que nous proposons, &agrave; partir de 250 euro. Le b&eacute;n&eacute;fice et l\'apport en capital sont vers&eacute;s mensuellement ou &agrave; la fin de la p&eacute;riode contractuelle (selon le choix du plan d\'investissement). Gr&acirc;ce &agrave; diverses collaborations, Swissmining est en mesure d&rsquo;offrir &agrave; ses clients un moyen simple et s&eacute;curis&eacute; de gagner de l&rsquo;argent suppl&eacute;mentaire aupr&egrave;s de deux sources diff&eacute;rentes: <span class=\"Absatz-Standardschriftart\"><strong style=\"mso-bidi-font-weight: normal;\">crypto mining </strong></span>et<span class=\"Absatz-Standardschriftart\"><strong style=\"mso-bidi-font-weight: normal;\"> crypto trading</strong></span>.</p>', '<p class=\"MsoNormal\"><span class=\"Absatz-Standardschriftart\"><span lang=\"IT\" style=\"mso-bidi-font-weight: bold;\">Swissmining offre un investimento con opportunit&agrave; di profitto elevate a rischio minimo attraverso <strong>l\'assicurazione del capitale investito</strong>. Diamo a tutti l\'opportunit&agrave; di partecipare al mercato altamente redditizio delle criptovalute acquistando i piani di investimento che offriamo, a partire da &euro; 250. L\'utile e il contributo in conto capitale sono pagati mensilmente o alla fine del termine contrattuale (a seconda della scelta piano di investimento). Attraverso varie collaborazioni, Swissmining &egrave; in grado di offrire ai propri clienti un modo facile e sicuro per guadagnare denaro extra da due fonti diverse, <strong>criptazione </strong>e<strong> criptazione</strong>.</span></span></p>', '<p class=\"Standard\">Swissmining ofrece una inversi&oacute;n con altas oportunidades de ganancias con un riesgo m&iacute;nimo a trav&eacute;s del <span class=\"Absatz-Standardschriftart\"><strong style=\"mso-bidi-font-weight: normal;\">seguro del capital invertido</strong></span>. Brindamos a todos la oportunidad de participar en el mercado altamente rentable de las monedas criptogr&aacute;ficas comprando los planes de inversi&oacute;n que ofrecemos, a partir de 250 euros. El beneficio y la contribuci&oacute;n de capital se pagan mensualmente o al final del plazo contractual (dependiendo de la elecci&oacute;n del plan de inversi&oacute;n). A trav&eacute;s de diversas colaboraciones, Swissmining puede ofrecer a sus clientes una manera f&aacute;cil y segura de ganar dinero extra de dos fuentes diferentes, <span class=\"Absatz-Standardschriftart\"><strong style=\"mso-bidi-font-weight: normal;\">crypto mining </strong></span>y<span class=\"Absatz-Standardschriftart\"><strong style=\"mso-bidi-font-weight: normal;\"> crypto trading</strong></span>.</p>', '', null, '2018-12-03 14:05:42');
INSERT INTO `one_row_page` VALUES ('4', 'turboToken', null, null, null, null, null, '<p class=\"Standard\"><strong>Our Tokens are fully backed by Stock Exchange Bonds!</strong></p>\r\n<p class=\"Standard\">Swiss Turbo offers the opportunity for investors to take advantage of using the resources from a large scale mining operation without the need to buy expensive mining equipment and furthermore to optimize profits through our arbitrage trading.</p>', '<p class=\"Standard\"><strong style=\"mso-bidi-font-weight: normal;\">Unsere Token werden vollst&auml;ndig durch B&ouml;rsen Bonds abgesichert!</strong></p>\r\n<p class=\"Standard\">Swiss Turbo bietet Anlegern die M&ouml;glichkeit, die Ressourcen eines gro&szlig;en Mining-Betriebs zu nutzen, ohne teure Mining-Maschinen kaufen zu m&uuml;ssen und dar&uuml;ber hinaus die Gewinne durch unser Arbitrage-Trading zu optimieren.</p>', '<p class=\"Standard\"><strong style=\"mso-bidi-font-weight: normal;\">Nos Token sont enti&egrave;rement garantis par des obligations de la Bourse!</strong></p>\r\n<p class=\"Standard\">Swiss Turbo offre aux investisseurs la possibilit&eacute; de tirer parti des ressources d&rsquo;une grande exploitation mini&egrave;re sans avoir &agrave; acheter d&rsquo;&eacute;quipement minier co&ucirc;teux et en outre, d&rsquo;optimiser les profits gr&acirc;ce &agrave; nos op&eacute;rations d\'arbitrage.</p>', '<p class=\"MsoNormal\"><strong><span lang=\"IT\">I nostri Token sono completamente coperti da obbligazioni di borsa!</span></strong></p>\r\n<p class=\"MsoNormal\"><span lang=\"IT\"> Swiss Turbo offre agli investitori l\'opportunit&agrave; di sfruttare le risorse di una vasta attivit&agrave; di mining senza la necessit&agrave; di acquistare costose attrezzature e inoltre di ottimizzare i profitti attraverso il nostro trading di arbitraggio.</span></p>', '<p class=\"Standard\"><strong style=\"mso-bidi-font-weight: normal;\">&iexcl;Nuestros Tokens est&aacute;n totalmente respaldadas por los bonos de la bolsa de valores!</strong></p>\r\n<p class=\"Standard\"><span class=\"Absatz-Standardschriftart\"><span style=\"font-size: 10.0pt; line-height: 106%;\">Swiss Turbo ofrece la oportunidad para que los inversores aprovechen el uso de los recursos de una operaci&oacute;n minera a gran escala sin la necesidad de comprar costosos equipos de miner&iacute;a y adem&aacute;s, para optimizar los beneficios a trav&eacute;s de nuestro trading de arbitraje.</span></span></p>', '', null, '2018-12-03 14:02:26');

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES ('1', 'app', '/img/partners/1543612600app.png', 'https://www.apple.com/', '2018-11-30 21:16:40', '2018-11-30 21:55:21');
INSERT INTO `partners` VALUES ('5', 'firefox', '/img/partners/1543614815firefox.png', 'https://www.mozilla.org/', '2018-11-30 21:53:35', '2018-11-30 21:55:42');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('2', 'LeBron James', 'an American professional basketball player for the Los Angeles Lakers of the National Basketball Association (NBA). Often considered the best basketball player in the world and regarded by some as the greatest player of all time,', '/img/team/profile-pictures/LeBron James1543836018.jpg', 'https://www.linkedin.com/', '2018-12-03 11:20:18', '2018-12-03 11:20:18');
INSERT INTO `team` VALUES ('3', 'Johann Zarco', 'a Grand Prix motorcycle racer from France, best known for winning the 2015 and 2016 Moto2 World Championships.\r\n\r\nFrom 2017 he was a member of the Tech 3 Yamaha MotoGP satellite team, and in early 2018 it was announced that he would ride for the factory KTM MotoGP team from 2019.\r\n\r\nWith 16 Grands Prix victories, Zarco is also the most successful French rider in Grand Prix racing.', '/img/team/profile-pictures/Johann Zarco1543836154.jpg', 'https://www.linkedin.com/', '2018-12-03 11:22:34', '2018-12-03 11:22:34');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'test', 'a@a.com', null, '$2y$10$JbNUq9p.bl5Rv.Q1ED/tWeDJNWyUkTRVOQqJHTuUQNm5cwR3UQcpK', null, '2018-11-29 11:24:37', '2018-11-29 11:24:37');
