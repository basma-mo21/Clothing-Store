<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">

       @include('Admin.css')
       
    </head>
<body id="page-top">

  @include('Admin.navbar')

               
    <div id="wrapper">

        @include('Admin.sidebar')

        
        <div id="content-wrapper" class="d-flex flex-column" style="text-align: center">

          
            <div id="content">

          
                <h1 > Edit PRODUCTS</h1>

                @if (session()->has('message'))
                <div class=" alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
                  @endif


                
                  <form action="{{url('updateproduct',$data->id)}} " method="POST" enctype="multipart/form-data">
                    @csrf
                <div>
                    <label style="display: inline-block ; width: 200px" >product title</label>
                    <input type="text" name="title" value="{{$data->title}}"  required>
                </div>

                
                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px"  >product price</label>
                    <input type="number" name="price"  value="{{$data->price}}"  required>
                </div>

                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px" >product description</label>
                    <input type="text" name="description"  value="{{$data->description}}"  required>
                </div>


                
                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px"  >product quantity</label>
                    <input type="text" name="quantity"  value="{{$data->quantity}}"  required>
                </div>


                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px"  >Old image</label>
                    <img height="100px" width="100px" src="/productimage/{{$data->image}}" alt="">
                </div>

                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px"  >New image</label>
                   
                    <input type="file" name="file">
                </div>

                <div style="padding: 10px">
                   
                    <input type="submit"  class="btn btn-danger" >
                </div>

            </form>


                  


             

      
   

@include('Admin.script')

    
</body>
</html>
