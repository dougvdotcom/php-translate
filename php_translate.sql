-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Generation Time: Nov 15, 2007 at 01:28 AM
-- Server version: 5.0.24
-- PHP Version: 4.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- --------------------------------------------------------

--
-- Table structure for table `php_translate`
--

CREATE TABLE IF NOT EXISTS `php_translate` (
  `record_id` int(10) unsigned NOT NULL auto_increment,
  `trans_section` varchar(20) NOT NULL,
  `trans_lang` char(2) NOT NULL,
  `trans_text` longtext NOT NULL,
  PRIMARY KEY  (`record_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `php_translate`
--

INSERT INTO `php_translate` (`record_id`, `trans_section`, `trans_lang`, `trans_text`) VALUES
(1, 'gettysburg', 'en', '<p>Four score and seven years ago, our fathers brought forth upon this continent a new nation:  conceived in liberty, and dedicated to the proposition that all men are created equal.</p>Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated can long endure.  We are met on a great battlefield of that war.</p><p>We have come to dedicate a portion of that field as a final resting place for those who here gave their lives that this nation might live. It is altogether fitting and proper that we should do this.</p><p>But, in a larger sense, we cannot dedicate, we cannot consecrate, we cannot hallow this ground.  The brave men, living and dead, who struggled here have consecrated it, far above our poor power to add or detract.  The world will little note, nor long remember, what we say here, but it can never forget what they did here.</p><p>It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us, that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion, that we here highly resolve that these dead shall not have died in vain, that this nation, under God, shall have a new birth of freedom, and that government of the people, by the people, for the people, shall not perish from this earth.</p>'),
(2, 'gettysburg', 'fr', '<p>Quatre points et il y a sept ans, nos p&egrave;res ont apport&eacute; sur ce continent une nouvelle nation : con&ccedil;u dans la libert&eacute;, et consacr&eacute; &agrave; la proposition que tous les hommes sont &eacute;gale cr&eacute;&eacute;e.</p><p>Maintenant nous sommes engag&eacute;s dans une grande guerre civile, examinant si cette nation, ou n\\''importe quelle nation ainsi con&ccedil;u et ainsi consacr&eacute; peut longtemps supporter. Nous sommes rencontr&eacute;s sur un grand champ de bataille de cette guerre.</p><p>Nous sommes venus pour consacrer une partie de ce champ comme endroit de repos final pour ceux qui ont ici donn&eacute; leurs vies que cette nation pourrait vivre. Il est tout &agrave; fait convenable et appropri&eacute; que nous devrions faire ceci.</p><p>Mais, dans un plus grand sens, nous ne pouvons pas consacrer, nous ne pouvons pas consacrer, nous ne pouvons pas sanctifier cette terre. Les hommes de braver, la vie et mort, qui a lutt&eacute; ici l\\''ont consacr&eacute;, loin au-dessus de notre puissance faible de s\\''ajouter ou enlever. La volont&eacute; du monde peu de note, ni se rappellent longtemps, ce que nous disons ici, mais il peut ne jamais oublier ce qu\\''elles ici. C\\''est pour nous la vie, plut&ocirc;t, être consacr&eacute; ici au travail non fini qu\\''ils qui a combattu ici jusqu\\''ici ont tellement noblement avanc&eacute;.</p><p>Il est plut&ocirc;t pour que nous soient ici consacr&eacute;s au grand chargent restant avant nous. that de ces morts honor&eacute;s nous prenons la d&eacute;votion accrue &agrave; cette cause pour laquelle ils ont donn&eacute; la derni&egrave;re pleine mesure de d&eacute;votion, cela que nous r&eacute;solvons ici fortement que ces morts ne seront pas morts en vain, que cette nation, sous Dieu, aura une nouvelle naissance de la libert&eacute;, et que gouvernement des personnes, par les personnes, pour le peuple, ne p&eacute;riront pas de cette terre.</p>'),
(3, 'gettysburg', 'sp', '<p>Cuatro cuentas y hace siete a&ntilde;os, nuestros padres trajeron adelante sobre este continente una nueva naci&oacute;n: concebido en libertad, y dedicado al asunto que todos los hombres son igual creado.</p><p>Ahora nos contratan a una gran guerra civil, probando si esa naci&oacute;n, o cualquier naci&oacute;n as&iacute; que concebido y dedicado tan puede aguantar de largo. Nos satisfacen en un gran campo de batalla de esa guerra.</p><p>Hemos venido dedicar una porci&oacute;n de ese campo como lugar de reclinaci&oacute;n final para los que aqu&iacute; dieron sus vidas que esta naci&oacute;n pudo vivir. Es en conjunto apropiado y apropiado que debemos hacer esto.</p><p>Pero, en un sentido m&aacute;s grande, no podemos dedicar, nosotros no podemos consecrate, nosotros no podemos santificar esta tierra. Los hombres valientes, la vida y muerto, que luch&oacute; aqu&iacute; consecrated lo, lejos sobre nuestra energ&iacute;a pobre de agregar o de detraer. La voluntad del mundo poca nota, ni recuerda de largo, qu&eacute; decimos aqu&iacute;, pero puede nunca olvidarse de lo que &eacute;l lo hizo aqu&iacute;.</p><p>Es para nosotros la vida, algo, ser dedicado aqu&iacute; al trabajo inacabado que &eacute;l que luch&oacute; aqu&iacute; hasta el momento ha avanzado tan noble. Est&aacute; algo para que aqu&iacute; seamos dedicados a la gran tarea restante antes de nosotros. that de estos muertos honrados llevamos la dedicaci&oacute;n creciente esa causa para las cuales dieron la medida completa pasada de dedicaci&oacute;n, eso que aqu&iacute; resolvemos altamente que estos muertos no habr&aacute;n muerto en in&uacute;til, que esta naci&oacute;n, debajo del dios, tendr&aacute; un nuevo nacimiento de la libertad, y que gobierno de la gente, por la gente, para la gente, no fallecer&aacute;n de esta tierra.</p>'),
(4, 'hello', 'en', 'Hello World!'),
(5, 'hello', 'fr', 'Bonjour Monde!'),
(6, 'hello', 'sp', '&iexcl;Hola Mundo!'),
(7, 'caption', 'en', 'Teena And Nikki Collins played the twin daughters of Doug The Head in the motion picture "Snatch."'),
(8, 'caption', 'fr', 'Teena et Nikki Collins ont jou&eacute; les filles jumelles de Doug La Tête dans le film cin&eacute;matographique "Snatch."'),
(9, 'caption', 'sp', 'Teena y Nikki Collins jugaron a hijas gemelas de Doug La Cabeza en la pel&iacute;cula "Snatch."'),
(10, 'goodbye', 'en', 'Goodbye!'),
(11, 'goodbye', 'fr', 'Au revoir!'),
(12, 'goodbye', 'sp', '&iexcl;Adios!');
