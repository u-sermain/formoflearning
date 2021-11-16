<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Survey Form</title>
</head>
<body>
    <div class="grid-container full fluid">

        <div class="head">Survey Form</div>

        <img src="includes/icon.png" alt="Form Icon">

        <hr>

        <form action="insert.php" method="POST">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 large-8">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Name (Optional)">
                </div>

                <div class="cell medium-6 large-4">
                    <label>Age:</label>
                    <input type="text" name="age" placeholder="Age">
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 large-8">
                    <label>Course:</label>
                    <select name="course">
                    <option value="ACT">ACT</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BSIT">BSIT</option>
                    </select>
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 large-8">
                    <label>Year Level:</label>
                    <select name="level">
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                    </select>
                </div>
            </div>

            <br><br>

            <div class="table-scroll">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <table class="hover">
                            <thead>
                                <tr>
                                    <th width="50%"></th>
                                    <th width="10%">Strongly Disagree</th>
                                    <th width="10%">Disagree</th>
                                    <th width="10%">Neutral</th>
                                    <th width="10%">Agree</th>
                                    <th width="10%">Strongly Agree</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td>The learning environment helps me comprehend the course materials.</td>
                                    <td><input type="radio" name="question1" id="question1" value=1></td>
                                    <td><input type="radio" name="question1" id="question2" value=2></td>
                                    <td><input type="radio" name="question1" id="question3" value=3></td>
                                    <td><input type="radio" name="question1" id="question4" value=4></td>
                                    <td><input type="radio" name="question1" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>A classroom environment makes it easier for me to communicate with my instructor.</td>
                                    <td><input type="radio" name="question2" id="question1" value=1></td>
                                    <td><input type="radio" name="question2" id="question2" value=2></td>
                                    <td><input type="radio" name="question2" id="question3" value=3></td>
                                    <td><input type="radio" name="question2" id="question4" value=4></td>
                                    <td><input type="radio" name="question2" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>An online environment makes it easier for me to communicate with my instructor.</td>
                                    <td><input type="radio" name="question3" id="question1" value=1></td>
                                    <td><input type="radio" name="question3" id="question2" value=2></td>
                                    <td><input type="radio" name="question3" id="question3" value=3></td>
                                    <td><input type="radio" name="question3" id="question4" value=4></td>
                                    <td><input type="radio" name="question3" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>A classroom environment makes it easier for me to communicate with my classmates.</td>
                                    <td><input type="radio" name="question4" id="question1" value=1></td>
                                    <td><input type="radio" name="question4" id="question2" value=2></td>
                                    <td><input type="radio" name="question4" id="question3" value=3></td>
                                    <td><input type="radio" name="question4" id="question4" value=4></td>
                                    <td><input type="radio" name="question4" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>An online environment makes it easier for me to communicate with my classmates.</td>
                                    <td><input type="radio" name="question5" id="question1" value=1></td>
                                    <td><input type="radio" name="question5" id="question2" value=2></td>
                                    <td><input type="radio" name="question5" id="question3" value=3></td>
                                    <td><input type="radio" name="question5" id="question4" value=4></td>
                                    <td><input type="radio" name="question5" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>I feel comfortable responding to questions presented in the course.</td>
                                    <td><input type="radio" name="question6" id="question1" value=1></td>
                                    <td><input type="radio" name="question6" id="question2" value=2></td>
                                    <td><input type="radio" name="question6" id="question3" value=3></td>
                                    <td><input type="radio" name="question6" id="question4" value=4></td>
                                    <td><input type="radio" name="question6" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>Because of the course content, I would rather take this class on-campus than online.</td>
                                    <td><input type="radio" name="question7" id="question1" value=1></td>
                                    <td><input type="radio" name="question7" id="question2" value=2></td>
                                    <td><input type="radio" name="question7" id="question3" value=3></td>
                                    <td><input type="radio" name="question7" id="question4" value=4></td>
                                    <td><input type="radio" name="question7" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>The learning environment contributes to my overall satisfaction with the course.</td>
                                    <td><input type="radio" name="question8" id="question1" value=1></td>
                                    <td><input type="radio" name="question8" id="question2" value=2></td>
                                    <td><input type="radio" name="question8" id="question3" value=3></td>
                                    <td><input type="radio" name="question8" id="question4" value=4></td>
                                    <td><input type="radio" name="question8" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>I am more comfortable responding to questions by email than orally.</td>
                                    <td><input type="radio" name="question9" id="question1" value=1></td>
                                    <td><input type="radio" name="question9" id="question2" value=2></td>
                                    <td><input type="radio" name="question9" id="question3" value=3></td>
                                    <td><input type="radio" name="question9" id="question4" value=4></td>
                                    <td><input type="radio" name="question9" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>The course format makes it easier to meet my learning needs.</td>
                                    <td><input type="radio" name="question10" id="question1" value=1></td>
                                    <td><input type="radio" name="question10" id="question2" value=2></td>
                                    <td><input type="radio" name="question10" id="question3" value=3></td>
                                    <td><input type="radio" name="question10" id="question4" value=4></td>
                                    <td><input type="radio" name="question10" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>The value of the learning environment is the primary reason that I enrolled in this course.</td>
                                    <td><input type="radio" name="question11" id="question1" value=1></td>
                                    <td><input type="radio" name="question11" id="question2" value=2></td>
                                    <td><input type="radio" name="question11" id="question3" value=3></td>
                                    <td><input type="radio" name="question11" id="question4" value=4></td>
                                    <td><input type="radio" name="question11" id="question5" value=5></td>
                                </tr>

                                <tr>
                                    <td>The learning environment helps me to learn course materials better.</td>
                                    <td><input type="radio" name="question12" id="question1" value=1></td>
                                    <td><input type="radio" name="question12" id="question2" value=2></td>
                                    <td><input type="radio" name="question12" id="question3" value=3></td>
                                    <td><input type="radio" name="question12" id="question4" value=4></td>
                                    <td><input type="radio" name="question12" id="question5" value=5></td>
                                </tr>
                            </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>
</body>
</html>