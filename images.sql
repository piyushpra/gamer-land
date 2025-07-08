-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 03:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `images`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_img`
--

CREATE TABLE `buy_img` (
  `ID` int(11) NOT NULL,
  `Game_Name` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Source_1` varchar(1000) NOT NULL,
  `Source_2` varchar(1000) NOT NULL,
  `Source_3` varchar(1000) NOT NULL,
  `Source_4` varchar(1000) NOT NULL,
  `Source_5` varchar(1000) NOT NULL,
  `Released_Date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy_img`
--

INSERT INTO `buy_img` (`ID`, `Game_Name`, `Title`, `Source_1`, `Source_2`, `Source_3`, `Source_4`, `Source_5`, `Released_Date`) VALUES
(1, 'watch dog 2', 'Watch Dog 2', '../images/watch dog2 1.jpg', '../images/watch dog2 2.jpg', '../images/watch dog2 3.jpg', '../images/watch dog2 4.jpg', '../images/watch dog2 5.jpg', '15 November 2016'),
(2, 'last of us 2', 'Last of Us 2', '../images/last of us2 1.jpg', '../images/last of us2 2.jpg', '../images/last of us2 3.jpg', '../images/last of us2 4.jpg', '../images/', '19 June 2020'),
(3, 'assassin creed valhalla', 'Assassin Creed Valhalla', '../images/assassin creed valhalla 1.jpg', '../images/assassin creed valhalla 2.jpg', '../images/assassin creed valhalla 3.jpg', '../images/assassin creed valhalla 4.jpg', '../images/', '10 November 2020'),
(4, 'death stranding', 'Death Stranding', '../images/death stranding 1.jpg', '../images/death stranding 2.jpg', '../images/death stranding 3.jpg', '../images/', '../images/', '8 November 2019'),
(5, 'fortnite', 'Fortnite', '../images/fortnite 1.jpg', '../images/fortnite 2.jpg', '../images/fortnite 3.jpg', '../images/fortnite 4.jpg', '../images/', '25 July 2017'),
(6, 'resident evil 7', 'Resident Evil 7', '../images/evil 7 1.jpg', '../images/evil 7 2.jpg', '../images/evil 7 3.jpg', '../images/', '../images/', '24 January 2017'),
(7, 'spider man miles morales', 'Spiderman Miles Morales', '../images/morale 1.jpg', '../images/morale 2.jpg', '../images/morale 3.jpg', '../images/morale 4.jpg', '../images/morale 5.jpg', '12 November 2020'),
(8, 'rainbow six siege', 'Rainbow Six Siege', '../images/rainbow 1.jpeg', '../images/rainbow 2.jpg', '../images/rainbow 3.jpg', '../images/', '../images/', '1 December 2015'),
(9, 'call of duty: ghosts', 'Call of Duty Ghosts', '../images/ghost 1.jpg', '../images/ghost 2.jpg', '../images/ghost 3.jpg', '../images/', '../images/', '5 November 2013'),
(10, 'PUBG Lite', 'PUBG Lite', '../images/pubg_20.jpg', '../images/pubg_21.jpg', '../images/pubg_22.jpg', '../images/pubg_23.jpg', '../images/pubg_25.jpg', '23 March 2017'),
(11, 'metro 2033', 'Metro 2033', '../images/metro 1.jpg', '../images/metro 2.jpg', '../images/metro 3.jpg', '../images/metro 4.jpg', '../images/', '16 March 2010'),
(12, 'call of duty modern warfare', 'Call of Duty Modern Warfare', '../images/warfare 1.jfif', '../images/warfare 2.jpg', '../images/warfare 3.jpg', '../images/', '../images/', '25 October 2019'),
(13, 'league of legends champions', 'League of Legends Champions', '../images/league 1.jpg', '../images/league 2.jpg', '../images/league 3.jpg', '../images/league 4.jpg', '../images/', '24 March 2016'),
(14, 'doom eternal', 'Doom Eternal', '../images/doom 1.jpg', '../images/doom 2.jpg', '../images/doom 3.jpg', '../images/doom 4.jpg', '../images/doom 5.jpg', '20 March 2020'),
(15, 'gears of war 3', 'Gears of War 3', '../images/war 3 1.jpg', '../images/', '../images/', '../images/', '../images/', '20 September 2011'),
(16, 'GTA 5', 'GTA 5', '../images/gta-5 1.jpg', '../images/gta-5 2.jpg', '../images/gta-5 3.jpg', '../images/gta-5 4.jpg', '../images/gta-5 5.jpg', '17 September 2013'),
(17, 'red dead redemption 2', 'Red Dead Redemption 2', '../images/rdr2 1.jpg', '../images/rdr2 2.jpg', '../images/rdr2 3.jpg', '../images/rdr2 4.jpg', '../images/rdr2 5.jpg', '26 October 2018'),
(18, 'skyrim', 'Skyrim', '../images/skyrim 1.jpg', '../images/skyrim 2.jpg', '../images/skyrim 3.jpg', '../images/skyrim 4.jpg', '../images/', '11 November 2011'),
(19, 'hitman 3', 'Hitman 3', '../images/hitman-3 1.jpg', '../images/hitman-3 2.jpg', '../images/', '../images/', '../images/', '20 January 2021'),
(20, 'NFS Heat', 'Need For Speed Heat', '../images/heat 1.jpg', '../images/heat 2.jpg', '../images/heat 3.jpg', '../images/heat 4.jpg', '../images/heat 5.jpg', '8 November 2019'),
(21, 'resident evil village', 'Resident Evil Village', '../images/village 1.jpg', '../images/village 2.jpg', '../images/village 3.jpg', '../images/village 4.jpg', '../images/', '7 May 2021'),
(22, 'counter strike global offensive', 'Counter Strike global offensive', '../images/csgo 1.jpg', '../images/csgo 2.jpg', '../images/csgo 3.jpg', '../images/csgo 4.jpg', '../images/', '21 August 2012'),
(23, 'enlisted', 'Enlisted', '../images/enlisted 1.jfif', '../images/', '../images/', '../images/', '../images/', '2 March 2021'),
(24, 'warframe', 'Warframe', '../images/warframe 1.png', '../images/warframe 2.jpg', '../images/warframe 3.jpg', '../images/warframe 4.jpg', '../images/warframe 5.jpg', '25 March 2013'),
(25, 'call of duty warzone', 'Call of Duty Warzone', '../images/warzone 1.jpg', '../images/warzone 2.jpg', '../images/warzone 3.jpg', '../images/warzone 4.jpg', '../images/warzone 5.jpg', '10 March 2020'),
(26, 'tekken 7', 'Tekken 7', '../images/tekken-7 1.jpg', '../images/tekken-7 2.jpg', '../images/tekken-7 3.jpg', '../images/tekken-7 4.jpg', '../images/', '18 March 2015'),
(27, 'Playerunknowns Battlegrounds(PUBG)', 'Playerunknowns Battlegrounds', '../images/pubg_20.jpg', '../images/pubg_21.jpg', '../images/pubg_22.jpg', '../images/pubg_23.jpg', '../images/pubg_25.jpg', '23 March 2017'),
(28, 'cyberpunk 2077', 'Cyberpunk 2077', '../images/cyberpunk 1.png', '../images/cyberpunk 2.jpg', '../images/cyberpunk 3.jpg', '../images/cyberpunk 4.jpg', '../images/', '10 December 2020'),
(29, 'forza horizon 4', 'Forza Horizon 4', '../images/forza 1.jpg', '../images/forza 2.jpg', '../images/forza 3.jpg', '../images/', '../images/', '28 September 2018'),
(30, 'call of duty cold war', 'Call of Duty Cold War', '../images/cold-war 1.png', '../images/cold-war 2.jpg', '../images/cold-war 3.jfif', '../images/cold-war 4.jpg', '../images/', '13 November 2020'),
(31, 'ghost warrior contracts 2', 'Ghost Warrior Contracts 2', '../images/sniper 1.jpg', '../images/', '../images/', '../images/', '../images/', 'not released'),
(32, 'chivalry 2', 'Chivalry 2', '../images/chivalry 1.jpeg', '../images/chivalry 2.jpg', '../images/chivalry 3.jfif', '../images/', '../images/', 'not released'),
(33, 'deathloop', 'Deathloop', '../images/deathloop 1.jpg', '../images/deathloop 2.jpg', '../images/', '../images/', '../images/', 'not released'),
(34, 'Back 4 Blood', 'Back 4 Blood', '../images/blood 1.jpg', '../images/blood 2.jpg', '../images/', '../images/', '../images/', 'not released'),
(35, 'New World', 'New World', '../images/new-world 1.jpg', '../images/', '../images/', '../images/', '../images/', 'not released'),
(36, 'Bloodlines 2', 'Bloodlines 2', '../images/bloodline 1.jpg', '../images/', '../images/', '../images/', '../images/', 'not released'),
(37, 'gears of war 4', 'Gears of War 4', '../images/war-4 1.jpg', '../images/war-4 2.jpg', '../images/', '../images/', '../images/', '11 October 2016['),
(38, 'battlefield 5', 'Battlefield 5', '../images/battlefield-5 1.jpg', '../images/battlefield-5 2.png', '../images/battlefield-5 3.png', '../images/', '../images/', '4 September 2018');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(100) NOT NULL,
  `Game_Name` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Platform` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Game_Name`, `Title`, `Platform`, `Genre`, `Brand`) VALUES
