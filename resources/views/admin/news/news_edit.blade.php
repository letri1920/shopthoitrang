@extends('admin.layout.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row" style="margin-bottom: 15px;">
		<ol class="breadcrumb">
			<li><a href="{{route('admin_index')}}">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">Cập nhật tin tức</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Cập nhật tin tức</div>
				<div class="panel-body">
					<form action="{{route('news_edit',$news_edit->id)}}" method="post" enctype="multipart/form-data" style="width: 950px;">
						@csrf
						<div class="row" style="margin-bottom:25px">
							<div class="col-xs-8">
							<div class="form-group">
									<label>Tiêu đề</label>
									<input type="text" min="0" value="{{$news_edit->title}}" name="title" class="form-control">
									@error('title')
									<div style="color: #f02849; font-size: 16px;">{{ $message }}.</div>
									@enderror
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label>Nội dung</label><br>
									<textarea style="height: 1000px;" id="content" name="content">{{$news_edit->content}}</textarea>
									<script type="text/javascript">
										CKEDITOR.replace('content',{
											width: ['100%'], height: ['500px']
										});
									</script>
									@error('content')
									<div style="color: #f02849; font-size: 16px;">{{ $message }}.</div>
									@enderror
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label>Tác giả</label>
									<input type="text" min="0" value="{{$news_edit->author}}" name="author" class="form-control">
									@error('author')
									<div style="color: #f02849; font-size: 16px;">{{ $message }}.</div>
									@enderror
								</div>
								<div class="form-group">
									<label>Hình ảnh</label>
									<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="200px" src="{{asset('/frontend/image/news/'.$news_edit->image)}}">
									@error('img')
									<div style="color: #f02849; font-size: 16px;">{{ $message }}.</div>
									@enderror
								</div>
							</div>
						</div>
						<center>
							<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
							<a onclick="quaylai()" class="btn btn-danger">Hủy bỏ</a>
						</center>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
<!--/.main-->
@endsection