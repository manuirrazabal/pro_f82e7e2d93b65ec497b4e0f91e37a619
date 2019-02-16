<div class="row">
    <div class="col-sm-12">
        @if(!empty($errors->all()))
            <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $key=>$error)
                    <strong>{{  'Error!' }}</strong> 
                     {!! $error !!}
                    <br />
            @endforeach
            </div>
        @endif

        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @elseif(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @elseif(Session::has('status'))
            <div class="alert alert-info" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif
    </div>
</div>