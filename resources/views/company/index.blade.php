@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="company-profile">
                <img width="100%" src="{{asset('cover/tumblr-image-sizes-banner.png')}}" alt="">
            </div>
            <div class="company-desc"><br>
                <img width="100" src="{{asset('avatar/man.jpg')}}" alt=""><br>
                <h1>{{$company->cname}}</h1>
                <p>
                    Description-{{$company->description}}&nbsp;
                    Slogan-{{$company->slogan}}&nbsp;
                    Phone-{{$company->phone}}&nbsp;
                    Address-{{$company->address}}&nbsp;
                    Website-{{$company->website}}
                </p>
            </div>
        </div>
        <table class="table">
            <thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            @foreach($company->jobs as $job)
                <tr>
                    <td>
                        <img src="{{asset('avatar/man.jpg')}}" width="80">
                    </td>
                    <td>
                        Position: {{$job->position}}
                        <br>
                        {{$job->type}}
                    </td>
                    <td>
                        Address: {{$job->address}}
                    </td>
                    <td>
                        Date: {{$job->created_at->diffForHumans()}}
                    </td>
                    <td>
                        <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                            <button class="btn btn-success btn-sm">Apply</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
















