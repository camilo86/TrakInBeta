@extends('base')

@section('title','Home')

@include('content/user-navbar')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<table class="table table-hover table-bordered table-striped">

				<tr>
					<th style="width: 20%">Date</th>
					<th style="width: 40%">Name</th>
					<th style="width: 45%">Description</th>
					<th style="widht:45%">Starting</th>
					<th style="widht:45%">Ending</th>
				</tr>
				
				@foreach($meetings as $meeting)
				<tr>
					<td>{{ $meeting->getCreatedDate() }}</td>
					<td><a href="">{{ $meeting->name }}</a></td></td>
					<td>{{ $meeting->description }}</td>
					<td>{{ $meeting->getStartingDate() }}</td>
					<td>{{ $meeting->getEndingDate() }}</td>
				</tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-2">
			<div class="btn-group-vertical">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create-meeting">New Meeting</button>
			</div>
		</div>
	</div>

	<!-- MODAL - Create Meeting -->
	<div class="modal fade" id="create-meeting" tabindex="-1" role="dialog" aria-labelledby="create-meeting">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">New Meeting</h4>
				</div>
				<div class="modal-body">
					<form method="GET" action="register/meeting" id="create">
						{!! csrf_field() !!}
						<div class="form-group">
							<label for="meeting-name">Meeting Name</label>
							<input type="text" class="form-control" name="name" placeholder="Meeting name" maxlength="50" id="text">
						</div>
						<div class="form-group"> 
							<label for="meeting-description">Description</label>
							<textarea class="form-control" name="description" rows="3" placeholder="Awesome description!"></textarea>
						</div>
						<div class="form-group">
							<label for="meeting-starting-date">Starting Date</label>
							<div class='input-group date' id='datetimepicker1'>
								<input type='text' name="startingDate" class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<label for="meeting-ending-date" >Ending Date</label>
							<div class='input-group date' id='datetimepicker2'>
								<input type='text' name="endingDate" class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<input type="submit" id="submit-form" />
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function () {
		$('#datetimepicker1').datetimepicker();
	});
</script>
<script type="text/javascript">
	$(function () {
		$('#datetimepicker2').datetimepicker();
	});
</script>
@endsection()