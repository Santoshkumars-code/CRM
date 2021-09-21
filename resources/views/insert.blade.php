@extends('base')

@section('name',"homepage")


@section('content')
   <div class="container">
      <div class="row">
          <div class="col-lg-3">
               <table class="table table-bordered table-hover bg-info">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Remark</th>
                <th>Action</th>
            </tr>
        @foreach($record as $record)
            <tr>
                  <td>{{$record-->id}}</td>
                  <td>{{$record-->name}}</td>
                  <td>{{$record-->contact}}</td>
                  <td>{{$record-->address}}</td>
                  <td>{{$record-->remark}}</td>
            </tr>   
             @endforeach   
        </table>

          <div class="col-lg-9">
              <div class="container">
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
                        <textarea rows="5" name="address" class="form-control">{{old('address')}}</textarea>
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

                   
                    <div class="mb-3">
                        <input type="submit" class="btn btn-danger d-block">
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
   @endsection