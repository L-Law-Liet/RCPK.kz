
@foreach($questions as $k => $v)

    <div class="test__item">
        <span class="test__num">{{str_pad($k+1, 2, '0', STR_PAD_LEFT)}}</span>
        <div class="box">
            <h3 class="test__title">{{$v->body}}</h3>
            <div class="row">
                @foreach($v->options->shuffle() as $option)
                    <div class="col-12">
                        <label class="check">
                            <input class="test_option" type="radio" required name="{{$v->id}}" value="{{$option->id}}"/>
                            <span class="check__mark"></span>
                            <span class="check__txt">{{$option->body}}</span>
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach
