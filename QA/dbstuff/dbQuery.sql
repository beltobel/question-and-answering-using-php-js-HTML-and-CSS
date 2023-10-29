--Initial tables 
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--user table
CREATE TABLE users (
    u_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    fName VARCHAR(255) NOT NULL,
    lName VARCHAR(255) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    joined_date DATE NOT NULL,
    uHash VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--topic table 
CREATE TABLE topics (
    t_id INT(11) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    topicName VARCHAR(255) NOT NULL,
)ENGINE = InnoDB DEFAULT CHARSET = utf8;


--question table

CREATE TABLE questions (
    q_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    t_id INT(11),
    u_id INT(11),
    question TEXT,
    q_detail TEXT,
    askedDate VARCHAR(255) NOT NULL,
    qHash VARCHAR(255) NOT NULL,
    FOREIGN KEY (t_id) REFERENCES topics(t_id),
    FOREIGN KEY (u_id) REFERENCES users(u_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


--answer table

CREATE TABLE answer (
    a_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    q_id INT(11),
    u_id INT(11),
    answer TEXT,
    a_detail VARCHAR(255) NOT NULL,
    answerDate VARCHAR(255) NOT NULL,
    aHash VARCHAR(255) NOT NULL,
    FOREIGN KEY (q_id) REFERENCES questions(q_id),
    FOREIGN KEY (u_id) REFERENCES users(u_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--create all tables using install.php code
