CREATE TABLE IF NOT EXISTS vaitel (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date date(8) NOT NULL,
    time time(4) NOT NULL,
    temperature float(3) NOT NULL,
    bp_up INT(3) NOT NULL,
    bp_under INT(3) NOT NULL,
    pulse INT(2) NOT NULL,
    vaitel_comment VARCHAR(255) NOT NULL
);
