-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: internship_portal
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'sdfgh','sdfgh','sdfgh',45678,'2016-12-13 09:06:57','2016-12-13 09:06:57'),(2,'12 Main','Westfiled','PA',16950,'2016-12-14 02:57:59','2016-12-14 02:57:59'),(3,'12 Main','Westfiled','PA',16950,'2016-12-14 03:05:54','2016-12-14 03:05:54'),(4,'880 S. Pickett St','Alexandria','VA',22304,'2016-12-14 04:48:13','2016-12-14 04:48:13'),(5,'1789 Madison Avenue','New York','NY',10035,'2016-12-14 05:00:50','2016-12-14 05:00:50'),(6,'8850 Stanford Boulevard','Mineloa','NY',11501,'2016-12-14 05:09:29','2016-12-14 05:09:29'),(7,'34 Main Street','Columbia','Missouri',74888,'2016-12-14 20:21:27','2016-12-14 20:21:27'),(8,'34 Main Street','Columbia','Missouri',74888,'2016-12-14 20:23:53','2016-12-14 20:23:53'),(9,'16 Main','Greenville','SC',29611,'2016-12-15 13:05:19','2016-12-15 13:05:19'),(10,'15 Birch','98101','WA',0,'2016-12-15 13:07:58','2016-12-15 13:07:58'),(11,'8 Main','New Milford','CT',6776,'2016-12-15 13:09:08','2016-12-15 13:09:08'),(12,'34th','New York,',' NY',10001,'2016-12-15 13:11:07','2016-12-15 13:11:07'),(13,'1 Rolling Hill','Hauppauge','NY',11788,'2016-12-15 13:12:01','2016-12-15 13:12:01'),(14,'1 Louis','Baton Rouge','LA',70801,'2016-12-15 13:13:52','2016-12-15 13:13:52'),(15,'1 walnut','Pittsburgh','PA',15237,'2016-12-15 13:17:42','2016-12-15 13:17:42'),(16,'15 Liberty','Fulton','MD',20759,'2016-12-15 13:19:00','2016-12-15 13:19:00'),(17,'123 Main St','Alfred','NY',14802,'2016-12-15 14:26:33','2016-12-15 14:26:33');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `applicant_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicants`
--

LOCK TABLES `applicants` WRITE;
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;
/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `department_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Alfred State College','Information Technology','2016-12-11 22:29:50','2016-12-11 22:29:50'),(2,'Alfred State College','Agriculture & Veterinary Technology','2016-12-11 22:34:10','2016-12-11 22:34:10'),(3,'Alfred State College','Architecture and Design','2016-12-11 22:35:09','2016-12-11 22:35:09'),(4,'Alfred State College ','Automotive Trades','2016-12-11 22:35:37','2016-12-11 22:35:37'),(5,'Alfred State College','Building Trades','2016-12-11 22:36:02','2016-12-11 22:36:02'),(6,'Alfred State College','Business ','2016-12-11 22:36:23','2016-12-12 01:40:55'),(7,'Alfred State College ','Culinary Arts','2016-12-11 22:37:27','2016-12-11 22:37:27'),(8,'Alfred State College','Digital Media & Animation','2016-12-11 22:37:54','2016-12-11 22:37:54'),(9,'Alfred State College ','Electrical Trades','2016-12-11 22:38:13','2016-12-11 22:38:13'),(10,'Alfred State College','English & Humanities','2016-12-11 22:39:14','2016-12-11 22:39:14'),(11,'Alfred State College','Mathematics & Physics','2016-12-11 22:39:31','2016-12-11 22:39:31'),(12,'Alfred State College','Mechanical & Electrical Engineering Technology','2016-12-11 22:39:47','2016-12-11 22:39:47'),(13,'Alfred State College','Nursing','2016-12-11 22:40:04','2016-12-11 22:40:04'),(14,'Alfred State College','Physical & Life Sciences','2016-12-11 22:41:38','2016-12-11 22:41:38'),(15,'Alfred State College','Social & Behavioral Sciences','2016-12-11 22:41:58','2016-12-11 22:41:58');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employers`
--

