
<!DOCTYPE html>
<html>
  <head>
    <title>Service
       Booking Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body{
        background-image: linear-gradient(to right, rgba(0,0,250,0), rgba(0,0,150,1));
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      font-family:Aparajita;
      font-size:20px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      color:black;
      font-family:Times new roman;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 0 15px 0 #333; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image:url(banner-bg.png);      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #333;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #333;
      color: #333;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      label.checkbox{
        position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #444;
      background: #444;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #444;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      transition: ease-out 2s;
      }
      button:hover {
        box-shadow: inset 400px 0 0 0 rgb(0, 128, 255);
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
      
      .timeslots {
        list-style: none;
        padding: 0;
    }
    .timeslots li {
        margin-bottom: 5px;
    }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="book.php" method="POST">
        <div class="banner">
          <h1>Service Booking Form</h1>
        </div>
        <div class="item">
          <h3>Name</h3>
          <div class="name-item">
            <input type="text" name="fname" placeholder="First" required>
            <input type="text" name="lname" placeholder="Last" required>
          </div>
        </div>
        <div class="item">
          <h3>Email</h3>
          <input type="text" id="email" name="eml"required>
        </div>
        <script>
        function validateEmail() {
            var emailInput = document.getElementById('email');
            var errorMessage = document.getElementById('error-msg');
            var email = emailInput.value.trim();

            // Check if email ends with "@gmail.com"
            if (email.toLowerCase().endsWith('@gmail.com')) {
                // Valid email address
                errorMessage.style.display = 'none';
                // Here you can proceed with form submission or other actions
                console.log('Email is valid:', email);
            } else {
                // Invalid email address
                errorMessage.style.display = 'block';
                // Prevent form submission or show error message
                console.log('Invalid email:', email);
            }
        }
    </script>
        <div class="item">
          <h3>Phone</h3>
          <input type="text" name="ph" required>
        </div>
        
        <div class="item">
          <h3>Contact Address</h3>
          <input type="text" name="ctadd" placeholder="Street address" required/>
         
          <div class="city-item">
            <select name="city" required>
                <option disabled selected value> -- Select a City -- </option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Nadiad">Nadiad</option>
            </select>
            <!-- <input type="text" name="region" placeholder="Region" required/> -->
            <input type="text" name="pin" placeholder="Postal / Zip code" maxlength="6"required/>
            <!-- <select required>
              <option value="">Country</option>
              <option value="1">Russia</option>
              <option value="2">Germany</option>
              <option value="3">France</option>
              <option value="4">Armenia</option>
              <option value="5">USA</option>
            </select> -->
          </div>
        </div>
        <div class="question">
          <h3>Services</h3>
          <div class="question-answer">
            
            <div>
                <input type="radio" value="Cleaning" id="radio_cleaning" name="service">
                <label for="radio_cleaning" class="radio"><span>Cleaning</span></label>
            </div>

            <div id="cleaningDropdown" style="display: none;">
                <label for="cleaningServices">Select a cleaning service:</label>
                <select id="cleaningServices" name="ser1">
                    <option value="house_cleaning" >House Cleaning</option>
                    <option value="office_cleaning" >Office Cleaning</option>
                    <option value="carpet_cleaning" >Carpet Cleaning</option>
                </select>
            </div>
            <div>
                <input type="radio" value="Electrician" id="radio_2" name="service">
                <label for="radio_2" class="radio"><span>Electrician</span></label>
            </div>

            <div id="electricianDropdown" style="display: none;">
                <label for="electricianServices">Select an electrician service:</label>
                <select id="electricianServices">
                    <option value="wiring" name="ser">Wiring</option>
                    <option value="installation" name="ser">Installation</option>
                    <option value="repair" name="ser">Repair</option>
                </select>
            </div>
            <div>
                <input type="radio" value="Plumbing" id="radio_3" name="service">
                <label for="radio_3" class="radio"><span>Plumbing</span></label>
            </div>

            <div id="serviceDropdown" style="display: none;">
                <label for="services">Select a plumbing service:</label>
                <select id="services">
                    <option value="pipe_repair" name="ser">Pipe Repair</option>
                    <option value="leak_fixing" name="ser">Leak Fixing</option>
                    <option value="installation" name="ser">Installation</option>
                </select>
            </div>

<script>
  // Get the radio button element
  const plumbingRadio = document.getElementById('radio_3');

  // Get the dropdown element
  const serviceDropdown = document.getElementById('serviceDropdown');

  // Add event listener to radio button
  plumbingRadio.addEventListener('change', function() {
    // Check if plumbing radio is selected
    if (plumbingRadio.checked) {
      // Display the dropdown
      serviceDropdown.style.display = 'block';
    } else {
      // Hide the dropdown
      serviceDropdown.style.display = 'none';
    }
  });
</script>
<script>
  // Get the radio button element for electrician
  const electricianRadio = document.getElementById('radio_2');

  // Get the dropdown element for electrician services
  const electricianDropdown = document.getElementById('electricianDropdown');

  // Add event listener to electrician radio button
  electricianRadio.addEventListener('change', function() {
    // Check if electrician radio is selected
    if (electricianRadio.checked) {
      // Display the electrician dropdown
      electricianDropdown.style.display = 'block';
    } else {
      // Hide the electrician dropdown if not selected
      electricianDropdown.style.display = 'none';
    }
  });
</script>
<script>
  // Get the radio button element for cleaning
  const cleaningRadio = document.getElementById('radio_cleaning');

  // Get the dropdown element for cleaning services
  const cleaningDropdown = document.getElementById('cleaningDropdown');

  // Add event listener to cleaning radio button
  cleaningRadio.addEventListener('change', function() {
    // Check if cleaning radio is selected
    if (cleaningRadio.checked) {
      // Display the cleaning dropdown
      cleaningDropdown.style.display = 'block';
    } else {
      // Hide the cleaning dropdown if not selected
      cleaningDropdown.style.display = 'none';
    }
  });
</script>
</div>
        <div class="item">
        <body>
    <h2>Select a Date</h2>
    <input type="date" id="datepicker" name="dt">
    <h3>Available Time Slots</h3>
    <ul id="timeslots" class="timeslots">
        <!-- Time slots will be added here dynamically -->
    </ul>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const datepicker = document.getElementById('datepicker');
    const timeslots = document.getElementById('timeslots');

    // Define available time slots for each date
    const timeSlotsData = {
        '2024-10-16': ['10:00 AM', '11:00 AM', '1:00 PM'],
        '2024-10-18': ['9:00 AM', '10:00 AM', '12:00 PM'],
        // Add more dates and corresponding time slots as needed
    };

// Function to display time slots for selected date
function displayTimeSlots(date) {
    // Clear existing time slots
    timeslots.innerHTML = '';
    
    const selectedDate = date.toISOString().slice(0, 10);
    const availableTimeSlots = timeSlotsData[selectedDate];
    
    if (availableTimeSlots) {
        availableTimeSlots.forEach(slot => {
            const li = document.createElement('li');
            const label = document.createElement('label');
            label.textContent = slot;
            const input = document.createElement('input');
            input.type = 'radio'; // Change to radio button
            input.name = 'timeslot'; // Ensure same name for radio buttons
            input.value = slot;
            input.id = slot;
            label.setAttribute('for', slot);
            li.appendChild(input);
            li.appendChild(label);
            timeslots.appendChild(li);
        });
    } else {
        const li = document.createElement('li');
        li.textContent = 'No time slots available for this date.';
        timeslots.appendChild(li);
    }
}

// Event listener for date selection
datepicker.addEventListener('change', function() {
    const selectedDate = new Date(this.value);
    displayTimeSlots(selectedDate);
});

    // Initial display
    displayTimeSlots(new Date());
});
</script>
        

          <!-- Time slots will be added here dynamically -->
          <!-- </ul> -->
        </div>
        <div class="item">
          <!-- <p>Service Time Slots Available</p> -->
          <!-- <input type="time" name="stime" list="time-list">
            <datalist id="time-list" >
                <option id="08" name="08"  value="08:30" datatype="time" disabled>
                <option id="09" name="09" value="09:30" datatype="time" >
                <option id="10" name="10" value="10:30" datatype="time">
                <option id="11" name="11" value="11:30" datatype="time" disabled>
                <option id="13" name="13" value="13:30" datatype="time" >
                <option id="20" name="20" value="20:30" datatype="time">
            </datalist> -->
        
        </div>
       
        <div class="item">
          <!-- <p>Address</p>
          <input type="text" name="name" placeholder="Street address" />
          <input type="text" name="name" placeholder="Street address line 2" /> -->
          <!-- <div class="city-item">
            <input type="text" name="name" placeholder="City" required/>
            <input type="text" name="name" placeholder="Region" required/>
            <input type="text" name="name" placeholder="Postal / Zip code" required/>
            <select required>
              <option value="">Country</option>
              <option>India</option>
              
            </select>
          </div> -->
        </div>
        
        <div class="item">
          <h3>Notes</h3>
          <input type="text" name="ttxt" placeholder="Write the time here!!" required></textarea>
        </div>
        <div class="btn-block">
        <button type="submit" name="sbt">SEND</button>
        </div>
      </form>
    </div>
  </body>
</html>
<?php
    $cn=mysqli_connect("localhost","root","","project");

	if(isset($_POST['sbt']))
	{

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $eml=$_POST['eml'];
    $ph=$_POST['ph'];
    $ctadd=$_POST['ctadd'];
    $city=$_POST['city'];
    $t=$_POST['ttxt'];
    $pin=$_POST['pin'];
    $service=$_POST['service'];
    $dt=date('Y-m-d',strtotime($_POST['dt'])); 
    $stype=$_POST['ser1'];
    echo $stype;

		$qry="insert into book(Name,Last_Name,Email,Phone,Contact_Address,City,Pin_code,Service,Date,Status,Time) values ('$fname','$lname','$eml','$ph','$ctadd','$city','$pin','$service','$dt','p','$t')";

		$query=mysqli_query($cn,$qry);

		if($query)
    {
        echo "<script> alert('SERVICE BOOKED SUCCESSFULLY :) '); </script>";
        header("Location: homepage.html");
        exit;
      }
      else
      {
      echo "<script> alert('Something went wrong'); </script>";
			echo "DATA NOT INSERTED";
    }
	}

?>
