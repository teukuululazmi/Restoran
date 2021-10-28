@extends('layouts.app')
@section('content')
    
        <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Category form inputs</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						{{-- <p class="mb-4">Examples of standard form controls supported in an example form layout.</p> --}}
                        <div class="success" data-success="{{Session::get('success')}}"></div>
						<form action="{{ route('categoryPost') }}" method="POST">
                            @csrf
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Category</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Category</label>
									<div class="col-lg-10">
										<input type="text" name="category" class="form-control" required>
									</div>
								</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
                        <br>
                        <legend></legend>

                        <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th class="text-center">Category</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
        
                            <tr>
                                <td class="text-center">{{ $item->category }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
        
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('categoryDelete', $item->id) }}" class="dropdown-item delete"><i
                                                        class="icon-trash"></i> Delete</a>
                                                <a href="#" class="dropdown-item" data-toggle="modal"
                                                    data-target="#id{{ $item->id }}"><i class="icon-spinner9"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div id="id{{ $item->id }}" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Category</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('categoryUpdate', $item->id) }}" method="POST">
                                                @method('patch')
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3">Category</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="category" id="category"
                                                            value="{{ $item->category }}" required>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <button type="submit"
                                                        class="btn btn-primary float-right success">Submit <i class="icon-paperplane ml-2"></i></</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
					</div>
				</div>
    
@endsection