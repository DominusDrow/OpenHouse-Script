use 0ZNbicsQ202a;

create table if not exists LightRegister(
	id int not null auto_increment,
	appointment date not null,
  start_openhouse time not null,
	end_openhouse time,
  name varchar(50) not null,
  lastname varchar(50) not null,
  email varchar(100) not null,
  phone varchar(20) not null,
  url varchar(50)
)

