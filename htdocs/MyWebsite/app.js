document.getElementById('generate').addEventListener('click', function() {
	fetch('https://restcountries.com/v3.1/all')
		.then(response => response.json())
		.then(data => {
			const randomIndex = Math.floor(Math.random() * data.length);
			const country = data[randomIndex];
			const capital = country.capital[0];
			const flag = country.flags.png;
			const template = `
				<h2><b>${capital}</b></h2>
				<img src="${flag}" alt="${capital} flag" width="200">
				<p>This is the capital of <b>${country.name.common}</b>.</p>
        