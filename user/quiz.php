<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'tms');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user's email from session
$email = $_SESSION['email'];

// Fetch user's name
$stmt = $conn->prepare("SELECT fullname FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$fullname = $user['fullname'];
$stmt->close();

// Questions array (you can replace this with questions from exam.pdf)
$questions = [
  ["question" => "जेब्रा क्रसिङ केका लागि प्रयोग गरिन्छ ?", "options" => ["उतार्न", "पैदल यात्रीले बाटो काट्न", "गाडी रोक्न", "गाडी कुदाउन"], "answer" => 1],
  ["question" => "ओभरटेक गर्दा कुन साइडबाट गर्ने ?", "options" => ["बायाँ", "दायाँ", "दुबै", "माथिको सबै"], "answer" => 1],
  ["question" => "पैदल यात्रीले बाटो काट्न कुन ठाउँ प्रयोग गर्नु पर्छ ?", "options" => ["जेब्रा क्रसिङ", "सब वे", "आकाशे पुल", "माथिको सबै"], "answer" => 3],
  ["question" => "रातको समयमा गाडी पार्क गर्दा कुन लाइट बाल्ने ?", "options" => ["हेड लाइट", "साइड लाइट", "पार्किंग लाइट", "इमरजेन्सी लाइट"], "answer" => 2],
  ["question" => "मोटरसाइकल चलाउँदा टाउको बचाउने उपाय के हो ?", "options" => ["बिस्तारै चलाउने", "क्याप लगाउने", "ओभरटेक नगर्ने", "हेल्मेट लगाउने"], "answer" => 3],
  ["question" => "आफ्नो सवारी पछाडिबाट एम्बुलेन्स आएमा के गर्ने ?", "options" => ["गाडी रोक्ने", "साइड दिने", "गति बढाउने", "ओभरटेक गर्ने"], "answer" => 1],
  ["question" => "विद्यालय वा अस्पताल नजिक गाडी चलाउँदा के नगर्नु ?", "options" => ["हर्न बजाउनु", "तीव्र गतिमा चलाउनु", "ओभरटेक गर्नु", "माथिको सबै"], "answer" => 3],
  ["question" => "ओभरटेक गर्न अगाडि सवारीलाई कसरी संकेत दिने ?", "options" => ["हेड लाइट बाल्ने", "हर्न बजाउने", "साइड लाइट दिने", "माथिको सबै"], "answer" => 3],
  ["question" => "गाडी मोड्दा कुन बत्ती बाल्ने ?", "options" => ["हेड लाइट", "ब्रेक लाइट", "साइड लाइट", "हर्न"], "answer" => 2],
  ["question" => "लेन अनुशासन भनेको के हो ?", "options" => ["जेब्रा क्रसिङमा रोक्ने", "आफ्नो लेनबाट मात्र चलाउने", "राति रफ्तारमा चलाउने", "हेल्मेट लगाउने"], "answer" => 1],
  ["question" => "दुर्घटनामा चालकको मुख्य गुण के हो ?", "options" => ["सहिष्णुता", "विनम्रता", "अनुशासन", "माथिको सबै"], "answer" => 3],
  ["question" => "सडक पार गर्दा कसलाई प्राथमिकता दिनुपर्छ ?", "options" => ["स्कुले विद्यार्थी", "अपाङ्ग", "बुजुर्ग", "माथिको सबै"], "answer" => 3],
  ["question" => "कस्तो स्थानमा हर्न बजाउनु हुँदैन ?", "options" => ["मुख्य सडक", "ट्राफिक जाम भएको स्थान", "विद्यालय वा अस्पताल नजिक", "नारा जुलुस भएको ठाउँ"], "answer" => 2],
  ["question" => "मोटरसाइकलको दायाँ हात कुन चीज नियन्त्रित गर्छ ?", "options" => ["ब्रेक", "क्लच", "गियर", "हर्न"], "answer" => 0],
  ["question" => "उकालोमा गाडी रोक्दा के गर्नुपर्छ ?", "options" => ["ह्यान्ड ब्रेक लगाउने", "गियर डाउन गर्ने", "सुरक्षित ठाउँमा रोक्ने", "माथिको सबै"], "answer" => 3],
  ["question" => "सवारी चालक अनुमतिपत्र प्राप्त गर्न कति वर्ष उमेर पुरा भएको हुनुपर्छ (मोटरसाइकल) ?", "options" => ["१६ वर्ष", "१७ वर्ष", "१८ वर्ष", "२० वर्ष"], "answer" => 0],
  ["question" => "कुन अवस्थामा गाडी चलाउन हुँदैन ?", "options" => ["मदिरा सेवन गरेको", "थकित अवस्था", "राति देखिने शक्ति कम भएको", "माथिको सबै"], "answer" => 3],
  ["question" => "दुई पाङ्ग्रे सवारीमा दायाँ खुट्टाले के नियन्त्रण गर्छ ?", "options" => ["क्लच", "ब्रेक", "गियर", "थ्रोटल"], "answer" => 1],
  ["question" => "सडकको कुन भागमा जेब्रा क्रसिङ राखिन्छ ?", "options" => ["मुख्य चोक", "प्रत्येक चोक", "बाहिर", "माथिको सबै"], "answer" => 3],
  ["question" => "सवारी साधन पार्क गर्ने उपयुक्त स्थान कुन हो ?", "options" => ["सडकको छेउ", "नो पार्किङ क्षेत्रमा", "चोकको बिचमा", "स्कुल अगाडि"], "answer" => 0]
];

// Shuffle questions
shuffle($questions);

// Get only first 10 questions
$quiz_questions = array_slice($questions, 0, 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Rules Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .quiz-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .question-card {
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
        }
        .option-label {
            display: block;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            cursor: pointer;
        }
        .option-label:hover {
            background-color: #f8f9fa;
        }
        .option-input {
            margin-right: 10px;
        }
        .score-display {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }
        .try-again-btn {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="ps-5 justify-content-center align-items-center container-fluid">
      <a href="userdash.php">
        <img src="img/logo.jpg" class="rounded-circle" alt="logo" style="height:65px;">
        <a class="navbar-brand" href="trafficdash.php">TMS</a>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-2">
          <li class="nav-item">
            <a class="nav-link" href="userdash.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payment.php">Payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice1.php">Notice</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="trafficrule.php">Traffic Rules</a></li>
              <li><a class="dropdown-item" href="trafficsign.php">Traffic Signs</a></li>
              <li><a class="dropdown-item" href="helpline.php">Traffic Helplines</a></li>
              <li><a class="dropdown-item" href="drivingexam.php">Model Question</a></li>
              <li><a class="dropdown-item" href="quiz.php">Start Quiz</a></li>
              <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="complain.html">Complain</a></li>
            </ul>
          </li>
        </ul>
        

        <div class="d-flex align-items-center">
          <div class="profile-section">
            <!-- <img src="img/user.jpg" alt="Profile" class="profile-avatar"> -->
            <span class="profile-name">👤 <?php echo $_SESSION['fullname']; ?></span>
          </div>
          <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

    <div class="container mt-5 pt-5">
        <div class="quiz-container">
            <h2 class="text-center mb-4">Traffic Rules Quiz</h2>
            <form id="quizForm">
                <?php foreach ($quiz_questions as $index => $question): ?>
                <div class="question-card">
                    <h5>Question <?php echo $index + 1; ?>: <?php echo htmlspecialchars($question['question']); ?></h5>
                    <?php foreach ($question['options'] as $optionIndex => $option): ?>
                    <label class="option-label">
                        <input type="radio" name="q<?php echo $index; ?>" value="<?php echo $optionIndex; ?>" class="option-input" required>
                        <?php echo htmlspecialchars($option); ?>
                    </label>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
                <button type="submit" class="btn btn-primary">Submit Quiz</button>
            </form>
            <div id="scoreDisplay" class="score-display" style="display: none;"></div>
            <button id="tryAgainBtn" class="btn btn-secondary try-again-btn" style="display: none;">Try Again</button>
        </div>
    </div>

    <script>
        document.getElementById('quizForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get all questions
            const questions = <?php echo json_encode($quiz_questions); ?>;
            let score = 0;
            
            // Check each answer
            questions.forEach((question, index) => {
                const selectedOption = document.querySelector(`input[name="q${index}"]:checked`);
                if (selectedOption && parseInt(selectedOption.value) === question.answer) {
                    score++;
                }
            });
            
            // Display score
            const scoreDisplay = document.getElementById('scoreDisplay');
            const tryAgainBtn = document.getElementById('tryAgainBtn');
            const quizForm = document.getElementById('quizForm');
            
            scoreDisplay.textContent = `Your score: ${score} out of ${questions.length}`;
            scoreDisplay.style.display = 'block';
            tryAgainBtn.style.display = 'block';
            quizForm.style.display = 'none';
        });
        
        document.getElementById('tryAgainBtn').addEventListener('click', function() {
            location.reload();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 