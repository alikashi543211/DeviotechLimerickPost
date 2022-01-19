@extends('layouts.admin')
@section('title', 'Church List')
@section('nav-title', 'Church List')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form class="validate-form" action="{{ route('admin.chruch.save') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
						<div class="card-icon">
							<i class="material-icons">add</i>
						</div>
						<h5 class="card-title">Add Church List</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="name">Church</label>
									<input type="text" name="chruch" id="chruch" class="form-control @error('chruch') is-invalid @enderror" value="{{ old('chruch') }}" autocomplete="off">
									@error('chruch')
									<span class="invalid-feedback">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer mt-4">
						<button type="submit" class="btn btn-primary">submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('js')
@endsection
