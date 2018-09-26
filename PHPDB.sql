CREATE DATABASE php;
USE php;

CREATE TABLE Receipt
(
receipt_id  VARCHAR(10) not null AUTO_INCREMENT,
sold_time TIME not null,
sold_date DATE not null,

PRIMARY KEY(receipt_id)
);

CREATE TABLE Supplier
(
supplier_id VARCHAR(5) not null AUTO_INCREMENT,
supplier_name VARCHAR(20) not null,
phone_num VARCHAR(12) not null,
email_add VARCHAR(20) not null,
address_phy VARCHAR(70) not null,

PRIMARY KEY(supplier_id)
);

CREATE TABLE ProductName
(
category_id VARCHAR(5) not null,
p_name VARCHAR(20) not null,

PRIMARY KEY(category_id)
);

CREATE TABLE Inventory
(
item_id VARCHAR(15) not null AUTO_INCREMENT,
category_id VARCHAR(5) not null,
cost VARCHAR(5) not null,
retail_price VARCHAR(5) not null,
exp_date DATE not null,
supplier_id VARCHAR(5) not null,
sold_status VARCHAR(1) not null,

PRIMARY KEY(item_id),
FOREIGN KEY(supplier_id) REFERENCES Supplier(supplier_id),
FOREIGN KEY(category_id) REFERENCES ProductName(category_id)
);

CREATE TABLE Sales
(
item_id VARCHAR(15) not null,
receipt_id VARCHAR(10) not null,

PRIMARY KEY(item_id, receipt_id),
FOREIGN KEY(item_id) REFERENCES Inventory(item_id),
FOREIGN KEY(receipt_id) REFERENCES Receipt(receipt_id)
);

