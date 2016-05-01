USE grain;

CREATE TABLE persons(
    id INT(3) PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    telephone VARCHAR(255)
);

INSERT INTO persons (first_name, last_name, telephone) VALUES ('Joe', 'Doe', '555-12345'), ('Wade', 'Hensley', '555-54321');