<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /* Reset default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

.login-container {
  max-width: 300px;
  margin: 100px auto;
  background-color: #ffffff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

</style>
<body>
    <div class="login-container">
        <h2>چوونەژوورەوە</h2>
        <span style="color: red;font-size:15px;position: relative;left:45%">@if (Session::has('warnning'))
            {{Session::get('warnning')}}
        @endif</span>
        <form method="POST" action="{{route('login_check')}}">
            @csrf
          <div class="form-group">
            <label style="position: relative;left:90%" for="username">ناو</label>
            @error('email')
                {{$message}}
            @enderror
            <input name="email" type="text" id="username" placeholder="ناوت تۆمار بکە" >
          </div>
          <div class="form-group">
            <label style="position: relative;left:75%" for="password">وشەی نهێنی</label>
            @error('password')
            {{$message}}
        @enderror
            <input name="password" type="password" id="password" placeholder="وشەی نهێنی تۆمار بکە" >
          </div>
          <button type="submit">چوونەژوورەوە</button>
        </form>
      </div>

</body>
</html>
