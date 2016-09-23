
{{--Este blade es utilizado para crear formularios de manera dinamica. Por medio de un array se debe enviar
  el nombre del campo en form,  name y tipo --}}
<div class="container-fluid">

    @foreach( $arrayForm as $key => $form)
    <div class="form-group">
        <label for="example{{$form['name']}}">{{$form['label']}}</label>
        {{--En caso de que el tipo sea text area--}}
        @if($form['type']!='textarea')
          <input type="{{$form['type']}}" class="form-control" id="{{$form['id']}}" placeholder="{{$form['placeholder']}}">
        @else
           <textarea  class="form-control" id="{{$form['id']}}"  rows="3" placeholder="{{$form['placeholder']}}"></textarea>
        @endif
    </div>
    @endforeach

</div>
