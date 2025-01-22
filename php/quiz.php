<?php
// Mock data for demonstration purposes
$allQuestions = [
    [
        "question" => "What is the atomic number of carbon?",
        "options" => ["5", "12", "6", "14"],
        "correctAnswer" => "6"
    ],
    [
        "question" => "Which process is responsible for the formation of clouds in the atmosphere?",
        "options" => ["Evaporation", "Condensation", "Sublimation", "Precipitation"],
        "correctAnswer" => "Condensation"
    ],
    [
        "question" => "What is the SI unit of force?",
        "options" => ["Joule", "Newton", "Watt", "Pascal"],
        "correctAnswer" => "Newton"
    ],
    [
        "question" => "What is the chemical formula of water?",
        "options" => ["CO2", "O2", "H2O", "CH4"],
        "correctAnswer" => "H2O"
    ],
    [
        "question" => "In the human body, which organ produces insulin?",
        "options" => ["Heart", "Lungs", "Liver", "Pancreas"],
        "correctAnswer" => "Pancreas"
    ],
    [
        "question" => "What is the unit of Electric Current?",
        "options" => ["Volt", "Ohm", "Ampere", "Pascal"],
        "correctAnswer" => "Ampere"
    ],
    [
        "question" => "What is the atomic number of oxygen?",
        "options" => ["6", "8", "10", "12"],
        "correctAnswer" => "8"
    ],
    [
        "question" => "Which planet is known as the Red Planet?",
        "options" => ["Earth", "Mars", "Venus", "Jupiter"],
        "correctAnswer" => "Mars"
    ],
    [
        "question" => "Which planet has life?",
        "options" => ["Earth", "Mars", "Venus", "Jupiter"],
        "correctAnswer" => "Earth"
    ],
    [
        "question" => "What is the capital of India?",
        "options" => ["Paris", "New Delhi", "Rome", "Madrid"],
        "correctAnswer" => "New Delhi"
    ],
    [
        "question" => "What is the boiling point of water at sea level?",
        "options" => ["90°C", "100°C", "110°C", "120°C"],
        "correctAnswer" => "100°C"
    ],
    [
        "question" => "Who discovered gravity?",
        "options" => ["Albert Einstein", "Isaac Newton", "Galileo Galilei", "Niels Bohr"],
        "correctAnswer" => "Isaac Newton"
    ],
    [
        "question" => "Which gas is most abundant in Earth's atmosphere?",
        "options" => ["Oxygen", "Nitrogen", "Carbon Dioxide", "Hydrogen"],
        "correctAnswer" => "Nitrogen"
    ],
    [
        "question" => "What is the smallest unit of life?",
        "options" => ["Cell", "Tissue", "Organ", "Organism"],
        "correctAnswer" => "Cell"
    ],
    [
        "question" => "What is the speed of light in a vacuum?",
        "options" => ["300,000 km/s", "150,000 km/s", "450,000 km/s", "600,000 km/s"],
        "correctAnswer" => "300,000 km/s"
    ],
    [
        "question" => "What is the capital of France?",
        "options" => ["Berlin", "Madrid", "Rome", "Paris"],
        "correctAnswer" => "Paris"
    ],
    [
        "question" => "Which organ is responsible for pumping blood in the human body?",
        "options" => ["Brain", "Heart", "Liver", "Lungs"],
        "correctAnswer" => "Heart"
    ],
    [
        "question" => "What is the process by which plants make their own food?",
        "options" => ["Respiration", "Photosynthesis", "Fermentation", "Digestion"],
        "correctAnswer" => "Photosynthesis"
    ],
    [
        "question" => "Which is the largest mammal on Earth?",
        "options" => ["Elephant", "Blue Whale", "Giraffe", "Hippopotamus"],
        "correctAnswer" => "Blue Whale"
    ],
    [
        "question" => "What is the chemical symbol for gold?",
        "options" => ["Au", "Ag", "Fe", "Hg"],
        "correctAnswer" => "Au"
    ]
    
    
    // Add more questions as needed
];

// Shuffle the array to randomize questions
shuffle($allQuestions);

// Select the first 5 questions from the shuffled array
$selectedQuestions = array_slice($allQuestions, 0, 5);

// Encode the selected questions as JSON and output them
echo json_encode($selectedQuestions);
?>
