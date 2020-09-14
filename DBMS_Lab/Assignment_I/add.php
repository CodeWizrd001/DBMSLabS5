<html>
<link rel="stylesheet" href="../../global.css">
<body>
<h1>My first PHP page</h1>
<form action="insert.php" method="post">
    <div class="grid-2">
        <div class="grid-child">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="grid-child">
            <label for="roll">Roll No:</label>
            <input type="text" name="roll" id="roll">
        </div>
    </div>
    <div class="grid-2">
        <div class="grid-child">
            <label for="phone">Phone :</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div class="grid-child">
            <label for="email">Email Address:</label>
            <input type="text" name="email" id="email">
        </div>
    </div>
    <div style="margin:10px;    ">
        <label for="date"> Date Of Birth: </label>
        <input type="date" name="dob" id="dob">
    </div>
    <div class="grid-4">
        <div class="grid-child">
            <label for="s1">S1 - SGPA:</label>
            <input type="text" name="s1" id="s1">
        </div>
        <div class="grid-child">
            <label for="s2">S2 - SGPA:</label>
            <input type="text" name="s2" id="s2">
        </div>
        <div class="grid-child">
            <label for="s3">S3 - SGPA:</label>
            <input type="text" name="s3" id="s3">
        </div>
        <div class="grid-child">
            <label for="s4">S4 - SGPA:</label>
            <input type="text" name="s4" id="s4">
        </div>
    </div>
    <div class="grid-4">
        <div class="grid-child">
            <label for="s5">S5 - SGPA:</label>
            <input type="text" name="s5" id="s5">
        </div>
        <div class="grid-child">
            <label for="s6">S6 - SGPA:</label>
            <input type="text" name="s6" id="s6">
        </div>
        <div class="grid-child">
            <label for="s7">S7 - SGPA:</label>
            <input type="text" name="s7" id="s7">
        </div>
        <div class="grid-child">
            <label for="s8">S8 - SGPA:</label>
            <input type="text" name="s8" id="s8">
        </div>
    </div>
    <div class="grid-2">
        <div class="grid-child">
            <label for="cgpa">CGPA:</label>
            <input type="text" name="cgpa" id="cgpa">
        </div>
        <div class="grid-child">
            <label for="hobbies">Hobbies :</label>
            <input type="text" name="hobbies" id="hobbies">
        </div>
    </div>
    <div class="grid-2">
        <div class="grid-child">
            <label for="hosteller">Hosteller : </label>
            <select name="hosteller" id="hosteller">
                <option value="Y"> Y </option>
                <option value="N"> N </option>
            </select>
        </div>
        <div class="grid-child">
            <label for="references">References:</label>
            <input type="text" name="references" id="references">
        </div>
    </div>
    <input type="submit" value="Submit">
</form>
</body>
</html>