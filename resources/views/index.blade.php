@extends('layouts.master')

@section('title')
Home    
@endsection

@section('content')
<div class="lead">
    <b>
        <h1>WARNING</h1>
    </b>
    <p>NICOTINE IS A DANGEROUS AND HIGHLY ADDICTIVE CHEMICAL.
        IT CAN CAUSE AN INCREASE IN BLOOD PRESSURE,HEART RATE,
        FLOW OF BLOOD TO THE HEART AND A NARROWING OF THE THE ARTERIES
        NICOTINE MAY ALSO CONTRIBUTE TO THE HARDENING OF THE ARTERIAL WALLS,
        WHICH IN TURN, MAY LEAD TO A HEART ATTACK.</P>
</div>
@endsection

@section('scripts')
<!----------js for toggle menu----------->

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
    }
</script>
@endsection