function generateRandomTravelDestination() {
    const destinationContainer = document.getElementById('destinationContainer');
    destinationContainer.innerHTML = '';

   const fetchRandomTravelDestination = async () => {
      try {
        const apiUrl = "https://restcountries.com/v3.1/all";
        const response = await fetch(apiUrl);
        if (!response.ok) {
          throw new Error('Error fetching travel destinations.');
        }
        const data = await response.json();
        if (data.length > 0) {
         
          const randomIndex = Math.floor(Math.random() * data.length);
          const destination = data[randomIndex];
  
          const destinationHtml = `
            <h2>${destination.name.common}</h2>
            <img src="${destination.flags.svg}" alt="${destination.name.common}">
            <h3><strong>Capital:</strong> ${destination.capital ? destination.capital[0] : 'N/A'}</h3>
            <h3><strong>Continent:</strong> ${destination.continents[0]}</h3>
            <h3><strong>Population:</strong> ${destination.population.toLocaleString()}</h3>
               
          `;
           destinationContainer.innerHTML = destinationHtml;
        } else {
          throw new Error('No travel destinations found.');
        }
      } catch (error) {
        console.error(`Error generating travel destination: ${error}`);

        fetchRandomTravelDestination();
      }
    };

    fetchRandomTravelDestination();
}