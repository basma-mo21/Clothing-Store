
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

          
                <h1 > ADD PRODUCTS</h1>

                @if (session()->has('message'))
                <div class=" alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
                  @endif


                <form action="{{url('uploadproduct')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                <div>
                    <label style="display: inline-block ; width: 200px" >product title</label>
                    <input type="text" name="title" placeholder="give a product name" required>
                </div>

                
                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px"  >product price</label>
                    <input type="number" name="price" placeholder="give a product price" required>
                </div>

                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px" >product description</label>
                    <input type="text" name="description" placeholder="give a product description" required>
                </div>


                
                <div style="padding: 10px">
                    <label  style="display: inline-block ; width: 200px"  >product quantity</label>
                    <input type="text" name="quantity" placeholder="give a product quantity" required>
                </div>

                <div style="padding: 10px">
                   
                    <input type="file" name="file">
                </div>

                <div style="padding: 10px">
                   
                    <input type="submit" class="btn btn-success" >
                </div>

            </form>

             

      
   

@include('Admin.script')

    
</body>
</html>

