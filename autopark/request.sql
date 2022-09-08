CREATE DATABASE autopark CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE parks (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    serial_number VARCHAR(16) UNIQUE NOT NULL,
    address VARCHAR(255) NOT NULL
);

CREATE TABLE cars (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    park_id INT,
    model VARCHAR(255) NOT NULL,
    year YEAR NOT NULL,
    price FLOAT(11, 2) NOT NULL DEFAULT 0,

    FOREIGN KEY (park_id) REFERENCES parks (id) ON DELETE SET NULL
);

CREATE TABLE drivers (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    car_id INT,
    full_name VARCHAR(255) NOT NULL,
    license_ID VARCHAR(16) UNIQUE NOT NULL,
    birthdate DATE NOT NULL,

    FOREIGN KEY (car_id) REFERENCES cars (id) ON DELETE SET NULL
);

CREATE TABLE customers (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(75) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE orders (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    drivers_id INT,
    customers_id INT,
    first_address VARCHAR(255) NOT NULL,
    destination_address VARCHAR(255) NOT NULL,

    FOREIGN KEY (drivers_id) REFERENCES drivers (id) ON DELETE SET NULL,
    FOREIGN KEY (customers_id) REFERENCES customers (id) ON DELETE SET NULL
);

INSERT INTO parks (serial_number, address)
VALUES
    ('jfgd5f4gdfg', 'address_1'),
    ('gsg4sf5g46g', 'address_2'),
    ('dfh2436g7d', 'addresss_3'),
    ('f8ty7u6fb2u3', 'address_4'),
    ('f8ty7u6fb3', 'address_5');

ALTER TABLE cars CHANGE year graduation_year YEAR NOT NULL;

INSERT INTO orders (drivers_id, customers_id, first_address, destination_address)
VALUES
    (1, 6, 'address_1', 'address_1'),
    (2, 7, 'address_2', 'address_2'),
    (3, 8, 'address_3', 'address_3'),
    (4, 9, 'address_4', 'address_4'),
    (5, 10, 'address_5', 'address_5');

INSERT INTO cars (park_id, model, graduation_year, price)
VALUES
    (1, 'BMW', 2014, 16000),
    (2, 'audi', 2004, 10000),
    (3, 'WV', 2016, 18000),
    (1, 'lanos', 2015, 3000),
    (1, 'shkoda', 2017, 15000);

INSERT INTO drivers (car_id, full_name, license_ID, birthdate)
VALUES
    (1, 'Adam', 'dfgh5d4f6g', '1987-07-07'),
    (2, 'Bob', '6fg6fg', '1977-07-07'),
    (3, 'Steeve', 'hjk73g6hj4k', '1991-07-07'),
    (4, 'Reek', '3uo863ui', '1988-07-07'),
    (5, 'Nick', '3yhj5u98i', '1974-07-07');

INSERT INTO customers (name, surname, email)
VALUES
    ('customers_1', 'surname_1', 'dfgd@hfogph'),
    ('customers_2', 'surname_1', 'dfgd@hfogp'),
    ('customers_3', 'surname_1', 'dfgd@hfog'),
    ('customers_4', 'surname_1', 'dfgd@hfoph'),
    ('customers_5', 'surname_1', 'dfgd@hfgph');

UPDATE parks SET serial_number = 'qwe123' WHERE id = 3;

DELETE FROM orders WHERE id = 19;

SELECT * FROM cars;

SELECT full_name FROM drivers WHERE id = 5;

DROP TABLE orders;

SELECT parks.address, cars.model
FROM parks
LEFT JOIN cars on parks.id = cars.park_id;

SELECT drivers.full_name, cars.model, cars.graduation_year
FROM drivers
INNER JOIN cars on drivers.car_id = cars.id