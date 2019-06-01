@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card  mt-4">
            <div class="card-header">Post Title</div>

            <div class="card-body">
                @if (session()->has('status'))
                <div class="alert alert-success" role="alert">
                    {{ session()->getMessage('status') }}
                </div>
                @endif

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis quibusdam cum recusandae eum nisi perferendis. Possimus, eos, pariatur ex sapiente culpa beatae corporis. Nostrum consequatur tenetur sequi aliquid temporibus.
            </div>
        </div>
        <div class="card  mt-4">
            <div class="card-header">Post Title</div>

            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis quibusdam cum recusandae eum nisi perferendis. Possimus, eos, pariatur ex sapiente culpa beatae corporis. Nostrum consequatur tenetur sequi aliquid temporibus.
            </div>
        </div>
        <div class="card  mt-4">
            <div class="card-header">Post Title</div>

            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis quibusdam cum recusandae eum nisi perferendis. Possimus, eos, pariatur ex sapiente culpa beatae corporis. Nostrum consequatur tenetur sequi aliquid temporibus.
            </div>
        </div>
    </div>
</div>
@endsection
