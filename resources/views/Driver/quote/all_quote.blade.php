
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#sl</th>
      <th scope="col">categories</th>
      <th scope="col">product</th>
      <th scope="col">product_cost</th>
      <th scope="col">pick_address</th>
      <th scope="col">delivery_address</th>
      <th scope="col">delivery_fee</th>
      <th scope="col">status</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($quotes as $quote)
      <tr>
        <th scope="row">{{$loop->index+1}}</th>
        <td>{{$quote->categories}}</td>
        <td>{{$quote->product}}</td>
        <td>{{$quote->product_cost}}</td>
        <td>{{$quote->pick_address}}</td>
        <td>{{$quote->delivery_address}}</td>
        <td>{{$quote->delivery_fee}}</td>
        <td>
        @if($quote->status==1)
        accept    <a href="{{url('driver/quote/pending/'.$quote->id)}}">Pending</a>
        @else     
        pending <a href="{{url('driver/quote/accept/'.$quote->id)}}">Accept</a>
        @endif
      </td>
        
      </tr>
      @endforeach
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
