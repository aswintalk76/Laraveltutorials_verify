<x-header />

<div class="pcoded-content">
	 <div class="pcoded-inner-content">
		<div class="main-body">
		   <div class="page-wrapper">
			  <div class="page-body">
				<!-- <div class="row"> -->
<img src="" alt="">
<!-- aswin update start -->
                <h1 >Add Vendor</h1><br>
    <a href="{{url('manage_adminvendor')}}">
        <button type="button" class="btn btn-success">
            Add Vendor
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vendor Name</th>
                            <th>Vendor Email</th>
                            <th>Vendor Number</th>
                            <th>User Type</th>
                            <th>Image</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->adminvendor_name}}</td>
                            <td>{{$list->adminvendor_email}}</td>
                            <td>{{$list->adminvendor_number}}</td>
                            <td>{{$list->adminvendor_usertype}}</td>  

                            <td><img width="50px" src="{{url('./storage/app/public/media/'.$list->adminvendor_image)}}"/>
                        
                            </td>
                            <td>
                            
                            <a href="{{url('show_adminvendor/show/')}}/{{$list->id}}"><button type="button" class="btn btn-success">View</button></a>
                                <a href="{{url('manage_adminvendor/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>

                                @if($list->status==1)
                                    <a href="{{url('adminvendor/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                                 @elseif($list->status==0)
                                    <a href="{{url('adminvendor/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                                @endif

                                <a href="{{url('adminvendor/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
    <!-- aswin update end -->
				 </div>
				  </div>
		   </div>
		  <!-- <div id="styleSelector"></div>-->
		</div>
	 </div>
  </div>
              

                            
    
    <x-footer />                  
