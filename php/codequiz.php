<?php
// Mock data for demonstration purposes
$allQuestions = [
    [
        "question" => "Which programming language is known for simplicity and readability?",
        "options" => ["Ruby", "C++", "Java", "Python"],
        "correctAnswer" => "Python"
    ],
    [
        "question" => "Which language is known as a low-level programming language often used for system programming?",
        "options" => ["Python", "Java", "Assembly language", "C"],
        "correctAnswer" => "Assembly language"
    ],
    [
        "question" => "Which of the following is not a valid data type in most programming languages?",
        "options" => ["String", "Float", "Character", "Loop"],
        "correctAnswer" => "Loop"
    ],
    [
        "question" => "Who invented the C language?",
        "options" => ["Dennis Ritchie", "Robert Downey", "Jim Sheridan", "Tim Berners-Lee"],
        "correctAnswer" => "Dennis Ritchie"
    ],
    [
        "question" => "How many types of iteration are there in C language?",
        "options" => ["1", "2", "3", "4"],
        "correctAnswer" => "3"
    ],
    [
        "question" => "++ What does this symbol stand for?",
        "options" => ["decrement", "multiply", "increment", "modulus"],
        "correctAnswer" => "increment"
    ],
    [
        "question" => "What is the first index of an array?",
        "options" => ["0", "1", "01", "10"],
        "correctAnswer" => "0"
    ]
    // ... Add more questions as needed ...
];

// Shuffle the array to randomize the questions
shuffle($allQuestions);

// Select the first 5 questions
$selectedQuestions = array_slice($allQuestions, 0, 5);

// Encode the selected questions as JSON and output
echo json_encode($selectedQuestions);
?>
