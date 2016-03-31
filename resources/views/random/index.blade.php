@extends('main.master')

@section('title')
    Generate Random users
@stop

@section('header')
<nav>
    <ul class="pager">
        <li class="previous"><a href="/"><span aria-hidden="true">&larr;</span> Go Back</a></li>
    </ul>
</nav>
    <h1 class="text-center">Random user Generator</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="well well-lg">
        <form role="form" method="post" action="/randomuser">
            <div class="form-group">
                <label for='number_of_words'>Number of Random Users</label>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                <input type='text' class="form-control" name='number_of_rusers' id='number_of_rusers' value='{{ old('number_of_rusers') }}' placeholder="1~100.">
            </div>
            <p>Include...</p>
            <div class="checkbox">
                <label><input type="checkbox" name='add_birthdate' id='add_birthdate' value="true"
                    @if (old('add_birthdate')=='true') checked @endif
                    >Birthdate</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name='add_location' id='add_location' value="true" @if (old('add_location')=='true') checked @endif>Location</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name='add_profile' id='add_profile' value="true" @if (old('add_profile')=='true') checked @endif >Profile</label>
            </div>
            @if ($errors->has())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type='submit' class='btn btn-success pull-right'> Generate</button>
            <div class="clearfix"></div>
        </form>
        </div>
    </div>
    <div class="col-md-6" id="backgd">
            @if(isset($random_users))
                <h3 class="text-center">Random Users Generated List</h3>

                @foreach($random_users as $ruser)
                <div class="transbox">
                    <p>Name: {{ $ruser['full_name'] }}</p>
                    @if(isset($ruser['address']))
                        <p>Address: {{ $ruser['address'] }}</p>
                    @endif
                    @if(isset($ruser['birthdate']))
                        <p>Birth Date: {{ $ruser['birthdate'] }}</p>
                    @endif
                    @if(isset($ruser['profile']))
                        <p>{{ $ruser['profile'] }}</p>
                    @endif
                </div>
                @endforeach
            @else
                <h3 class="text-center">Random User</h3>
                <br />

                <div class="transbox">
                    <h4>Example:</h4>
                    <p>
                        Name: Lambert Reilly DDS
                        <br />
                        Address: 523 Araceli Mountain Rhiannonton, IA 86329
                        <br />
                        Birth Date: 17 August 1970
                        <br />
                        Email: klocko.naomie@cartwright.com Phone: 118-939-3601x2339 Company: Renner-Gerlach
                    </p>
                </div>
            @endif
    </div>
</div>

@stop
