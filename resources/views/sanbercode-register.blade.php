<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun </title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>
        Sign Up Form
    </h2>

    <form action="/welcome" method="POST">
        @csrf
        <label for="Fname">First Name :</label> <br> <br>
            <input type="text" name="Fname" id="Fname"> <br> <br>
        <label for="Lname">Last Name :</label> <br> <br>
            <input type="text" name="Lname" id="Lname"> <br> <br>

        <label >Gender :</label> <br> <br>
            <input type="radio" name="JenisKelamin"> Male <br>
            <input type="radio" name="JenisKelamin"> Female <br>
            <input type="radio" name="JenisKelamin"> Other <br><br>

        <label>Nationality :</label><br> <br>
        <select name="Negara">
            <option> Indonesia</option>
            <option>Malaysia</option>
            <option>Singapura</option>
        </select>
        <br> <br>
        <label>Languege Spoken:</label> <br> <br>
            <input type="checkbox" name="Bahasa">Bahasa Indonesia<br>
            <input type="checkbox" name="Bahasa">English<br>
            <input type="checkbox" name="Bahasa">Other<br> <br>

        <label for="bio">Bio:</label> <br> <br>
            <textarea cols="35" rows="10" id="bio" name="Bio"></textarea> <br>
            <input type="submit" value="Sign Up">
    </form>



</body>
</html>
