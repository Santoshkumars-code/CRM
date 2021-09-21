@extends('base')

@section('name',"homepage")

@section('content')
   <div class="container">
      <div class="row">
          <div class="col-lg-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">CRD form</div>
                    <div class="card-body  bg-secondary">
                <form action="{{route('store')}}" method="POST">
                    @csrf

                     <div class="mb-3">
                         <label for="">Name</label>
                         <input type="text" value="{{old('name')}}" name="name" class="form-control">
                         @error('name')
                         <p class="small text-danger">{{$message}}</p>
                         @enderror
                     </div>

                     <div class="mb-3">
                      <label for="">Contact</label>
                      <input type="number" value="{{old('contact')}}" name="contact" class="form-control">
                      @error('contact')
                      <p class="small text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label for="">Email</label>
                      <input type="text" value="{{old('email')}}" name="email" class="form-control">
                      @error('email')
                      <p class="small text-danger">{{$message}}</p>
                      @enderror
                  </div>

                    

                  <div class="mb-3">
                      <label for="">Address</label>
                      <textarea rows="3" name="address" class="form-control">{{old('address')}}</textarea>
                      @error('address')
                      <p class="small text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label for="">Remark</label>
                      <input type="text" value="{{old('remark')}}" name="remark" class="form-control">
                      @error('remark')
                      <p class="small text-danger">{{$message}}</p>
                      @enderror
                  </div>

                 
                  <div class="mb-3 d-grid">
                      <input type="submit" class="btn btn-success d-block">
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div>
          <div class="col-lg-9">
            <table class="table table-bordered table-hover bg-warning">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Remark</th>
                    <th>Action</th>
                </tr>
            @foreach($data as $record)
                <tr>
                      <td>{{$record->id}}</td>
                      <td>{{$record->name}}</td>
                      <td>{{$record->contact}}</td>
                      <td>{{$record->email}}</td>
                      <td>{{$record->address}}</td>
                      <td>{{$record->remark}}</td>
                      <td><a href="{{route('delete',['id'=>$record->id])}}" class="btn btn-danger">delete</a></td>
                     
                </tr>   
                 @endforeach   
            </table>
          </div>
      </div>
   </div>
   @endsection