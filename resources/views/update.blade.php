
    @extends('layout')

    @section('content')
      <br>
          <div class="row">

              <div class="col-lg-12">
                   <form action="{{ route('todos.save', ['id' => $todos->id ]) }}" method="POST">
                      {{ csrf_field() }}
                      <input type="text" class="form-control input-lg" name="todo" value="{{$todos->todo}}" placeholder="Create a new todo">

                  </form>

              </div>
               
          </div>

          <hr>


      @stop