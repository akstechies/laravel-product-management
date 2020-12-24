@extends('admin.layout.mylayout')

@section('brands')
    active
@endsection

@section('metatitle')
Brands
@endsection

@section('content-header')
Brands
@endsection

@section('content')
<section class="content">
    <div class="card card-primary">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <?php if (empty($data['editbrand'])) { ?>
              <form method="post" action="/manage_brand/create" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" value="" id="exampleInputEmail1" name="name" placeholder="Please Enter">
                      </div>
                    </div>

                    <div class="col-md-6" style="margin-top: 2.6%;">
                    <div class="vcard-footer">
                    <input type="submit" class="btn btn-primary toastrDefaultSuccess" name="userSubmit" value="Save">
                  </div>
                    </div>


                  </div>


                </div>
              </form>

            <?php } else { ?>

                <form method="post" action="{{route('admin.manage_brand.update',$data['editbrand']->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">


                      <div class="row">

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" value="{{ $data['editbrand']->name }}" id="exampleInputEmail1" name="name" placeholder="Please Enter">
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-top: 2.6%;">
                        <div class="vcard-footer">
                        <input type="submit" class="btn btn-primary toastrDefaultSuccess" name="userSubmit" value="Update">
                      </div>
                        </div>


                      </div>


                    </div>
                  </form>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content">


    <div class="row">
      <div class="col-md-8">
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data['allbrands'] as $val)
                    <tr>
                      <td width="15%"> {{ $val->name}} </td>

                      <td width="15%"> <a style="margin-right: 5px;" href="{{route('admin.manage_brand.edit',$val->id)}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                          <a onclick="return confirm('Are you sure?')" href="{{route('admin.manage_brand.delete',$val->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></td>
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
