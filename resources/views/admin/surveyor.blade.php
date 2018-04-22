
@extends('layouts.layoutadmin')
@section('title')
  Daftar Surveyor
@endsection
@section('body')
  {{-- ini yang diambil --}}
          <div class="content mt-3">
              <div class="animated fadeIn">
                  <div class="row">
                    <?php
                      $flash = Session::get('success') || Session::get('error');
                      $type = Session::get('success') ? 'success' : 'danger';
                      $desc = Session::get('success') ? session('success') : session('error');
                    ?>
                  @if ($flash)
                    <div class="col-lg-12">
                        <div class="alert alert-{{ $type }}">
                            {{ $desc }}
                            <span class="close-flash float-right" style="cursor: pointer;">&times;</span>
                        </div>
                    </div>
                  @endif
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title">Stripped Table</strong>
                          </div>
                          <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Depan</th>
                                    <th scope="col">Nama Belakang</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach ($Dsurveyor as $key)
                                  <tr>
                                      <th scope="row">{{$loop->iteration}}</th>
                                      <td>{{$key->profile->firstname}}</td>
                                      <td>{{$key->profile->lastname}}</td>
                                      <td>{{$key->profile->no_hp}}</td>
                                      <td>{{$key->profile->address}}</td>
                                      <td>{{$key->role}}</td>
                                      <td>
                                        <a class="btn btn-primary" href="{{route('detail',['id'=>$key->profile->user_id])}}">Detail</a>
                                        <a class="btn btn-success" href="{{route('edit',['id'=>$key->profile->user_id])}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('delete',['id'=>$key->profile->user_id])}}">Hapus</a> </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>


                  </div>
              </div><!-- .animated -->
          </div><!-- .content -->
  {{-- sampe ini --}}
@endsection
