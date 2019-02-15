{!! Form::open(array('url' => 'admin/cities')) !!}
Id Lesson :
<select name="id">
@foreach($lesson as row)
<option value="{{$row->id}}">{{$row->id}}</option>
@endforeach
</select>
<br>
Link:
{!! Form::text('link') !!}<br>
  

  {!! Form::submit('Add') !!}
{!! Form::close() !!}