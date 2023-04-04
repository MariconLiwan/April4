@include('partials.header')

<h1>ADDING PAGE</h1>
<form action="/saveProduct" method="POST">
    @csrf

    <input type="hidden" id="id" class="form-control" name="id" >
    
    <input type="text" id="form3Example1q" class="form-control" name="description" />
    <label for="exampleInputlastName" class="form-label">description</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="quantity" />
    <label for="exampleInputFirstName" class="form-label">quantity</label><br>
    
    <input type="text" id="form3Example1q" class="form-control" name="price" />
    <label for="exampleInputContactNumber" class="form-label">price</label><br>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@include('partials.footer')