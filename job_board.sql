--Backup of job_board database table schemas

CREATE TABLE `enquiries` (
  `enq_name` varchar(200) DEFAULT NULL,
  `enq_email` varchar(200) DEFAULT NULL,
  `enq_tel` int(30) DEFAULT NULL
);


CREATE TABLE `job_listings` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) DEFAULT NULL,
  `job_description` varchar(1000) DEFAULT NULL,
  `job_tags` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY(`job_id`)
) 