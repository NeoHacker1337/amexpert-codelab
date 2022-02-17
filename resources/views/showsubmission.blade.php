<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Show Submission</title>
  </head>
  <body>

    <h1 class="text-center"> <a href=" {{url('/')}}">Show Submission Excel File !</a></h1>

    <section style="padding-top:60px;">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="card">
             @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
             @endif

             <table class="table">
               <thead>
     <tr>
       <th>id</th>
       <th>Customer_id</th>
       <th>Credit_card_default</th>
       <th>Predict</th>
     </tr>
   </thead>
   <tbody>
       @foreach ($data as $d)
     <tr>
       <td>{{$d->id}}</td>
       <td>{{$d->customer_id}}</td>
       <td>{{$d->credit_card_default}}</td>
       <td><a href="single-customer-information/{{$d->id}}">Click Me To Show Predict Facts</a></td>
     </tr>
@endforeach
   </tbody>
   <tfoot>
     <tr>
       <th>id</th>
       <th>Customer_id</th>
       <th>Credit_card_default</th>
       <th>Predict</th>
     </tr>
   </tfoot>
 </table>


           </div>
         </div>

       </div>
     </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
