<!DOCTYPE html>
<html lang="en">
    <head>

       @include('Admin.css')
    </head>
<body id="page-top">

  @include('Admin.navbar')

               
    <div id="wrapper">

        @include('Admin.sidebar')

        
        <div id="content-wrapper" class="d-flex flex-column" style="text-align: center">

          
            <div id="content">

          
                <h1 > Show PRODUCTS</h1>

                @if (session()->has('message'))
                <div class=" alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
                  @endif


                <table class="table table-dark table-striped container" >
                    <thead>
                      <tr>
                        <th style="padding: 20px">TITLE</th>
                        <th style="padding: 20px">DESCRIPTION</th>
                        <th style="padding: 20px">QUANTITY</th>
                        <th style="padding: 20px">PRICE</th>
                        <th style="padding: 20px">IMAGE</th>
                        <th style="padding: 20px">UPDATE</th>
                        <th style="padding: 20px">DELETE</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $product )
                            
                        
                      <tr align="center">
                       
                        <td style="padding: 20px ">{{$product->title}}</td>
                        <td style="padding: 20px">{{$product->description}}</td>
                        <td style="padding: 20px">{{$product->quantity}}</td>
                        <td style="padding: 20px">{{$product->price}}</td>
                        <td style="padding: 20px"><img height="100" width="100" src="/productimage/{{$product->image}}" alt=""></td>
                        <td style="padding: 20px"><a href="{{url('updateview',$product->id)}}" class="btn btn-info"> EDIT</a></td>
                        <td style="padding: 20px"><a href="{{ url('deleteproduct', $product->id) }}" onclick="return confirm('are you sure')" class="btn btn-danger">DELETE</a></td>
                      </tr>
                      @endforeach
                     
                  </table>

                  <div class="d-flex justify-content-center">
                    {!! $data->links() !!}
          
                  </div>


             

      
   

@include('Admin.script')

    
</body>
</html>
