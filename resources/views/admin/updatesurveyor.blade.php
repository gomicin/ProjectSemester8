@extends('layouts.layoutadmin')
@section('title')
  Update Surveyor
@endsection
@section('body')
  <div class="content mt-3">
      <div class="animated fadeIn">
          <div class="row">
  <!-- kita butuh ini -->
            <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header">
                          <strong>Update</strong> Surveyor
                        </div>
                        <div class="card-body card-block">
                          <form action="{{route('update',['id'=>$Dsurveyor->user_id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="row form-group">
                              <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama Depan</label></div>
                              <div class="col-12 col-md-10"><input type="text" id="text-input" name="firstname" value="{{$Dsurveyor->firstname}}" placeholder="Masukan Nama Depan" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                              <div class="col col-md-2"><label for="email-input" class=" form-control-label">Nama Belakang</label></div>
                              <div class="col-12 col-md-10"><input type="text" id="text-input" name="lastname" value="{{$Dsurveyor->lastname}}" placeholder="Masukan Nama Belakang" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                              <div class="col col-md-2"><label for="password-input" class=" form-control-label">No Hp</label></div>
                              <div class="col-12 col-md-10"><input type="text" id="text-input" name="no_hp" value="{{$Dsurveyor->no_hp}}" placeholder="Masukan No Hp" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                              <div class="col col-md-2"><label for="password-input" class=" form-control-label">Email</label></div>
                              <div class="col-12 col-md-10"><input type="email" id="text-input" name="email" value="{{$Dsurveyor->user->email}}" placeholder="Masukan No Hp" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                              <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                              <div class="col-12 col-md-10"><textarea name="address" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$Dsurveyor->address}}</textarea></div>
                            </div>
                            <div class="row form-group">
                              <div class="col col-md-2"><label for="file-input" class=" form-control-label">Foto</label></div>
                              <div class="col-12 col-md-10"><input type="file" id="file-input" name="picture" class="form-control-file"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" value="Submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Update
                          </button>
                          <button type="reset" value="Reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                          </button>
                        </div>
                        </form>
                      </div>
                    </div>
  <!-- sampe ini -->
          </div>
      </div><!-- .animated -->
    </div><!-- .content -->

@endsection
