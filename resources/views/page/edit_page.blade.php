
<input type="hidden" name="id" value="{{$page_info->id}}">
<div class="form-group">
    <label for="exampleInputEmail1">page Title</label>
    <input type="text" class="form-control" name="page_title" id="page_title" placeholder="Enter page Title" value="{{$page_info->page_title}}">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">page Text</label>
    <textarea class="form-control summernote" name="page_text" id="page_text">{!! $page_info->page_text !!}</textarea>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">page Tag</label>
    <input type="text" class="form-control" name="page_tag" id="page_tag" placeholder="Enter page Tag" value="{{$page_info->page_tag}}">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">page Image</label>
    <input type="hidden" name="pre_img" value="{{$page_info->page_image}}">
    <input type="file" class="form-control" name="page_image" id="page_image">
</div>
<script>
	$('.summernote').summernote({
		placeholder: 'Hello Bootstrap 4',
		tabsize: 2,
        // height: 100
    });
</script>