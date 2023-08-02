
    function validateForm() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var checkIn = document.getElementById('check-in').value;
      var checkOut = document.getElementById('check-out').value;
      var roomType = document.getElementById('room-type').value;

      var isValid = true;

      // Clear previous error messages
      document.getElementById('nameError').innerHTML = '';
      document.getElementById('emailError').innerHTML = '';
      document.getElementById('checkInError').innerHTML = '';
      document.getElementById('checkOutError').innerHTML = '';
      document.getElementById('roomTypeError').innerHTML = '';

      // Validate name
      if (name.trim() === '') {
        document.getElementById('nameError').innerHTML = 'Please enter your name';
        isValid = false;
      }

      // Validate email
      if (email.trim() === '') {
        document.getElementById('emailError').innerHTML = 'Please enter your email';
        isValid = false;
      } else if (!isValidEmail(email)) {
        document.getElementById('emailError').innerHTML = 'Please enter a valid email address';
        isValid = false;
      }

      // Validate check-in and check-out dates
      if (checkIn === '') {
        document.getElementById('checkInError').innerHTML = 'Please select a check-in date';
        isValid = false;
      }

      if (checkOut === '') {
        document.getElementById('checkOutError').innerHTML = 'Please select a check-out date';
        isValid = false;
      } else if (checkOut < checkIn) {
        document.getElementById('checkOutError').innerHTML = 'Check-out date must be after check-in date';
        isValid = false;
      }

      // Validate room type
      if (roomType === '') {
        document.getElementById('roomTypeError').innerHTML = 'Please select a room type';
        isValid = false;
      }

      return isValid;
    }

    function isValidEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
