CREATE TABLE landlords (
    landlord_ID INT(64) NOT NULL PRIMARY KEY,
    surname VARCHAR(50) NOT NULL,
    other_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(200) NOT NULL,
    estate_cluster_ID INT(64) NOT NULL,
    admin CHAR(1),
    avatar VARCHAR(100)
);

CREATE TABLE tenants (
    tenant_ID INT(64) NOT NULL PRIMARY KEY,
    surname VARCHAR(50) NOT NULL,
    other_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(200) NOT NULL,
    admin CHAR(1),
    avatar VARCHAR(100)
);

CREATE TABLE estates (
    estate_ID INT(64) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    landlord_ID INT(64) NOT NULL,
    estate_cluster_ID INT(64) NOT NULL,
    name_of_estate VARCHAR(100) NOT NULL,
    location_of_estate VARCHAR(150) NOT NULL
);

CREATE TABLE reviews (
	review_ID INT(64) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	estate_ID INT(64) NOT NULL,
	tenant_ID INT(64) NOT NULL,
	tenant_name VARCHAR(50) NOT NULL,
	content VARCHAR(500) NOT NULL,
	rating INT(1),
	review_date DATE NOT NULL
);

CREATE TABLE messages (
	message_ID INT(64) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	sender_ID INT(64) NOT NULL,
	sender_name VARCHAR(100) NOT NULL,
	receiver_ID INT(64) NOT NULL,
	content VARCHAR(500) NOT NULL,
	review_date DATE NOT NULL
);

CREATE TABLE updates (
	update_ID INT(64) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	landlord_ID INT(64) NOT NULL,
	landlord_name VARCHAR(100) NOT NULL,
	estate_ID VARCHAR(100) NOT NULL,
	content VARCHAR(500) NOT NULL,
	update_date DATE NOT NULL
);
