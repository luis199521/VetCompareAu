/* jshint esversion: 6 */
/*filters and clinics will be use in filter.js*/ 
const filters = {
    type :[
         'dog',
         'cat',
         'rabbit'
         
    ],

    specialization : {
    ascotVeterinaryHospital:[

        "General Health Checks", "Dog Vaccinations", "Cat Vaccinations", "Travel Vaccinations", "De-Sexing", 
        "Microchipping", "Parasite control", "Radiology", "Pathology", "Titre Testing", "Specialist Referral", 
        "Dentistry", "Soft Tissue Surgery", "Orthopaedic Surgery"],

    perthVeterinarySpecialists:[

        "Animal Surgery", "Veterinary Oncology", "Veterinary Medicine Specialist", "Veterinary Imaging Centre", 
        "Anaesthesia", "Veterinary Dermatology Specialists", "Emergency", "Animal Blood Bank"],

    northPerthVetCentre:["Consultations", "Free puppy & kitten checks for new owners", "Preventative healthcare", 
        "Routine sterilisations", "On-site soft tissue surgery", "Digital x-rays", "Dentistry", 
        "Rabies vaccinations & export treatments", "With an APAV accredited veterinarian", "Emergency care", 
        "Nutrition counselling", "Puppy pre-school"],

    morleyVetcentre:[ "Pet Boarding", "Dog Daycare", "Pet Grooming", "Dog Training", "Pet Hospital", "Cat Adoption", 
        "Pet Shop", "Puppy Classes", "Behaviour Consults", "Desexing"]

    },

    location:[
        'belmont',
        'osborne park',
        'north perth',
        'morley'
    ],

    priceRange:[
        'affordable',
        'moderate',
        'high'
    ],

    clientReview:[
        4.6,
        4.8,
        4.9
    ]


};


const clinics = [
    'Ascot Veterinary Hospital',
    'Perth Veterinary Specialists',
    'North Perth Vet Centre',
    'Morley Vetcentre'
];






export {filters,clinics};

