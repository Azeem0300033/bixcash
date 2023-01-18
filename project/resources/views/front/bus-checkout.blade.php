@extends('layouts.front')
@section('content')

<style>
    .right-box {
        border: 1px solid gray;
        height: auto;
        width: 88%;
        padding: 6%;
    }

    .right-box p {
        font-size: 20px;
        font-weight: 600;
    }

    .right-box span {
        float: right;
    }

    .right-box span img {
        width: 130px;
        border-radius: 6px;
    }

    .next-btn {
        width: 100%;
        height: 46px;
        background: #191970;
        color:#fff;
        border: none;
    }

    .next-btn a {
        color: white;
        font-weight: 600;
    }

    .main-div {
        margin-top: 5%;
        margin-bottom: 4%;
    }

    .left-box input {
        width: 70%;
        border: none;
        border-bottom: 1px solid;
        border-radius: 0px;
    }
    
    .left-box .check{
        display: flex;
    }
    
    .left-box .check input{
        width: auto;
    }
</style>

<div class="main-div">
    <form action="{{ URL::to('Bus-Search') }}" method="POST">
        {{csrf_field()}}
        
        <div style="width: 75%;margin: auto;" class="row">
            
            <input type="hidden" value="{{$bus->b_name}}" name="bus_id" />
            
            @foreach($data as $item)
                <input type="hidden" value="{{$item}}"  name="seats_num[]" />
            @endforeach
                
             
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="left-box">
                    
                    <h3 style="padding-bottom: 14px;">Enter Traveller Information</h3>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Your Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year of Birth</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="birth" placeholder="1996" required>
                    </div>
                    
                    <div style="margin-top:2%;margin-bottom: 3%;" class="check">
                        <div style="margin-right: 4%;" class="form-check">
                            <input class="form-check-input" type="radio"  name="gender" value="Male" id="exampleRadios1" value="option1" required>
                            <label class="form-check-label" for="exampleRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"name="gender" value="Female" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                               Female
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">CNIC</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="cnic" placeholder="00000-0000000-0" required>
                    </div>
                    
                    <h4 style="padding-top: 6px;padding-bottom: 6px;">Contacts Details</h4>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="phone" placeholder="316-0000001" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email (For email delivery)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="example@gmail.com" required>
                    </div>
                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="right-box">
                    <p>{{$bus->b_name}}<span><img src="{{asset('images/Bus/'.$bus->b_logo)}}" width="50"></span></p>
                    <p style="padding-top: 21%;">Seat Selected <span id="demo"><input style="width: 125px;background: whitesmoke;border: whitesmoke;" readonly type="text" value="{{$seatscount}}" name="seats_no"></span></p>
                    <p>Total <span><input style="width: 125px;background: whitesmoke;border: whitesmoke;" type="text" value="{{$pricecounts}}" readonly name="total"></span></p>
                    <button type="submit" class="next-btn"><a>Checkout</a></button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    function checkTotalCheckedBoxes() {
        var checkLength = 0;
        var boxes = document.getElementById("yyy").getElementsByTagName("input");
        for (var i = 0; i < boxes.length; i++) {
            boxes[i].checked ? checkLength++ : null;
        }
        document.getElementById("demo").innerHTML = checkLength;
        //  alert (checkLength + " boxes are checked." );
    }
</script>
@endsection