(1, 'watch dog 2', 'Watch Dog 2', 'pc playstation xbox', 'action adventure shooting', 'ubisoft epic'),
(2, 'last of us 2', 'Last of Us 2', 'playstation', 'action adventure', 'sony'),
(3, 'assassin creed valhalla', 'Assassins creed Valhalla', 'pc playstation xbox', 'action', 'ubisoft'),
(4, 'death stranding', 'Death Stranding', 'pc playstation', 'action', 'sony'),
(5, 'fortnite', 'Fortnite', 'pc playstation xbox', 'survival battle', 'epic'),
(6, 'resident evil 7', 'Resident Evil 7', 'pc playstation xbox', 'survival horror', 'capcom'),
(7, 'spider man miles morales', 'Spider Man Miles Morales', 'playstation', 'action adventure', 'sony'),
(8, 'rainbow six siege', 'Rainbow Six Siege', 'pc playstation xbox', 'shooting', 'ubisoft'),
(9, 'call of duty ghosts', 'Call of Duty Ghosts', 'pc playstation xbox', 'shooting', 'activision'),
(10, 'PUBG lite', 'PUBG Lite', 'pc playstation xbox', 'shooting', 'krafton'),
(11, 'metro 2033', 'Metro 2033', 'pc playstation xbox', 'survival', 'thq'),
(12, 'call of duty modern warfare', 'Call of Duty Modern Warfare', 'pc playstation xbox', 'shooting', 'activision'),
(13, 'league of legends champions', 'League of Legends Champions', 'pc playstation', 'action strategy battle', 'riot'),
(14, 'doom eternal', 'Doom Eternal', 'pc playstation xbox', 'shooting', 'bethesda'),
(15, 'gears of war 3', 'Gears of War 3', 'pc playstation xbox', 'shooting', 'microsoft'),
(16, 'GTA 5', 'GTA 5', 'pc playstation xbox', 'action adventure', 'sony rockstar'),
(17, 'red dead redemption 2', 'Red Dead Redemption 2', 'pc playstation xbox', 'action adventure', 'rockstar'),
(18, 'skyrim', 'Skyrim', 'pc playstation xbox', 'action', 'bethesda'),
(19, 'hitman 3', 'Hitman 3', 'pc playstation xbox', 'stealth', 'io interactive'),
(20, 'NFS Heat', 'Need For Speed Heat', 'pc playstation xbox', 'racing', 'ea'),
(21, 'resident evil village', 'Resident Evil Village', 'pc playstation xbox', 'survival horror', 'capcom'),
(22, 'counter strike global offensive', 'Counter Strike Global Offensive', 'pc playstation xbox', 'shooting', 'valve'),
(23, 'enlisted', 'Enlisted', 'pc playstation xbox', 'shooting', 'gaijin'),
(24, 'warframe', 'Warframe', 'pc playstation xbox', 'action shooting', 'digital extremes'),
(25, 'call of duty warzone', 'Call of Duty Warzone', 'pc playstation xbox', 'battle shooting', 'activision'),
(26, 'tekken 7', 'Tekken 7', 'pc playstation xbox', 'fighting', 'bandai namco'),
(27, 'Playerunknowns Battlegrounds(PUBG)', 'Playerunknowns Battlegrounds', 'pc playstation xbox', 'shooting', 'krafton'),
(28, 'cyberpunk 2077', 'Cyberpunk 2077', 'pc playstation xbox', 'action', 'cd projket'),
(29, 'forza horizon 4', 'Forza Horizon 4', 'pc playstation xbox', 'racing', 'xbox'),
(30, 'call of duty cold war', 'Call of Duty Cold War', 'pc playstation xbox', 'shooting', 'activision'),
(31, 'ghost warrior contracts 2', 'Ghost Warrior Contracts 2', 'pc playstation xbox', 'shooting stealth', 'ci games'),
(32, 'chivalry 2', 'Chivalry 2', 'pc playstation xbox', 'shooting fighting', 'tripwire'),
(33, 'deathloop', 'Deathloop', 'pc playstation', 'action adventure', 'bethesda'),
(34, 'Back 4 Blood', 'Back 4 Blood', 'pc playstation xbox', 'shooting survival', 'warner bros'),
(35, 'New World', 'New World', 'pc', 'rpg', 'amazon games'),
(36, 'Bloodlines 2', 'Bloodlines 2', 'pc playstation xbox', 'action', 'paradox interactive'),
(37, 'gears of war 4', 'Gears of War 4', 'pc playstation xbox', 'shooting', 'microsoft'),
(38, 'battlefield 5', 'Battlefield 5', 'pc playstation xbox', 'shooting battle', 'electronic arts');

