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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO animals VALUES("3","Lions","42","NAKURU NATIONAL PARK","3000","lions.jpg","0","","");
INSERT INTO animals VALUES("4","Elephants","42","TSAVO NATIONAL PARK","2000","tsavo.jpg","0","","");
INSERT INTO animals VALUES("5","GAZELLE","43","SAIWA SWAMPS","20000","gazelli.jpg","0","","");
INSERT INTO animals VALUES("15","elephant","nairobi","brown","400","elephant.png","345","Taita Taveta","34");


DROP TABLE IF EXISTS bookings;

CREATE TABLE `bookings` (
  `Reserved_Id` int(15) NOT NULL AUTO_INCREMENT,
  `FullNames` varchar(25) NOT NULL DEFAULT '',
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `No_Of_People` varchar(255) NOT NULL DEFAULT '',
  `From_Date` varchar(25) NOT NULL DEFAULT '',
  `To_Date` varchar(55) NOT NULL DEFAULT '',
  `Site` varchar(20) NOT NULL DEFAULT '',
  `Price` varchar(25) NOT NULL DEFAULT '',
  `Adress` varchar(55) NOT NULL DEFAULT '',
  `PostalCode` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`Reserved_Id`),
  UNIQUE KEY `FullNames` (`FullNames`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO bookings VALUES("45","nancy ogutu","nancy","okey@gmail.com","32","2018-10-23","2018-10-24","Amboseli","786","133","657657");
INSERT INTO bookings VALUES("49","kenya","kenya","kenya@gmail.com","3","2018-10-23","2018-10-24","shimba","435435","34","8790");


DROP TABLE IF EXISTS chatting;

CREATE TABLE `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;



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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("24","Stewart Demich","Demich","7658567","nancy@gmail.com","ertgetgr","ertet","ertret","gfhgj","ertgegt","57567","arabuka.jpg");


DROP TABLE IF EXISTS employee;

CREATE TABLE `employee` (
  `Employee_ID` int(95) NOT NULL AUTO_INCREMENT,
  `Employee_Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Pay_Roll` int(11) NOT NULL,
  `IdNumber` varchar(255) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("4","ouma","ouma","IMG_20160321_121237.jpg","4565","345678");


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
  `Status` varchar(255) NOT NULL,
  PRIMARY KEY (`Gamepark_ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `PostalCode` (`PostalCode`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO gamepark VALUES("7","Kenya","195","80108","kilifi@gmail.com","Amboseli Game park","","90","3600","Amboseli.jpg","Open");


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

INSERT INTO parks VALUES("1","Amboseli National Park","Kilifi County","amboseli.jpg","34","Reserved","3000");
INSERT INTO parks VALUES("2","Mt Elgon","Trans-Nzoia","amboseli.jpg","67","Open","700");


DROP TABLE IF EXISTS payment;

CREATE TABLE `payment` (
  `payment_id` int(255) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Postal_Code` varchar(255) NOT NULL,
  `No_of_people` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `Country` varchar(55) NOT NULL,
  `City` varchar(55) NOT NULL,
  `Phone` varchar(55) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL,
  `Site` varchar(255) NOT NULL,
  `Mpesa` varchar(255) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO payment VALUES("3","Abdirahman Osman","jananalibri@gmail.com","","2522","hargeisa jigjiga yar","SOM","Hargeisa","4138440","67000","99","");
INSERT INTO payment VALUES("4","Stewart Demich","ogutu@gmail.com","35435","54354","5345","Ugannda","thfgh","563644","6456","dgfhfghd","rdbgdbfnhgfh");
INSERT INTO payment VALUES("5","Stewart Demich","ogutu@gmail.com","352523","235235","3552","Ugannda","23525","2352","2343","2352","235252");
INSERT INTO payment VALUES("6","Stewart Demich","ogutu@gmail.com","35435","34535","34535","Ugannda","5435","3453","5345","3453","345353");
INSERT INTO payment VALUES("7","sgdfzgd","ogutu@gmail.com","4645646","465465","fhghf","Ugannda","rtytut","56","657657","hgjgjg","fghfjff");


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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='contain account openning details';

INSERT INTO registration VALUES("3","Test","test@gmail.com","Tourist","28b662d883b6d76fd96e4ddc5e9ba780","2018-08-12");
INSERT INTO registration VALUES("4","nancy","ogutu@gmail.com","Tourist","7b0f81bdd2b24ba32cb27f6c16e6b900","2018-08-12");
INSERT INTO registration VALUES("5","test","test1@gmail.com","Admin","098f6bcd4621d373cade4e832627b4f6","2018-08-12");
INSERT INTO registration VALUES("6","Boscow","boscow@gmail.com","Admin","61d42e8f3d6bc897a840496cae5f3329","2018-08-12");
INSERT INTO registration VALUES("7","sly","sly@gmail.com","Admin","56e3686c8d3f6dca2fb87f271359a88c","2018-08-12");
INSERT INTO registration VALUES("8","Admin","admin@gmail.com","Admin","21232f297a57a5a743894a0e4a801fc3","2018-09-08");
INSERT INTO registration VALUES("9","yes","yes@gmail.com","","a6105c0a611b41b08f1209506350279e","2018-10-23");
INSERT INTO registration VALUES("10","okey","okey@gmail.com","saab","8795c748789888942a34659930cec654","2018-10-23");
INSERT INTO registration VALUES("11","kenya","kenya@gmail.com","Tourist","577e905f157abece95f454ad0b3058cf","2018-10-23");


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
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;



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



