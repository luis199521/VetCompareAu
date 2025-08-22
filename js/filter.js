/* jshint esversion: 6 */
import { filters, clinics } from "./vets.js";

function populateSelect(selectId, options) {
    "use strict";
    const select = document.getElementById(selectId);
    select.innerHTML = '';


    let defaultOptionExists = false;
    select.querySelectorAll('option').forEach(option => {
        if (option.textContent === "Select an option") {
            defaultOptionExists = true;
        }

    });

    if (!defaultOptionExists) {
        const defaultOption = document.createElement('option');
        defaultOption.textContent = "Select an option";
        defaultOption.disabled = true;
        defaultOption.selected = true;
        select.appendChild(defaultOption);
    }

    options.forEach(option => {
        const optionElement = document.createElement('option');
        optionElement.textContent = option;
        optionElement.value = option;
        select.appendChild(optionElement);
    });


}



let vetName, review, locationName, price;

function filter() {
    "use strict";
    const petType = document.getElementById("petType").value;
    const allSpecializations = Object.values(filters.specialization).reduce((acc, curr) => acc.concat(curr), []);
    const combinedArray = filters.specialization.northPerthVetCentre.concat(filters.specialization.morleyVetcentre);
    if (petType == "dog" || petType == "cat") {
        populateSelect('specialization', allSpecializations);
        //populateSelect('location', filters.location);
        vetName = clinics;
        review = filters.clientReview;
        locationName = filters.location;
        price = filters.priceRange;

    } else if (petType == "rabbit") {
        populateSelect('specialization', combinedArray);
        //populateSelect('location', filters.location.slice(2));
        vetName = clinics.slice(2);
        review = filters.clientReview;
        locationName = filters.location;
        price = filters.priceRange;
    }

}

function createCard(vet, location, review, price) {
    "use strict";
    const cardContainer = document.getElementById("search-result-cards-container");
    const card = document.createElement("section");
    card.id = "search-result-cards";
    const title = document.createElement("h2");
    const locationElement = document.createElement("p");
    const reviewElement = document.createElement("p");
    const priceElement = document.createElement("p");
    title.textContent = vet;
    locationElement.textContent = "Location: " + location;
    reviewElement.textContent = "Review: " + review;
    priceElement.textContent = "Price: " + price;
    card.appendChild(title);
    card.appendChild(locationElement);
    card.appendChild(reviewElement);
    card.appendChild(priceElement);
    cardContainer.appendChild(card);

}



function showResults(event) {
    "use strict";
    event.preventDefault(); 
    document.getElementById("search-results").classList.remove("hide");
    document.getElementById("browse-by-pet").classList.add("hide");
    document.getElementById("browse-by-treatment").classList.add("hide");
    const cardContainer = document.getElementById("search-result-cards-container");
    while (cardContainer.firstChild) {
        cardContainer.removeChild(cardContainer.firstChild);
    }
    const spec = document.getElementById("specialization").value;

    if (spec === 'Select an option') {
        vetName.forEach(vet => {
            if (vet == "Ascot Veterinary Hospital" ) {
                createCard(vet, locationName[0], review[2], price[1]);
            } else if (vet == "Perth Veterinary Specialists" ) {
                createCard(vet, locationName[1], review[1], price[2]);
            } else if (vet == "North Perth Vet Centre" ) {
                createCard(vet, locationName[2], review[2], price[0]);
    
            } else if (vet == "Morley Vetcentre") {
                createCard(vet, locationName[3], review[0], price[0]);
            }
        });
        
    } else {
        if (filters.specialization.ascotVeterinaryHospital.includes(spec)) {
            createCard("Ascot Veterinary Hospital", locationName[0], review[2], price[1]);
        } else if (filters.specialization.perthVeterinarySpecialists.includes(spec)) {
            createCard("Perth Veterinary Specialists", locationName[1], review[1], price[2]);
        } else if (filters.specialization.northPerthVetCentre.includes(spec)) {
            createCard("North Perth Vet Centre", locationName[2], review[2], price[0]);
        } else if (filters.specialization.morleyVetcentre.includes(spec)) {
            createCard("Morley Vetcentre", locationName[3], review[0], price[0]);
        }
    }
    
  
}





function init() {
    "use strict";
    populateSelect('petType', filters.type);
    document.getElementById("search-results").classList.add("hide");
    document.getElementById("petType").addEventListener('change', filter);
    document.getElementById("searchForm").addEventListener('submit', showResults);

}


window.onload = init;