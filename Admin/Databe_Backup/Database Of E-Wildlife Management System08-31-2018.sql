DROP TABLE IF EXISTS admin;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","admin","admin");


DROP TABLE IF EXISTS animals;

CREATE TABLE `animals` (
  `animals_id` int(255) NOT NULL AUTO_INCREMENT,
  `animal_name` varchar(77) NOT NULL,
  `Gamepark` varchar(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `entry_fee` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `total_animals` int(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`animals_id`),
  KEY `Category_ID` (`Gamepark`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO animals VALUES("1","ELEPHANT","42","AMBOSELI NATIONAL PARK","60000","amboseli.jpg","70","kilifi","");
INSERT INTO animals VALUES("2","Hippos","42","MT ELGON NATIONAL PARK","70000","hippo.jpg","0","","");
INSERT INTO animals VALUES("3","Lions","42","NAKURU NATIONAL PARK","3000","lions.jpg","0","","");
INSERT INTO animals VALUES("4","Elephants","42","TSAVO NATIONAL PARK","2000","tsavo.jpg","0","","");
INSERT INTO animals VALUES("5","GAZELLE","43","SAIWA SWAMPS","20000","gazelli.jpg","0","","");
INSERT INTO animals VALUES("6","RHINO","43","MALINDI NATIONAL PARK","8000","rino.jpg","0","","");
INSERT INTO animals VALUES("7","Girraffe","45","RUMA NATIONAL PARK","2000","ruma.jpg","0","","");
INSERT INTO animals VALUES("11","Punda","Punda","Punda Milia","46","gazelli.jpg","36","US","3242");


DROP TABLE IF EXISTS bookings;

CREATE TABLE `bookings` (
  `Reserved_Id` int(15) NOT NULL AUTO_INCREMENT,
  `FullNames` varchar(25) NOT NULL DEFAULT '',
  `Username` varchar(255) NOT NULL,
  `No_Of_People` varchar(255) NOT NULL DEFAULT '',
  `From_Date` varchar(25) NOT NULL DEFAULT '',
  `To_Date` varchar(55) NOT NULL DEFAULT '',
  `Site` varchar(20) NOT NULL DEFAULT '',
  `Price` varchar(25) NOT NULL DEFAULT '',
  `Adress` varchar(55) NOT NULL DEFAULT '',
  `PostalCode` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`Reserved_Id`),
  UNIQUE KEY `FullNames` (`FullNames`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO bookings VALUES("26","bfghf","fghfh","4564","2018-08-18","2018-08-18","dgfdgd","46465","fghf","345436","");
INSERT INTO bookings VALUES("28","nancy","nancy","786","2018-08-31","2018-08-31","gjsdgjxchsd","7856","nancy","388743","ogutu@gmail.com");


DROP TABLE IF EXISTS chatting;

CREATE TABLE `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO chatting VALUES("6","Nancy Ogutu","Hallo is any budy there?","2014-08-13 02:01:29","127.0.0.1");
INSERT INTO chatting VALUES("17","Sly","Mambo","2018-07-21 00:58:17","::1");
INSERT INTO chatting VALUES("18","Nancy","We are almost doen with school","2018-08-11 22:51:22","::1");
INSERT INTO chatting VALUES("19","Nancy","See you in class","2018-08-11 22:51:36","::1");
INSERT INTO chatting VALUES("21","Tourist","Can I see the various Gameparks","2018-08-31 12:04:36","::1");
INSERT INTO chatting VALUES("22","Admin","Yes You Can","2018-08-31 12:05:38","::1");


DROP TABLE IF EXISTS clients;

CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `contact` varchar(40) DEFAULT NULL,
  `address` text,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `website` varchar(40) DEFAULT NULL,
  `comments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS contact;

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(29) NOT NULL,
  `Phone` varchar(29) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO contact VALUES("8","Sly kamau ","sly@gmail.com","0252634138440"," What a nice wildlife site");


DROP TABLE IF EXISTS customer;

CREATE TABLE `customer` (
  `Cust_Id` int(15) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(25) NOT NULL DEFAULT '',
  `UserName` varchar(255) NOT NULL DEFAULT '',
  `Phone` varchar(25) NOT NULL DEFAULT '',
  `Email` varchar(55) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL DEFAULT '',
  `Re_Password` varchar(20) NOT NULL DEFAULT '',
  `Country` varchar(25) NOT NULL DEFAULT '',
  `City` varchar(25) NOT NULL DEFAULT '',
  `Adress` varchar(55) NOT NULL DEFAULT '',
  `PostalCode` varchar(25) NOT NULL DEFAULT '',
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Cust_Id`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("20","obadiah korir","obadiah","289492374","admin@gmail.com","oba","oba","Kenya","North Eastern","7878","8779","");
INSERT INTO customer VALUES("21","test test","test","89907","test@gmail.com","test","test","Armenia","Shirak","test","989843","");
INSERT INTO customer VALUES("22","Nancy Ogutu","nancy","82748365","nancy@gmail.com","nancy","nancy","Bangladesh","Dhaka","3875365","2798237","");
INSERT INTO customer VALUES("23","yes","yes","0988","allo@gmail.com","ewrew","wrwe","Bahamas","Rock Sound","ertet","46546","");
INSERT INTO customer VALUES("24","Stewart Demich","Demich","7658567","nancy@gmail.com","ertgetgr","ertet","ertret","gfhgj","ertgegt","57567","arabuka.jpg");
INSERT INTO customer VALUES("26","test","okey","34643","test@gmail.com","test","test","kenya","kilifi","345345","898","yes.jpg");
INSERT INTO customer VALUES("27","obadiah","45646","4554","hsbh@gmail.com","uoioiu","ewyurywer","kenya","uwrwu","43534","3534","jhgj");
INSERT INTO customer VALUES("28","wefrewrf","dfgdg","dfgdgd","G@gmail.com","erfetfre","erte","ere","ertre","ertre","34535","fvdd");
INSERT INTO customer VALUES("29","John","dfgfdg","345436","boscow@gmail.com","fdgd","dfgdg","dfgfd","dfgd","dfgd","dfgd","dfgfd");
INSERT INTO customer VALUES("31","test","hsgjhdg","072737","test@gmail.com","test","test","kenya","kilifi","86789","7867","nancy.jpg");


DROP TABLE IF EXISTS employee;

CREATE TABLE `employee` (
  `Employee_ID` int(95) NOT NULL AUTO_INCREMENT,
  `Employee_Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Pay_Roll` int(11) NOT NULL,
  `IdNumber` varchar(255) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("1","Nancy Ogutu","Nancy","employee.png","0","");
INSERT INTO employee VALUES("2","Obadiah Korir","oba","amboseli.jpg","664363346","2987982734");


DROP TABLE IF EXISTS gamepark;

CREATE TABLE `gamepark` (
  `Gamepark_ID` int(255) NOT NULL AUTO_INCREMENT,
  `County` varchar(255) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `PostalCode` varchar(55) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Gamepark` varchar(55) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `animals` int(255) NOT NULL,
  `Price` int(30) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Gamepark_ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `PostalCode` (`PostalCode`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO gamepark VALUES("7","Kenya","195","80108","kilifi@gmail.com","Amboseli Game park","","90","3600","Amboseli.jpg");
INSERT INTO gamepark VALUES("8","","189","801080","kenya@gmail.com","SAIWA SWAMP","","90","2000","Amboseli.jpg");
INSERT INTO gamepark VALUES("9","","01000","01000","nai@gmail.com","Nairobi National Park","","12","3700","Amboseli.jpg");
INSERT INTO gamepark VALUES("10","Trans-Nzoia","sdsgsdgd","678678","maasai@gmail.com","Maasai Mara","07565","567","56","simbas.jpg");
INSERT INTO gamepark VALUES("11","Trans-Nzoia","243","324324","oba@gmail.com","wdwed","23432","2342","32424","simbas.jpg");


DROP TABLE IF EXISTS news;

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(255) NOT NULL,
  `From` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Times` time(6) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO news VALUES("1","The Project is for the Final Year .A requirement By The Computer Course.","CEO","28/09/2018","21:31:31.476890");


DROP TABLE IF EXISTS parks;

CREATE TABLE `parks` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `park_name` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `animals` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `fee` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO parks VALUES("1","Amboseli National Park","Kilifi County","amboseli.jpg","34","Active","3000");
INSERT INTO parks VALUES("2","Mt Elgon","Trans-Nzoia","amboseli.jpg","67","Active","700");


DROP TABLE IF EXISTS payment;

CREATE TABLE `payment` (
  `payment_id` int(255) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `No_of_people` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `Country` varchar(55) NOT NULL,
  `City` varchar(55) NOT NULL,
  `Phone` varchar(55) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL,
  `Currency` int(30) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO payment VALUES("1","BHJGADVH","dsd@gmail.com","5465","dsqwd","SRB","Arabsiyo","564768768","435","0");
INSERT INTO payment VALUES("2","Abdirahman Osman","j@j.com","354","ddw2343","SOM","Kilifi","9","","0");
INSERT INTO payment VALUES("3","Abdirahman Osman","jananalibri@gmail.com","2522","hargeisa jigjiga yar","SOM","Hargeisa","4138440","","0");


DROP TABLE IF EXISTS product;

CREATE TABLE `product` (
  `Product_ID` int(255) NOT NULL AUTO_INCREMENT,
  `productName` varchar(77) NOT NULL,
  `Category_ID` int(255) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Product_ID`),
  KEY `Category_ID` (`Category_ID`),
  KEY `Warehouse_ID` (`Warehouse_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("1","ELEPHANT","42","Orange202","WILDLIFE","7","AMBOSELI NATIONAL PARK","60000","amboseli.jpg");
INSERT INTO product VALUES("2","Hippos","42","apple23","Hippos","7","MT ELGON NATIONAL PARK","70000","hippo.jpg");
INSERT INTO product VALUES("3","Lions","42","grap123","grape fruit","7","NAKURU NATIONAL PARK","3000","lions.jpg");
INSERT INTO product VALUES("4","Elephants","42","bav121","drinks","8","TSAVO NATIONAL PARK","2000","tsavo.jpg");
INSERT INTO product VALUES("5","GAZELLE","43","coc2232","drinks","8","SAIWA SWAMPS","20000","saiwa.jpg");
INSERT INTO product VALUES("6","RHINO","43","ran12","drinks","8","MALINDI NATIONAL PARK","8000","rino.jpg");
INSERT INTO product VALUES("7","Girraffe","45","fairy12","cleaning","9","RUMA NATIONAL PARK","2000","ruma.jpg");
INSERT INTO product VALUES("8","MOUNT KENYA","45","ahr980","cleaning","9","MOUNT KENYA NATIONAL PARK","15000","mt kenya.jpg");


DROP TABLE IF EXISTS registration;

CREATE TABLE `registration` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='contain account openning details';

INSERT INTO registration VALUES("3","Test","test@gmail.com","Tourist","28b662d883b6d76fd96e4ddc5e9ba780","2018-08-12");
INSERT INTO registration VALUES("4","nancy","ogutu@gmail.com","Tourist","7b0f81bdd2b24ba32cb27f6c16e6b900","2018-08-12");
INSERT INTO registration VALUES("5","test","test1@gmail.com","Admin","098f6bcd4621d373cade4e832627b4f6","2018-08-12");
INSERT INTO registration VALUES("6","Boscow","boscow@gmail.com","Admin","61d42e8f3d6bc897a840496cae5f3329","2018-08-12");
INSERT INTO registration VALUES("7","Nancy","nancy@gmail.com","Admin","7b0f81bdd2b24ba32cb27f6c16e6b900","2018-08-31");


DROP TABLE IF EXISTS reserves;

CREATE TABLE `reserves` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `reserve_name` varchar(30) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `county` varchar(30) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `animals` varchar(30) NOT NULL,
  `fee` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO reserves VALUES("1","Amboseli National Park","","Kilifi County","amboseli.jpg","34","3000","");
INSERT INTO reserves VALUES("2","Mt Elgon","","Trans-Nzoia","amboseli.jpg","67","700","");
INSERT INTO reserves VALUES("3","Testing","","US","simbas.jpg","232523","23424","test@gmail.com");
INSERT INTO reserves VALUES("4","vdfgv","","CHI","simbas.jpg","345","35435","oba@gmail.com");


DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `names` varchar(30) NOT NULL,
  `Picture` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","admin","admin","Obadiah Korir","simbas.jpg","korir400@gmail.com","Obadiah Korir","82179482","admin","");


