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
  `category` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `park_id` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `entry_fee` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `total_animals` int(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `sites` int(30) NOT NULL,
  PRIMARY KEY (`animals_id`),
  KEY `Category_ID` (`category`),
  KEY `PARK_ID` (`park_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO animals VALUES("1","ELEPHANT","42","WILDLIFE","7","AMBOSELI NATIONAL PARK","60000","amboseli.jpg","70","kilifi","0");
INSERT INTO animals VALUES("2","Hippos","42","Hippos","7","MT ELGON NATIONAL PARK","70000","hippo.jpg","0","","0");
INSERT INTO animals VALUES("3","Lions","42","grape fruit","7","NAKURU NATIONAL PARK","3000","lions.jpg","0","","0");
INSERT INTO animals VALUES("4","Elephants","42","drinks","8","TSAVO NATIONAL PARK","2000","tsavo.jpg","0","","0");
INSERT INTO animals VALUES("5","GAZELLE","43","drinks","8","SAIWA SWAMPS","20000","rino.jpg","0","","0");
INSERT INTO animals VALUES("6","RHINO","43","drinks","8","MALINDI NATIONAL PARK","8000","rino.jpg","0","","0");
INSERT INTO animals VALUES("7","Girraffe","45","cleaning","9","RUMA NATIONAL PARK","2000","ruma.jpg","0","","0");
INSERT INTO animals VALUES("11","Simba","fsdfs","fdsfs","34535","sdfsfsdf","4354","rino.jpg","657","fgthgf","56757");


DROP TABLE IF EXISTS bookings;

CREATE TABLE `bookings` (
  `Reserved_Id` int(30) NOT NULL AUTO_INCREMENT,
  `FullNames` varchar(30) NOT NULL,
  `No_Of_People` varchar(30) NOT NULL,
  `From_Date` varchar(30) NOT NULL,
  `To_Date` varchar(30) NOT NULL,
  `Site` varchar(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Adress` varchar(30) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  PRIMARY KEY (`Reserved_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO bookings VALUES("1","Obadiah","34","2018-07-18 00:00:00","","","","","");


DROP TABLE IF EXISTS chatting;

CREATE TABLE `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO chatting VALUES("6","Nancy Ogutu","Hallo is any budy there?","2014-08-13 12:01:29","127.0.0.1");
INSERT INTO chatting VALUES("16","Obadiah","The project is almost done","2018-07-20 23:10:08","::1");
INSERT INTO chatting VALUES("17","Sly","Mambo","2018-07-21 10:58:17","::1");


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
  `Cust_Id` int(15) NOT NULL,
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
  `Picture` varchar(30) NOT NULL,
  PRIMARY KEY (`Cust_Id`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("17","Abdirahman Ali Abdi","admin","063 4138440","jananalibritish@gmail.com","admin123","admin123","Somalia","Awdal","Hargeisa","767u","");
INSERT INTO customer VALUES("18","Abdirahman Osman","Osman","+252-63-418440","Mucaad@gmail.com","osman123","osman123","Somalia","Awdal","Xalane","Borama201","");
INSERT INTO customer VALUES("19","Janan Ali British","arabsiyo","+252-63-4138440","Arabsiyo@gmail.com","arabsiyo123","arabsiyo123","Somalia","Woqooyi Galbeed","Arabsiyo","Hr103","");


DROP TABLE IF EXISTS employee;

CREATE TABLE `employee` (
  `Employee_ID` int(95) NOT NULL,
  `Employee_Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Pay_Roll` varchar(30) NOT NULL,
  `IdNumber` varchar(30) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("1","Nancy Ogutu","Nancy","nancy","employee.png","","");


DROP TABLE IF EXISTS gamepark;

CREATE TABLE `gamepark` (
  `Gamepark_ID` int(255) NOT NULL,
  `County` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `PostalCode` varchar(55) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Gamepark` varchar(55) NOT NULL,
  `Picture` varchar(30) NOT NULL,
  `animals` varchar(30) NOT NULL,
  `Telephone` varchar(30) NOT NULL,
  `Entry_fee` varchar(30) NOT NULL,
  PRIMARY KEY (`Gamepark_ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `PostalCode` (`PostalCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gamepark VALUES("7","Kenya","Kilifi","195","80108","kilifi@gmail.com","Amboseli Game park","simba.jpg","","","");
INSERT INTO gamepark VALUES("8","","Kilifi","189","801080","kenya@gmail.com","SAIWA SWAMP","rino.jpg","","","");
INSERT INTO gamepark VALUES("9","","Nairobi","01000","01000","nai@gmail.com","Nairobi National Park","hip.jpg","","","");


DROP TABLE IF EXISTS gameparks;

CREATE TABLE `gameparks` (
  `gamepark_id` int(255) NOT NULL,
  `gamepark_name` varchar(123) NOT NULL,
  `Discription` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO gameparks VALUES("42","Fruits","Fressh Fruits","l.png");
INSERT INTO gameparks VALUES("43","Baverages","Soda And Soft Drinks With Ice-Cream","b.png");
INSERT INTO gameparks VALUES("44","Clothes","Clothes Dresses","55.png");
INSERT INTO gameparks VALUES("45","Cleaning Materials ","Toilet And House Cleanning","ab.png");
INSERT INTO gameparks VALUES("42","Fruits","Fressh Fruits","l.png");
INSERT INTO gameparks VALUES("43","Baverages","Soda And Soft Drinks With Ice-Cream","b.png");
INSERT INTO gameparks VALUES("44","Clothes","Clothes Dresses","55.png");
INSERT INTO gameparks VALUES("45","Cleaning Materials ","Toilet And House Cleanning","ab.png");
INSERT INTO gameparks VALUES("42","Fruits","Fressh Fruits","l.png");
INSERT INTO gameparks VALUES("43","Baverages","Soda And Soft Drinks With Ice-Cream","b.png");
INSERT INTO gameparks VALUES("44","Clothes","Clothes Dresses","55.png");
INSERT INTO gameparks VALUES("45","Cleaning Materials ","Toilet And House Cleanning","ab.png");


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
  `order_ID` int(255) NOT NULL,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Postal_Code` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `Country` varchar(55) NOT NULL,
  `City` varchar(55) NOT NULL,
  `Phone` varchar(55) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Dilivery_Address` varchar(75) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL,
  `Currency` int(30) NOT NULL,
  PRIMARY KEY (`order_ID`),
  KEY `Warehouse_ID` (`Warehouse_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO payment VALUES("1","Janan Ali British","jananalibritish@gmail.com","Ar102","Arabsiyo","SRB","Arabsiyo","+252634138440","8","Arabsiyo","","0");
INSERT INTO payment VALUES("2","Abdirahman Osman","j@j.com","i","h","SOM","h","9","8","h","","0");
INSERT INTO payment VALUES("3","Abdirahman Osman","jananalibri@gmail.com","2522","hargeisa jigjiga yar","SOM","Hargeisa","4138440","8","150 street end","","0");


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
  `county` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COMMENT='contain account openning details';

INSERT INTO registration VALUES("1","alex","alex@yahoo.com","customer","admin","2012-12-17","Kilifi","Male");
INSERT INTO registration VALUES("2","deno","deno@yahoo.com","car_owner","c8772b401bc911da102a5291cc4ec83b","2013-01-20","","Male");
INSERT INTO registration VALUES("12","p","p@yahoo.com","customer","p","2013-03-16","","Male");
INSERT INTO registration VALUES("13","j","j@yahoo.com","customer","j","2013-03-18","","Male");
INSERT INTO registration VALUES("14","mark","mark@yahoo.com","customer","m","2013-03-19","","Male");
INSERT INTO registration VALUES("15","tom","tom@yahoo.com","car_owner","tom","2013-03-19","","Male");
INSERT INTO registration VALUES("16","y","y@yahoo.com","car_owner","y","2013-03-19","","Male");
INSERT INTO registration VALUES("17","mary","mary@yahoo.com","customer","b8e7be5dfa2ce0714d21dcfc7d72382c","2013-03-26","","Male");
INSERT INTO registration VALUES("18","m","m@yahoo.com","customer","6f8f57715090da2632453988d9a1501b","2013-03-30","","Male");
INSERT INTO registration VALUES("19","maina","mai@yahoo.com","customer","534b44a19bf18d20b71ecc4eb77c572f","2013-03-30","","Male");
INSERT INTO registration VALUES("20","den","d@yahoo.com","car_owner","32ce9c04a986b6360b0ea1984ed86c6c","2013-03-30","","Male");
INSERT INTO registration VALUES("21","den","denos@yahoo.com","customer","c8772b401bc911da102a5291cc4ec83b","2013-03-30","","Male");
INSERT INTO registration VALUES("22","kimK","kim@yahoo.com","customer","fb1eaf2bd9f2a7013602be235c305e7a","2013-04-17","","Male");
INSERT INTO registration VALUES("23","admin","admin@gmail.com","admin","admi","2018-07-04","","Male");
INSERT INTO registration VALUES("24","yes","yes@gmail.com","customer","a6105c0a611b41b08f1209506350279e","2018-07-21","","Male");
INSERT INTO registration VALUES("25","obadiah","korir@gmail.com","customer","a6105c0a611b41b08f1209506350279e","2018-07-21","","Male");
INSERT INTO registration VALUES("26","yes","oba@gmail.com","car_owner","a6105c0a611b41b08f1209506350279e","2018-07-21","","Male");
INSERT INTO registration VALUES("27","q","q@gmail.com","car_owner","7694f4a66316e53c8cdd9d9954bd611d","2018-07-21","","Male");
INSERT INTO registration VALUES("28","test","test@gmail.com","customer","098f6bcd4621d373cade4e832627b4f6","2018-07-21","","Male");
INSERT INTO registration VALUES("29","yesy","y@gmail.com","customer","a6105c0a611b41b08f1209506350279e","2018-07-21","","Male");
INSERT INTO registration VALUES("30","leo","leo@gmail.com","car_owner","0f759dd1ea6c4c76cedc299039ca4f23","2018-07-21","","Male");
INSERT INTO registration VALUES("31","yes","yes1@gmail.com","customer","a6105c0a611b41b08f1209506350279e","2018-07-21","","Male");


DROP TABLE IF EXISTS reserves;

CREATE TABLE `reserves` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `reserve_name` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `animals` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `fee` int(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO reserves VALUES("1","Amboseli National Park","Kilifi County","amboseli.jpg","34","Active","3000","","");
INSERT INTO reserves VALUES("2","Mt Elgon","Trans-Nzoia","amboseli.jpg","67","Active","700","","");


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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","admin","admin","Obadiah Korir","simbas.jpg","korir400@gmail.com","Obadiah Korir","82179482","admin");


