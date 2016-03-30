@extends('main.master')

@section('title')
    Generate Ipsum Lorem strings
@stop

@section('header')
<nav>
    <ul class="pager">
        <li class="previous"><a href="/"><span aria-hidden="true">&larr;</span> Go Back</a></li>
    </ul>
</nav>
    <h1 class="text-center">Lorem Generator</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="well well-lg">
        <form role="form" method='POST' action='/lorem'>
            <div class="form-group">
                <input type='hidden' name='_token' value='{{csrf_token()}}'>
                <label for="num_paragraphs">Number of Paragraphs</label>
                <input type='text' class="form-control" id="num_paragraphs" name='num_paragraphs' value='{{old('num_paragraphs')}}' placeholder="1~100.">
            </div>
            <br>
            @if ($errors->has())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br>
            <br>

            <button type="submit" class="btn btn-success pull-right">Generate</button>
            <br>
            <br>
        </form>
        </div>
    </div>
    <div class="col-md-6" id="backgd">

            @if(isset($lorem_paragraphs))
                <h3 class="text-center">Lorem Ipsum Generated Text</h3>

                @foreach($lorem_paragraphs as $lorem_paragraph)
                <div class="transbox">
                    <p>{{ $lorem_paragraph }}</p>
                </div>
                @endforeach
            @else
            <h3 class="text-center">Lorem Ipsum</h3>
            <br />

            <div class="transbox">
                <h4>Example:</h4>
                <p>
                    Convallis nulla aptent praesent velit donec luctus faucibus, eget posuere condimentum netus turpis ad malesuada, condimentum curabitur tincidunt fermentum auctor mi. Hendrerit aliquet quis mollis vulputate aliquam cubilia diam fermentum consequat, arcu vehicula ornare cubilia donec dictum etiam donec mattis, pulvinar leo maecenas quam euismod enim eu hendrerit. Ad mollis lacus curabitur magna et nam arcu, risus nec mollis risus potenti orci, litora semper nisi risus feugiat aenean.
                </p>
            </div>
            @endif

    </div>
</div>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
