@extends('layouts.root')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card hoverable blue darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">New SMSes</span>
                        <p>Send Community Notifications using this App.</p>
                    </div>
                    {{--<div class="card-action">--}}
                    {{--<a href="#" class="pull-right">Send</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Compose New SMS</span>
                    <div class="row">
                        <form class="col s12" action="{{url('/smses/new')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">phone</i>
                                    <select multiple name="contacts[]">
                                        <option value="" disabled selected>Select Contacts</option>
                                        <option value="ALL">All Members</option>
                                        @foreach($contacts  as $contact)
                                            <option value="{{$contact->id}}">{{$contact->phone_number}}</option>
                                        @endforeach
                                    </select>
                                    <label for="icon_prefix1">Contacts</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="message" id="icon_prefix2" class="materialize-textarea" length="120"></textarea>
                                    <label for="icon_prefix2">Message</label>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn btn-primary pull-right">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
