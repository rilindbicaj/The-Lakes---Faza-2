create table Users (

	UserID int identity(1,1) PRIMARY KEY,
	Username varchar(50) unique,
	UserPassword varchar(50),
	isModerator bit,
	theme bit,
	email varchar(50) unique

)

insert into Users values ('rilindbicaj', 'Rilind.bicaj1', 1, 0, 'rilindbicaj@gmail.com')
insert into Users values ('vesagoranii', 'Vesagorani123', 1, 1, 'vg47661@ubt-uni.net')

select * from users

create table Products (

	ProductID int identity(1,1) PRIMARY KEY,
	ProductName varchar(50),
	Price varchar(10),
	ImagePath varchar(50)

)

create table Cart (

	UserID int,
	ProductID int,

	foreign key (UserID) references Users (UserID),
	foreign key (ProductID) references Products (ProductID),

	primary key(UserID, ProductID)

)

insert into Cart

insert into Products values ('Miss Anthropocene version 1', '$20.99', '/media/products/merch1.png', 'Merch')