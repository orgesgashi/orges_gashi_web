<?php 
// link to repo:  https://github.com/orgesgashi/orges_gashi_web
echo "<h1>My Exercise 3 - Orges Gashi</h1>";

# 1.Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
/*  It's August, so it's still holiday.
    Not August, This is Month-name so i don't have any holidays
    You can use date(F) function to get the current month name */
$month = date("F");
# here i declared a variable and i named it 'month'and assigned the 'date("F")' function to it to get the current month
if ($month == "August"){
    echo "It's August, so it's still holiday. <br>";
}else{
    echo "Not August, This is ". $month ." so I don't have any holidays <br>";
}
# here i used the if else statement to check wether the current month we get from the 'date' function is August or is a different month and based on which month it is it executes a different code


# 2. Assign color red to a variable name $color and check to print one the following responses using if else statement 
#   The color is red. 
#   The color is not red.
$color = "red";
# here i declared a variable named 'color' and assigned 'red' to it
if ($color == "red"){
    echo "The color is red. <br>";
}else{ 
    echo "The color is not red.";
}
# here i used if else statement to check if the color given is red or not and it will execute different code based on the given color


# 3.Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50
$grade = 60;
# here i declared a variable named grade and assigned a number to it
echo "Your grade is ";
# here i printed the default text that will be shown no matter the grade

if($grade>80){
    echo "Excellent!";
}elseif(($grade<80) && ($grade>=70)){
    echo "Great";
}elseif(($grade<70) && ($grade>=60)){
    echo "Good";
}elseif(($grade<60) && ($grade>=50)){
    echo "Pass";
}else{
    echo "Fail";
}
# here i used if elseif else statements to check the student's grade and print the grade they deserve based on the criteria that was given 
?>


<!-- 4.Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.) -->

<form action="exercise3.php" method="post">
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
<input type="submit" name="submit">
</form>
<!-- here i created a form so the user can input their name and age -->

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    if($age>=18){
        echo $name. "is eligible for voting";
    }else{
        echo $name, " is not eligible for voting";
    }
}
# here i used if else statements to check if the person that was inputed by the user is over or under 18 years old and based on that then it will execute code


# 5.Use a looping statement to construct the following pattern:
/*  12345678
    1234567
    123456
    12345
    1234
    123
    12
    1   */
echo "<br>";
for($x=9;$x>1;$x--){
    for($i=1;$i<$x;$i++){
        echo $i;
    }
    echo "<br>";
}
# here i used the 'for' statement to print the pattern that was requested


# 6.6. Use While loop to print the following pattern: 
/*  *
    **
    ***
    ****
    *****
    ******
    *******
    ********    */
echo "<br>";
$length=8;
$i=1;
# here i declared two variables that i am gonna use for the while loop

while($i<=$length){
    $x=1;
    while($x<=$i){
        echo "*";
        $x++;
    }
    echo "<br>";
    $i++;
}
# here i used the while loop to print the pattern that was requested 



?>
