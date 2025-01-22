<?php
// Mock data for demonstration purposes
$allQuestions = [
    [
        "question" => "What is the atomic number of hydrogen?",
        "options" => ["1", "2", "3", "4"],
        "correctAnswer" => "1"
    ],
    [
        "question" => "Who is known as the father of modern physics?",
        "options" => ["Isaac Newton", "Albert Einstein", "Galileo Galilei", "Stephen Hawking"],
        "correctAnswer" => "Albert Einstein"
    ],
    [
        "question" => "What is the speed of light in a vacuum?",
        "options" => ["300,000 km/s", "150,000 km/s", "450,000 km/s", "600,000 km/s"],
        "correctAnswer" => "300,000 km/s"
    ],
    [
        "question" => "What is the chemical symbol for gold?",
        "options" => ["Au", "Ag", "Fe", "Pb"],
        "correctAnswer" => "Au"
    ],
    [
        "question" => "Which planet is closest to the Sun?",
        "options" => ["Venus", "Mercury", "Earth", "Mars"],
        "correctAnswer" => "Mercury"
    ],
    [
        "question" => "What is the powerhouse of the cell?",
        "options" => ["Nucleus", "Mitochondria", "Ribosome", "Chloroplast"],
        "correctAnswer" => "Mitochondria"
    ],
    [
        "question" => "What is the boiling point of water at sea level?",
        "options" => ["90°C", "100°C", "110°C", "120°C"],
        "correctAnswer" => "100°C"
    ],
    [
        "question" => "Who developed the theory of relativity?",
        "options" => ["Albert Einstein", "Isaac Newton", "Marie Curie", "Nikola Tesla"],
        "correctAnswer" => "Albert Einstein"
    ],
    [
        "question" => "What is the largest organ in the human body?",
        "options" => ["Heart", "Liver", "Skin", "Lungs"],
        "correctAnswer" => "Skin"
    ],
    [
        "question" => "What is the main gas found in the Earth's atmosphere?",
        "options" => ["Oxygen", "Nitrogen", "Carbon Dioxide", "Hydrogen"],
        "correctAnswer" => "Nitrogen"
    ],
    [
        "question" => "What is the freezing point of water?",
        "options" => ["0°C", "10°C", "-5°C", "-10°C"],
        "correctAnswer" => "0°C"
    ],
    [
        "question" => "Which planet has the most moons?",
        "options" => ["Mars", "Earth", "Saturn", "Jupiter"],
        "correctAnswer" => "Jupiter"
    ],
    [
        "question" => "What is the chemical formula of carbon dioxide?",
        "options" => ["CO2", "C2O", "O2C", "C2O2"],
        "correctAnswer" => "CO2"
    ],
    [
        "question" => "Who discovered penicillin?",
        "options" => ["Alexander Fleming", "Marie Curie", "Louis Pasteur", "Joseph Lister"],
        "correctAnswer" => "Alexander Fleming"
    ],
    [
        "question" => "What is the hardest natural substance on Earth?",
        "options" => ["Gold", "Diamond", "Iron", "Quartz"],
        "correctAnswer" => "Diamond"
    ],
    [
        "question" => "What is the smallest particle of an element?",
        "options" => ["Atom", "Molecule", "Proton", "Electron"],
        "correctAnswer" => "Atom"
    ],
    [
        "question" => "Which blood type is the universal donor?",
        "options" => ["A", "B", "AB", "O"],
        "correctAnswer" => "O"
    ],
    [
        "question" => "What does DNA stand for?",
        "options" => ["Deoxyribonucleic Acid", "Dinuclear Acid", "Double Helix Acid", "Dihydro Acid"],
        "correctAnswer" => "Deoxyribonucleic Acid"
    ],
    [
        "question" => "What is the smallest planet in the solar system?",
        "options" => ["Venus", "Mars", "Mercury", "Pluto"],
        "correctAnswer" => "Mercury"
    ],
    [
        "question" => "What is the main component of the Sun?",
        "options" => ["Helium", "Hydrogen", "Oxygen", "Nitrogen"],
        "correctAnswer" => "Hydrogen"
    ],
    [
        "question" => "What is the unit of power?",
        "options" => ["Joule", "Watt", "Newton", "Pascal"],
        "correctAnswer" => "Watt"
    ],
    [
        "question" => "Who proposed the law of universal gravitation?",
        "options" => ["Isaac Newton", "Albert Einstein", "Galileo Galilei", "Nikola Tesla"],
        "correctAnswer" => "Isaac Newton"
    ],
    [
        "question" => "Which element has the chemical symbol Na?",
        "options" => ["Nitrogen", "Sodium", "Neon", "Nickel"],
        "correctAnswer" => "Sodium"
    ],
    [
        "question" => "What is the most abundant gas in the universe?",
        "options" => ["Oxygen", "Hydrogen", "Helium", "Nitrogen"],
        "correctAnswer" => "Hydrogen"
    ],
    [
        "question" => "Which organ pumps blood throughout the body?",
        "options" => ["Liver", "Heart", "Kidney", "Lungs"],
        "correctAnswer" => "Heart"
    ],
    [
        "question" => "What is the study of plants called?",
        "options" => ["Zoology", "Botany", "Microbiology", "Ecology"],
        "correctAnswer" => "Botany"
    ],
    [
        "question" => "What is the pH level of pure water?",
        "options" => ["7", "6", "5", "8"],
        "correctAnswer" => "7"
    ],
    [
        "question" => "Which vitamin is produced when the skin is exposed to sunlight?",
        "options" => ["Vitamin A", "Vitamin B", "Vitamin C", "Vitamin D"],
        "correctAnswer" => "Vitamin D"
    ],
    [
        "question" => "What is the distance light travels in one year called?",
        "options" => ["Astronomical Unit", "Light Year", "Parsec", "Kilometer"],
        "correctAnswer" => "Light Year"
    ],
    [
        "question" => "What is the process of cell division called?",
        "options" => ["Mitosis", "Osmosis", "Photosynthesis", "Meiosis"],
        "correctAnswer" => "Mitosis"
    ],
    [
        "question" => "What is the largest planet in our solar system?",
        "options" => ["Earth", "Saturn", "Jupiter", "Mars"],
        "correctAnswer" => "Jupiter"
    ]
    
    // ... Add more questions as needed ...
];

// Shuffle the array to get random questions
shuffle($allQuestions);

// Select the first 5 questions (or modify the number as required)
$selectedQuestions = array_slice($allQuestions, 0, 5);

// Output the selected questions in JSON format
echo json_encode($selectedQuestions);
?>
