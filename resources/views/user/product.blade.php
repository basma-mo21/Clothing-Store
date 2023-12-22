@if($data->count()>0){
  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>

         

            <form action="{{url('search')}}" method="GET" class="form-inline" style="float: right; padding: 10px">
              @csrf
              <input class="form-control" type="search" name="search" placeholder="search">
              <input type="submit" value="search" class="btn btn-success">

            </form>
          </div>
        </div>

        @foreach ($data as $product )
          
        
        <div class="col-md-4" >
          <div class="product-item" style="background-color: rgb(209, 204, 212)">
            <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h6>{{$product->price}}</h6>
              <p>{{$product->description}}</p>
             
              <form action="{{url('addcart',$product->id)}}" method="POST">
                @csrf 
                <input type="number" class="form-control" style="width: 100px"  name="quantity" value="1" min="1">
                <br>
                <input type="submit"  class="btn btn-primary" value="Add to cart">
              </form>
             
            </div>
          </div>
        </div>
        @endforeach

        @if (@method_exists($data,'links'))
            
       

        <div class="d-flex justify-content-center">
          {!! $data->links() !!}

        </div>

        @endif
       
        
        
      </div>
    </div>
  </div>
  
}@else{



  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>

        

            <form action="{{url('search')}}" method="GET" class="form-inline" style="float: right; padding: 10px">
              @csrf
              <input class="form-control" type="search" name="search" placeholder="search">
              <input type="submit" value="search" class="btn btn-success">

            </form>
          </div>
        </div>

       
          
        
        <div class="col-md-4" >
          <div class="product-item" style="background-color: rgb(209, 204, 212)">
            <a href="#"><img height="300" width="150" src="https://images.pexels.com/photos/8371408/pexels-photo-8371408.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>SwimSuit</h4></a>
              <h6>30$</h6>
              <p>very comfy</p>
             
              <form >
                @csrf 
                <input type="number" class="form-control" style="width: 100px"  name="quantity" value="1" min="1">
                <br>
                <input type="submit"  class="btn btn-primary" value="Add to cart">
              </form>
             
            </div>
          </div>
        </div>




        <div class="col-md-4" >
          <div class="product-item" style="background-color: rgb(209, 204, 212)">
            <a href="#"><img height="300" width="150" src="https://images.pexels.com/photos/4352249/pexels-photo-4352249.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>Dress</h4></a>
              <h6>50$</h6>
              <p>very comfy</p>
             
              <form >
                @csrf 
                <input type="number" class="form-control" style="width: 100px"  name="quantity" value="1" min="1">
                <br>
                <input type="submit"  class="btn btn-primary" value="Add to cart">
              </form>
             
            </div>
          </div>
        </div>





        <div class="col-md-4" >
          <div class="product-item" style="background-color: rgb(209, 204, 212)">
            <a href="#"><img height="300" width="150" src="https://images.pexels.com/photos/5220433/pexels-photo-5220433.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>Blouse</h4></a>
              <h6>25$</h6>
              <p>very comfy</p>
             
              <form >
                @csrf 
                <input type="number" class="form-control" style="width: 100px"  name="quantity" value="1" min="1">
                <br>
                <input type="submit"  class="btn btn-primary" value="Add to cart">
              </form>
             
            </div>
          </div>
        </div>
       

       
       
        
        
      </div>
    </div>
  </div>



}@endif


