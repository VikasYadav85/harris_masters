<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; 
background-color:skyblue;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 300px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f200;
  padding: 20px;
}
</style>
</head>
<body>
<center>
<div class="container">
<form  action="{{ route('list_type_store') }}" method="post">
    <!-- {{ csrf_field() }} -->
     <h2> View List</h2>
  <form  action="{{ route('list_type_store') }}" method="post">
    {{ csrf_field() }}
              <div class="form-group mb-3">
                <input type="text" class="form-control" name="Name" placeholder="Name" value="{{$fd->Name}}" readonly>
              </div>
              <div class="form-group mb-3">
                <input type="text" class="form-control" name="Email" placeholder="Name" value="{{$fd->Email}} " readonly>
              </div>
              <div class="form-group mb-3">
                <input type="text" class="form-control" name="mobile" placeholder="Name" value="{{$fd->mobile}}" readonly>
              </div>
              <div class="form-group mb-3">
                <input type="text" class="form-control"  rows="3"  name="Subject" placeholder="Message"value="{{$fd->Subject}}" readonly></div>
              <div>
             
              </div>
            </form>
</div>
</center>
</body>
</html>
