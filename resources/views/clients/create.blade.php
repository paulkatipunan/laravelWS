@extends('layouts.app')
@section('content')


    <div class="content">
        <div class="card container p-5">
        	<form action="/save/client" method="post">
        		{{csrf_field()}}
        		<div class="form-group">
        			<label>App Name</label>
        			<input type="text" name="name" class="form-control">
        		</div>
        		
        		<button class="btn btn-success">Submit</button>
        	</form>
        </div>
    </div>
            
@endsection
