DROP TABLE IF EXISTS `business_settings`;

CREATE TABLE `business_settings` (
  `business_settings_id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` LONGTEXT,
  `status` VARCHAR(10) DEFAULT NULL,
  `value` LONGTEXT,
  PRIMARY KEY (`business_settings_id`)
) ENGINE=MYISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Data for the table `business_settings` */

INSERT  INTO `business_settings` VALUES (4,'currency','','1'),(7,'currency_name','','Dollar'),(8,'exchange','','80'),(21,'currency_format',NULL,'us'),(22,'symbol_format',NULL,'s_amount'),(23,'no_of_decimals',NULL,'2');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` INT(11) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(100) DEFAULT NULL,
  `picture` TEXT NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=INNODB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

INSERT  INTO `category` VALUES (1,'Cosmetics',''),(2,'Soap',''),(3,'Food items',''),(4,'Computer',''),(5,'Test Updated',''),(6,'BATA',''),(7,'Electronics',''),(8,'Heavy Machinery','');

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` VARCHAR(40) NOT NULL,
  `ip_address` VARCHAR(45) NOT NULL,
  `timestamp` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` BLOB NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

/*Table structure for table `coa` */

DROP TABLE IF EXISTS `coa`;

CREATE TABLE `coa` (
  `MAIN_CODE` VARCHAR(1) NOT NULL,
  `SUB_CODE` VARCHAR(2) NOT NULL,
  `TR_HEAD` VARCHAR(4) NOT NULL,
  `HEAD_TITLE` VARCHAR(100) NOT NULL,
  `AMOUNT` FLOAT DEFAULT NULL,
  `EFFECTED_DATE` DATE DEFAULT NULL,
  `UNIQUE_NO` INT(11) DEFAULT NULL,
  PRIMARY KEY (`MAIN_CODE`,`SUB_CODE`,`TR_HEAD`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `coa` */

INSERT  INTO `coa` VALUES ('1','1','00','Assets',100000,NULL,NULL),('1','1','0001','Cash In Hand',5000,NULL,NULL),('1','1','0002','Cash At Bank',5000,NULL,NULL),('1','1','001','Current Assets',10000,NULL,NULL),('1','2','0001','Computer',15000,NULL,NULL),('1','2','002','Fixed Assets',30000,NULL,NULL);

/*Table structure for table `coa_trans` */

DROP TABLE IF EXISTS `coa_trans`;

CREATE TABLE `coa_trans` (
  `VNO` INT(11) NOT NULL,
  `SNO` INT(2) DEFAULT NULL,
  `PART` VARCHAR(500) DEFAULT NULL,
  `DRCR` VARCHAR(1) DEFAULT NULL,
  `TRDATE` DATE NOT NULL,
  `VALDATE` DATE DEFAULT NULL,
  `SUPFLAG` INT(1) DEFAULT NULL,
  `AMOUNT` FLOAT DEFAULT NULL,
  `REFNO` VARCHAR(10) DEFAULT NULL,
  `PAIDTO` VARCHAR(100) DEFAULT NULL,
  `TRANS_TYPE` VARCHAR(2) DEFAULT NULL,
  `MAIN_CODE` VARCHAR(1) NOT NULL,
  `SUB_CODE` VARCHAR(2) NOT NULL,
  `TR_HEAD` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`VNO`,`TRDATE`,`MAIN_CODE`,`SUB_CODE`,`TR_HEAD`),
  KEY `FK_coa_trans_coa_id` (`MAIN_CODE`,`SUB_CODE`,`TR_HEAD`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `coa_trans` */

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `company_id` INT(11) NOT NULL,
  `company_name` VARCHAR(100) DEFAULT NULL,
  `phone_no` VARCHAR(100) DEFAULT NULL,
  `fax_no` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `address` TEXT,
  PRIMARY KEY (`company_id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `company` */

INSERT  INTO `company` VALUES (0,'NOve Global','333','0000','ABCD@YAHOO.COM','795 Folsom Ave, Suite 600\r\nSan Francisco, CA 94107'),(1,'Nove Global','000','000','www.noveglobal.com',NULL),(2,'Distributer of Fauji serial','0912600103','NIL','NIL',NULL),(3,'National Masala jaat','03459050201','Nil','Nil',NULL);

/*Table structure for table `company_information` */

DROP TABLE IF EXISTS `company_information`;

