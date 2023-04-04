@extends('admin.black')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Quan ly san pham
                    </div>
                    
                    <div class="col-md-6">
                        {{-- <a href="{{route('product.create')}}" class="btn btn-primary">Them moi</a> --}}
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Them Moi </button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">

                            @include('admin.create')
                          
                        </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>STT</th>
                        <th>Anh</th>
                        <th>Ten</th>
                        <th>Gia</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($product as $key=> $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->image}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <form action="" method="POST">
                                        @csrf
                                        <a href=""class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">sua</a>
                                        <a href="{{route('product.destroy',$item->id)}}"class="btn btn-danger">xoa</a>
                                        {{-- @include('admin.sua') --}}
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $product->links()?>
            </div>
        </div>
    </div>
@endsection