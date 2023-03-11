
const d = document;
const w = window;
const mysql = require('mysql');

function connectDB(button,openHouseForm, lightRegisterForm){
	const $openHouseForm = d.querySelector(openHouseForm),
		$lightRegisterForm = d.querySelector(lightRegisterForm);
	const $button = d.getElementById(button);

	const connection = mysql.createConnection({
		host: 'localhost',
		user: 'cd17a614cd09',
		password: '45ff53e42483ac55',
		database: '0ZNbicsQ202a'
	});

	$button.addEventListener("click", e => {
		e.preventDefault();
		if($openHouseForm[0].value == "modo1"){

			const datos = {
				appointment: $openHouseForm[1].value,
				start_openhouse: $openHouseForm[2].value,
				end_openhouse: $openHouseForm[3].value,
				name: $lightRegisterForm[0].value,
				lastname: $lightRegisterForm[1].value,
				email: $lightRegisterForm[2].value,
				phone: $lightRegisterForm[3].value,
				url: w.location.href
			};

			connection.query('INSERT INTO LightRegister SET ?', datos, (error, results) => {
				if (error) {
					console.error('Error : ', error);
				} else {
					console.log('Success : ', results);
				}
			});

		}
	});


}

connectDB("checkIn", ".openHouseForm", ".lightRegisterForm");



