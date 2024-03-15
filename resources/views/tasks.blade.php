@extends('layouts.app')

@section('content')

   <!-- Bootstrap Boilerplate... -->

   <div class="panel-body">
        <!-- Display Validation Errors -->
        {{-- @include('common.errors') --}}

      <!-- New Task Form -->
      <form style="border: 1px solid; border-radius:5px;width: 50%; margin-left:30px;" action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

        <!-- Task Name -->
       <div class="form-group">
            <div style="border-bottom:1px solid; background-color: rgba(211, 211, 211, 0.5);">
                <p style="margin-left: 15px;">
                    New task
                </p>
            </div>
           <label for="task" class="col-sm-3 control-label"><b>Task</b></label>

                <div class="col-sm-6">
                 <input type="text" name="name" id="task-name" class="form-control">
               </div>
         </div>

         <!-- Add Task Button -->
        <div class="form-group">
             <div class="col-sm-offset-3 col-sm-6">
                 <button style="border: 1px solid" type="submit" class="btn btn-default">
                       <i class="fa fa-plus"></i> Add Task
                   </button>
              </div>
          </div>
        
       </form>

    <form style="border: 1px solid;border-radius:5px;width: 50%; margin:30px;" action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}

    <!-- Task Name -->
   <div class="form-group">
        <div style="border-bottom:1px solid; background-color: rgba(211, 211, 211, 0.5);">
            <p style="margin-left: 15px;">
                Current task
            </p>
        </div>
       <label style="margin:10px;" for="task" class="col-sm-3 control-label"><b>Task</b></label>

       <div style="display: flex; align-items: center; border-top: 1px solid; width: 90%; margin-left: 15px; padding:10px;">
        <p style=" width: 50%">First task</p>
        <button style="padding: 8px; border-radius: 10px;" class="btn-danger">
            <i class="fa fa-trash" aria-hidden="true"></i>
            delete
        </button>               
    </div>
    <div style="display: flex; align-items: center; border-top: 1px solid; width: 90%; margin-left: 15px; padding:10px;">
        <p style=" width: 50%">First task</p>
        <button style="padding: 8px; border-radius: 10px;" class="btn-danger">
            <i class="fa fa-trash" aria-hidden="true"></i>
            delete
        </button>               
    </div>
    
     </div>

     <!-- Add Task Button -->
    </div>
   </form>
  </div>

    <!-- TODO: Current Tasks -->
@endsection