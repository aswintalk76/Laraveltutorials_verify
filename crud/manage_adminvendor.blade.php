<x-header />

<div class="pcoded-content">
	 <div class="pcoded-inner-content">
		<div class="main-body">
		   <div class="page-wrapper">
			  <div class="page-body">

              


<h1 >Manage AdminVendor</h1>
    <a href="{{url('adminvendor')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
<div >

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('adminvendor.manage_adminvendor_process')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="adminvendor_name" class="control-label mb-1">Vendor Name</label>
                        <input id="adminvendor_name" value="{{$adminvendor_name}}" name="adminvendor_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        @error('adminvendor_name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}		
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="adminvendor_email" class="control-label mb-1">adminvendor Email</label>
                        <input id="adminvendor_email" value="{{$adminvendor_email}}" name="adminvendor_email" type="email" class="form-control" aria-required="true" aria-invalid="false" required>
                        @error('adminvendor_email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}		
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="adminvendor_number" class="control-label mb-1">adminvendor Number</label>
                        <input id="adminvendor_number" value="{{$adminvendor_number}}" name="adminvendor_number" type="number"class="form-control" aria-required="true" aria-invalid="false" required>
                        @error('adminvendor_number')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}		
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="adminvendor_usertype" class="control-label mb-1">Select UserType</label>

                        <select id="adminvendor_usertype" value="{{$adminvendor_usertype}}" name="adminvendor_usertype" type="text" class="form-control" aria-required="true" aria-invalid="false" required  >
                        <option id="adminvendor_usertype" value="{{$adminvendor_usertype}}" >Select One</option>
                        <option value="vendor">Vendor</option>
                        <option value="user">User</option>
			            </select>
                    </div>

                    <div class="form-group">
                                                <label for="adminvendor_image" class="control-label mb-1"> Image</label>
                                                <input id="adminvendor_image" name="adminvendor_image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('adminvendor_image')
                                                <div class="alert alert-danger" role="alert">
                                                {{$message}}		
                                                </div>
                                                @enderror

                                                @if($adminvendor_image!='')

                                                    <img width="100px" src="{{asset('http://localhost/shoft-fix-final/gbps/storage/app/public/media/'.$adminvendor_image)}}"/>
                                                @endif
                                            </div>

                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            Submit
                        </button>
                    </div>
                    <input type="hidden" name="id" value="{{$id}}"/>
                </form>
            </div>
        </div>
    </div>
    
</div>
</div>

<x-footer />                  