CREATE TABLE `company_information` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `contact` VARCHAR(20) NOT NULL,
  `address` TEXT NOT NULL,
  `website` VARCHAR(100) NOT NULL,
  `logo` VARCHAR(100) NOT NULL,
  `date_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `company_information` */

INSERT  INTO `company_information` VALUES (1,'KANDI Inventory','admin@beb300.com','+923152156845','FF-0300, BEB300 Pvt Ltd, Deans Trade Centre, Peshawar.','http://beb300.com','kandi.png','2018-01-19 11:56:23');

/*Table structure for table `currency_settings` */

DROP TABLE IF EXISTS `currency_settings`;

CREATE TABLE `currency_settings` (
  `currency_settings_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `symbol` VARCHAR(255) NOT NULL,
  `exchange_rate` VARCHAR(255) NOT NULL,
  `status` VARCHAR(10) NOT NULL,
  `code` VARCHAR(20) DEFAULT NULL,
  `exchange_rate_def` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`currency_settings_id`)
) ENGINE=INNODB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `currency_settings` */

INSERT  INTO `currency_settings` VALUES (1,'U.S. Dollar','$','1','no','USD','1'),(2,'Australian Dollar','$','1.3163','ok','AUD','1.30'),(5,'Brazilian Real','R$','3.3226','no','BRL','3.2953'),(6,'Canadian Dollar','$','1.2901','ok','CAD','1.29'),(7,'Czech Koruna','Kc','24.212','no','CZK','20.63'),(8,'Danish Krone','kr','6.6675','no','DKK','6.06'),(9,'Euro','€','0.81','no','EUR','0.81'),(10,'Hong Kong Dollar','$','7.7587','no','HKD','7.85'),(11,'Hungarian Forint','Ft','275.38','no','HUF','253.95'),(12,'Israeli New Sheqel','?','3.7896','no','ILS','3.49'),(13,'Japanese Yen','¥','101.86','no','JPY','106.45'),(14,'Malaysian Ringgit','RM','4.1369','no','MYR','3.86'),(15,'Mexican Peso','$','19.389','no','MXN','18.16'),(16,'Norwegian Krone','kr','8.2509','no','NOK','7.84'),(17,'New Zealand Dollar','$','1.3689','no','NZD','29.15'),(18,'Philippine Peso','?','47.872','no','PHP','52.19'),(19,'Polish Zloty','zl','3.8453','no','PLN','3.41'),(20,'Pound Sterling','£','0.75898','no','GBP',NULL),(21,'Russian Ruble','???','64.936','no','RUB','57.13'),(22,'Singapore Dollar','$','1.3645','no','SGD','1.31'),(23,'Swedish Krona','kr','8.5133','no','SEK','8.36'),(24,'Swiss Franc','CHF','0.97461','no','CHF','0.95'),(26,'Thai Baht','?','34.91','no','THB','31.17'),(27,'Your Currency','?','105.38','no','??',''),(28,'PKR Rupees','Rs','115.63','ok','??','115.63');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customer_id` INT(11) NOT NULL AUTO_INCREMENT,
  `customer_name` VARCHAR(100) DEFAULT NULL,
  `phone_no` VARCHAR(100) DEFAULT NULL,
  `fax_no` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `address` VARCHAR(300) DEFAULT NULL,
  `trn` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

INSERT  INTO `customer` VALUES (1,'Asad','123234','asad@yahoo.com','12121',NULL,NULL),(2,'Tiger Profiles LLC','06-5338449','06-5338440','tiger@gmail.com','Al-Khan, Sharjah, UAE.','100315120400003');

/*Table structure for table `email_settings` */

DROP TABLE IF EXISTS `email_settings`;

CREATE TABLE `email_settings` (
  `id` INT(1) NOT NULL AUTO_INCREMENT,
  `host` VARCHAR(80) COLLATE utf8_unicode_ci NOT NULL,
  `port` INT(3) NOT NULL,
  `email` VARCHAR(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` VARCHAR(128) COLLATE utf8_unicode_ci NOT NULL,
  `sent_email` VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL,
  `sent_title` VARCHAR(150) COLLATE utf8_unicode_ci NOT NULL,
  `reply_email` VARCHAR(150) COLLATE utf8_unicode_ci NOT NULL,
  `reply_title` VARCHAR(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MYISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `email_settings` */

INSERT  INTO `email_settings` VALUES (2,'gator4113.hostgator.com',465,'no-reply@duperty.com','MuhammaD@123','no-reply@duperty.com','Technologicx','no-reply@duperty.com','Technologicx'),(1,'mail.technologicx.com',465,'admin@technologicx.com','saadi123*','admin@technologicx.com','Technologicx','admin@technologicx.com','Technologicx');

/*Table structure for table `employee_profile` */

DROP TABLE IF EXISTS `employee_profile`;

CREATE TABLE `employee_profile` (
  `EMP_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `EMP_NAME` VARCHAR(300) NOT NULL,
  `EMP_ADDRESS` VARCHAR(300) NOT NULL,
  `EMP_PHONE` VARCHAR(300) NOT NULL,
  `EMP_CELL` VARCHAR(300) NOT NULL,
  `EMP_EMAIL` VARCHAR(300) NOT NULL,
  `EMP_PIC` VARCHAR(300) NOT NULL,
  `EMP_GENDER` VARCHAR(11) NOT NULL,
  `EMP_DATE` DATE NOT NULL,
  `CREATED_DATE` DATE DEFAULT NULL,
  `CREATED_USERID` INT(11) DEFAULT NULL,
  `UPDATED_DATE` DATE DEFAULT NULL,
  `UPDATED_USERID` INT(11) DEFAULT NULL,
  PRIMARY KEY (`EMP_ID`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `employee_profile` */

INSERT  INTO `employee_profile` VALUES (1,'Imran Shah','Charsadda','2324030','03339276769','shahmian@gmail.com','employee_pics/3e70faef699d1b5a8c8ddc449fac5988.jpg','MALE','2018-09-01','2018-09-01',1,NULL,NULL);

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `EMP_NO` VARCHAR(20) CHARACTER SET utf8 NOT NULL,
  `EMP_NAME` VARCHAR(40) CHARACTER SET utf8 NOT NULL,
  `EMP_F_NAME` VARCHAR(40) CHARACTER SET utf8 NOT NULL,
  `EMP_CURR_ADDRESS` VARCHAR(500) CHARACTER SET utf8 DEFAULT NULL,
  `EMP_PAR_ADDRESS` VARCHAR(500) CHARACTER SET utf8 DEFAULT NULL,
  `DOB` DATE DEFAULT NULL,
  `CNIC_NO` VARCHAR(16) CHARACTER SET utf8 NOT NULL,
  `APPOINTMENT_DATE` DATE NOT NULL,
  `GENDER` VARCHAR(10) CHARACTER SET utf8 NOT NULL,
  `COUNTRY_ID` INT(11) DEFAULT NULL,
  `PROV_ID` INT(11) DEFAULT NULL,
  `DIV_ID` INT(11) DEFAULT NULL,
  `DIS_ID` INT(11) DEFAULT NULL,
  `BATCH_NO` VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL,
  `ENTRY_TO_GOV` DATE DEFAULT NULL,
  `PIC` VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL,
  `PHONE` VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL,
  `MOBILE_SMS` VARCHAR(40) CHARACTER SET utf8 NOT NULL,
  `MOBILE` VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL,
  `PERSONAL_FILE_NO` INT(11) DEFAULT NULL,
  `MACHINE_ID` INT(10) DEFAULT NULL,
  `MACHINE_NO` INT(2) DEFAULT NULL,
  `REMARKS` VARCHAR(300) CHARACTER SET utf8 DEFAULT NULL,
  `BARCODE` VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL,
  `E_USER_ID` INT(11) DEFAULT NULL,
  `E_DATE_TIME` DATETIME DEFAULT NULL,
  `U_USER_ID` INT(11) DEFAULT NULL,
  `U_DATE_TIME` DATETIME DEFAULT NULL,
  `FLAG` VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `employees` */

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `item_id` VARCHAR(13) NOT NULL,
  `item_name` VARCHAR(100) DEFAULT NULL,
  `category_id` INT(11) DEFAULT NULL,
  `size` VARCHAR(100) NOT NULL,
  `color` VARCHAR(15) DEFAULT NULL,
  `flag` INT(1) NOT NULL,
  `purchase_rate` FLOAT DEFAULT NULL,
  `article_no` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `item` */

INSERT  INTO `item` VALUES ('100000001','Samsung Galaxy S7 Edge - 32GB',7,'121','nnkln',1,100,'1212'),('100000002','Apple MacBook Pro MD101LL-Intel Core i5',4,'12','black',1,200,'A-121'),('100000003','Sony Play Station',7,'','',1,290,'S-001'),('100000004','Nikon D5500 - 24 MP SLR Camera',7,'','',1,900,'N-12900'),('100000005','Bata Men\'s  Sports Shoes',6,'','',1,210,'LS-123'),('100000006','Xtouch Z1 Dual Sim - 16GB',7,'','',1,1050,'X-16GB'),('100000007','Xiomi BlackZ10',4,'9','Black',1,980,'1211');

/*Table structure for table `purchase` */

DROP TABLE IF EXISTS `purchase`;

CREATE TABLE `purchase` (
  `purchase_id` INT(11) NOT NULL,
  `purchase_no` INT(11) NOT NULL,
  `item_id` VARCHAR(13) DEFAULT NULL,
  `category_id` INT(11) DEFAULT NULL,
  `expire_date` DATE NOT NULL,
  `purchase_qty` INT(11) DEFAULT NULL,
  `purchase_amount` FLOAT(11,2) DEFAULT '0.00',
  `purchase_rate` FLOAT(11,3) DEFAULT '0.000',
  `sales_rate` FLOAT(11,2) NOT NULL DEFAULT '0.00',
  `balance` FLOAT(11,2) DEFAULT '0.00',
  PRIMARY KEY (`purchase_id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `purchase` */

INSERT  INTO `purchase` VALUES (1,1,'100000001',7,'2019-02-14',10,1000.00,100.000,0.00,0.00),(2,1,'100000002',4,'2019-02-14',13,2600.00,200.000,0.00,0.00),(3,1,'100000004',7,'2019-02-14',9,8100.00,900.000,0.00,0.00),(4,1,'100000005',6,'2019-02-14',7,1470.00,210.000,0.00,0.00);

/*Table structure for table `purchase_company` */

DROP TABLE IF EXISTS `purchase_company`;

CREATE TABLE `purchase_company` (
  `purchase_no` INT(11) NOT NULL,
  `purchase_date` DATE DEFAULT NULL,
  `vendor_id` INT(11) DEFAULT NULL,
  `company_id` INT(11) DEFAULT NULL,
  `purchase_discount` FLOAT(11,2) DEFAULT '0.00',
  `purchase_amount_total` FLOAT(11,2) DEFAULT '0.00',
  `purchase_status` INT(1) DEFAULT '0',
  `payment_mode` VARCHAR(1) DEFAULT NULL,
  `balance` FLOAT(11,2) DEFAULT '0.00',
  `grand_total` FLOAT(11,2) DEFAULT '0.00',
  `due_amount` FLOAT(11,2) DEFAULT NULL,
  `purchase_user_id` INT(11) DEFAULT NULL,
  `pur_no` VARCHAR(13) DEFAULT NULL,
  PRIMARY KEY (`purchase_no`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `purchase_company` */

INSERT  INTO `purchase_company` VALUES (1,'2019-02-14',3,0,2.00,12906.60,1,NULL,0.00,13170.00,0.00,1,'PUR-12019-02');

/*Table structure for table `purchase_return` */

DROP TABLE IF EXISTS `purchase_return`;

CREATE TABLE `purchase_return` (
  `return_id` INT(11) NOT NULL,
  `purchase_id` INT(11) NOT NULL,
  `purchase_no` INT(11) NOT NULL,
  `return_date` DATE NOT NULL,
  `item_id` VARCHAR(13) DEFAULT NULL,
  `category_id` INT(11) DEFAULT NULL,
  `purchase_qty` INT(11) DEFAULT NULL,
  `return_qty` INT(11) NOT NULL,
  `purchase_amount` FLOAT(11,2) DEFAULT NULL,
  `purchase_rate` FLOAT(11,3) DEFAULT NULL,
  `sales_rate` FLOAT(11,2) NOT NULL,
  PRIMARY KEY (`return_id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `purchase_return` */

/*Table structure for table `route_charges` */

DROP TABLE IF EXISTS `route_charges`;

CREATE TABLE `route_charges` (
  `charge_id` INT(11) NOT NULL AUTO_INCREMENT,
  `source` VARCHAR(100) DEFAULT NULL,
  `destination` VARCHAR(100) DEFAULT NULL,
  `amount` FLOAT(11,2) DEFAULT NULL,
  `date_time` DATETIME DEFAULT NULL,
  PRIMARY KEY (`charge_id`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

/*Data for the table `route_charges` */

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `sales_no` INT(11) NOT NULL AUTO_INCREMENT,
  `sales_date` DATE DEFAULT NULL,
  `customer_id` INT(11) DEFAULT NULL,
  `company_id` INT(11) DEFAULT NULL,
  `sales_discount` INT(11) NOT NULL,
  `sales_amount_total` FLOAT(11,2) DEFAULT NULL,
  `paid` INT(11) NOT NULL,
  `balance` INT(11) NOT NULL,
  `sales_status` VARCHAR(1) DEFAULT NULL,
  `payment_mode` VARCHAR(1) DEFAULT NULL,
  `grand_total` FLOAT(11,2) DEFAULT NULL,
  `invoice_no` INT(11) DEFAULT NULL,
  `payment` VARCHAR(10) DEFAULT NULL,
  `type` VARCHAR(50) DEFAULT NULL,
  `vat` FLOAT DEFAULT NULL,
  PRIMARY KEY (`sales_no`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `sales` */

/*Table structure for table `sales_detail` */

DROP TABLE IF EXISTS `sales_detail`;

CREATE TABLE `sales_detail` (
  `sales_id` INT(11) NOT NULL AUTO_INCREMENT,
  `sales_no` INT(11) DEFAULT NULL,
  `item_id` VARCHAR(13) DEFAULT NULL,
  `category_id` INT(11) DEFAULT NULL,
  `sales_qty` INT(11) DEFAULT NULL,
  `sales_discount` FLOAT(11,2) DEFAULT NULL,
  `sales_rate` INT(11) DEFAULT NULL,
  `sales_amount` FLOAT(11,2) DEFAULT NULL,
  `sales_status` VARCHAR(1) DEFAULT NULL,
  `payment_mode` VARCHAR(1) DEFAULT NULL,
  KEY `sales_id` (`sales_id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `sales_detail` */

/*Table structure for table `sales_return` */

DROP TABLE IF EXISTS `sales_return`;

CREATE TABLE `sales_return` (
  `return_id` INT(11) NOT NULL,
  `sales_no` INT(11) DEFAULT NULL,
  `sales_id` INT(11) NOT NULL,
  `sales_date` DATE NOT NULL,
  `return_date` DATE NOT NULL,
  `item_id` INT(11) DEFAULT NULL,
  `sales_qty` INT(11) DEFAULT NULL,
  `return_qty` INT(11) DEFAULT NULL,
  `sales_rate` FLOAT(11,2) DEFAULT NULL,
  `sales_amount` FLOAT(11,2) DEFAULT NULL,
  `status` INT(11) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `sales_return` */

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `settings_id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(100) DEFAULT NULL,
  `value` TEXT,
  PRIMARY KEY (`settings_id`)
) ENGINE=MYISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `settings` */

INSERT  INTO `settings` VALUES (1,'terms','<p></p><p></p><p></p><ul><li>All approvals (NOCs) related to clearance of underground services will arrange Nove Global.&nbsp;<br></li>\r\n<li>The above-quoted transportation charges are based on the present prevailing rates which should be valid two months. Beyond that transportation, charges may vary.&nbsp;<br></li>\r\n<li>Driver, Trailer &amp; Diesel will be provided by deluxe general transport.&nbsp;<br></li>\r\n<li>Deluxe general transport will not responsible for any kind of natural disaster etc.&nbsp;<br></li>\r\n<li>In the event of adverse weather condition like a sandstorm, strong rain, high wind velocity or any other force majeure, which disable our equipment from working, will not be considered as contract working time.<br></li>\r\n<li>&nbsp;All gate passes and documents for equipment and operation must be provided by Nove Global.&nbsp;<br></li>\r\n<li>Any consequences will mutually decide if not in our quotation or agreement<br></li></ul><p></p><p></p><p></p>');

/*Table structure for table `stock` */

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `stock_no` INT(11) NOT NULL AUTO_INCREMENT,
  `item_id` VARCHAR(13) DEFAULT NULL,
  `category_id` INT(11) DEFAULT NULL,
  `stock_qty` INT(11) DEFAULT NULL,
  `purchase_rate` INT(11) NOT NULL,
  `stock_rate` FLOAT(11,2) DEFAULT NULL,
  PRIMARY KEY (`stock_no`)
) ENGINE=INNODB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `stock` */

INSERT  INTO `stock` VALUES (1,'100000001',7,244,100,110.00),(2,'100000002',4,332,200,210.00),(3,'100000003',7,128,290,335.00),(4,'100000004',7,23,900,1250.00),(5,'100000005',6,24,210,305.00),(6,'100000006',7,15,1050,1380.00),(7,'100000007',4,1,980,1250.00);

/*Table structure for table `usr_group` */

DROP TABLE IF EXISTS `usr_group`;

CREATE TABLE `usr_group` (
  `GROUP_ID` INT(11) NOT NULL,
  `GROUP_NAME` VARCHAR(100) NOT NULL,
  `CREATED_DATE` DATE DEFAULT NULL,
  `CREATED_USERID` INT(11) DEFAULT NULL,
  `UPDATED_DATE` DATE DEFAULT NULL,
  `UPDATED_USERID` INT(11) DEFAULT NULL,
  PRIMARY KEY (`GROUP_ID`),
  UNIQUE KEY `UK_GROUP_NAME` (`GROUP_NAME`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `usr_group` */

INSERT  INTO `usr_group` VALUES (1,'Superadmin','2015-02-27',1,NULL,NULL),(2,'General Manager','2015-02-27',1,NULL,NULL),(3,'Designer','2015-02-27',1,NULL,NULL);

/*Table structure for table `usr_menu` */

DROP TABLE IF EXISTS `usr_menu`;

CREATE TABLE `usr_menu` (
  `MENU_ID` INT(11) NOT NULL,
  `MENU_TEXT` VARCHAR(100) DEFAULT NULL,
  `MENU_URL` VARCHAR(500) DEFAULT NULL,
  `PARENT_ID` INT(11) DEFAULT NULL,
  `SORT_ORDER` INT(11) DEFAULT NULL,
  `SHOW_IN_MENU` INT(11) DEFAULT NULL,
  `IS_ADMIN` VARCHAR(1) DEFAULT NULL,
  `CREATED_DATE` DATE DEFAULT NULL,
  `CREATED_USERID` INT(11) DEFAULT NULL,
  `UPDATED_DATE` DATE DEFAULT NULL,
  `UPDATED_USERID` INT(11) DEFAULT NULL,
  PRIMARY KEY (`MENU_ID`),
  KEY `FK_usr_menu_usr_menu_menu_id` (`PARENT_ID`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `usr_menu` */

INSERT  INTO `usr_menu` VALUES (1,'User Management','#',0,1,1,'1',NULL,NULL,NULL,NULL),(2,'Add User','users/add_user',1,2,1,NULL,NULL,NULL,NULL,NULL),(3,'General Settings','#',0,2,1,NULL,NULL,NULL,NULL,NULL),(4,'Add Menu','generals/addmenu',3,3,1,NULL,NULL,NULL,NULL,NULL),(5,'People','#',0,3,1,NULL,NULL,NULL,NULL,NULL),(9,'List Employees','employees/employee_list',5,6,1,NULL,NULL,NULL,NULL,NULL),(18,'Add Menu','generals/addmenu',1,2,1,NULL,'2016-06-09',1,NULL,NULL),(21,'Add Group','generals/add_group',3,2,1,NULL,'2016-06-16',1,NULL,NULL),(31,'Product','Category/list_category',0,4,1,NULL,'2018-05-06',1,NULL,NULL),(32,'Manage Category','Category/list_category',31,1,1,NULL,'2018-05-06',1,NULL,NULL),(33,'Manage Vendor','vendor/list_vendors',5,2,1,NULL,'2018-05-06',1,NULL,NULL),(34,'Manage Customers','customer/list_customers',5,3,1,NULL,'2018-05-06',1,NULL,NULL),(35,'Purchase','#',0,5,1,NULL,'2018-05-06',1,NULL,NULL),(36,'New Purchase','purchase/new_purchase',35,1,1,NULL,'2018-05-06',1,NULL,NULL),(37,'Purchase History','purchase/purchase_history',35,2,1,NULL,'2018-05-06',1,NULL,NULL),(38,'Sales','#',0,6,1,NULL,'2018-05-06',1,NULL,NULL),(39,'New Sale','sales/new_sale',38,1,1,NULL,'2018-05-06',1,NULL,NULL),(40,'Sales History','sales/sales_history',38,2,1,NULL,'2018-05-06',1,NULL,NULL),(41,'Stock','#',0,7,1,NULL,'2018-05-06',1,NULL,NULL),(42,'List Stock','stock/list_stock',41,1,1,NULL,'2018-05-06',1,NULL,NULL),(43,'List Products','item/list_items',31,2,1,NULL,'2018-05-06',1,NULL,NULL),(44,'Reports','#',0,8,1,NULL,'2018-05-11',1,NULL,NULL),(45,'Purchase Report','reports/purchase',44,1,1,NULL,'2018-05-11',1,NULL,NULL),(46,'Sales Report','reports/sales_report',44,2,1,NULL,'2018-05-11',1,NULL,NULL),(47,'Company Info','Generals/edit_company_info',3,3,1,NULL,'2018-05-11',1,NULL,NULL),(48,'List Companies','company/list_company',5,4,1,NULL,'2018-05-11',1,NULL,NULL),(49,'Currency Settings','Generals/change_currency',3,4,1,NULL,'2019-01-24',1,NULL,NULL);

/*Table structure for table `usr_permission` */

DROP TABLE IF EXISTS `usr_permission`;

CREATE TABLE `usr_permission` (
  `PER_ID` INT(11) NOT NULL,
  `GROUP_ID` INT(11) NOT NULL,
  `MENU_ID` INT(11) NOT NULL,
  `PER_SELECT` VARCHAR(1) NOT NULL,
  `PER_INSERT` VARCHAR(1) NOT NULL,
  `PER_UPDATE` VARCHAR(1) NOT NULL,
  `PER_DELETE` VARCHAR(1) NOT NULL,
  `CREATED_DATE` DATE DEFAULT NULL,
  `CREATED_USERID` INT(11) DEFAULT NULL,
  `UPDATED_DATE` DATE DEFAULT NULL,
  `UPDATED_USERID` INT(11) DEFAULT NULL,
  PRIMARY KEY (`PER_ID`),
  KEY `FK_usr_permission_usr_group_group_id` (`GROUP_ID`),
  KEY `FK_usr_permission_usr_menu_menu_id` (`MENU_ID`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `usr_permission` */

INSERT  INTO `usr_permission` VALUES (1,2,2,'1','1','1','0',NULL,NULL,'2018-05-17',1),(2,2,3,'0','0','0','0',NULL,NULL,'2018-05-17',1),(3,2,4,'0','0','0','0',NULL,NULL,'2018-05-17',1),(4,2,5,'1','0','0','0',NULL,NULL,'2018-05-17',1),(5,2,6,'0','0','0','0',NULL,NULL,'2016-06-16',1),(6,2,9,'1','0','0','0',NULL,NULL,'2018-05-17',1),(7,2,10,'0','0','0','0',NULL,NULL,'2016-06-16',1),(8,2,11,'0','0','0','0',NULL,NULL,'2016-06-16',1),(9,2,12,'1','0','0','0',NULL,NULL,'2016-06-16',1),(10,2,13,'1','0','0','0',NULL,NULL,'2016-06-16',1),(11,2,14,'1','0','0','0',NULL,NULL,'2016-06-16',1),(12,2,15,'0','0','0','0','2015-03-02',1,'2016-06-16',1),(13,2,16,'0','0','0','0','2015-03-02',1,'2016-06-16',1),(14,2,17,'0','0','0','0','2015-03-02',1,'2016-06-16',1),(15,2,18,'0','0','0','0','2015-03-02',1,'2018-05-17',1),(16,2,19,'1','0','0','0','2015-03-02',1,'2016-06-16',1),(17,1,2,'0','0','0','0','2015-03-06',1,'2015-04-15',1),(18,1,3,'1','1','1','1','2015-03-06',1,'2015-04-15',1),(19,1,5,'0','0','0','0','2015-03-06',1,'2015-04-15',1),(20,1,6,'0','0','0','0','2015-03-06',1,'2015-04-15',1),(21,1,9,'0','0','0','0','2015-03-06',1,NULL,NULL),(22,1,10,'0','0','0','0','2015-03-06',1,NULL,NULL),(23,1,11,'0','0','0','0','2015-03-06',1,NULL,NULL),(24,1,12,'0','0','0','0','2015-03-06',1,'2015-04-15',1),(25,1,13,'0','0','0','0','2015-03-06',1,'2015-04-15',1),(26,1,14,'0','0','0','0','2015-03-06',1,'2015-04-15',1),(27,1,15,'0','0','0','0','2015-03-06',1,NULL,NULL),(28,1,16,'0','0','0','0','2015-03-06',1,NULL,NULL),(29,1,17,'0','0','0','0','2015-03-06',1,NULL,NULL),(30,1,18,'0','0','0','0','2015-03-06',1,NULL,NULL),(31,1,19,'0','0','0','0','2015-03-06',1,NULL,NULL),(32,1,21,'1','1','1','1','2015-03-06',1,'2015-04-15',1),(33,1,22,'1','1','1','1','2015-03-06',1,'2015-04-15',1),(34,2,21,'0','0','0','0','2015-03-16',1,'2018-05-17',1),(35,2,22,'1','0','0','0','2015-03-16',1,'2017-10-18',1),(36,2,23,'0','0','0','0','2015-03-16',1,'2017-10-18',1),(37,2,24,'0','0','0','0','2015-03-16',1,'2017-10-18',1),(38,2,25,'0','0','0','0','2015-03-16',1,'2017-10-18',1),(39,1,23,'0','0','0','0','2015-04-15',1,'2015-04-15',1),(40,1,24,'0','0','0','0','2015-04-15',1,'2015-04-15',1),(41,1,25,'0','0','0','0','2015-04-15',1,'2015-04-15',1),(42,1,26,'0','0','0','0','2015-04-15',1,'2015-04-15',1),(43,2,26,'0','0','0','0','2015-09-11',1,'2017-10-18',1),(44,2,27,'0','0','0','0','2015-09-11',1,'2017-10-18',1),(45,2,28,'0','0','0','0','2015-09-11',1,'2017-10-18',1),(46,2,29,'0','0','0','0','2015-09-11',1,'2017-10-18',1),(47,2,1,'1','0','0','0','2016-06-16',1,'2018-05-17',1),(48,2,7,'0','0','0','0','2016-06-16',1,NULL,NULL),(49,2,8,'0','0','0','0','2016-06-16',1,NULL,NULL),(50,2,20,'0','0','0','0','2016-06-16',1,NULL,NULL),(51,3,1,'0','0','0','0','2017-08-01',1,NULL,NULL),(52,3,2,'0','0','0','0','2017-08-01',1,NULL,NULL),(53,3,3,'0','0','0','0','2017-08-01',1,NULL,NULL),(54,3,4,'0','0','0','0','2017-08-01',1,NULL,NULL),(55,3,5,'1','0','0','0','2017-08-01',1,NULL,NULL),(56,3,9,'1','0','0','0','2017-08-01',1,NULL,NULL),(57,3,18,'0','0','0','0','2017-08-01',1,NULL,NULL),(58,3,21,'0','0','0','0','2017-08-01',1,NULL,NULL),(59,2,31,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(60,2,32,'1','1','0','0','2018-05-11',1,'2018-05-17',1),(61,2,33,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(62,2,34,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(63,2,35,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(64,2,36,'0','0','0','0','2018-05-11',1,'2018-05-17',1),(65,2,37,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(66,2,38,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(67,2,39,'0','0','0','0','2018-05-11',1,'2018-05-17',1),(68,2,40,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(69,2,41,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(70,2,42,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(71,2,43,'1','1','0','0','2018-05-11',1,'2018-05-17',1),(72,2,44,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(73,2,45,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(74,2,46,'1','0','0','0','2018-05-11',1,'2018-05-17',1),(75,2,47,'0','0','0','0','2018-05-11',1,'2018-05-17',1),(76,2,48,'1','0','0','0','2018-05-11',1,'2018-05-17',1);

/*Table structure for table `usr_user` */

DROP TABLE IF EXISTS `usr_user`;

CREATE TABLE `usr_user` (
  `USER_ID` INT(11) NOT NULL,
  `USER_NAME` VARCHAR(100) NOT NULL,
  `U_PASSWORD` VARCHAR(500) NOT NULL,
  `EMP_NO` VARCHAR(20) DEFAULT NULL,
  `logged_in` INT(1) DEFAULT NULL,
  `IS_ACTIVE` VARCHAR(1) NOT NULL,
  `GROUP_ID` INT(11) NOT NULL,
  `SUP_ADMIN` VARCHAR(1) DEFAULT NULL,
  `CREATED_DATE` DATE DEFAULT NULL,
  `CREATED_USERID` INT(11) DEFAULT NULL,
  `UPDATED_DATE` DATE DEFAULT NULL,
  `UPDATED_USERID` INT(11) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `UK_USER_NAME` (`USER_NAME`),
  KEY `FK_usr_user_hrm_employees_emp_no` (`EMP_NO`),
  KEY `FK_usr_user_usr_group_group_id` (`GROUP_ID`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/*Data for the table `usr_user` */

INSERT  INTO `usr_user` VALUES (1,'superadmin','90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad','0',NULL,'1',1,NULL,NULL,NULL,'2017-08-08',1),(2,'sameer','90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad','1',NULL,'1',2,NULL,'2015-03-16',1,'2015-09-11',0),(4,'sohail','202cb962ac59075b964b07152d234b70','3',NULL,'1',3,NULL,'2016-08-03',1,NULL,NULL),(5,'0','bb589d0621e5472f470fa3425a234c74b1e202e8','0',NULL,'1',0,NULL,'2018-05-11',1,NULL,NULL);

/*Table structure for table `vendor` */

DROP TABLE IF EXISTS `vendor`;

CREATE TABLE `vendor` (
  `vendor_id` INT(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` VARCHAR(100) DEFAULT NULL,
  `phone_no` VARCHAR(100) DEFAULT NULL,
  `fax_no` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `company_id` INT(11) DEFAULT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `vendor` */

INSERT  INTO `vendor` VALUES (1,'Syed Asad Khan','333','0000','ABCD@YAHOO.COM',0),(2,'Anees','333','0000','ABCD@YAHOO.COM',0),(3,'Imran','1233','12133','admin@yahoo.com',0);