<?php

// // assignment: create a simple score grading app that takes in a score and outputs the grade based on the following
// criteria:
// /*
// 90-100: A
// 80-89: B
// 70-79: C
// 60-69: D
// 0-59: F
// */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['score'])) {
        $score = $_POST['score'];
        if ($score >= 90 || $score === 100) {
            echo "With score of $score your grade is A";
        } elseif ($score >= 80 || $score === 89) {
            echo "With score of $score your grade is B";
        } elseif ($score >= 70 || $score === 79) {
            echo "With score of $score your grade is C";
        } elseif ($score >= 60 || $score === 69) {
            echo "With score of $score your grade is D";
        } else {
            echo "With score of $score your grade is F";
        }
    };
}

?>
<html>


<script>


</script>

<body>
    <form action="" method="post">
        <label for="score">Score</label> <input type="number" name="score" id="name" placeholder="Enter Score Here">
        <input type="submit" value="Submit">

    </form>


</body>



</html>