-- --------------------------------------------------------

--
-- Table structure for table `user_img`
--

CREATE TABLE `user_img` (
  `ID` int(11) NOT NULL,
  `Game_Name` varchar(100) NOT NULL,
  `Rating` varchar(100) NOT NULL,
  `Purchase_Amount` int(100) NOT NULL,
  `Discount` int(100) NOT NULL,
  `Source` varchar(1000) NOT NULL,
  `Alternate` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Upcoming` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_img`
--

INSERT INTO `user_img` (`ID`, `Game_Name`, `Rating`, `Purchase_Amount`, `Discount`, `Source`, `Alternate`, `Title`, `Upcoming`, `Description`) VALUES
(1, 'watch dog 2', '4.5', 1999, 12, 'images\\681867.jpg', 'Watch Dog 2', 'Watch Dog 2', '0', 'Watch Dogs 2 is an action-adventure game with stealth elements[2] and played from a third-person perspective as Marcus Holloway, a young hacker. The game features an open world set in a fictionalized version of the San Francisco Bay Area,[3][4] an area more than twice as large as the Chicagoland setting from Watch Dogs.[5] It consists of four different areas: San Francisco, Oakland, Marin, and Silicon Valley.[6] Players can navigate the game\'s world on-foot or by the various vehicles featured in the game, such as cars, trucks, buses, cable cars, motorcycles, quad bikes, and boats.'),
(2, 'last of us 2', '4.2', 2999, 29, 'images\\best_seller_1.jpg', 'Last of Us 2', 'Last of Us 2', '0', 'The Last of Us Part II is an action-adventure game played from a third-person perspective featuring elements of the survival horror genre.[1][2] The player traverses post-apocalyptic environments such as buildings and forests to advance the story. The player can use firearms, improvised weapons, and stealth to defend against hostile humans and cannibalistic creatures infected by a mutated strain of the Cordyceps fungus.'),
(3, 'assassin creed valhalla', '3.7', 3999, 23, 'images\\valhalla.jpg', 'Assassins creed Valhalla', 'Assassins creed Valhalla', '0', 'Assassin\'s Creed Valhalla is an open-world action-adventure game structured around several main story arcs and numerous optional side-missions, called \"World Events\". The player takes on the role of Eivor Varinsdottir (Daughter of Varin) (/ˈeɪvɔːr/),[5] a Viking raider, as they lead their fellow Vikings against the Anglo-Saxon kingdoms. The player has the choice of playing Eivor as either female or male.'),
(4, 'death stranding', '4.2', 899, 12, 'images\\editor_choice_4.jpg', 'Death Stranding', 'Death Stranding', '0', 'Death Stranding is an action game developed by Kojima Productions. It is the first game from director Hideo Kojima and Kojima Productions after their split from Konami in 2015. The game is set in the United States following a cataclysmic event which caused destructive creatures to begin roaming the Earth.'),
(5, 'fortnite', '3.5', 0, 0, 'images\\Epic-Games-Fortnite.png', 'Fortnite', 'Fortnite', '0', 'Fortnite: Save the World is a player-versus-environment cooperative game, with four players collaborating towards a common objective on various missions. The game is set after a fluke storm appears across Earth, causing 98% of the population to disappear, and the survivors to be attacked by zombie-like \"husks\". The players take the role of commanders of home base shelters, collecting resources, saving survivors, and defending equipment that helps to either collect data on the storm or to push back the storm.'),
(6, 'resident evil 7', '4.3', 2999, 15, 'images\\resident-evil-7.jpg', 'Resident Evil 7', 'Resident Evil 7', '0', 'The player controls Ethan Winters from a first-person perspective as he searches a derelict estate for his missing wife. Although Ethan is a civilian with few combat skills, he is able to arm himself with a variety of weapons including handguns, shotguns, flamethrowers, explosives and chainsaws against the estate\'s residents, the Baker family, as well as humanoid fungal creatures known as the \"Molded\".'),
(7, 'spider man miles morales', '4.4', 4399, 32, 'images\\best_seller_4.jfif', 'Spider Man Miles Morales', 'Spider Man Miles Morales', '0', 'The core gameplay of Marvel\'s Spider-Man: Miles Morales is the same of its predecessor. It features the same open-world, a fictionalized version of modern-day Manhattan, which is covered in snow because the game is set during the holidays. Miles controls almost identically to Peter Parker, but with new animations and abilities, which are unlocked as the storyline progresses. The powers introduced consist of Venom Blast, which allows the player to incapacitate enemies with bio-electricity, and charge or drain electronics; Camouflage, which gives Miles temporary invisibility; and Mega Venom Blast, consisting of a massive explosion of bio-electricity that damages all nearby enemies.'),
(8, 'rainbow six siege', '4.5', 999, 49, 'images\\editor-7.jpg', 'Rainbow Six Siege', 'Rainbow Six Siege', '0', 'Tom Clancy\'s Rainbow Six Siege is a first-person shooter game, in which players utilize many different operators from the Rainbow team. Different operators have different nationalities, weapons, and gadgets.[1] The game features an asymmetrical structure whereby the teams are not always balanced in their choices of abilities.[2] The base Counter-Terrorism Units (CTUs) available for play are the American Hostage Rescue Team (referred to in-game as the FBI SWAT), the British SAS, the German GSG-9, the Russian Spetsnaz and the French GIGN, each of which has four operators per unit split between attackers and defenders.'),
(9, 'call of duty ghosts', '4.3', 200, 20, 'images\\editor-8.jpg', 'Call of Duty Ghosts', 'Call of Duty Ghosts', '0', 'In Call of Duty: Ghosts, the story is mostly told through the eyes of a single character, Logan Walker. Players assume the role of Logan for most of the game, with several other playable characters, including an astronaut specialist named Baker, Sergeant Thompson, member of Icarus and Logan\'s father, Elias Walker, with an all new option to play as Riley, the first non-human playable character in the franchise.'),
(10, 'PUBG lite', '3.9', 0, 0, 'images\\pubg-lite.jpg', 'PUBG Lite', 'PUBG Lite', '0', 'Battlegrounds is a player versus player shooter game in which up to one hundred players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive. Players can choose to enter the match solo, duo, or with a small team of up to four people.'),
(11, 'metro 2033', '4.6', 899, 69, 'images\\editor-12.jpg', 'Metro 2033', 'Metro 2033', '0', 'Metro 2033 is a 2010 first-person shooter survival horror video game developed by 4A Games and published by THQ. The story is based on Dmitry Glukhovsky\'s novel of the same name, where survivors of a nuclear war have taken refuge in the Metro tunnels of Moscow.'),
(12, 'call of duty modern warfare', '4.1', 4699, 41, 'images\\Call-of-Duty.jpg', 'Call of Duty Modern Warfare', 'Call of Duty Modern Warfare', '0', 'Modern warfare is warfare that is in notable contrast with previous military concepts, methods, and technology, emphasizing how combatants must modernize to preserve their battle worthiness.[1] As such, it is an evolving subject, seen differently in different times and places. In its narrowest sense, it is merely a synonym for contemporary warfare.'),
(13, 'league of legends champions', '3.5', 0, 0, 'images\\editor-11.jpg', 'League of Legends Champions', 'League of Legends Champions', '0', 'League of Legends is a multiplayer online battle arena (MOBA) game in which the player controls a character (\"champion\") with a set of unique abilities from an isometric perspective.[3][4] As of April 2021, there are 155 champions available to play.[5] Over the course of a match, champions gain levels by accruing experience points (XP) through killing enemies.'),
(14, 'doom eternal', '4.5', 1663, 11, 'images\\new_arrival_7.jpg', 'Doom Eternal', 'Doom Eternal', '0', 'Players once again take on the role of the Doom Slayer who battles the demonic forces of Hell, from a first-person perspective. The game continues its predecessor\'s emphasis on \"push-forward\" combat, encouraging the player to aggressively engage enemies in order to acquire health, ammo, and armor. The player has access to various firearms, such as the Combat Shotgun, Super Shotgun, Heavy Cannon, Rocket Launcher, Plasma Rifle, Chaingun, BFG 9000, and Ballista.'),
(15, 'gears of war 3', '4.7', 1499, 16, 'images\\gear-of-war3_1920x1080.jpg', 'Gears of War 3', 'Gears of War 3', '0', 'Gears of War 3 is a third-person shooter that emphasizes the use of cover and squad tactics in order to survive combat situations. The player\'s character can carry four weapons: one pistol, one set of grenades, and two primary weapons. Firearms can be swapped with other weapons dropped by fallen foes or at stockpiles throughout the game, along with ammunition. When the player reloads a weapons ammunition, they have an opportunity for an \"active reload\", shown by a small cursor moving over a line with a marked section on the player\'s heads-up display (HUD).'),
(16, 'GTA 5', '4.7', 2400, 37, 'images\\best_seller_6.jpg', 'GTA 5', 'GTA 5', '0', 'Grand Theft Auto V is an action-adventure game[2] played from either a third-person[3] or first-person perspective.[4][b] Players complete missions—linear scenarios with set objectives—to progress through the story.[5] Outside of the missions, players may freely roam the open world. Composed of the San Andreas open countryside area, including the fictional Blaine County, and the fictional city of Los Santos, the world is much larger in area than earlier entries in the series.'),
(17, 'red dead redemption 2', '4.4', 3999, 21, 'images\\best_seller_7.jpg', 'Red Dead Redemption 2', 'Red Dead Redemption 2', '0', 'Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game Red Dead Redemption. The story also follows fellow gang member John Marston, the protagonist of Red Dead Redemption.'),
(18, 'skyrim', '4.1', 999, 59, 'images\\skyrim.png', 'Skyrim', 'Skyrim', '0', 'The Elder Scrolls V: Skyrim is an action role-playing game, playable from either a first or third-person perspective. The player may freely roam over the land of Skyrim—an open world environment consisting of wilderness expanses, dungeons, caves, cities, towns, fortresses, and villages.[1] Players may navigate the game world more quickly by riding horses, paying for a ride from a city\'s stable or by utilizing a fast-travel system which allows them to warp to previously discovered locations.'),
(19, 'hitman 3', '4.6', 3999, 35, 'images\\hitman3.jpg', 'Hitman 3', 'Hitman 3', '0', 'Hitman 3 is a stealth game played from a third-person perspective and players once again assume control of assassin Agent 47. In the game, 47 travels to various locations and carries out contracted assassinations, continuing the story of the last two games. The base game features six new locations: Dubai, Dartmoor, Berlin, Chongqing, Mendoza and an epilogue set in the Carpathian Mountains, Romania.'),
(20, 'NFS Heat', '4.6', 3999, 20, 'images\\nfs-heat.jpg', 'Need For Speed Heat', 'Need For Speed Heat', '0', 'Need for Speed Heat is a racing game set in an open world environment called Palm City, a fictionalised version of the city Miami, Florida and its surrounding area. The in-game map features diverse geography, including mountainous areas and open fields.[1] Unlike Need for Speed Payback, the game does not include a 24-hour day-night cycle, but players can switch between day and night. During the day, players can take part in sanctioned race events, which reward players with cash to spend on new cars and upgrades.'),
(21, 'resident evil village', '4.5', 3999, 33, 'images\\editor_choice_7.jpg', 'Resident Evil Village/ Resident Evil 8', 'Resident Evil Village', '0', 'Resident Evil 7, Resident Evil Village uses a first-person perspective. It is set in a snowy explorable Eastern European village. The inventory management mechanic is very similar to that of Resident Evil 4, featuring a briefcase and the ability to move and rotate items for better storage space. Players can buy supplies, weapons, items from a merchant, called the Duke.'),
(22, 'counter strike global offensive', '4.2', 0, 0, 'images\\popular_2.jpg', 'Counter Strike Global Offensive', 'Counter Strike Global Offensive', '0', 'Global Offensive, like prior games in the Counter-Strike series, is an objective-based, multiplayer first-person shooter. Two opposing teams, the Terrorists and the Counter-Terrorists, compete in game modes to repeatedly complete objectives, such as securing a location to plant or defuse a bomb and rescuing or capturing hostages.'),
(23, 'enlisted', '4.1', 0, 0, 'images\\enlisted.jfif', 'Enlisted', 'Enlisted', '0', 'Enlisted is a squad-based first person MMO shooter covering key battles from World War II. The game carefully recreates weapons, military vehicles and the atmosphere of that era, while demonstrating really massive clashes of numerous soldiers, tanks and aircraft with artillery and naval support.'),
(24, 'warframe', '4.1', 0, 0, 'images\\warframe.jfif', 'Warframe', 'Warframe', '0', 'Warframe is an online action game that includes elements of shooters, RPG, and stealth games.  The player starts out with a silent pseudo-protagonist in the form of an anthropomorphous biomechanical combat unit called \'Warframe\' possessing supernatural agility and special abilities, a selection of basic weapons (primary, secondary and melee) and a space ship called \'Orbiter\'.'),
(25, 'call of duty warzone', '3.6', 0, 0, 'images\\warzone.jfif', 'Call of Duty Warzone', 'Call of Duty Warzone', '0', 'Warzone allows online multiplayer combat among 150 players, although some limited-time game modes support 200 players. The game features both cross-platform play and cross-platform progression between three games. The game features three main modes: Plunder, Resurgence, and Battle Royale.'),
(26, 'tekken 7', '3.2', 899, 19, 'images\\tekken-7.jpg', 'Tekken 7', 'Tekken 7', '0', 'Tekken 7 represents the final chapter of the 20-year-long Mishima feud. Unveil the epic ending to the emotionally charged family warfare between the members of the Mishima Clan as they struggle to settle old scores and wrestle for control of a global empire, putting the balance of the world in peril.'),
(27, 'Playerunknowns Battlegrounds(PUBG)', '4.8', 1399, 29, 'images\\pubg1.jpg', 'Playerunknowns Battlegrounds', 'Playerunknowns Battlegrounds', '0', 'Battlegrounds is a player versus player shooter game in which up to one hundred players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive. Players can choose to enter the match solo, duo, or with a small team of up to four people.'),
(28, 'cyberpunk 2077', '3.5', 2499, 20, 'images\\popular_3.jpg', 'Cyberpunk 2077', 'Cyberpunk 2077', '0', 'Cyberpunk 2077 is played in a first-person perspective as V,[4] a mercenary whose voice,[5] face, hairstyles, body type and modifications, background, and clothing are customisable. Stat categories—Body, Intelligence, Reflexes, Technical, and Cool—are influenced by the character classes that players assume, which are NetRunner (hacking), Techie (machinery), and Solo (combat).'),
(29, 'forza horizon 4', '4.5', 1299, 19, 'images\\popular_4.jfif', 'Forza Horizon 4', 'Forza Horizon 4', '0', 'Forza Horizon 4 is a racing video game set in an open world environment based in a fictionalised Great Britain, with regions that include condensed representations of Edinburgh, the Lake District (including Derwentwater), Ambleside and the Cotswolds (including Broadway), Bamburgh among others.'),
(30, 'call of duty cold war', '4.4', 4299, 32, 'images\\cod_black_ops_cold_war_1920x1080.jpg', 'Call of Duty Cold War', 'Call of Duty Cold War', '0', 'Call of Duty: Black Ops Cold War is set during the Cold War in the early 1980s. The story follows Green Beret turned CIA SAD/SOG operative Russell Adler and his mission to stop a USSR extremist group in 1981. The story is inspired by actual events and the campaign features locations such as East Berlin, Vietnam, Turkey, and the Soviet KGB headquarters.[5] Adler is supported by Call of Duty: Black Ops characters Mason, Woods and Hudson.'),
(31, 'ghost warrior contracts 2', '', 0, 0, 'images\\sniper-ghost.jpg', 'Sniper Ghost Warrior Contracts 2', 'Sniper Ghost Warrior Contracts 2', 'Released Date: 4 June 2021', 'Sniper Ghost Warrior Contracts 2 marks the most challenging entry to the acclaimed series yet, introducing extreme long-range sniping with targets over 1000m away. Featuring a dramatic single-player campaign set in modern day Middle East, experience high-pressure tactical combat, deep inside enemy territory.'),
(32, 'chivalry 2', '', 0, 0, 'images\\chivalry.jpg', 'Chivalry 2', 'Chivalry 2', 'Released Date: 23 April 2021', 'Chivalry 2 is a multiplayer first person slasher inspired by epic medieval movie battles. Players are thrust into the action of every iconic moment of the era - from clashing swords, to storms of flaming arrows, to sprawling castle sieges and more.'),
(33, 'deathloop', '', 0, 0, 'images\\Deathloop-scaled.jpg', 'Deathloop', 'Deathloop', 'Release Date: 14 September 2021', 'Deathloop has the player in the role of Colt, an assassin who is stuck in a time loop, waking up on a beach at the island of Blackreef. The other residents of Blackreef, a former army base where strange experiments had once been held, have invested in the island and have gathered for this night to hold a party that seemingly lasts forever, as at the end of each night, the island resets to the start of the party in that time loop.'),
(34, 'Back 4 Blood', '', 0, 0, 'images\\Back-4-Blood.jpg', 'Back 4 Blood', 'Back 4 Blood', 'Release Date: 12 October 2021', 'The gameplay of Back 4 Blood is largely similar to Left 4 Dead, both are 4 player cooperative games and 8 players in a PvP mode with a focus on multiplayer and replayability.[1] A new feature of Back 4 Blood is cards.'),
(35, 'New World', '', 0, 0, 'images\\new_world_warriors.jpg', 'New World', 'New World', 'Release Date: 2021', 'New World is a MMO sandbox game in a Amazon Lumberyard-engine created world within the Microsoft Windows Personal computer platform. Prior to entering the game, a player chooses a default geographical Earth location \"Region\" to achieve their best game latency connectivity and a game server \"World\" to begin the game playing solo.'),
(36, 'Bloodlines 2', '', 0, 0, 'images\\vampire-the-masquerade-bloodlines-2-1.jpg', 'Vampire The Masquerade Bloodlines 2', 'Vampire The Masquerade  Bloodlines 2', 'Release Date: 2021', 'Bloodlines 2 is presented mainly from the first-person perspective, alternating to third-person for contextual activities such as specific attacks.[3] Before the game begins, players create a vampire character, and can select a character background that informs who they were as a human, such as a barista (the default background, with no bonuses), career criminal, coroner, or a police officer, with each offering different dialog and interaction options with the game world.'),
(37, 'gears of war 4', '4.3', 1299, 10, 'images/war-4.jpg', 'Gears of War 4', 'Gears of War 4', '0', 'Many gameplay elements from the previous games are reintroduced, along with new elements such as the Dropshot weapon that fires explosive drills and the Buzzkill that fires ricocheting sawblades at enemies. Players can also perform a short distance shoulder charge, knocking enemies off balance and enemies can also pull players out of cover and perform their own takedowns.'),
(38, 'battlefield 5', '4.4', 3999, 43, 'images/battlefield-5.jpg', 'Battlefield 5', 'Battlefield 5', '0', 'Battlefield V is focused extensively on party-based features and mechanics, scarcity of resources, and removing \"abstractions\" from game mechanics to increase realism. There is an expanded focus on player customization through the new Company system, where players can create multiple characters with cosmetic and weapon options. Cosmetic items, and currency used to purchase others, are earned by completing in-game objectives.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_img`
--
ALTER TABLE `buy_img`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Game_Name` (`Game_Name`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `user_img`
--
ALTER TABLE `user_img`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `user_img` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
