@extends('admin.layout.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row" style="margin-bottom: 15px;">
		<ol class="breadcrumb">
			<li><a href="{{route('admin_index')}}">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">Tin tức</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách tin tức</div>
				<div class="panel-body">
					@include('note.success')
					<a href="{{route('news_add')}}" style="margin-bottom: 10px;" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</a>
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th width="5%">Mã TT</th>
										<th width="15%">Tiêu đề</th>
										<th width="12%">Hình ảnh</th>
										<th width="15%">Tác giả</th>
										<th></th>
										<th width="10%">Nội dung</th>
										<th width="10%">Thao tác</th>

									</tr>
								</thead>
								<tbody>
									@foreach($news_list as $news)
									<tr>
										<td>{{$news->id}}</td>
										<td>{{$news->title}}</td>
										<td>
											<img width="130px" height="100px" src="{{asset('frontend/image/news/'.$news->image)}}" class="thumbnail">
										</td>
										<td>{{$news->author}}</td>
										<td>{!!$news->content!!}</td>
										<td></td>
										<td>
											<a href="{{route('news_edit',$news->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
											<a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="{{route('news_delete',$news->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
										</td>

									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
<!--/.main-->
<!-- chi tiết sản phẩm -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style="width:auto">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title" id="myModalLabel">Nội dung</h3>
			</div>
			<div class="modal-body">
				<div class="showBill"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
			</div>

		</div>
	</div>
</div>
<!--script-->
<script>

</script>
@endsection
@section('script')
<script type="text/javascript">
	var table = $('#example').DataTable({
		"paging": true,
		"info": false,
		// hiding columns via datatable column.visivle API
		"columnDefs": [{
			"targets": [4],
			"visible": false
		}, {
			// adding a more info button at the end
			"targets": -2,
			"data": null,
			"defaultContent": "<button title='Xem chi tiết' class='btn btn-info btn1' ><i class='fa fa-eye'></i></button>",
		}]
	});

	$('#example tbody').on('click', '.btn1', function() {
		var data = table.row($(this).parents('tr')).data(); // getting target row data
		$('.showBill').html(
			// Adding and structuring the full data
			'<table style="font-size: 16px;" width="100%"><tbody><tr><td">' + data[4] + 
			'</td></tr></tbody></table>'

		);
		$('#myModal').modal('show'); // calling the bootstrap modal
	});
</script>
@stop