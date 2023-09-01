<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles */
    .card {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
      height: 400px;
      margin-bottom: 10px;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      margin-bottom: 10px;
      font-size: 20px;
      font-weight: bold;
    }

    .card-text {
      color: #777;
      font-size: 16px;
      line-height: 1.5;
    }
    .log {
  color: rgb(104, 85, 224);
  background-color: rgba(255, 255, 255, 1);
  border: 1px solid rgba(104, 85, 224, 1);
}
p {
  position: relative;
  top: 30px;
}

p a {
  color: black;
  text-decoration: none;
}

button {
  cursor: pointer;
  border: 0;
  border-radius: 4px;
  font-weight: 600;
  margin: 0 10px;
  width: 200px;
  padding: 10px 0;
  box-shadow: 0 0 20px rgba(104, 85, 224, 0.2);
  transition: 0.4s;
}

.reg {
  color: white;
  background-color: rgba(104, 85, 224, 1);
}

button:hover {
  color: white;
  width:;
  box-shadow: 0 0 20px rgba(104, 85, 224, 0.6);
  background-color: rgba(104, 85, 224, 1);
}
.container{
    margin-top: 5px;
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


  </style>
  <title>Grid of Cards with High Design</title>
</head>
<body>


<a href="/login">    <button style="width:100px; height:50px"  class="log">چوونەژوورەوە</button></a>
<div style="position:relative;left:35%">
 <form method="POST" action="{{route('search')}}">
    @csrf

    <input style="border:none;border-bottom:1px solid black" type="search" name="search" id="">
    <button>Submit</button>
 </form>
</div>
<div class="py-5">
    <div class="container">
      <div class="row hidden-md-up">
        @foreach ($data as $item)
        <div class="col-md-4">
          <div class="card">
            <div style="text-align: center" class="card-block">
              <h1 class="card-title">{{$item->name}}</h1>
              <h5 class="card-subtitle text-muted">{{$item->price}}</h5>
              <h5 class="card-subtitle text-muted">{{$item->type}}</h5>
              <p class="card-text p-y-1">{{$item->description}}.</p>
<div  style="width: 250px; height:200px;align-text:center;padding-top:15%;margin-left:18%">
    <img style="width:100%;height:100%;border-radius:10%" src="{{ asset('images/'.$item->image) }}"  alt="صورة المنتج"></div>
            </div>

          </div>

        </div>
        @endforeach

        <!--
<div class="grid-container">

      <div style="position: relative;right:5%" class="card-details">

        <h2 class="card-name">ناو:{{$item->name}} </h2>
        <p class="card-price"> نرخ :{{$item->price}} </p>
        <p class="card-type">جۆر : {{$item->type}} </p>
        <p class="card-description">تێبینی :{{$item->description}}    </p>
      </div>

      <div class="card-image">
        <img style="width:250px;height:195px;border-radius:10%" src="{{ asset('images/'.$item->image) }}"  alt="صورة المنتج">
      </div>
    </div>

  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min
-->
