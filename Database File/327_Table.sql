CREATE TABLE IF NOT EXISTS products(
    product_id INT(11) NOT NULL AUTO_INCREMENT,
    product_name VARCHAR(100) NOT NULL,
    product_category VARCHAR(250) NOT NULL,
    product_description VARCHAR(250) NOT NULL,
    product_image VARCHAR(250) NOT NULL,
    product_image1 VARCHAR(250) NOT NULL,
    product_image2 VARCHAR(250) NOT NULL,
    product_image3 VARCHAR(250) NOT NULL,
    product_image4 VARCHAR(250) NOT NULL,
    product_price DECIMAL(10,2) NOT NULL,
    product_special_offer INTEGER(2) NOT NULL,
    product_color VARCHAR(100) NOT NULL,
    
    PRIMARY KEY(product_id)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS orders(
    order_id INT(11) NOT NULL AUTO_INCREMENT,
    order_cost DECIMAL(6,2) NOT NULL,
    order_status VARCHAR(100) NOT NULL DEFAULT 'On Hold',
    user_id INT(11) NOT NULL,
    user_phone INT(11) NOT NULL,
    user_city VARCHAR(250) NOT NULL,
    user_address VARCHAR(250) NOT NULL,
    order_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    PRIMARY KEY(order_id)
) ENGINE=INNODB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS order_items(
    item_id INT(11) NOT NULL AUTO_INCREMENT,
    order_id INT(11) NOT NULL,
    product_id VARCHAR(250) NOT NULL,
    product_name VARCHAR(250) NOT NULL,
    product_image VARCHAR(250) NOT NULL,
    user_id INT(11) NOT NULL,
    order_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    PRIMARY KEY(item_id)
) ENGINE=INNODB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS users (
    user_id INT(11) NOT NULL,
    user_name VARCHAR(250) NOT NULL,
    user_email VARCHAR(250) NOT NULL,
    user_password VARCHAR(250) NOT NULL,
    
    PRIMARY KEY (user_id),
    UNIQUE KEY UX_constraint (user_email)
) ENGINE=INNODB DEFAULT CHARSET=latin1;


--------------------------------------------------------------------
values-------product
--------------------------------------------------------------------
INSERT INTO `products` 
(`product_name`, `product_category`, `product_description`, `product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`,`product_special_offer`,`product_color`) 

VALUES ('Rajshahi Silk Shari','Clothes','Shari','rajshahi_silk.jpg','rajshahi_silk1.jpg','rajshahi_silk2.jpg','rajshahi_silk3.jpg','rajshahi_silk4.jpg',8.00,0,'Black');



INSERT INTO `products` ( `product_name`, `product_category`,`product_description`,`product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`, `product_special_offer`, `product_color`)

 VALUES ('Hlisha Fish','Food',' Fish','ilish.jpg','ilish2.webp','ilish.jpg','ilish2.webp','ilish2.webp',10.00,0,'Black');

INSERT INTO `products` ( `product_name`, `product_category`,`product_description`,`product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`, `product_special_offer`, `product_color`) 

VALUES ('Lengra Mango','fruits',' Mango','lengra mango.webp','Khirshapat_Mango2.jpg','Khirshapat_Mango.jpg','aswina mango.webp','Khirshapat_Mango2.jpg',2.50,0,'Golden');

INSERT INTO `products` ( `product_name`, `product_category`,`product_description`,`product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`, `product_special_offer`, `product_color`) 

VALUES ('Nokshi','Cloths',' Nokshi katha','Nokshi.jpg','Nokshi1.jpg','Nokshi2.jpg','Nokshi3.jpg','Nokshi.jpg',20.00,0,'Silver');


-----Values--------------product--------
--------------------------------------
INSERT INTO `products` 
( `product_name`,`product_category`,`product_description`,`product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`, `product_special_offer`, `product_color`) 

VALUES ('Jamdani Shari','Cloths',' Shari','Jamdani.jpg','jamdani1.jpg','Jamdani2.jpg','Jamdani3.jpg','Jamdani4.jpeg',12.00,0,'Black');

INSERT INTO `products` 
( `product_name`,`product_category`,`product_description`,`product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`, `product_special_offer`, `product_color`) 

VALUES ('Shotoronji','cloths',' Shotoromji','Shotoromji2.jpg','Shotoromji3.jpg','Shotoromji4.jpg','Shotoromji3.jpg','Shotoromji4.jpg',12.00,0,'Silver');

INSERT INTO `products` 
( `product_name`,`product_category`,`product_description`,`product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`, `product_special_offer`, `product_color`) 

VALUES 
('Monda','Food',' Monda','monda muktagacha2.jpg','monda muktagacha.jpg','Kachagolla2.jpeg','monda muktagacha.jpg','Kachagolla2.jpeg',4.5.00,0,'white');

INSERT INTO `products` 
( `product_name`,`product_category`,`product_description`,`product_image`,`product_image1`,`product_image2`,`product_image3`,`product_image4`,`product_price`, `product_special_offer`, `product_color`) 

VALUES 
('Tulshimala rice','Food',' Rice','tulshimala rice2.jpg','tulshimala rice.webp','tulshimala rice.png','tulshimala rice.webp','Katarivog_rice.png',2.2.00,0,'Golden');