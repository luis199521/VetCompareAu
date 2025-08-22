<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Compare a Vet</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="wrapper-compare">
        <?php include 'header.php'; ?>
        <main id="home-compare">

            <div id="compare-landing">
                <div id="compare-landing-text">
                    <h1>Find the perfect vet for your pet</h1>
                    <p>What are you waiting for?</p>
                </div>
            </div>

            <div id="compare-filters">
                <form id="searchForm">
                    <div class="form-row">
                        <label for="petType">Type of pet</label>
                        <select id="petType" name="petType" >
                        </select>
                        <label for="specialization">Specializations</label>
                        <select id="specialization" name="specialization">
                        </select>

                       
                        <input type="submit" value="Search">
                    </div>

                </form>
            </div>
   
            <div id="search-results">
                <div id="search-results-container">
                    <!--<div id="search-results-sidebar">
                        <h2>Filter by:</h2>
                        <form class="preferences-form">
                            <h2>Location</h2>
                            <label for="optionb"><input type="checkbox" id="optionb" name="optionb">belmont</label>
                            <label for="optiono"><input type="checkbox" id="optiono" name="optiono">osborne park</label>
                            <label for="optionn"><input type="checkbox" id="optionn" name="optionn">north perth</label>
                            <label for="optionm"><input type="checkbox" id="optionm" name="optionm">morley</label>
                        </form>

                        <form class="preferences-form">
                            <h2>Price range</h2>
                            <label for="optionaff"><input type="checkbox" id="optionaff" name="optionaff">affordable</label>
                            <label for="optionmo"><input type="checkbox" id="optionmo" name="optionmo">moderate</label>
                            <label for="optionhi"><input type="checkbox" id="optionhi" name="optionhi">high</label>
                        </form>

                        <form class="preferences-form">
                            <h2>Client review</h2>
                            <label for="option49"><input type="checkbox" id="option49" name="option49">4.9</label>
                            <label for="option48"><input type="checkbox" id="option48" name="option48">4.8</label>
                            <label for="option46"><input type="checkbox" id="option46" name="option46">4.6</label>
                        </form>

                    </div>-->


                   
                        <div id="search-result-cards-container">
                           
                        </div>
                        


                 

                </div>


            </div>


 

            <div id="browse-by-pet">

                <div id="browse-by-pet-container">
                    <div id="browse-by-pet-text">
                        <h1>Browse by Pet</h1>
                    </div>
                    <div id="browse-by-pet-images">
                        <img src="images/Home/Animals/bird.jpg" alt="Bird">
                        <img src="images/Home/Animals/cat.jpg" alt="cat">
                        <img src="images/Home/Animals/puppy.jpg" alt="puppy">
                        <img src="images/Home/Animals/snake.jpg" alt="snake">
                    </div>
                </div>
            </div>

            <div id="browse-by-treatment">

                <div id="browse-by-treatment-container">
                    <div id="browse-by-treatment-text">
                        <h1>Browse by Treatment</h1>
                    </div>
                    <div id="browse-by-treatment-images">
                        <div class="browse-by-treatment-images">
                            <img src="images/Compare/Specialization/medicine-pet-care-people-concept-dog-veterinarian-doctor-vet-clinic.jpg" alt="Bird">
                            <img src="images/Compare/Specialization/brushing-teeth-process-small-dog-sits-table-dog-brushed-by-professional.jpg" alt="Bird">

                        </div>
                        <div class="browse-by-treatment-images">
                            <img src="images/Compare/Specialization/close-up-veterinarian-taking-care-pet.jpg" alt="Bird">
                            <img src="images/Compare/Specialization/female-veterinarian-applying-white-bandaged-dog-s-paw-limb.jpg" alt="Bird">
                            <img src="images/Compare/Specialization/beautiful-pet-portrait-dog.jpg" alt="Bird">
                        </div>

                    </div>
                </div>
            </div>



        </main>
        <?php include 'footer.php'; ?>
    </div>

    <script type="module" src="js/filter.js"></script>

</body>

</html>