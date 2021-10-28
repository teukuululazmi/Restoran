@extends('layouts.app')
@section('content')
    
        <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Resep</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
                        <div class="success" data-success="{{Session::get('success')}}"></div>
                        <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th class="text-center">Category</th>
                                <th class="text-center">Nama Makanan</th>
                                <th class="text-center">Bahan - Bahan</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resep as $item)
        
                            <tr>
                                <td class="text-center">{{ $item->Rcategory->category }}</td>
                                <td class="text-center">{{ $item->nama_makanan }}</td>
                                <td class="text-center">{{ $item->bahan_bahan }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
        
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('resepDelete', $item->id) }}" class="dropdown-item delete"><i
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
                                            <h5 class="modal-title">Resep</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('resepUpdate', $item->id) }}" method="POST">
                                                @method('patch')
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3">Resep</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="bahan_bahan"
                                                            value="{{ $item->bahan_bahan }}" required>
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