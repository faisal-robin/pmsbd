@extends('layouts.master')

@section('content')

<form id="edit_form">
  <div class="row pt-5">
    <div class="col-12">
      <!-- Custom Tabs -->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">Edit Contact Info</h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Company Info</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Social Link</a></li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Company General Info</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Comapny Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Name" value="{{$company_info->name}}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Comapny Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Enater Email" value="{{$company_info->email}}">
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Comapny Phone 1</label>
                        <input class="form-control" type="text" name="phone_1" placeholder="Enter Phone" value="{{$company_info->phone_1}}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Comapny Phone 2</label>
                        <input class="form-control" type="text" name="phone_2" placeholder="Enater Phone" value="{{$company_info->phone_2}}">
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Comapny Logo</label>
                        <input  type="hidden" name="pre_logo" value="{{$company_info->logo}}" >
                        <input class="form-control" type="file" name="logo" >
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Comapny Address</label>
                        <textarea style="width: 100%" name="address_1">{{$company_info->address_1}}</textarea>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">About Us</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link</label>
                        <input class="form-control" type="text" name="about_vedio" placeholder="Video Link" value="{{$company_info->about_vedio}}">
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Us</label>
                        <textarea  type="text" class="form-control summernote" name="about_us" > </textarea>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Company Socila Link</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Facebook Link</label>
                        <input class="form-control" type="text" name="fb_link" placeholder="Enter Facebook Link" value="{{$company_info->fb_link}}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Youtube Link</label>
                        <input class="form-control" type="text" name="youtube_link" placeholder="Enater Youtube Link" value="{{$company_info->youtube_link}}">
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Twiter Link</label>
                        <input class="form-control" type="text" name="twiter_link" placeholder="Enter Twiter Link" value="{{$company_info->twiter_link}}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Linkd In link</label>
                        <input class="form-control" type="text" name="" placeholder="Enater Phone" value="">
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
            </div>    
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
        <div class="text-right">
          @method('PUT')
          <button type="button"  class="btn btn-primary mr-4 mb-4 edit_button">Save</button>
        </div>
      </div>
      <!-- ./card -->
    </div>
    <!-- /.col -->

  </div>


</form>

<script type="text/javascript">
  $(".edit_button").click(function (){
// alert('sdfas');
$(".error_msg").html('');

var data = new FormData($('#edit_form')[0]);

var id = 1;

$.ajax({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  method: "POST",
  url: "{{url("company")}}/"+id,
  data: data,
  cache: false,
  contentType: false,
  processData: false,
  success: function (data, textStatus, jqXHR) {

  }
}).done(function() {
  $("#success_msg").html("Data Save Successfully");
  location.reload();
}).fail(function(data, textStatus, jqXHR) {
  var json_data = JSON.parse(data.responseText);
  $.each(json_data.errors, function(key, value){
    $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
  });
});
});


</script>
@endsection