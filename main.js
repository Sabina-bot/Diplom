$(window).on("load", function(){
     $(".preloader").fadeOut("slow");
     // это прелоадер, по другому = загрузка сайта
});
$("document").ready(function(){
	let btn = $("#search-btn"); // кнопка поиска 
	let er = $(".errors"); // блок для вывода ошибок
	let errors_log = 0; // переменная для ошибок 


	// находим данные по москве
	// через функцию fetch мы отправляем данные по api на сервер, после чего получаем ответ от сервере. Если на этом этапе что то не понятно, то просто изучите fetch в js, тема не очень сложная и поможет в будущем ))

	fetch('http://api.openweathermap.org/data/2.5/weather?q=Москва&lang=ru&appid=559d8efa2c77fc788e8e2ce7d9e52465&lang=ru').then(function (resp) {return resp.json() }).then(function (data) {
            try {
                $(".moscow-gradus").text((Math.round(data.main.temp - 273) + '°С'));
                $(".moscow-wind").text(data.wind.speed + ' км/ч');
                $(".moscow-hum").text('Влажность: '+data.main.humidity+'%');
                $(".moscow-pressure").text('Давление: '+data.main.pressure);
                $(".moscow-desc").text(data.weather[0]['description']);

            } catch (err) {
                console.log('moscow error')
            }
    	})

	// находим данные по Питеру 

	fetch('http://api.openweathermap.org/data/2.5/weather?q=Санкт-Петербург&lang=ru&appid=559d8efa2c77fc788e8e2ce7d9e52465&lang=ru').then(function (resp) {return resp.json() }).then(function (data) {
            try {
                $(".sankt-gradus").text((Math.round(data.main.temp - 273) + '°С'));
                $(".sankt-wind").text(data.wind.speed + ' км/ч');
                $(".sankt-hum").text('Влажность: '+data.main.humidity+'%');
                $(".sankt-pressure").text('Давление: '+data.main.pressure);
                $(".sankt-desc").text(data.weather[0]['description']);

            } catch (err) {
                console.log('sankt error')
            }
    	})

	// находим данные по Новосибирску 

	fetch('http://api.openweathermap.org/data/2.5/weather?q=Новосибирск&lang=ru&appid=559d8efa2c77fc788e8e2ce7d9e52465&lang=ru').then(function (resp) {return resp.json() }).then(function (data) {
            try {
                $(".novosib-gradus").text((Math.round(data.main.temp - 273) + '°С'));
                $(".novosib-wind").text(data.wind.speed + ' км/ч');
                $(".novosib-hum").text('Влажность: '+data.main.humidity+'%');
                $(".novosib-pressure").text('Давление: '+data.main.pressure);
                $(".novosib-desc").text(data.weather[0]['description']);

            } catch (err) {
                console.log('novosib error')
            }
    	})

	// обработчик поиска на сайте, документацию можно почитать на OpenWeather api 

	btn.on("click", function(){
		let cityName = $("#cityName").val().trim();
		if (cityName != "") { // если поле поиска не пустое, продолжаем работу
        er.addClass("none");
        fetch('http://api.openweathermap.org/data/2.5/weather?q='+cityName+'&lang=ru&appid=559d8efa2c77fc788e8e2ce7d9e52465&lang=ru').then(function (resp) {return resp.json() }).then(function (data) {
            try { // шлем данные на сервер, здесь желательно ничего не менять
                $(".pogodnik-card-title").text(data.name);
                $(".pogoda-gradus").text((Math.round(data.main.temp - 273) + '°С'));
                $(".pogoda-wind").text(data.wind.speed + ' км/ч');
                $(".pogoda-hum").text('Влажность: '+data.main.humidity+'%');
                $(".pogoda-pressure").text('Давление: '+data.main.pressure);
                $(".desc").text(data.weather[0]['description']);
                $(".pogodnik-card").removeClass("none");
               

            } catch (err) { // обрабатываем ошибки
                errors_log = 2;
                
                $(".weather-inner").addClass("none");
                er.removeClass("none");
                if (errors_log == 2) {

                    er.text("Город не найден");
                } else {

                }
            }
        })
    } else { // если поле поиска пустое, выводим ошибку пользователю
        errors_log = 1;
        
        er.removeClass("none");
        if (errors_log == 1) {
            er.text("Укажите город");
        }
    }
	})
})

