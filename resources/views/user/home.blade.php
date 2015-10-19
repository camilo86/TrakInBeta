@extends('base')

@section('title','Home')

@include('content/user-navbar')


<div class="container">
	<div class="row">
		<div class="col-md-10">
			<table class="table table-hover table-bordered table-striped">

				<tr>
					<th style="width: 10%">#</th>
					<th style="width: 20%">Date</th>
					<th style="width: 40%">Name</th>
					<th style="width: 45%">Description</th>
					<th style="width: 25%">Length</th>
				</tr>
				<tr>
					<td>22</td>
					<td>Nov/1/2015</td>
					<td><a href="">Robotics meeting 1</a></td></td>
					<td>First meeting of the year!</td>
					<td>3 hours</td>
				</tr>
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
					<form>
						<div class="form-group">
							<label for="meeting-name">Meeting Name</label>
							<input type="text" class="form-control" placeholder="Meeting Name">
						</div>
						
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Create</button>
				</div>
			</div>
		</div>
	</div>
</div>

