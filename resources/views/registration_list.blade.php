<!DOCTYPE html>
<html lang="en">
<head>
  <title>list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
 <center> <h2> Registration List</h2></center>           
  <table class="table table-bordered">
    <thead>      
      <tr style="color:red;">
      <th>Id</th>
        <th > Name </th>
        <th>Email</th>
        <th >Gender </th>
        <th>Qualification</th>
        <!-- <th>Repeatpassword</th> -->
           <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($fd as $data)
      <tr>
      <td>{{$data->id}} </td>
        <td>{{$data->name}} </td>
        <td>{{$data->email}} </td>
        <td>{{$data->gender}} </td>
        <td>{{$data->qualification}} </td>
        <!-- <td>{{$data->repeatpassword}} </td> -->
        <td> <center>
        <a href="/edit_registration/{{$data->id}}" ><i class="fa fa-edit"></i></a>&nbsp||
        <a href="/delete_registration/{{$data->id}}" i class="fa fa-trash-o"></i>  </a>&nbsp||
        <a href="/registration_view/{{$data->id}}" i class="fa fa-eye"></i>  </a> </center>
      </td>  
      </tr>      
       @endforeach
    </tbody>
  </table>
  <center> <a href="registration"class="button button1" style="  
  padding:10px 18px;
  text-decoration: none; background-color:green; color:white; width:44px;">Add</a> </center>

</body>
</html>