LOCK TABLES `employers` WRITE;
/*!40000 ALTER TABLE `employers` DISABLE KEYS */;
INSERT INTO `employers` VALUES (2,11,'Alfred State College','https://upload.wikimedia.org/wikipedia/en/3/3f/AStatelogo.png','NY','Alfred','Alfred State, the State University of New York College of Technology located in Alfred, Allegany County, New York, is a public college and one of the eight Colleges of Technology within the SUNY system.','2016-12-12 22:19:14','2016-12-12 22:19:14'),(4,13,'IBM','http://www.kellogg.northwestern.edu/~/media/Images/News_Images/2014/02202014-IBM_article.ashx?h=219&w=390','NY','North Castle','International Business Machines Corporation is an American multinational technology company headquartered in Armonk, New York, United States, with operations in over 170 countries.','2016-12-13 03:29:33','2016-12-13 03:29:33'),(5,16,'Oswego','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQbPIZ0oevgKbF9K-wfOeERhoKtEIH-qwdqnAW4TNlNuHNHEzvsVswKyZU','NY','Oswego','State University of New York at Oswego, also known as SUNY Oswego and Oswego State, is a public college in the City of Oswego and Town of Oswego, New York, on the shore of Lake Ontario.','2016-12-13 23:31:57','2016-12-13 23:31:57'),(7,17,'RouteSmart Technologies','http://www.routesolutions.com/images/routesolutions/logo/routesmart_logo.png','NY','Mineola','Leading organizations in the newspaper, postal and parcel delivery, public works and utilities industries have to come to rely on RouteSmart Technologies to solve their complex routing problems.','2016-12-14 04:03:22','2016-12-14 04:03:22'),(8,18,'Madison Avenue Physicians, PC','https://sa1s3.patientpop.com/assets/images/provider/photos/1365952.jpg','NY','New York','We are a small, multi-specialty office looking for an optometrist who has experience and can see patients independently for primarily medical eye exams. ','2016-12-14 04:36:01','2016-12-14 04:36:01'),(9,19,'BoatU.S.','http://www.marinemaxvacations.com/wp-content/uploads/2015/02/BoatUS-LOGO.jpg','VA','Alexandria','We are the nation\'s largest organization of recreational boat owners, with over half a million dues-paying Members.','2016-12-14 04:43:05','2016-12-14 04:43:05'),(10,31,'Enke\'s Cabin','<33','NY','Alfred','International Business Machines Corporation is an American multinational technology company headquartered in Armonk, New York, United States, with operations in over 170 countries.','2016-12-15 14:22:07','2016-12-15 14:22:07');
/*!40000 ALTER TABLE `employers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internships`
--

DROP TABLE IF EXISTS `internships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internships` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `requirements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internships`
--

LOCK TABLES `internships` WRITE;
/*!40000 ALTER TABLE `internships` DISABLE KEYS */;
INSERT INTO `internships` VALUES (6,'2016-12-14 03:05:54','2016-12-14 03:05:54',3,'Share this Job Apprentice - Start  Apply now  Date: Nov 21, 2016  Location: Westfiled, PA, US, 16950  Company: UGI Utilities, Inc  Job Summary  Apprentice Start – New in trade; primary focus will be on safety and on the job training.  Employees will receive Operator Qualification training on a limited number of Covered Tasks as outlined in the Operator Qualification Progression Plan (OQ Progression Plan).  Any employee who does not hold a commercial driver’s license (CDL) on the day of employment, is required to obtain one within the first six months of employment if their operations center has vehicle(s) requiring one.  Progress through the three steps of Apprentice depends on good performance on-the-job and achieving qualifying scores.  Failure to progress to the Journeyman position will be cause for termination.   Incumbent employees who have already progressed through the Apprentice levels will be brought in at their present level.    Knowledge & Skills  Knowledge of equipment oper','Apprentice - Start','','',11),(7,'2016-12-14 04:48:13','2016-12-14 04:48:13',4,'BoatU.S., a part of GEICO and the Berkshire Hathaway family of companies, is looking for a Business Development Coordinator at our Headquarters in Alexandria, Virginia.','Business Development Coordinator','','',19),(8,'2016-12-14 05:00:50','2016-12-14 05:00:50',5,'We are a small, multi-specialty office looking for an optometrist who has experience and can see patients independently for primarily medical eye exams.  This includes post operative examinations, glaucoma and diabetic screenings, long term care, and routine eye patient care.  ','Optometrist ','','',18),(9,'2016-12-14 05:09:29','2016-12-14 05:09:29',6,'RouteSmart Technologies is looking for a .Net Application Developer for a full-time career position based in Mineola, Long Island.','.Net Application Developer','','',17),(10,'2016-12-14 20:23:53','2016-12-14 20:23:53',8,'An Application Development Intern with MidwayUSA is responsible for assisting in providing support to internal stakeholders by writing, installing and maintaining software applications and writing reports on demand using industry best practices. \r\n \r\n Ideal candidates should have knowledge of application development practices and be familiar with OOP, as well as MS Visual Studio, C#, HTML, ASP.net & SQL.  In addition, an understanding of user interface design and source control as well as software management is needed. ','Application Development Intern','To qualify for an internship with MidwayUSA, applicants must meet the following criteria:\r\n\r\n1.  The intern should be within 12 months of completing all requirements for graduation from an accredited program. \r\n2. Able to work approximately 16 hours per w','MS Visual Studio, C#, HTML, ASP.net & SQL.',11),(11,'2016-12-15 13:05:19','2016-12-15 13:05:19',9,'This individual will be responsible for supporting the JavaSpring / Predix application development within a small team. Primary focus will be working in Python/Java code, connecting and integrating data requests from Oracle/SQL Server and PostgreSQL databases in support of Spring/Predix applications, REST/Micro Service development and connecting engineering analytics code within the client internal and cloud infrastructures. Much of the work will be “figuring out how to do something” within the Spring/AWS/Predix environments.','Software Engineer-Backend Programmer ','Experience with Oracle, SQL Server, PostgreSQL databases including development of Queries, Views and Procedures.\r\nExperience in coding applications in Python/Java and the support to Front End Applications\r\nExperience in PL/SQL development and deployment\r\n','Required education:\r\n\r\nBachelor\'s\r\nRequired experience:\r\n\r\nSoftware Engineering: 3 years',11),(12,'2016-12-15 13:07:58','2016-12-15 13:07:58',10,'Don’t have a CS degree? No problem. \r\n\r\nLaunchCode offers you an on-ramp to a paid programming apprenticeship at one of hundreds of companies including MasterCard, Zumba, Carnival Cruise Lines, Panera, Scottrade, and even Riot Games.   LaunchCode is a non-profit that helps people from non-traditional coding education backgrounds get jobs in tech and helps employers tap diverse sources of tech talent.','Entry Level Software Developer','Familiarity with an at least one imperative (Java, JavaScript, PHP, C#, Objective-C, C/C++, Python, Ruby, etc.) or functional language (Haskell, Scala, F#, Clojure, etc). HTML/CSS alone are not sufficient\r\nKnowledge of web/mobile frameworks or SDKs comple','Over 4 out of 5 LaunchCode apprentices get offered full-time employment.\r\nOn average last 84 days (longer or shorter depending on how hard you work).\r\nAverage starting salary after apprenticeship period $50,000',11),(13,'2016-12-15 13:09:08','2016-12-15 13:09:08',11,'Fairfax Data Systems is seeking self-motivated and driven entry level developer to assist in developing complex software solutions for Fairfax’s clients. This position is responsible for assisting in the development, maintenance, and support of .Net (C# or VB.Net) and Java/J2EE applications. As an entry level developer, you will help build skills required in all phases of many different kinds of projects, focusing on many different technologies, including.Net and Java/J2EE Development, MS SQL, Web Services and many more cutting edge technology platforms and tools. You collaborate with project teams to turn business requirements into detailed design specifications, and then build, enhance and test systems to meet their needs. Our entry level developers assist in preparation of flowcharts diagrams, create program code per specifications, as well as testing, refining, and documenting programs. Systems Administration (related to FileNet) responsibilities may be assigned from time to time, ','Entry Level Developer - Fairfax Data Systems','Experience/Skills: Bachelor’s degree in Computer Science, MIS or related field desired \r\n\r\nComputer Background \r\n\r\nAble to manage time effectively Ability to stay focused while performing heads-down work Self-starting with a strong work ethic Desire to wo','Bachelor’s in Computer Science or related field is strongly preferred Basic knowledge of object oriented analysis, design, and programming Must possess a strong desire to learn and work with different programming languages like .Net \r\n\r\n(C#, VB.Net/gsp.ne',11),(14,'2016-12-15 13:11:07','2016-12-15 13:11:07',12,'\r\nRAB Lighting is growing rapidly and is seeking a Junior Software Developer who will be responsible for development and maintenance of software projects. The ideal candidate will be versed in common web languages, interested in exploring new languages, frameworks and enjoys diving into problems and working across business units to create software that innovates and makes work easier. \r\n','Jr. Software Developer - RAB Lighting','Develop software and maintain current software deployments\r\nPerform testing / debugging of current and updated software\r\nManage project requirements and create project documentation','2+ years’ experience in Web programming (HTML, CSS, JavaScript)\r\n2+ years’ experience in PHP programming (object oriented and functional)\r\nExperience with distributed DVCS (GIT, mercurial)\r\nAngular, jQuery, YUI, mootools or other JavaScript frameworks\r\nMo',16),(15,'2016-12-15 13:12:01','2016-12-15 13:12:01',13,'\r\nWe are a Hauppauge (Long Island) based research & development company which develops and commercializes robotics technology for the energy industry. We have an immediate need to add a valued member to our research and development team. This is a unique opportunity to work with very smart and creative people on interesting projects in a dynamic environment.\r\n\r\nWe are currently seeking a detail oriented, proficient software engineer to develop and implement graphical user interfaces and supervisory control algorithms for a wide variety of robotic devices.\r\n\r\nThe ideal candidate will have experience successfully completing complex projects, will be capable of handling a diverse task load, and will be ready to take on new and interesting challenges daily. A positive, team-oriented, and proactive attitude is essential.\r\n\r\nPlease respond via apply button with your resume and a brief description of yourself, what makes you unique, and any hobbies or “extracurricular” activities you do that ','Software Engineer','Software development of intuitive front end graphical user interfaces and supervisory control using the C# programming language.\r\nExperience with Windows Presentation Foundation (WPF).\r\nExperience with Windows Communication Foundation (WCF).\r\nMonitoring a','S/MS in Electrical Engineering, Computer Engineering, or Computer Science.\r\nA minimum of 5 years of professional experience.\r\nExperience programming in C# using the Microsoft Visual Studio development environment.\r\nKnowledge of CANopen networking.\r\nExperi',16),(16,'2016-12-15 13:13:52','2016-12-15 13:13:52',14,'Indeed hire has partnered with eQHealth a non-profit population health management and healthcare IT solutions company that touches millions of lives every year. There high-tech and high-touch offerings include innovative medical management systems, face to face community care coordination services, utilization review, clinical data integration and business intelligence analytical reporting – all focusing on increased quality outcomes and optimization of provider and payer networks. eQHealth serves a variety of entities across the US, including federal, state and commercial clients.','C# Software Developer - EQ Health Solutions','ranslate business requirements into technical solutions.\r\nAssist with defining development work plans.\r\nDesign, develop, & deploy application components.\r\nPerform technical design and code reviews.\r\nCommunicate development status and escalate issues to ma','Minimum of 5 years relevant work experience in object oriented relational database development, both on Windows and Web platforms.Experience in supervision or project management a plus.\r\n\r\nSpecial Skills\r\nBeneficial\r\nAdvanced working experience with C #.N',16),(17,'2016-12-15 13:17:42','2016-12-15 13:17:42',15,'Data Warehouse Consultants (DWC), LLC is a consulting firm based in Pittsburgh, Pennsylvania focusing on business intelligence and data warehouse projects. We provide services in strategy, design, architecture, development and implementation of data warehouse and other business intelligence solutions. Our superior expertise on a focused market segment allows us to provide well-rounded professionals for business intelligence needs in any industry.\r\n\r\nDetailed Description: DWC is currently seeking to fill a senior consultant position. The position requires a strong leader who is comfortable working directly with the client throughout the SDLC in a technical environment. Applicants must have previous consulting experience .This is an excellent position for a Big 4 consultant who is looking to make a stable home in Pittsburgh.','Software Engineer - Data Warehouse Consultants, LLC','Work directly with the client to define project requirements\r\nCollaborate with DWC designers in order to design the database, programs, and processes based on the client requirements\r\nParticipate in, and manage the development, testing, and implementation','2-4 years of project experience working in a technical, database driven environment\r\nA minimum of 2 years consulting experience (Big 4 consulting experience is desired)\r\nDatabase expertise (Oracle / SQL Server)\r\nExperience reading and writing SQL Queries\r',19),(18,'2016-12-15 13:19:00','2016-12-15 13:19:00',16,'M3D is looking for an embedded software engineer who is interested in bringing to life capabilities never-before-seen in desktop, consumer-accessible 3D printing.\r\n\r\nAs the firmware/embedded software engineer, you will be responsible for design, development and test planning of embedded software and firmware that controls entire systems of actuators and sensors for 3D printing applications.  You will assist in product design and architecture development, and will support and help develop software requirements documents, test plans and schedules.  It\'s expected you\'ll be an excellent collaborator on our team, but will also need to show skillful ownership and self-direction when tackling independent projects.','Firmware/Embedded Software Engineer','A MS degree in Computer Science, Software Engineering, Robotics, Mechatronics or highly relevant field, or a BS degree with 4+ years of relevant work experience\r\n\r\nExpert in C/C++, with ARM targets a major plus\r\n\r\nExperience interfacing with a multi-disci','These aspects are not strictly required to be considered for this role, but preference may be given to candidates who additionally have:\r\n\r\nExperience in designs heavily reliant on USB, wireless communications (802.11, Bluetooth) and SPI\r\n\r\nExperience wor',19);
/*!40000 ALTER TABLE `internships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `majors`
--

DROP TABLE IF EXISTS `majors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `majors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `major_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `majors`
--

LOCK TABLES `majors` WRITE;
/*!40000 ALTER TABLE `majors` DISABLE KEYS */;
INSERT INTO `majors` VALUES (1,'Application Software Developme','2016-12-11 23:54:36','2016-12-11 23:54:36',1),(2,'Web Development','2016-12-12 00:07:22','2016-12-12 00:07:22',1),(3,'Network Admin','2016-12-12 00:07:40','2016-12-12 00:07:40',1),(4,'Security Admin','2016-12-12 00:07:53','2016-12-12 00:07:53',1),(5,'Agricultural Technology ','2016-12-12 00:09:21','2016-12-12 00:09:21',2),(6,'Veterinary Technology ','2016-12-12 00:10:58','2016-12-12 00:10:58',2),(7,'Agricultural Business ','2016-12-12 00:11:33','2016-12-12 00:11:33',2),(8,'Architectural Technology ','2016-12-12 00:12:08','2016-12-12 00:12:08',3),(9,'Architecture ','2016-12-12 00:12:43','2016-12-12 00:12:43',3),(10,'Building Trades: Building Cons','2016-12-12 00:14:09','2016-12-12 00:14:09',3),(11,'Autobody Repair ','2016-12-12 00:14:43','2016-12-12 00:14:43',4),(12,'Automotive Service Technician ','2016-12-12 00:15:06','2016-12-12 00:15:06',4),(13,'Construction Engineering Techn','2016-12-12 00:16:23','2016-12-12 00:16:23',5),(14,'Construction Management ','2016-12-12 00:16:46','2016-12-12 00:16:46',5),(15,'Business Administration ','2016-12-12 00:17:20','2016-12-12 00:17:20',6),(16,'Construction Management ','2016-12-12 00:18:30','2016-12-12 00:18:30',6),(17,'Culinary Arts ','2016-12-12 00:19:06','2016-12-12 00:19:06',7),(18,'Culinary Arts: Baking, Product','2016-12-12 00:24:19','2016-12-12 00:24:19',7),(19,'Digital Media and Animation ','2016-12-12 00:24:45','2016-12-12 00:24:45',8),(20,'Drafting/CAD ','2016-12-12 00:25:17','2016-12-12 00:25:17',8),(21,'Electrical Construction and Ma','2016-12-12 00:25:42','2016-12-12 00:25:42',9),(22,'Electrical Engineering Technol','2016-12-12 00:26:08','2016-12-12 00:26:08',9),(23,'Human Services ','2016-12-12 00:27:02','2016-12-12 00:27:02',10),(24,'Human Services Management ','2016-12-12 00:27:22','2016-12-12 00:27:22',10),(25,'Mechanical Engineering Technol','2016-12-12 00:28:55','2016-12-12 00:28:55',11),(26,'Motorcycle and Power Sports Te','2016-12-12 00:29:22','2016-12-12 00:29:22',12),(27,'Motorsports Technology (AOS)','2016-12-12 00:29:42','2016-12-12 00:29:42',12),(28,'Mechanical Engineering Technol','2016-12-12 00:29:58','2016-12-12 00:29:58',12),(29,'Nursing ','2016-12-12 00:30:33','2016-12-12 00:30:33',13),(30,'Radiologic Technology ','2016-12-12 00:31:02','2016-12-12 00:31:02',13),(31,'Pre-Environmental Science and ','2016-12-12 00:31:21','2016-12-12 00:31:21',14),(32,'Forensic Science Technology ','2016-12-12 00:32:17','2016-12-12 00:32:17',14),(33,'Health Information Technology ','2016-12-12 00:37:30','2016-12-12 00:37:30',15);
/*!40000 ALTER TABLE `majors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_12_11_022146_create_address_table',2),('2016_12_11_023601_create_department_table',2),('2016_12_11_023819_create_major_table',3),('2016_12_11_025528_create_student_table',3),('2016_12_11_030038_create_employer_table',3),('2016_12_11_030456_create_applicant_table',3),('2016_12_11_031341_create_internship_table',4),('2016_12_11_031856_create_resume_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resumes`
--

DROP TABLE IF EXISTS `resumes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resumes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `document` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `document_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resumes`
--

LOCK TABLES `resumes` WRITE;
/*!40000 ALTER TABLE `resumes` DISABLE KEYS */;
INSERT INTO `resumes` VALUES (1,'/home/ubuntu/workspace/project/public/Topic Analysis - Meteor.docx16161616:07:12:14.docx','','2016-12-14 07:03:14','2016-12-14 07:03:14',24),(2,'/home/ubuntu/workspace/project/public/final-essay-v2.docx16161616:07:12:57.docx','','2016-12-14 07:12:57','2016-12-14 07:12:57',25),(3,'/home/ubuntu/workspace/project/public/TopicAnalysis-MEANstack.docx16161616:07:12:57.docx16161616:07:12:57.docx','','2016-12-14 07:19:57','2016-12-14 07:19:57',26),(4,'/home/ubuntu/workspace/project/public/TopicAnalysis-Meteor16161616:07:12:40.docx.docx16161616:07:12:40.docx','TopicAnalysis-Meteor16161616:07:12:40.docx.docx','2016-12-14 07:24:40','2016-12-14 07:24:40',27),(5,'/home/ubuntu/workspace/project/public/resumes/TopicAnalysis-Meteor16161616:07:12:14.docx','TopicAnalysis-Meteor16161616:07:12:14.docx','2016-12-14 07:26:14','2016-12-14 07:26:14',28),(6,'/home/ubuntu/workspace/project/public/resumes/CISY8403AnalysisTopics16161616:11:12:49.doc','CISY8403AnalysisTopics16161616:11:12:49.doc','2016-12-14 23:44:49','2016-12-14 23:44:49',29),(7,'/home/ubuntu/workspace/project/public/resumes/CodingSecurelylinks(1)16161616:02:12:15.docx','CodingSecurelylinks(1)16161616:02:12:15.docx','2016-12-15 14:11:15','2016-12-15 14:11:15',30);
/*!40000 ALTER TABLE `resumes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `college_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (3,'2016-12-13 21:38:00','2016-12-13 21:38:00',15,2,'Alfred State College','Alfred','NY'),(5,'2016-12-14 05:53:43','2016-12-14 05:53:43',22,3,'Alfred State College','Alfred','NY'),(6,'2016-12-14 06:53:31','2016-12-14 06:53:31',23,7,'Alfred State','Alfred','New York'),(7,'2016-12-14 07:03:14','2016-12-14 07:03:14',24,8,'ASTATE','alfred','NY'),(8,'2016-12-14 07:12:57','2016-12-14 07:12:57',25,9,'asda','asdasd','asdasds'),(9,'2016-12-14 07:19:57','2016-12-14 07:19:57',26,1,'asldak','lkasldk','lkalsdasd'),(10,'2016-12-14 07:24:40','2016-12-14 07:24:40',27,8,'asdas','alfred','NY'),(11,'2016-12-14 07:26:14','2016-12-14 07:26:14',28,5,'asdasdas','dasdasdas','dasdasd'),(12,'2016-12-14 23:44:49','2016-12-14 23:44:49',29,22,'Alfred State College','Alfred','NY'),(13,'2016-12-15 14:11:15','2016-12-15 14:11:15',30,1,'Alfred State College','Alfred','NY');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,1,'Admin User','admin@gmail.com','$2y$10$cR6MJ6ZNtfwPdhxGgnXRWe2QfnFPHBX8iRenFX0kQKlQLYLEYN8rq','w5mHQ9Hq3ZCdc1CjKanbz6pZJON4iKGRdijvOMqNXYakN0RExPyw3sFtBwaS','2016-12-11 20:55:15','2016-12-15 13:02:05'),(4,2,'Sean Skiver','seanskiver@gmail.com','$2y$10$cy/EezwpM7SmEJfBS2JH1eeFl/Ajo4n7397O5WHxPcpqZ90Ysp7K.','EsJaECXt8JePwFNxhj0xU9BFaQO2DnpSTcJUekCk195xPty4oN4vzBoGB953','2016-12-12 01:43:48','2016-12-12 01:58:50'),(10,3,'Test1','test1@gmail.com','$2y$10$cWExdRWSwPep5Bk.OAZF9u2x2rvUrSgolZaemnHPB8vwFBJsuMjCG','aBq9svY8omp9gU8TV4vhJZqyj6gZrkGMrfCPUPzW0miBqoJmYUUOTtofKv6H','2016-12-12 06:34:52','2016-12-12 07:11:37'),(11,3,'Serigne Employer','employer@gmail.com','$2y$10$NnMY2oU//xosBQypWhxTq.//jhcsgKnUFJDVrN2usJTP0LpwI93UG','0kgeqmT4B1uTwYdgQshmJCe9qxAIw3LgYLOu2ccJYsOlbsvRRDrQjzdsaoXz','2016-12-12 22:11:17','2016-12-15 13:09:19'),(12,3,'Employer','employer@employer.com','$2y$10$z3pidn23L3hjRRb80/bt3uiCn9k2/yHK18KRDvnxjibJQOYxdszAS','nA9mLzKH1sUvwQ9FmI9c0RYkNWYBgbok31OiK7jWTLH7zPBZxZVufPD5XL8v','2016-12-13 02:47:15','2016-12-14 07:00:34'),(13,3,'New Employer','new@gmail.com','$2y$10$J0jYGnn6liIYyIvFxr8/8ey2lSRWOuAb8hwTZojpuev7FX//p3b/y','f2xS3T8cs0TlkQVifY7g0mtV2Y4N8DBtGPRJFCJnNAANmDgvdYWeLdLmZkOa','2016-12-13 03:27:21','2016-12-13 07:08:26'),(14,2,'Testing Student','testing@gmail.com','$2y$10$1KsA6IkzhG3VdeCAoNJNl.XP/Iqw5rUk4EuhA0slv.f/88f6T9p1q','csV5xFyVnteWIWommbl0Nv8hXpK9p63uvLniiMJ2EP2cKN2EeQOKEM3fE3h7','2016-12-13 07:10:54','2016-12-15 13:14:42'),(15,2,'Student Account','student@gmail.com','$2y$10$/w1ezP/cq/Xm40qkJZ5Sy.TPTA/HYayVri03n6uYOHmB9W2mQb6NK','PFEx6BgOOOGq0YSWOPSuLeTmU73EPbcpKYuRcnvfNIdQf4Qu6d86Iy8wUuXd','2016-12-13 21:37:30','2016-12-14 17:48:42'),(16,3,'Employer 2','employer2@gmail.com','$2y$10$bNMVOFfnesIwspIfY1ahPuYpScERb2m6hqfnUuOqJfDzk2UWyyiay','3Sq6JmvUR8WpGt76SLEEljjCIBjBBHUJ0B4Rk8NmCVVH5NOhPYWrUJm95C9n','2016-12-13 23:29:02','2016-12-15 13:13:57'),(17,3,'RouteSmart Technologies','www.bownegroup@gmail.com','$2y$10$eYDG4dIqw1OjHdtKjlaDBuu8o98ekmmopKvk0Qm/9HGO039phzfaO','vbUDo2pYvvyhJilPBEvwSCckCYowlhAL3y7sD4Ekv3vWpYpQ1pwGmGtu7DQm','2016-12-14 03:45:44','2016-12-14 05:10:02'),(18,3,'Madison Avenue Physicians, PC','dfelicianomd@yahoo.com','$2y$10$RNsF3GkxN5bFSeSm93LZ1.lYxE9BvdKkAFPl72GohnKcWmzosWOJu','fSRmLobkJPdIv1IzOYFF3UYKoxYuTKZ92nlRXz7bngbAT2IKYywvTlQGEow2','2016-12-14 04:33:33','2016-12-14 05:02:06'),(19,3,'Boat U.S.','HRMaureen@Boatus.com','$2y$10$4g3/QAnbthesF/8n9/zoG.gilGNtZoGdO2iPpYzwXpSmlF09jh8AK','JjbK1YUtphkDbPGLk64eZRGADow7JZIgERUmCHbzsq5nO4xuc4mwIgxrLdVU','2016-12-14 04:39:06','2016-12-15 13:19:22'),(22,2,'Jack Donagree','donaj@alfredstate.edu','$2y$10$7GPJuTYas7EuGPmCcVW1l.oPGoYot4jcpoV6Tz8CUGTRuTrI2sZuG','kQNUvCZ5MqCYrHtt7ZHWSFAGO3RWz2Qf0JQxcPvBxfM0OBTfLPEyHC4oaYfY','2016-12-14 05:47:23','2016-12-15 13:15:10'),(23,2,'Testing','test@test.com','$2y$10$1e7Kc7MX1pjD7PJfBjm7EeTPosf7oY8mhmmPxnzyBGyXfp3frlNH6','68C3nkV3V9QcBCLH0PZrYX9Va3z4ypAKM4ofnUy7afabznmihMsxNCXUPMfC','2016-12-14 06:52:40','2016-12-14 07:02:09'),(24,2,'Test testest','test@asdflksdf.com','$2y$10$ajmEbrnfyPeb4MbkhVdPRe7dd12ZBJX5rFDGHt8zMPbIzzd0vQYm6','BdLtoWJvcVLwCB7Sn4RoMtjrEFIodBUKKby0fCiSLtJ6aCBmMSKI07vrzfk1','2016-12-14 07:02:58','2016-12-14 07:12:36'),(25,2,'asdasdasdasdasd','sdad@asdas.com','$2y$10$wkf2wIx1/WDbVBDYVb04JeGErMCo0w7Bh.tovlH7ZdnUPknT/xM8m','SjlPuzry6OcRBLfeDtEnmumOZiZOLQGeZKRiYF94cL3IwG2giNJp0KNd0Ads','2016-12-14 07:12:47','2016-12-14 07:19:33'),(26,2,'asdasd','asdsa@asdas.com','$2y$10$YjnIkel4rBpGybLXJzbBU.YmuX9WdT7QHz8.19q9Lhk2gQwfPdq2e','jytQwB2aqpb1Dt2bjblOVvxxACz9kfUEouPdYx6nNlqenQaT6b0ruMCoo8jI','2016-12-14 07:19:45','2016-12-14 07:23:27'),(27,2,'asdasd','asdad@aldk.aosd','$2y$10$YxJSRtZiGI7RtHpZ9N63pOwC.6FV0lrvVa2cuJebbiVqYQTfSiP5O','Ln3sgX7q961R7asfVcrTw4cWOuhpEPM1wpJaJn3mT9O1yEOsJ0Wvh29vBaLP','2016-12-14 07:24:30','2016-12-14 07:25:30'),(28,2,'NAME','EMAIL@masd.com','$2y$10$0PtQeYAeuftSxz05yexQneJtXcMvHxwXk8CMO91JB5h5PjQUFQPF.','ckvfp9LmdKa5ks1mKD4Ixcdpwe4ZiBvs9MZDcXrjckYaHx0hvbGGeWjttEzV','2016-12-14 07:25:58','2016-12-15 13:14:25'),(29,2,'test','test@gmail.com','$2y$10$Q/0hShKd4mwJFjBpC8F.deAZZEGxB19VBwFLZHz0Cv0oIED4U4B2C','mE86blN0XKVgFv7t3OA7tu7QUC8QnKsONh27jT9p3KPE6TvtzlGlta7bKTxa','2016-12-14 23:44:19','2016-12-14 23:47:14'),(30,2,'Evan Enke','evan@evan.com','$2y$10$OgLTsrTYeYxwMkJWnN61beiT9BPKJ26YLAfVe/GGEV1PVSmp3hGey','RE7gD9YnbSxbYaCistZx6EJnhHB0pFQ3b9aKP7fe0fNNAjlf1tmgwSqHxebw','2016-12-15 14:10:05','2016-12-15 14:29:51'),(31,3,'Enke Cabin','enke@evan.com','$2y$10$L2nbAyMT5sGongs5IR8dgedNQZWFD9mI84U5q6en1n7rMjkVBmpX2','99eRLSroVwKNNGDlxpGCXIHeM9fsywgYZnPvBM9mRGH2TFVZFQtLwNO3J9mG','2016-12-15 14:16:57','2016-12-15 14:28:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-15 16:05:24
