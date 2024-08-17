function getHotelData() {
    var settings = {
      "url": "https://hotels-com-provider.p.rapidapi.com/v1/properties/list",
      "method": "GET",
      "timeout": 0,
      "headers": {
        "x-rapidapi-key": "YOUR_API_KEY",
        "x-rapidapi-host": "hotels-com-provider.p.rapidapi.com"
      },
    };
  
    var destinationInput = document.getElementById("destinationInput");
    var checkinInput = document.getElementById("checkinInput");
    var checkoutInput = document.getElementById("checkoutInput");
    var hotelData = $('#hotelData');

    var data = {
      "destination": destinationInput.value,
      "checkin": new Date(checkinInput.value).toISOString().split('T')[0],
      "checkout": new Date(checkoutInput.value).toISOString().split('T')[0]
    };
  
    $.ajax(settings).done(function (response) {
      var hotels = response.data.body.searchResults.results;
      var html = 'hotelData.html(html)';
      
  
      $.each(hotels, function (index, hotel) {
        html += '<div class="hotel">';
        html += '<h2>' + hotel.name + '</h2>';
        html += '<p>' + hotel.address.streetAddress + ', ' + hotel.address.locality + ', ' + hotel.address.region + '</p>';
        html += '<p>' + hotel.guestReviews.brands.badgeText + '</p>';
        html += '<p>' + hotel.ratePlan.price.current + ' ' + hotel.ratePlan.price.info + '</p>';
        html += '</div>';
      });
  
      $('#hotelData').html(html);
    }).fail(function (xhr, status, error) {
      console.log(xhr.responseText);
      console.log(status);
      console.log(error);
    });
  }
  
  // Add event listener to Find Hotels button
  $('#findHotelsBtn').click(function() {
    getHotelData();
  });

 var findHotelsButton = document.getElementById('findHotelsButton');
findHotelsButton.addEventListener('click', getHotelData);
