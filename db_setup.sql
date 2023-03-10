-- CREATE database bisu_ais;
-- USE bisu_ais;

--
-- Table structure for table courses
--
CREATE TABLE courses (
  Course_Key int(10) unsigned NOT NULL auto_increment,
  Course_Code char(15) NOT NULL,
  Course_Name char(255) NOT NULL,
  Department char(10) NOT NULL,
  PRIMARY KEY  (Course_Key),
  UNIQUE KEY tbl_unique (Course_Code)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table batches
--
CREATE TABLE batches (
  Batch_Key int(10) unsigned NOT NULL auto_increment,
  Course_Key int(10) unsigned NOT NULL,
  Batch char(15) NOT NULL,
  PRIMARY KEY  (Batch_Key),
  UNIQUE KEY tbl_unique (Batch, Course_Key),
  KEY tbl_index1 (Course_Key)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table announcements
--
CREATE TABLE announcements (
  Annoucement_Key int(10) unsigned NOT NULL auto_increment,
  Time_Stamp int(10) NOT NULL,
  Announcement_Code char(32) NOT NULL,
  Announcement text NOT NULL,
  PRIMARY KEY  (Annoucement_Key),
  UNIQUE KEY tbl_unique (Announcement_Code)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table alumni
--
CREATE TABLE alumni (
  Alumni_Key int(10) unsigned NOT NULL auto_increment,
  Batch_Key int(10) unsigned NOT NULL,
  First_Name varchar(100) NOT NULL,
  Middle_Name varchar(100),
  Last_Name varchar(100) NOT NULL,
  PRIMARY KEY  (Alumni_Key),
  UNIQUE KEY tbl_unique (Batch_Key, First_Name, Middle_Name, Last_Name)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table users
--
CREATE TABLE users (
  User_Key int(10) unsigned NOT NULL auto_increment,
  Alumni_Key int(10) unsigned,
  Email char(100) NOT NULL,
  Pass_Word char(32) NOT NULL,
  Date_Registered int(10) NOT NULL,
  PRIMARY KEY  (User_Key),
  UNIQUE KEY tbl_unique (Alumni_Key),
  KEY tbl_index1 (Email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table admin_alerts
--
CREATE TABLE admin_alerts (
  Admin_Alert_Key int(10) unsigned NOT NULL auto_increment,
  Alert text NOT NULL,
  Alert_Time int(10) NOT NULL,
  Is_Read int(1) NOT NULL,
  Alert_Code char(32) NOT NULL,
  PRIMARY KEY  (Admin_Alert_Key),
  UNIQUE KEY tbl_unique (Alert_Code)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table alumni_profiles
--
CREATE TABLE alumni_profiles (
  Alumni_Profile_Key int(10) unsigned NOT NULL auto_increment,
  Alumni_Key int(10) unsigned,  
  Profile1 longtext NOT NULL,
  Profile2 longtext NOT NULL,
  Profile3 longtext NOT NULL,
  Employment_Status varchar(30) NOT NULL DEFAULT '',
  Company_Name varchar(255) NOT NULL DEFAULT '',
  Supporting_Doc varchar(255) NOT NULL DEFAULT '',
  Position varchar(100) NOT NULL DEFAULT '',
  Awards_Received varchar(255) NOT NULL DEFAULT '',
  Hired_2Years_After_Grad int(1) NOT NULL DEFAULT 0,
  Date_Updated int(10) NOT NULL,
  PRIMARY KEY  (Alumni_Profile_Key),
  UNIQUE KEY tbl_unique (Alumni_Key)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

-- CREATE USER [IF NOT EXISTS] 'bisu'@'localhost' 
-- IDENTIFIED BY 'B!su';

-- GRANT ALL PRIVILEGES ON bisu_ais.* TO 'bisu'@'localhost';
-- FLUSH PRIVILEGES;