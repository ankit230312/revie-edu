<?php include "../common/header.php"; ?>

<?php
include "db.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the exam_id from the query string
$org_id = isset($_GET['org_id']) ? intval($_GET['org_id']) : 0;

if ($org_id <= 0) {
    // Invalid org_id, handle the error as needed
    die('Invalid org_id');
}

// Fetch exam data for the given org_id
$sql = "SELECT et.id AS exam_id, et.exam_name, es.question_id 
        FROM exam_title et
        INNER JOIN exam_setup es ON et.id = es.exam_title
        WHERE et.org_id = $org_id";

$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error as needed
    die('Database query error');
}

// Create a data array to hold the exam data
$data = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Split question_ids into an array
        $question_ids = explode(',', $row['question_id']);

        // Fetch questions for this exam from exam_question table
        $questions = array();
        foreach ($question_ids as $question_id) {
            $question_id = intval($question_id);
            $question_sql = "SELECT * FROM exam_question WHERE id = $question_id";
            $question_result = mysqli_query($conn, $question_sql);

            if ($question_result && mysqli_num_rows($question_result) > 0) {
                $question_data = mysqli_fetch_assoc($question_result);
                $questions[] = $question_data;
            }
        }

        // Add exam data and questions to the data array
        $data[] = array(
            'exam_id' => $row['exam_id'],
            'exam_name' => $row['exam_name'],
            'questions' => $questions,
        );
    }
}
?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Question and options -->
            <section id="exam-section">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="exam-title"></h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="question mb-4" id="question-container">
                                        <!-- Question and options will be updated here -->
                                    </div>
                                    <div class="timer-container" id="timer-container">
                                        Time left: <span id="timer">30</span> seconds
                                    </div>
                                    <div class="next-button-container">
                                        <button id="next-button" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Include JavaScript variable with question data -->
<script>
    // Fetch exam data from the PHP script
    const examData = <?php echo json_encode($data); ?>;
    const examId = <?php echo $_GET['org_id']; ?>; // Adjust the exam ID as needed
    let currentExamIndex = 0; // Initialize the exam index
    let currentQuestionIndex = 0; // Initialize the question index
    let timerInterval;

    // Function to display the question
    function displayQuestion(examIndex, questionIndex) {
        const questionContainer = document.getElementById('question-container');
        const timerContainer = document.getElementById('timer-container');
        const nextButton = document.getElementById('next-button');

        if (examIndex < examData.length && questionIndex < examData[examIndex].questions.length) {
            const currentExam = examData[examIndex];
            const currentQuestion = currentExam.questions[questionIndex];

            // Create an array for options and map them to 'a', 'b', 'c', 'd'
            const options = [currentQuestion.opt1, currentQuestion.opt2, currentQuestion.opt3, currentQuestion.opt4];
            const optionLetters = ['a', 'b', 'c', 'd'];

            // Create HTML for the question and options
            const questionHTML = `
                <p> <pre>Q. ${currentQuestion.exam_ques} </pre></p>
                <div class="options">
                    ${options.map((option, index) => `
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" value="opt${index + 1}" id="opt${index + 1}">
                            <label class="form-check-label" for="opt${index + 1}">${optionLetters[index]}. ${option}</label>
                        </div>
                    `).join('')}
                </div>
            `;

            // Update the question and options display
            questionContainer.innerHTML = questionHTML;

            // Start the timer
            let timeLeft = 30; // 30 seconds per question
            timerContainer.textContent = `Time left: ${timeLeft} seconds`;

            timerInterval = setInterval(() => {
                timeLeft--;
                timerContainer.textContent = `Time left: ${timeLeft} seconds`;
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    // Automatically move to the next question when the time is up
                    currentQuestionIndex++;
                    displayQuestion(currentExamIndex, currentQuestionIndex);
                }
            }, 1000);

            // Enable or disable the next button based on whether an option is selected
            nextButton.disabled = true;

            // Event listener for option selection
            const radioButtons = document.querySelectorAll('input[name="answer"]');
            radioButtons.forEach((radioButton) => {
                radioButton.addEventListener('change', () => {
                    nextButton.disabled = false; // Enable the next button when an option is selected
                });
            });

            // Event listener for next button click
            nextButton.addEventListener('click', () => {
                clearInterval(timerInterval); // Clear the timer interval
                currentQuestionIndex++; // Move to the next question
                displayQuestion(currentExamIndex, currentQuestionIndex);
            });
        } else {
            // All questions for this exam are done
            questionContainer.innerHTML = '<p>All questions for this exam are done!</p>';
            timerContainer.style.display = 'none';

            // Move to the next exam if available
            currentExamIndex++;
            currentQuestionIndex = 0;

            if (currentExamIndex < examData.length) {
                // Display the first question of the next exam
                displayQuestion(currentExamIndex, currentQuestionIndex);
            } else {
                // All exams are done
                nextButton.style.display = 'none';
            }
        }
    }

    // Display the first question when the page loads
    displayQuestion(currentExamIndex, currentQuestionIndex);
</script>






<?php include "../common/footer.php"; ?>
