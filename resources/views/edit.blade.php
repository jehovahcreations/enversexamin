@extends('layouts.app', ['class' => 'dashboard'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-6">Add Blog</div>
                    <div class="col-6" style="text-align:right">
                        <a href="/addblog" style="color: #3c8dbc"></a>
                    </div>
                </div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      <form enctype="multipart/form-data" method="post" action="{{url('/update')}}">
                        {{ csrf_field() }}

  <div class="row" style="margin: 40px">

    <div class="col-10" style="background-color: white;padding:40px;margin:40px;border-radius: 15px;margin:15px;box-shadow:1px 1px 2px rgb(107, 98, 98), 0 0 25px rgb(248, 244, 246), 0 0 5px rgb(155, 141, 141);">

        @foreach($data as $datas)


  <!-- Text input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example3">Blog Name</label>
    <input type="text" id="name" name="name" value = {{ $datas->name }} class="form-control" />
<input type="hidden" name='id' value={{ $datas->id }}>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example4">Title</label>
    <input type="text" id="title" name="title" value = {{ $datas->title }} class="form-control" />

  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example4">Sub Title</label>
    <input type="text" id="sub" name="sub" value = {{ $datas->sub }} class="form-control" />

  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example6">Image</label>
    <input type="hidden" id="input_img" name ="input_img" value = {{ $datas->input_img }} class="form-control" />
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example7">Decription</label>

    <textarea class="form-control" id="form6Example7" name="decp"  rows="4">{{ $datas->decp }}</textarea>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">

  </div>
  @endforeach
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
</div></div>
</form>
                </div>
            </div>
        </div>
    </div>
@endsection
