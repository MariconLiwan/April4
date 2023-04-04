@include('partials.header')
<x-nav/>

<div>

  @if(Session::has('success'))
    {{Session::get('success')}}
    @endif

</div>
<div
         style="background-color:white"
	</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">description</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td><a href="editProduct/{{$product->id}}">Edit</a></td>
      <td><a href="deleteProduct/{{$product->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')