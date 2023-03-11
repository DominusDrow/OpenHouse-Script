use 0ZNbicsQ202a;

create table if not exists LightRegister(
	id int not null auto_increment,
	appointment DATE NOT NULL,
  start_openHouse TIME NOT NULL,
	end_openHouse TIME,
  name VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL
)

