<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Client Details </title>
<style>
tbody{
max-height: 10vh;
overflow: auto;
}
</style>
  </head>
  <body>

    <section style="padding-top:60px;">
     <div class="container">
       <div class="row">
         <h1 class="text-center">This Page is only for see client record</h1>
         <h4 class="text-center"> <a href=" {{url('/')}}">Back !</a></h4>
         <div class="col-md-6 offset-md-3">
           <div class="card">
             <div class="card-header">To Import New Record
             </div>
             <div class="card-body">
               <form method="POST" enctype="multipart/form-data" action="{{route('client.data.save')}}">
                  @csrf
                  <div class="form-group">
                      <label for="file">Choose CSV</label>
                      <input type="file" name="file" class="form-control" />
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
             </div>
             @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
             @endif

           </div>
         </div>
       </div>
     </div>
    </section>

    <section>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">Client Record
             </div>

<div class="table-responsive">
  <table class="table table-striped" >
   <thead>
  <tr>
  <th>id</th>

  <th>customer_id</th>
  <th>name</th>
  <th>age</th>
  <th>gender</th>
  <th>owns_car</th>
  <th>owns_house</th>
  <th>no_of_children</th>
  <th>net_yearly_income</th>
  <th>no_of_days_employed</th>
  <th>occupation_type</th>
  <th>total_family_members</th>
  <th>migrant_worker</th>
  <th>yearly_debt_payments</th>
  <th>credit_limit</th>
  <th>credit_limit_used</th>

  <th>credit_score</th>
  <th>prev_defaults</th>
  <th>default_in_last_6months</th>
  <th>credit_card_default</th>
  <th>created_at</th>

  </tr>
  </thead>
  <tbody>
  @foreach ($data as $d)
  <tr>
      <td>{{$d->id}}</td>
      <td>{{$d->customer_id}}</td>
      <td>{{$d->name}}</td>
      <td>{{$d->age}}</td>
      <td>{{$d->gender}}</td>
      <td>{{$d->owns_car}}</td>
      <td>{{$d->owns_house}}</td>
      <td>{{$d->no_of_children}}</td>
      <td>{{$d->net_yearly_income}}</td>
      <td>{{$d->no_of_days_employed}}</td>
      <td>{{$d->occupation_type}}</td>
      <td>{{$d->total_family_members}}</td>
      <td>{{$d->migrant_worker}}</td>
      <td>{{$d->yearly_debt_payments}}</td>
      <td>{{$d->credit_limit}}</td>
      <td>{{$d->credit_limit_used}}</td>
      <td>{{$d->credit_score}}</td>
      <td>{{$d->prev_defaults}}</td>
      <td>{{$d->default_in_last_6months}}</td>
      <td>{{$d->credit_card_default}}</td>
      <td>{{$d->created_at}}</td>
  </tr>
  @endforeach
  </tbody>
  <tfoot>
  <tr>
  <th>id</th>

  <th>customer_id</th>
  <th>name</th>
  <th>age</th>
  <th>gender</th>
  <th>owns_car</th>
  <th>owns_house</th>
  <th>no_of_children</th>
  <th>net_yearly_income</th>
  <th>no_of_days_employed</th>
  <th>occupation_type</th>
  <th>total_family_members</th>
  <th>migrant_worker</th>
  <th>yearly_debt_payments</th>
  <th>credit_limit</th>
  <th>credit_limit_used</th>

  <th>credit_score</th>
  <th>prev_defaults</th>
  <th>default_in_last_6months</th>
  <th>credit_card_default</th>
  <th>created_at</th>
  </tr>
  </tfoot>
  </table>
</div>



<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item">{{ $data->links() }}</li>
  </ul>
</nav>


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
