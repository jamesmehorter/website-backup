<div class="row">
    <div class="nine columns">
        @if(is_array($errors->messages) && !empty($errors->messages))
            <div class="alert-box alert">
                @foreach($errors->messages as $e)
                    <li> {{ $e[0] }} </li>
                @endforeach
                <a href="" class="close">&times;</a>
            </div>
        @endif
        
        <?php
            $error = Session::get('error'); //this is pass through: with('key', 'value') on form redirect
        ?> 

        @if(!empty($error))
            <div class="alert-box alert">
                <li>{{ $error }}</li>
            </div>
        @endif
    </div>
</div>