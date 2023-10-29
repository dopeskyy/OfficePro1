-- Create the database
CREATE DATABASE officepro ;

-- Create the user table
CREATE TABLE officepro.users (
    ID int NOT NULL AUTO_INCREMENT,
    -- UserTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    -- Separate fullname ?
    FullName varchar(50) NOT NULL,
    UserEmail varchar(50) NOT NULL,
    Password varchar(15) NOT NULL,
    UserType varchar(15) NOT NULL,
    Active varchar(3) NOT NULL,
    PRIMARY KEY (ID)
);

-- Add the user address to the users table or create a sparate table
-- CREATE TABLE officepro.address (
--  ID int NOT NULL AUTO_INCREMENT,
--  AddressTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
--  Address varchar(100) NOT NULL,
--  AddressLine2 varchar(100) NOT NULL,
--  City varchar(50) NOT NULL,
--  State varchar(2) NOT NULL,
--  ZipCode varchar(5) NOT NULL,
--  PRIMARY KEY (ID)
--  );
  
-- Create the product table
CREATE TABLE officepro.products (
    ID int NOT NULL AUTO_INCREMENT,
    -- ProductTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	-- change all the lower case p's to P
    -- ProductImage longblob,
    -- ProductFeedback text,
    productName varchar(255) NOT NULL,
    productDescription varchar(255) NOT NULL,
    productType varchar(255) NOT NULL,
    pricePerItem decimal(18,2) NOT NULL,
    inventoryAmount int NOT NULL,
    PRIMARY KEY (ID)
);

-- Create the order table
CREATE TABLE officepro.orders (
    ID int NOT NULL AUTO_INCREMENT,
    -- OrderTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    OrderID int NOT NULL,
    CustomerID int NOT NULL,
    CustomerName varchar(50) NOT NULL,
    ProductID int NOT NULL,
    ProductName varchar(50) NOT NULL,
    Quantity int NOT NULL,
    ItemPrice  int NOT NULL,
    TotalPrice  int NOT NULL,
    DateOrdered date NOT NULL,
    DateShipped date NOT NULL,
    DateRecieved date NOT NULL,
    PRIMARY KEY (ID)
);

-- Create the FAQ table
CREATE TABLE officepro.faq (
    ID int NOT NULL AUTO_INCREMENT,
    FAQTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    Question text NOT NULL,
    Answer text NOT NULL,
    -- visible boolean
    PRIMARY KEY (ID)
);

-- Create the aboutus table
CREATE TABLE officepro.aboutus (
    ID int NOT NULL AUTO_INCREMENT,
    AboutUsTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FullName varchar(50) NOT NULL,
    FunFact text NOT NULL,
    Image longblob,
    PRIMARY KEY (ID)
);

-- Create the Contact us table
CREATE TABLE officepro.contactus (
  CaseNumber int NOT NULL AUTO_INCREMENT,
  ContactTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FirstName varchar(25)  NOT NULL,
  LastName varchar(25)  NOT NULL,
  UserEmail varchar(50) NOT NULL,
  Message text NOT NULL,
  PRIMARY KEY (CaseNumber)
);
    
    -- Create the login logs table
    CREATE TABLE officepro.loginlogs (
    ID int NOT NULL AUTO_INCREMENT,
    UserID int NOT NULL,
    LoginLogsTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID)
);


-- insert information for FAQ table 
INSERT INTO officepro.faq (Question, Answer)
VALUES
	('What form of payment do you accept?', 'We take imaginary dollars.'),
    ('Where is your retail store located?', 'Our retail store is located at 123 Frostburg Road, Frostburg, US.'),
    ('Is shipping free?', 'Yes, we offer free shipping for orders over $1000. All other other have a flat rate shipping fee of $19.99.'),
    ('Where is your main office located?', 'Our main office is located at 123 Frostburg Road, Frostburg, US.'),
    ('How long does shipping takes?', '1-2 bussine days to leave the warrehouse. And 4-10 days for shipping.'),
    ('How can I contact customer support?', 'You can create a case on our contact us page.'),
    ('What are your hours of operation?', 'Our retail located opens 9-10 PM Monday - Saturday and on Sundays 9-7 PM.');
    
    
    
    -- insert information for contact us table 
INSERT INTO officepro.contactus (FirstName, LastName, UserEmail, Message)
VALUES
	('Johnny', 'Test', 'jtest@gmail.com', 'Hey, do this message box work?'),
    ('David', 'Goodwin', 'DavidGood@gmail.com', '10 days has passed and I still did not reccive my package'),
    ('Mary', 'Willson ', 'MW322541@yahoo.com', 'Thank for my new office chair. I love It!');
    
    
    -- insert information for about us table 
-- INSERT INTO officepro.aboutus (FullName, FunFact, Image)
-- VALUES
-- ('OfficePro Supplies', 'We take imaginary dollars.' , LOAD_FILE('C:/wamp64/www/OfficePro/Photos/database photos/aboutus/logo.jpg'));
    