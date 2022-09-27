@extends('layouts.stu.stu')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        <h3>This is the list of  all your Programs {!!Auth()->user()->firstname!!} </h3>
    @endsection

    @section('top-right-button')
        <li class="hidden-xs"><a href="/payment-form" class="add-project" >Make Payment</a></li>
    @endsection 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        


        <table class="table table-light">
            <thead class="card-header">
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Program</th>
                    <th scope="col"> Price (NGN)</th>
                    <th scope="col">Payment Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $c=1; ?>
                @foreach($stuPrograms as $stuProgram)
                <tr >
                    <td style="width: 10%"> {{$c++}}</td>
                    <td style="width: 25%"> {{$stuProgram->name}}</td>
                    <td style="width: 25%"> ₦{{$stuProgram->price}}</td>
                    <td style="width: 40%"> {{$payment_statuz->name}}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    
@endsection