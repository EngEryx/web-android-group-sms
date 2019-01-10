@extends('layouts.root')

@section('content')
<div class="container" >
<div  class="section">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Members</span>
                    <div class="row">
                        <ul class="collection">
                            @foreach($contacts as $contact)
                                <li class="collection-item avatar">
                                    <i class="material-icons circle red">phone</i>
                                    <span class="title">{{$contact->full_name}}</span>
                                    <p class="push-m4">{{$contact->phone_number}}</p>
                                    <p class="push-m8 grey-text">Added on {{$contact->created_at}}</p>
                                </li>
                             @endforeach
                        </ul>
                    </div>
                </div>
                {{--<div class="card-action">--}}
                {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection