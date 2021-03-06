@extends('layouts.app')
<!-- Author: Juan Camilo Echeverri -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ Breadcrumbs::render("listcustomization") }}
            <div class="card">
                <h1>
                    <div class="card-header">{{__('messages.list_customizations')}}</div>
                </h1>  
                <div class="col-11" >
                    <ul id="errors">
                        @include('util.message')
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th scope="col">{{__('messages.customization_id')}}</th>
                                  <th scope="col">{{__('messages.customization_name')}}</th>
                                  <th scope="col">{{__('messages.customization_price')}}</th>
                                </tr>
                            </thead>
                            @foreach($data["customizations"] as $customization)
                            <tr>
                                <th scope="row"> <a  href="{{ route('admin.customization.show', ['id' => $customization->getid()])}}" class="btn btn-primary " > {{ $customization->getId() }} </b></a></th>
                                <td> {{ $customization->getName() }}</td>             
                                <td> {{ $customization->getPrice() }}</td>             
                            </tr>
                            @endforeach    
                            </tbody>
                        </table>
                        <div class="row justify-content-center">
                            <div  style="padding-right: 30px;">
                                <a href="{{route('admin.customization.sort', ['sort' => "id"])}}" class="btn btn-primary" type="button"> {{__('messages.sort_id')}}  </a>
                            </div>
                            <div  style="padding-right: 30px;">
                                <a href="{{route('admin.customization.sort', ['sort' => "name"])}}" class="btn btn-primary " type="button"> {{__('messages.sort_name')}}  </a>
                            </div>
                            <div>
                                <a href="{{route('admin.customization.sort', ['sort' => "price"])}}" class="btn btn-primary " type="button"> {{__('messages.sort_price')}}  </a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>              
@endsection