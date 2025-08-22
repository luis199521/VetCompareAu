<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="wrapper">
    <?php include 'header.php'?>
        <main id="contact">
            <div class="title-div">
                <h1>Any question?</h1>
            </div>
            <div id="pawsy-contact">
                <div id="map-contact">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.7441830852863!2d115.9014178!3d-31.9678361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bba020a086a9%3A0x2e292e21610fac98!2s48A%20Howick%20St%2C%20Lathlain%20WA%206100!5e0!3m2!1sen!2sau!4v1700285488911!5m2!1sen!2sau"></iframe>
                </div>
                <div id="details-contact">
                    <h2>Send us an email</h2>
                    <p>Please complete the form below and we will be in touch as soon as possible.
                        If your enquiry is regarding a sick or injured animal and the matter is urgent,
                        please call us on 0414 539 022.
                    </p>
                    <form action="#" method="post">
                        <label for="fullName">Full Name *</label>
                        <input type="text" id="fullName" placeholder="John Doe" required>
                        <label for="email">Your Email *</label>
                        <input type="email" id="email" placeholder="example@gmail.com" required>
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" required>
                        <label for="message">Message *</label>
                        <textarea id="message" rows="4" placeholder="Type your enquiry here" required></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </main>
        <?php include 'footer.php';?>
    </div>
</body>
</html>