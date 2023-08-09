document.getElementById('reservationForm').addEventListener('submit', function (event) {
  event.preventDefault();
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const checkIn = document.getElementById('checkIn').value;
  const checkOut = document.getElementById('checkOut').value;
  document.getElementById('confirmationMessage').style.display = 'block';
  document.getElementById('confName').textContent = name;
  document.getElementById('confCheckIn').textContent = checkIn;
  document.getElementById('confCheckOut').textContent = checkOut;
  document.getElementById('confEmail').textContent = email;
  document.getElementById('reservationForm').reset();
});
