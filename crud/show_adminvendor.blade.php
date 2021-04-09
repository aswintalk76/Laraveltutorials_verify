<x-header />

<div class="pcoded-content">
	 <div class="pcoded-inner-content">
		<div class="main-body">
		   <div class="page-wrapper">
			  <div class="page-body">




<h1 >Manage AdminVendor Show</h1>
    <a href="{{url('adminvendor')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
<div >

<div class="row m-t-30">
        <div class="col-md-8">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    
                    <tbody>
                        <tr>
                            <td><strong>Name</strong></td>
                            <td>{{$list->adminvendor_name}}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{$list->adminvendor_email}}</td>
                        </tr>
                        <tr>
                            <td><strong>Image</strong></td>
                            <td>{{$list->adminvendor_image}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Created On</strong></td>
                            <td>{{\Carbon\Carbon::parse($list->created_at)->format('d-m-Y h:i:s')}}</td>
                        </tr>
                        <tr>
                            <td><strong>Updated On</strong></td>
                            <td>{{\Carbon\Carbon::parse($list->updated_at)->format('d-m-Y h:i:s')}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
</div>
</div>

<x-footer />                  
