CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `employee` (
  `ide` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `cnumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
