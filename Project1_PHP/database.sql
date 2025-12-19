CREATE TABLE Products (
    id INT PRIMARY KEY IDENTITY(1,1),
    name NVARCHAR(100),
    price DECIMAL(10,2)
);
INSERT INTO Products (name, price) VALUES ('Manga One Piece', 15.5), ('Manga Naruto', 12.0);