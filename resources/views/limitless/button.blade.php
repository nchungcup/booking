<button type="{{$type or 'submit'}}" {!! $id?'id="'.$id.'"':'' !!} class="btn {{$classes?implode(' ', $classes):''}}"  {!! $attributes?implode(' ', $attributes):'' !!}>{{$title}}</button>