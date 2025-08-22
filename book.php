<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Booking</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <?php include 'header.php'; ?>
        <main id="book">
            <div class="title-div">
                <h2>Book an Appointment</h2>
            </div>
            <div id="pawsy-book">
                <div id="pawsy-booking">
                    <form action="#" method="post">
                        <div id="pawsy-booking-container"></div>
                        <label for="petName">Pet's Name *</label>
                        <input type="text" id="petName" name="petName" placeholder="Enter your pet's name" required>
                        <label for="ownerName">Owner's Name *</label>
                        <input type="text" id="ownerName" placeholder="Enter your name" required>
                        <label for="email">Your Email *</label>
                        <input type="email" id="email" placeholder="example@domain.com" required>
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" placeholder="Enter your phone number" required>
                        <label for="appointmentDate">Preferred Appointment Date *</label>
                        <input type="date" id="appointmentDate" required>
                        <label for="vetSelection">Select a Veterinary *</label>
                        <select id="vetSelection" required>
                            <option value="" disabled selected>Select a Veterinary</option>
                            <option value="Ascot Veterinary Hospital">Ascot Veterinary Hospital</option>
                            <option value="Perth Veterinary Specialists">Perth Veterinary Specialists</option>
                            <option value="North Perth Vet Centre">North Perth Vet Centre</option>
                            <option value="Morley Vetcentre">Morley Vetcentre</option>
                        </select>
                        <label for="message">Additional Message (optional)</label>
                        <textarea id="message" rows="4" placeholder="Any specific concerns or requests"></textarea>
                     
                        <input type="submit" value="Submit Appointment">
                    </form>
                </div>
            </div>
        </main>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>