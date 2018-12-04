@extends('layouts.app')

@section('title', $ticket->title)

@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
	        <div class="panel panel-default">
	        	<div class="panel-heading">
	        		#{{ $ticket->ticket_id }} - {{ $ticket->title }}
	        	</div>

	        	<div class="panel-body">
	        		@include('includes.flash')
	        		
	        		<div class="ticket-info">
	        			<p>{{ $ticket->message }}</p>
		        		<p>Categry: {{ $category->name }}</p>
		        		<p>
	        			@if ($ticket->status === 'Open')
    						Status: <span class="label label-success">{{ $ticket->status }}</span>
    					@else
    						Status: <span class="label label-danger">{{ $ticket->status }}</span>
    					@endif
		        		</p>
		        		<p>Created on: {{ $ticket->created_at->diffForHumans() }}</p>
	        		</div>

	        		<hr>
	        </div>
	    </div>
	</div>
@endsection