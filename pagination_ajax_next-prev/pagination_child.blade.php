@foreach($data as $row)

   {{ $row->category_name }}
        
@endforeach
  
{!! $data->links() !!}

