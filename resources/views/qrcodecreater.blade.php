<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <!-- Compiled and minified JavaScript -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>

/* Reset default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    font-family: 'NRT';
  background-color: #f1f1f1;
}

.form-container {
  max-width: 300px;
  margin: 100px auto;
  background-color: #ffffff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

form {
  direction: rtl; /* Set the direction to right-to-left */
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
textarea {
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

.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.grid-card {
  display: flex;
  flex-direction: row-reverse;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card-details {
  padding: 20px;
  flex: 1;
  text-align: right;
}

.card-image img {
  width: 100%;
  height: auto;
}

.card-name {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-price,
.card-type {
  margin-bottom: 5px;
}

.card-description {
  font-size: 14px;
  line-height: 1.5;
  text-align: right;
}
@media only screen and (max-device-width: 480px) {
        div#wrapper {
            width: 400px;
        }

        div#header {
            background-image: url(media-queries-phone.jpg);
            height: 93px;
            position: relative;
        }

        div#header h1 {
            font-size: 140%;
        }

        #content {
            float: none;
            width: 100%;
        }

        #navigation {
            float:none;
            width: auto;
        }
    }
    @font-face {
    font-family: 'NRT';
    src: url('/font/NRT-Reg.ttf') format('truetype');
}
</style>
<script>
    function printContent() {
  var printElement = document.getElementById("print-content");
  var printWindow = window.open('', '', 'width=600,height=600');

  printWindow.document.write('<html><head><title>Print</title></head><body>');
  printWindow.document.write(printElement.innerHTML);
  printWindow.document.write('</body></html>');

  printWindow.document.close();
  printWindow.focus();
  printWindow.print();
  printWindow.close();
}
</script>
    <title>Document</title>
</head>
<body>
    <a  class="m-5" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="fa fa-plus" style="font-size:36px"></i>
      </a>
    <a href="logout"> <button style="position:relative;bottom:7px;left:65%" class="btn btn-danger" ><i class="fa fa-sign-out"></i></button></a>

      <div  style="width: 90%" class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div style="position: relative;bottom:100px;"  style="width: 90%"   class="form-container">
            <div class="offcanvas-header">
                <h5 style="position: relative;left:50px" class="offcanvas-title" id="offcanvasExampleLabel">زیاد کردنی ئۆتۆمبێل</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
            <form  method="POST" action="{{route('qrcode_create')}}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label style="color:black;font-size:20px" for="name">ناو</label>
                <input name="name" type="text" id="name" placeholder="ناو داخیل بکە">
              </div>
              <div class="form-group">
                <label style="color:black;font-size:20px" for="type">جۆر</label>
                <input name="type" type="text" id="type" placeholder="جۆر داخیل بکە">
              </div>
              <div class="form-group">
                <label style="color:black;font-size:20px" for="price">نرخ</label>
                <input name="price" type="text" id="price" placeholder="نرخ داخیل بکە">
              </div>
              <div class="form-group">
                <label style="color:black;font-size:20px" for="price">وێنە</label>
                <input name="image" type="file" id="price" placeholder="نرخ داخیل بکە">
              </div>
              <div class="form-group">
                <label style="color:black;font-size:20px" for="description">تێبینی داخیل بکە</label>
                <textarea name="description" id="description" placeholder="Enter description"></textarea>
              </div>
              <button type="submit">زیاد کردن</button>
            </form>

          </div>

      </div>
    @if (Session::has('yes'))
        {{Session::get('yes')}}
    @endif
<!--

   <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title center">
        </span>
        <h1  style="position: relative;left:25%"class="center"></h1>

        </div>
      </div>
    </div>
  </div>

-->

@foreach ($data as $item)
<div  class="grid-container">
    <div  class="grid-card"><div  style="position: relative;top:15%">
       <p > {!!  DNS2D::getBarcodeHTML('نرخ  : '.$item->price.' , '.'تێبینی :' .$item->description
 , 'QRCODE',3,3) !!}</p>
    </div>
      <div style="position: relative;right:5%" class="card-details">

        <h2 class="card-name">ناو:{{$item->name}} </h2>
        <p class="card-price"> نرخ :{{$item->price}} </p>
        <p class="card-type">جۆر : {{$item->type}} </p>
        <p class="card-description">تێبینی :{{$item->description}}    </p>
       <a href="/delete/{{$item->id}}"> <i class="material-icons" style="font-size:48px;color:red">delete</i></a> <i  onclick="printContent()"  style="font-size:48px;position: relative;bottom:4px" class="fa fa-print"></i>
        </button>  </a>
      </div>

      <div class="card-image">
        <img style="width:250px;height:195px;border-radius:10%" src="{{ asset('images/'.$item->image) }}"  alt="صورة المنتج">
      </div>
    </div>

  </div>
  @endforeach

</body>
</html>
