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

          
                <h1 > Show Orders</h1>

                @if (session()->has('message'))
                <div class=" alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
                  @endif


                <table  class="table table-dark table-striped container" >
                    <thead>
                      <tr>
                        <th style="padding: 20px">Customer name</th>
                        <th style="padding: 20px">Phone</th>
                        <th style="padding: 20px">Address</th>
                        <th style="padding: 20px">Product name</th>
                        <th style="padding: 20px">QUANTITY</th>
                        <th style="padding: 20px">PRICE</th>
                        <th style="padding: 20px">Status</th>
                        <th style="padding: 20px">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($order as $product )
                            
                        
                      <tr align="center">
                       
                        <td style="padding: 20px ">{{$product->name}}</td>
                        <td style="padding: 20px">{{$product->phone}}</td>
                        <td style="padding: 20px">{{$product->address}}</td>
                        <td style="padding: 20px">{{$product->product_name}}</td>
                        <td style="padding: 20px">{{$product->quantity}}</td>
                        <td style="padding: 20px">{{$product->price}}</td>
                        <td style="padding: 20px">{{$product->status}}</td>
                        <td><a class="btn btn-success" href="{{url('updatestatus',$product->id)}}">Delivered</a></td>
                      </tr>
                      @endforeach
                     
                  </table>

                  


             

      
   

@include('Admin.script')

    
</body>
</html>
