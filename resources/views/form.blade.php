<!DOCTYPE html>

<head>
    <title>
        Form
    </title>
</head>
<body>
    <h1>
        Buat Account Baru!
    </h1>
    <h3>
        Sign Up Form
    </h3>
    <form method = "POST" action="/welcome">
        @csrf
        <p>First Name:</p>
        <input name="nama_depan" size=60>

        <p>Last Name:</p>
        <input name="nama_belakang" size=60>

        <p>Gender:</p>
        <input type="radio" name="sex">male<br>
        <input type="radio" name="sex">Female<br>
        <input type="radio" name="sex">Other

        <p>Nationality:</p>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="English">English</option>
            <option value="Other">Other</option>
        </select>

        <p>Language Spoken:</p>
        <input type="radio" name="indonesia">Bahasa Indonesia<br>
        <input type="radio" name="english">English<br>
        <input type="radio" name="other">Other<br>

        <p>Bio:</p>
        <textarea cols="60" rows="7">
        </textarea>

        <br>
        <input type="submit" value="Sin Up">
        </button>
    </form>

</body>